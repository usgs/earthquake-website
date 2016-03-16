% readpagercat  Get array of PAGER catalog events matching input criteria.
% events = readpagercat(param,value,catalog);
% Input:
%  - param   Named parameter used to search catalog.  Valid options are:
%            'date','radius','country','hour','magnitude',
%            'secondary','shakedeaths','totaldeaths','injuries'.
%  - value   Value(s) appropriate to input parameter.
%            'date'         Scalar datenum value or vector of two datenum values.
%            'radius'       Vector containing lat,lon and distance in kilometers.
%            'country'      Two letter ISO country code.
%            'hour'         Vector containing a start hour and end hour.
%            'magnitude'    Magnitude value to be lower bound of selected magnitudes.
%            'secondary'    String containing type of secondary hazard:
%                           'tsunami','landslide','fire','liquefaction'.
%            'shakedeaths'  Minimum threshold number of shaking fatalities.
%            'totaldeaths'  Minimum threshold number of total fatalities.
%            'injuries'     Minimum threshold number of total injuries.
%  - catalog String representing file name of the PAGER Catalog mat file, or
%            structure array from previous call to function.  Allows for 
%            further sub-selection of events.
% Output:
%  - events Structure array of events from the PAGER catalog matching the input
%           criteria.
% Usage:
% %Select events by a date range (between Jan 1 2000 and Dec 31 2000):
% events = readpagercat('date',[datenum([2000 1 1]) datenum([2000 12 31])],catalog);
% 
% %Select events within 200 km of a given position (tip of Taiwan):
% events = readpagercat('radius',[21.947158 120.784555 200],catalog);
% 
% %Select events by ISO country code (Papua New Guinea):
% events = readpagercat('country','PG',catalog);
% 
% %Select events by local hour range (morning):
% events = readpagercat('hour',[5 12],catalog);
% 
% %Select events greater or equal to given magnitude:
% events = readpagercat('magnitude',7.0,catalog);
%
% %Select events which have had observed secondary hazards:
% events = readpagercat('secondary','tsunami',catalog);
% events = readpagercat('secondary','landslide',catalog);
% events = readpagercat('secondary','fire',catalog);
% events = readpagercat('secondary','liquefaction',catalog);
%
% %Select events which have had injuries or deaths
% events = readpagercat('shakedeaths',1,catalog);
% events = readpagercat('totaldeaths',1,catalog);
% events = readpagercat('injuries',1,catalog);
%
% %Select all events from India in the year 2000, with any fatalities
% events = readpagercat('country','IN',catalog);
% dates = [datenum([2000 1 1]) datenum([2000 12 31])];
% events = readpagercat('date',dates,events);
% events = readpagercat('totaldeaths',1,events);
%

