%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%   MatLab script "ANSS_noise_rms_rev4.m":
%
%   Sample MatLab code for ANSS-recommended sensor self-noise
%   rms calculation in the case where ambient noise is known
%   to be well below self noise.
%
%   Use for low-gain accelerometers and ambient ground motion
%   << sensor noise.  (Use 2-channel or 3-channel method when
%   ambient ground motion >~ sensor noise.)
%
%   Input file defined in InputFname [any single column of
%   acceleration values, suggested minimum 30 minutes and

%   160000 points of data at 200 sps in order to resolve
%   low frequencies and optimize ensemble averaging].
%
%   CAVEAT:  This script rounds down the input file duration
%   to the nearest modulo(nSegs) seconds so that the nSegs
%   windows will consist of a round number of seconds in
%   duration.  nSegs = 10 is typical, yielding rounding to
%   the nearest 10-s mark below the original trace length.
%
%   Output is three plots plus file 'accel_output.txt' [as four
%   text columns, comma-delimited:  Frequency, PSD (cm/s/s/Hz),
%   1/2-octave rms (cm/s/s), 1/3-octave rms (cm/s/s) ].  Only the%   rms and PSD are ANSS recognized standards.
%
%   Calculations use Welch's Method to estimate an averaged PSD,
%   then multiply by bandwidth (1/3 or 1/2-octave) and take
%   square root to get rms estimate.
%
%   USAGE:
%      Either cut and paste the contents of this file to MatLab,
%      or in MatLab, select the directory containing this script,
%      then issue "ANSS_noise_rms_rev4" as a command (no quotes).
%      For example:
%
%      close all;
%      clear all;
%      cd ('/Users/jrevans/NSMP/TIC_WGD8/Analysis/RMS Computation');
%      ANSS_noise_rms_rev4
%
%   Calls:  (only standard MatLab routines)
%
%   History:
%      Rev. 0:  R. Nigbor, UCLA,             24 June 2006
%      Rev. 1:  JREvans,   USGS, Menlo Park, 26 June 2006
%      Rev. 2:  R. Nigbor, UCLA,             26 June 2006
%      Rev. 3:  JREvans,   USGS, Menlo Park, 28 June 2006
%      Rev. 4:  JREvans,   USGS, Menlo Park, 13 Nov  2006
%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

diary off
close all;
clear all;
fclose('all');


CR = sprintf('\n');


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% User parameters (adjust as needed/desired)

ActiveDir  = '/Users/jrevans/TREMOR_SOS/NetQuakes/OFR_SaPGVetc/SelfNoise';
cd (ActiveDir);			% Directory for input and output

InputFname = 'accel_input.txt';	% Input-file name
OutputFname = 'accel_output.csv';% Output comma-separated-file name
				% Plots will be output as PostScript
				% with names based on InputFname.

one_g = 980.665;		% (NB:  Ideally, this value should
				% be set to the local gravitational
				% acceleration at the site where the
				% accelerometer was calibrated, unless
				% that calibration has been corrected
				% to this international standard "g".
				%
				% However, the differences are only
				% parts per thousand and not likely
				% to be significant.)

SampleRate = 200;		% Sample rate in samples per second.
MaxFreq = SampleRate / 2.;	% Maximum frequency for plots, Nyquist
				% unless changed.

