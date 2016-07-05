ISS.CAT = hypocenter file for the International Seismological
          Summary (1914-1963)

========================================================================
WARNING!
This file has been produced by hand-entering in a computer the
hypocenters listed in the printed ISS bulletins. Although the entries
have been carefully checked, the file can still contain errors (such as
typos, missing and/or duplicated events, etc). If you find an error,
please report it to the author (address at bottom) so it can be corrected.
========================================================================

This file contains hypocenters of earthquakes listed in the bulletins
of the International Seismological Summary (ISS) from 1918 to 1963.
In addition, the hypocenters listed in the bulletins of the British
Association for the Advancement of Science (BAAS) Seismological Committee
(the predecessor of the ISS) for 1914-1917 have also been included.

The file ISS.CAT contains only hypocenters of earthquakes that have
available phase arrival time data listed in tabular form in the ISS
bulletins. Undetermined shocks and earthquakes reported by other agencies
without arrival time data are not included in this file. When more
than one hypocentral solution was produced for the same event (this
practice was only used in the early years of the ISS) we have
chosen to list only the first solution, in order to avoid duplicate
entries.

Although the bulletins of the ISS include hypocentral locations and
phase arrival time data, this file contains only hypocenters. A long
term project to convert ISS phase data to digital form is currently
under way (Villasenor et al., 1997).

The ISS bulletins never listed amplitude and period data to calculate
magnitudes, and they reported very infrequently magnitudes calculated by
other agencies or stations. Therefore the file ISS.CAT does not list
earthquake magnitudes.

Prior to the bulletin for 1957 the ISS reported focal depth in terms
of the fraction of the Earth's radius below the so-called "base of
the superficial layers" (33 km for the Jeffreys-Bullen earth model).
Starting in the bulletin for 1957, depth is reported as km below
the earth's surface. For hypocenters prior to 1957 we have converted
the value of the fraction of the Earth's (frac) to depth in km (dep) 
using the following convention:

    no frac (shallow or "normal" focus):   dep = 0 km
    frac < 0 (focus "above normal"):       dep = 0 km
    frac >= 0                              dep = frac*(6371-33) + 33 km


FILE FORMAT
===========

year mo dy  hr mn  sec    lat      lon     dep   frac

.
.
.
1927  4  9   8 56 50.00   6.500  126.000   0.0
1927  4  9  16 51 30.00 -21.000  -67.000  95.0  0.0100
1927  4  9  19  5  8.00  17.000  -97.000   0.0
1927  4 11  22  3 40.00 -34.000   57.000   0.0
1927  4 12  23 13 18.00 -18.500  168.500   0.0
1927  4 13  13 44 10.00  15.800  119.400 160.0  0.0200
1927  4 13  14 34 32.00  15.800  119.400 160.0  0.0200
1927  4 14   6 23 28.00 -32.500  -69.500 130.0  0.0150
1927  4 16   8 14 51.00  51.000 -179.500   0.0
1927  4 16   9 11 10.00 -34.000   57.000   0.0
1927  4 16  13  3 35.00   6.500  126.000   0.0
1927  4 17   9  5 42.00  -6.500  126.000 160.0  0.0200
1927  4 18  15  1 45.00  38.500   71.000   0.0
1927  4 19   8 33 42.00  -7.700  106.500   0.0
.
.
.

where:

year, mo, day, hr mn, sec = date and time of the origin
lat                       = latitude in degrees (north positive)
lon                       = longitude in degrees (east positive)
dep                       = focal depth in km (before 1957 calculated
                            using frac)
frac                      = focal depth as "fraction of the Earth's radius
                            below the base of the superficial layers"


REFERENCES:

Villasenor, A., E.A. Bergman, T.M. Boyd, E.R. Engdahl, D.W. Frazier,
   M.M. Harden, J.L. Orth, R.L. Parkes, and K.M. Shedlock,
   Toward a comprehensive catalog of global historical seismicity,
   Eos Trans. AGU, vol. 78, no. 50, pp. 581, 583, 588, 1997. 

-- 
Antonio Villaseñor
Institute of Earth Sciences "Jaume Almera" - CSIC
Lluís Solé i Sabarís s/n     ph:    +34 - 93 409 5410 (x. 244)
08028 Barcelona              fax:   +34 - 93 411 0012
SPAIN                        email: antonio@ija.csic.es