function events = readpagercat(param,value,catalog)
    %figure out if the third argument is a string denoting a file name,
    %or a structure
    if isstr(catalog)
        %is it a valid file?
        if ~isempty(dir(catalog))
            catalog = load(catalog);
            catalog = catalog.pagerCat;
        else
            fprintf('Input %s is not a file or a structure.  Returning.\n',catalog);
            events = struct([]);
            return;
        end
    else
        if ~isstruct(catalog)
            fprintf('Third argument must be either a string representing a file name, or a structure from a previous call to readpagercat.  Returning.\n');
            events = struct([]);
            return;
        end
    end
    
    datefmt = 'yyyy-mm-dd HH:MM:SS';
    D2KM = 111.191;  %kilometers in a decimal degree
    tsunamiflags = {'PDE_tsunamiFlag','UTSU_tsunamiFlag','EMDAT_tsunamiFlag'};
    fireflags = {'UTSU_fireFlag','EMDAT_fireFlag'};
    slideflags = {'PDE_landslideFlag','UTSU_landslideFlag','EMDAT_landslideFlag'};
    liquidflags = {'PDE_liquefactionFlag'};
    events = struct([]);
    idx = [];
    switch param
        case 'date',
            if length(value) == 1
                d1 = value;
                d2 = value;
            else
                d1 = value(1);
                d2 = value(2);
            end
            dates = datenum({catalog(:).PAGER_dateStr},datefmt);
            idx = find(dates >= d1 & dates <= d2);
        case 'radius',
            clat = value(1);
            clon = value(2);
            radius = value(3)*1000; %distance in meters
            lats = [catalog(:).PAGER_lat];
            lons = [catalog(:).PAGER_lon];
            d = sdist(clat,clon,lats,lons);
            idx = find(d <= radius);
        case 'country',
            ccodes = {catalog(:).ISO_code};
            idx = find(strcmpi(ccodes,value));
        case 'hour',
            h1 = value(1);
            h2 = value(2);
            hours = [catalog(:).localHour];
            idx = find(hours >= h1 & hours <= h2);
        case 'magnitude',
            mags = [catalog(:).PAGER_prefMag];
            idx = find(mags >= value);
        case 'secondary',
            switch value
                case 'tsunami',
                    idx = [];
                    for i=1:length(tsunamiflags)
                        flag = tsunamiflags{i};
                        evalstr = sprintf('tmpflags = [catalog(:).%s];',flag);
                        eval(evalstr);
                        idx = [idx find(~isnan(tmpflags))];
                    end
                case 'landslide',
                    idx = [];
                    for i=1:length(slideflags)
                        flag = slideflags{i};
                        evalstr = sprintf('tmpflags = [catalog(:).%s];',flag);
                        eval(evalstr);
                        idx = [idx find(~isnan(tmpflags))];
                    end
                case 'fire',
                    idx = [];
                    for i=1:length(fireflags)
                        flag = fireflags{i};
                        evalstr = sprintf('tmpflags = [catalog(:).%s];',flag);
                        eval(evalstr);
                        idx = [idx find(~isnan(tmpflags))];
                    end
                case 'liquefaction',
                    idx = [];
                    for i=1:length(liquidflags)
                        flag = liquidflags{i};
                        evalstr = sprintf('tmpflags = [catalog(:).%s];',flag);
                        eval(evalstr);
                        idx = [idx find(~isnan(tmpflags))];
                    end
                otherwise
                    fprintf('Unknown secondary hazard %s.  Returning.\n',value);
                    return;
            end
        case 'shakedeaths',
            deaths = [catalog(:).PAGER_prefShakingDeaths];
            inan = find(~isnan(deaths));
            inotzero = find(deaths >= value);
            idx = intersect(inan,inotzero);
            
        case 'totaldeaths',
            deaths = [catalog(:).PAGER_prefTotalDeaths];
            inan = find(~isnan(deaths));
            inotzero = find(deaths >= value);
            idx = intersect(inan,inotzero);
        case 'injuries',
            injuries = [catalog(:).PAGER_prefInjuries];
            inan = find(~isnan(injuries));
            inotzero = find(injuries >= value);
            idx = intersect(inan,inotzero);
        otherwise
            fprintf('Unknown parameter %s.  Returning.\n',param);
            return;
    end
    if isempty(idx)
        warning('getcatevent:no_events','No events found matching param %s and values %s.  Returning.\n',param,num2str(value));
        return;
    end
    events = catalog(unique(idx));
    return;
end

% sdist Approximate great circle distance (meters) assuming spherical Earth (6367 km radius).
% gcdist = sdist(lat1,lon1,lat2,lon2);
% Input: 
%    - lat1,lon1 Coordinate pair for first point(s)
%    - lat1,lon1 Coordinate pair for second point(s)
%  Output:
%    - gcdist Great circle distance between first point(s) and second point(s).
% Usage:
% These coordinate pairs can in fact be vectors, as long as the lengths are identical, 
% or one of the pairs is a scalar point.
function gcdist = sdist(lat1,lon1,lat2,lon2)
  R = 6367*1e3; %radius of the earth in meters, assuming spheroid
%   t1 = sind((lat1-lat2)./2).^2;
%   t2 = cosd(lat1)*cosd(lat2);
%   t3 = sind((lon1-lon2)/2)^2;
%   gcdist = 2*R * asind(sqrt( t1 + t2 .* t3 ));

  dlon = lon1-lon2;
  t1 = (cosd(lat2).*sind(dlon)).^2;
  t2 = (cosd(lat1).*sind(lat2) - sind(lat1).*cosd(lat2).*cosd(dlon)).^2;
  t3 = sind(lat1).*sind(lat2) + cosd(lat1).*cosd(lat2).*cosd(dlon);
  
  dsig = atan2(sqrt(t1+t2),t3);
    
  gcdist = R.*dsig;
  
end
