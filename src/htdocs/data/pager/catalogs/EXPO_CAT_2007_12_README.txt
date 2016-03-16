*************************
EXPO-CAT_2007_12_readme.txt
*************************

Below we provide a brief description of the EXPO-CAT data. 

The catalogue is more fully described in:
Allen, T.I., Wald, D.J., Earle, P.S., Marano, K.D., Hotovec, A.J., Lin, K., and Hearne, M.G. (in press)
An Atlas of ShakeMaps and population exposure catalog for earthquake loss modeling. Bull. Earthq. Eng.

Information regarding "PAGER preferred" fields can be found in:
Allen, T.I., Marano, K., Earle, P.S., and Wald, D.J. (2009) PAGER-CAT: A composite earthquake catalog 
for calibrating global fatality models, Seism. Res. Lett., 80(1), 57-62.
or at http://earthquake.usgs.gov/research/data/pager/.

**********************
Index
**********************

EXPO_CAT_2007_12.csv
- Appendix 1: Description of EXPO-CAT fields (csv file)
- Appendix 2: Population exposure equation
- Appendix 3: Note on exposures
EXPO-CAT_2007_12.mat
- Appendix 4: Description of EXPO-CAT fields (mat file)
Tips for ArcGIS users

**********************
EXPO_CAT_2007_12.csv
**********************

The file EXPO_CAT_2007_12.csv provides estimates of the number of people exposed to significant global earthquakes
since 1960, with emphasis on events since 1973.  Population exposures given are back-projected to the date of the 
earthquake and are estimated for both urban and rural regions (see Appendix 2 & 3).  Appendix 1 provides a 
description of the EXPO-CAT fields in the csv file.

Acronyms used:

PAGER:	Prompt Assessment of Global Earthquakes for Response
ISO:	International Organization for Standardization
MMI:	Modified Mercali Intensity
UTC:	Coordinated Universal Time

*************************APPENDIX 1*************************

eqID:				Earthquake identification number (based on PDE origin time) 
eqName:				Earthquake name, based on epicenter location
PAGER_dateStr:			PAGER preferred source date and time as a string
PAGER_dateNum:			PAGER serial date number. A serial date number of 1 corresponds to Jan-1-0000
PAGER_lat:			PAGER preferred latitude
PAGER_lon:			PAGER preferred longitude
PAGER_depth:			PAGER preferred depth
PAGER_prefMag:			PAGER preferred magnitude
PAGER_prefMagType:		PAGER preferred magnitude type
ISO_country:			ISO country (ISO)
ISO_code:			ISO two letter country code
ISO_arcDist:			Location distance to nearest ISO country (degrees; equals zero if within political borders)
deltaUTC			Time difference from Coordinated Universal Time (UTC)
localHour:			Local hour of earthquake
localDOW:			Local day of week of earthquake
daySavingFlag:			Flag indicating whether the country observes Daylight Savings (equals 0 if no, 1 if yes)
PAGER_prefShakingDeaths:	PAGER preferred shaking deaths
PAGER_prefTotalDeaths:		PAGER preferred total deaths
UN_growthRate:			Population growth rate, from United Nations
ShakeMap_uncert:		Uncertainty of shaking, taken from the event's ShakeMap
ShakeMap_GMPE:			Ground Motion Prediction Equation (GMPE) used by the event's ShakeMap
tsunamiFlag:			Tsunami flag (equals 1 if tsunami occurred, zero if not)
landslideFlag:			Landslide flag (equals 1 if landslides occurred, zero if not)
fireFlag:			Fire flag (equals 1 if fires occurred, zero if not)
liquefactionFlag:		Liquefaction flag (equals 1 if liquefaction occurred, zero if not)
U040:				Number of people exposed to MMI 4.0 in an Urban setting
U045:				Number of people exposed to MMI 4.5 in an Urban setting
U050:				Number of people exposed to MMI 5.0 in an Urban setting
U055:				Number of people exposed to MMI 5.5 in an Urban setting
U060:				Number of people exposed to MMI 6.0 in an Urban setting
U065:				Number of people exposed to MMI 6.5 in an Urban setting
U070:				Number of people exposed to MMI 7.0 in an Urban setting
U075:				Number of people exposed to MMI 7.5 in an Urban setting
U080:				Number of people exposed to MMI 8.0 in an Urban setting
U085:				Number of people exposed to MMI 8.5 in an Urban setting
U090:				Number of people exposed to MMI 9.0 in an Urban setting
U095:				Number of people exposed to MMI 9.5 in an Urban setting
U100:				Number of people exposed to MMI 10.0 in an Urban setting
R040:				Number of people exposed to MMI 4.0 in a Rural setting
R045:				Number of people exposed to MMI 4.5 in a Rural setting
R050:				Number of people exposed to MMI 5.0 in a Rural setting
R055:				Number of people exposed to MMI 5.5 in a Rural setting
R060:				Number of people exposed to MMI 6.0 in a Rural setting
R065:				Number of people exposed to MMI 6.5 in a Rural setting
R070:				Number of people exposed to MMI 7.0 in a Rural setting
R075:				Number of people exposed to MMI 7.5 in a Rural setting
R080:				Number of people exposed to MMI 8.0 in a Rural setting
R085:				Number of people exposed to MMI 8.5 in a Rural setting
R090:				Number of people exposed to MMI 9.0 in a Rural setting
R095:				Number of people exposed to MMI 9.5 in a Rural setting
R100:				Number of people exposed to MMI 10.0 in a Rural setting