ScaleToGal = 1.0;		% Multiplicative factor to scale data
				% to cm/s/s (set equal to one_g if
				% input data are in g's)

doSmooth = 1;			% For any nonzero value, smoothes the
				% rms partial-octave spectra by running
				% means of five.  Full RMS spectrum is
				% NOT smoothed.

SavePlot = 1;			% For any nonzero value, saves the plots
				% to Postscript files in ActiveDir.

ClipLevel = 3.5;		% Sensor clip level in g's.
ClipLevel = ClipLevel * one_g;	% Sensor clip level in cm/s/s.

nSegs = 10;			% Number of windows to subset the trace
				% into (disregarding overlap).  We
				% suggest at least 10 and round numbers.


% Plot-title lines 1 through 3; change the SECOND one appropriately.

pagetitle1 = 'ANSS-Recommended Low-Gain Accelerometer Noise Analysis';
pagetitle2 = [ 'Sensor Model MMMMM, Serial Number NNNNN; ' ...
		'Test Date dd/mmm/yyyy' ];

if (doSmooth)
	pagetitle3 = [ '(Smoothed; ' ...
		strrep([ 'File "' ActiveDir '/' InputFname '")' ], ...
		'_', ' ') ];
else
	pagetitle3 = [ '(UNsmoothed; ' ...
		strrep([ 'File "' ActiveDir '/' InputFname '")' ], ...
		'_', ' ') ];
end


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Read the data set and trim off the tail end points to a size
% such that subsegments are an integer number of seconds long.

[ 'Reading acceleration trace from file' CR ...
	'   ' ActiveDir '/' InputFname CR ...
	'   (this may take a few minutes) ...' ]

Accel = load(InputFname);		% A column vector

[ nPtsOld, nCol ] = size(Accel);
if (nCol ~= 1)
	error('Acceleration data must be column vector.');
end


% Trim to a duration that will result in pwelch() windows
% with whole-second durations.

nSec = (nPtsOld / SampleRate) - mod(nPtsOld / SampleRate, nSegs);
nPts = nSec * SampleRate;
Accel = Accel(1:nPts);


% Notify of trimming
if (nPts < nPtsOld)
	disp([ 'To fit subsegments evenly, trimmed off end of time series by ' ...
		num2str(nPtsOld - nPts) ...
		' points' CR ...
		'   yielding ' num2str(nPts) ' points (' ...
		num2str(nPts / SampleRate) ' seconds; ' ...
		num2str(nPts / SampleRate / 60) ' minutes).' ]);
end


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Additional constants calculated automatically or set directly

nFFT = nPts / nSegs;			% FFT block size for ensemble
% nFFT = 5000;				% averaging in pwelch()

nOverlap = nFFT / 2;			% Overlap size for ensemble
% nOverlap = 2500;			% averaging in pwelch()

Nyquist = SampleRate / 2;
LowBin = (Nyquist) / (nFFT / 2);


% Summarize computational arrangements

if (rem(nOverlap, 1) ~= 0)
	error([ CR 'Sample rates that do not yield even-length ' ...
		'windows' CR '   when the time series is rounded ' ...
		'down to the nearest ' CR '   ' num2str(nSegs) ...
		' seconds are not allowed.' CR ]);
end


disp([ 'In pwelch(), using windows of ' num2str(nFFT) ' points (' ...
	num2str(nFFT / SampleRate) ' s)' CR '   overlapping by ' ...
	num2str(nOverlap) ' points (' ...
	num2str(nOverlap / SampleRate) ' s).' ]);

disp([ '   Lowest frequency bin = ' num2str(LowBin) ...
	' Hz; Nyquist = ' num2str(Nyquist) ' Hz.' ]);

if ((LowBin) > 0.01)
	disp([ 'Caution:  lowest AC frequency bin is above 0.01 Hz.' ]);
end


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Correct Accel as needed

% Remove mean, and scale to cm/s/s

Accel = detrend(Accel, 'constant');	% remove mean
Accel = Accel .* ScaleToGal;		% scale to cm/s/s


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Calculate PSD using Welch's Method ('help pwelch()' for info)
% Use Hanning window the same length as each ensemble

disp([ CR 'For adequately long noise samples, this may take a minute or so ...' ]);

[ PSD_Acc, Freq ] = ...
	pwelch(Accel, hanning(nFFT, 'periodic'), nOverlap, nFFT, ...
	SampleRate);


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Calculate time and frequency domain rms for comparison check

rms_t = sqrt(mean(Accel .^ 2));
rms_f = sqrt(trapz(PSD_Acc) * SampleRate / nFFT);

disp([ CR 'Full-band rms in the frequency domain is ' num2str(rms_f) ...
	' cm/s/s;' CR '          rms in the time domain is      ' ...
	num2str(rms_t) ' cm/s/s;' CR '          so the percentage ' ...
	'error, 100*(frequency/time - 1), is ' ...
	num2str(100 * ((rms_f/rms_t) - 1), 2) '%' CR  ]);


% Calculate rms arrays

ThirdOctave = sqrt(PSD_Acc .* Freq * (2^(1/3) - 1));	% 1/3-octave rms
HalfOctave  = sqrt(PSD_Acc .* Freq * (2^(1/2) - 1));	% 1/2-octave rms
RMS         = sqrt(PSD_Acc);				% rms spectrum

% Smooth partial-octave spectra using a 5-point running mean (optional)

if (doSmooth)
    ThirdOctave = smooth(ThirdOctave);
    HalfOctave  = smooth(HalfOctave);
end


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
%Plots

% Make time vector for plotting

Tmax = (nPts - 1) / SampleRate;
Time = linspace(0, Tmax, nPts);

fmax = 10 ^ floor(log10(MaxFreq));
fmin = 10 ^ floor(log10(Freq(2)));


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

figure(1);

scrsz = get(0,'ScreenSize');
adjx = round(0.125 * scrsz(3));
adjy = round(0.100 * scrsz(4));
scrsz = [ adjx adjy (scrsz(3) - (2 * adjx)) (scrsz(4) - (2 * adjy)) ];

% Fill screen with plot (may not work well on PC -- comment it out)
set(gcf, 'Position', scrsz);

subplot(2, 1, 1);
amax = max(abs(Accel));

plot(Time, Accel);
axis([ 0 Tmax -amax amax ]);
grid on;

title({pagetitle1;pagetitle2;pagetitle3}, 'FontSize', 14, ...
	'FontWeight', 'bold');
ylabel('Acceleration cm/s^2', 'FontSize', 12, 'FontWeight', 'bold');
xlabel('Time (s)', 'FontSize', 12, 'FontWeight', 'bold');
legend(strcat('Time Domain rms = ', num2str(rms_t, 5)), ...
	'Location', 'SouthWest')


subplot(2, 1, 2);

NonzeroPSD = nonzeros(PSD_Acc);
pmax = 10 ^ ceil(log10(max(NonzeroPSD)));
pmin = 10 ^ floor(log10(min(NonzeroPSD)));

loglog(Freq, PSD_Acc, 'LineWidth', 1.25);
axis([ fmin fmax pmin pmax ]);
grid on

title('Power Spectral Density (Welch''s Method with Hanning Windows)', ...
	'FontSize', 14, 'FontWeight', 'bold');
ylabel('PSD ((cm/s^2)^2/Hz)', 'FontSize', 12, 'FontWeight', 'bold');
xlabel('Frequency (Hz)', 'FontSize', 12, 'FontWeight', 'bold');
legend(strcat('Frequency Domain rms = ', num2str(rms_f, 5)), ...
	'Location', 'SouthWest')

if (SavePlot)
	orient landscape, print('-dpsc', ...
		[ strrep(InputFname, '.txt', '') '_Fig_1.ps' ]);
end


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

figure(2);

scrsz = get(0,'ScreenSize');
adjx = round(0.125 * scrsz(3));
adjy = round(0.100 * scrsz(4));
scrsz = [ adjx adjy (scrsz(3) - (2 * adjx)) (scrsz(4) - (2 * adjy)) ];

% Fill screen with plot (may not work well on PC -- comment it out)
set(gcf, 'Position', scrsz);

Fclip = [ fmin fmax ];
Aclip = [ (ClipLevel * sqrt(0.5)) (ClipLevel * sqrt(0.5)) ];

NonzeroAcc = nonzeros([ ThirdOctave' HalfOctave' ...
	(ClipLevel * sqrt(0.5)) ])';
omax = 10 ^ ceil(log10(max(NonzeroAcc)));
omin = 10 ^ floor(log10(min(NonzeroAcc)));

loglog(Freq, ThirdOctave, 'c', Freq, HalfOctave, 'b',...
	 Fclip, Aclip, 'm', 'LineWidth', 1.25);

axis([ fmin fmax omin omax ]);
grid on;

title({pagetitle1;pagetitle2;pagetitle3}, ...
	'FontSize', 14, 'FontWeight', 'bold');
ylabel('Narrowband rms Acceleration (cm/s^2)', ...
	'FontSize', 12, 'FontWeight', 'bold');
xlabel('Frequency (Hz)', 'FontSize', 12, ...
	'FontWeight', 'bold');
legend('1/3-Octave rms', '1/2-Octave rms', ...
	'Clip Level, rms Sine', 'Location', 'West');

if (SavePlot)
	orient landscape, print('-dpsc', ...
		[strrep(InputFname, '.txt', '') '_Fig_2.ps']);
end


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

figure(3);

scrsz = get(0,'ScreenSize');
adjx = round(0.125 * scrsz(3));
adjy = round(0.100 * scrsz(4));
scrsz = [ adjx adjy (scrsz(3) - (2 * adjx)) (scrsz(4) - (2 * adjy)) ];

% Fill screen with plot (may not work well on PC -- comment it out)
set(gcf, 'Position', scrsz);

NonzeroRMS = nonzeros([ RMS' (ClipLevel * sqrt(0.5)) ])';
omax = 10 ^ ceil(log10(max(NonzeroRMS)));
omin = 10 ^ floor(log10(min(NonzeroRMS)));

loglog(Freq, RMS, 'r', Fclip, Aclip, 'm', 'LineWidth', 1.25);

axis([ fmin fmax omin omax ]);
grid on;

% Raw RMS spectrum is NEVER smoothed
pagetitle3x = [ '(UNsmoothed; ' strrep([ 'File "' ActiveDir '/' InputFname '")' ], '_', ' ') ];

title({pagetitle1;pagetitle2;pagetitle3x}, 'FontSize', 14, ...
	'FontWeight', 'bold');
ylabel('Per-bin rms Acceleration (cm/s^2)/sqrt(Hz)', ...
	'FontSize', 12, 'FontWeight', 'bold');
xlabel('Frequency (Hz)', 'FontSize', 12, 'FontWeight', 'bold');
legend('rms', 'Clip Level, rms Sine', 'Location', 'SouthWest');

if (SavePlot)
	orient landscape, print('-dpsc', ...
		[strrep(InputFname, '.txt', '') '_Fig_3.ps']);
end


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
% Output to comma-delimited file, Freq, PSD, 1/3-octave, 1/2-octave

dlmwrite(OutputFname, [ Freq, PSD_Acc, RMS, ThirdOctave, HalfOctave ]);


%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