*************************APPENDIX 2*************************
Population exposure equation

Historical population exposure:
Eh = Ep/((1+r)^T)

where:
Eh = hindcast population exposure
Ep = present population
r = population growth rate (from UN)
T = time lapse (in years) between the event and mid-2006


*************************APPENDIX 3*************************
Note on exposures

*Exposure values represent the number of individuals exposed to the stated MMI +/- 0.25, i.e.,
 U090: number of people exposed to MMI 9.0 +/- 0.25, or MMI 8.75 to MMI 9.25

*The Global Rural-Urban Mapping Project extents (http://sedac.ciesin.columbia.edu/gpw/) were used
 to estimate the distribution of people between urban and rural settings for each earthquake.


**********************
EXPO_CAT_2007_12.mat
**********************

The following list provides a description of the EXPO-CAT fields contained in the mat file
(Appendix 4). If no quality indicator is given, then the value is assumed to be 'exact' (i.e.,
no assumtions were used to evaluate the value).

Acronyms used:

PAGER:	Prompt Assessment of Global Earthquakes for Response
ISO:	International Organization for Standardization

*************************APPENDIX 4*************************

eqID:				Earthquake identification number (based on PDE origin time) 
eqName:				Earthquake name, based on epicenter location
PAGER_dateStr:			PAGER preferred source date and time as a string
PAGER_dateNum:			PAGER serial date number. A serial date number of 1 corresponds to Jan-1-0000
PAGER_lat:			PAGER preferred latitude
PAGER_lon:			PAGER preferred longitude
PAGER_depth:			PAGER preferred depth
PAGER_prefMag:			PAGER preferred magnitude
PAGER_prefMagType:		PAGER preferred magnitude type
ISO_country:			ISO country (ISO)
ISO_code:			ISO two letter country code
ISO_arcDist:			Location distance to nearest ISO country (degrees; equals zero if within political borders)
deltaUTC			Time difference from Coordinated Universal Time (UTC)
localHour:			Local hour of earthquake
localDOW:			Local day of week of earthquake
daySavingFlag:			Flag indicating whether the country observes Daylight Savings (equals 0 if no, 1 if yes)
PAGER_prefShakingDeaths:	PAGER preferred shaking deaths
PAGER_prefTotalDeaths:		PAGER preferred total deaths
UN_growthRate:			Population growth rate, from United Nations
ShakeMap_uncert:		Uncertainty of shaking, taken from the event's ShakeMap
ShakeMap_GMPE:			Ground Motion Prediction Equation (GMPE) used by the event's ShakeMap
tsunamiFlag:			Tsunami flag (equals 1 if tsunami occurred, zero if not)
landslideFlag:			Landslide flag (equals 1 if landslides occurred, zero if not)
fireFlag:			Fire flag (equals 1 if fires occurred, zero if not)
liquefactionFlag:		Liquefaction flag (equals 1 if liquefaction occurred, zero if not)
presUrbEXPO05:			Population exposure in an urban setting, using 2006 Landscan population*
presRurEXPO05:			Population exposure in a rural setting, using 2006 Landscan population*
presTotEXPO05:			Total population exposure*
histUrbEXPO05:			Population exposure in an urban setting, projected to the year of the event*
histRurEXPO05:			Population exposure in a rural setting, projected to the year of the event*
histTotEXPO05:			Total pooulation exposure, projected to the year of the event*

* Exposure numbers are given in vector format of 20 numbers, indicating estimated population exposure numbers from 
intensity MMI 0.5 to 10, at 0.5 intensity unit increments.  Note, population numbers at intensities lower than MMI 5 
may be truncated because we limit the spatial area of ground shaking estimates in calculating the ShakeMap.

**********************
Tips for ArcGIS users
**********************

GIS software packages, such as ArcGIS, require very specific ASCII data formats so that they can be read
into these programs.  Here we outline the key steps to successfully load EXPO-CAT onto the ArcGIS
platform.

1) Save EXPO_CAT_2007_12.csv as a new file (e.g., EXPO_CAT_GIS.csv). Do not add space or period characters
to the file name.
2) In any text editor, replace all "NaN" values with "0" and re-save the file.*
3) To add data in ArcGIS, select "Tools -> Add XY Data" on the main menu.
4) In the Add XY Data dialog box, browse for your newly modified version of EXPO-CAT
5) Select the X Field as LON and the Y Field as LAT
6) Edit the coordinate system by pressing "Edit -> Select" and select the coordinate system of you choice.
7) Click "OK" on the Add XY Data dialog box

The point data should now be indicated in the Map window.  It is recommend that the user now create a
Shapefile of these data.  To do this, right click on the modified EXPO-CAT in the Display pane, select
"Data -> Export Data" and follow the promts.  This will now enable the user to sort and select events in
the shapefile attribute table.

*We recommend NOT doing steps 1 & 2 in Microsoft Excel because this program does not always preserve exact
values given in original csv files.