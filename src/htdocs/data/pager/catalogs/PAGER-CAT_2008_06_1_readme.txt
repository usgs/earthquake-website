*************************
PAGER-CAT_2008_06_1_readme.txt
*************************

Below we provide a brief description of the PAGER-CAT data and tools available for download. 

The catalogue is more fully described in:

Allen, T.I., Marano, K.D., Earle, P.S., and Wald, D.J. (2009). PAGER-CAT: A composite earthquake
catalog for calibrating global fatality models: Seism. Res. Lett., 80(1), 57-62.

**********************
Index
**********************
Updates
readpagercat.m
PAGER_CAT_2008_06.1.csv
- Appendix 1: Description of PAGER-CAT fields
- Appendix 2: Casualty descriptor/quality key
Tips for ArcGIS users

**********************
Updates
**********************
2008_06.1 (2009-09-04)
- Corrected HTD fields - data was incorrectly associated
- Removed a few duplicate events
- Updated PAGER_prefShakingDeaths, PAGER_prefShakingDeathsSrc, PAGER_prefTotalDeaths, PAGER_prefTotalDeathsSrc, PAGER_prefInjuries, PAGER_prefInjuriesSrc, PAGER_prefHomeless, PAGER_prefHomelessSrc due to change in HTD field information

2008_06 (2009-06-12)
- Catalog updated through 2008-06-31
- Include PDE Weekly results when PDE Monthly results not yet published; PDE Weekly results will be updated in future versions as available
- Change catalog versioning to reflect end date of catalog
- Added fields to assign non-shaking deaths to outside source.  New fields are OTHER_tsunamiDeaths, OTHER_landslideDeaths,
  OTHER_missing, OTHER_otherDeaths, OTHER_undiffDeaths
- Removed a few duplicate events
- Updated some events with better fatality information, including adding sources for events with PDE undifferentiated deaths
- Update tips for ArcGIS users in readme

V1.2 (2008-12-10)
- Catalog updated through to 2007-12-31
- Assign six moment-tensor elements: Mrr, Mtt, Mpp, Mrt, Mrp, Mtp, where r is up, t is south, and p is east
- Added fields to assign magnitudes from another source. This is usually only assigned if the other magnitude type is "Mw"
- Added fields NGDC_deaths, NGDC_injuries, NGDC_damage, NGDC_buildingsDestroyed & NGDC_tsunamiFlag
- Changed EM-DAT damage estimates to "millions of US dollars" rather than "thousands of US dollars"
- Added field to allow the assignment of an alternative source of the number of homeless (OTHER_homeless)
- Allow the assignment of different sources for the fields OTHER_shakingDeaths, OTHER_totalDeaths & OTHER_injuries
- Differentiate between tsunami deaths and total earthquake deaths in the HTD catalog where possible (HTD_tsunamiDeaths & HTD_totalDeaths)
- Added GLIDE (GLobal IDEntifier) number and comment
- Revised hierarchy for selecting preferred casualty numbers (see online documentation)

**********************
readpagercat.m
**********************

readpagercat.m is a Matlab function to query the Matlab structure contained in the download
PAGER_CAT_2008_06.mat.

Queries that the user can perform with the Matlab function include searches on: start and stop dates,
country, shaking and total death thresholds, magnitude threshold, tsunami or landslide flags, or events
within a given radius about a point.

To get started, type "load PAGER_CAT_2008_06" in your working directory.  This will load the variable
"pagerCat" which is parsed by the function readpagercat. For function usage, type "help readpagercat" in
the Matlab command window.

**********************
PAGER-CAT_2008_06.1.csv
**********************

The following list provides a description of the PAGER-CAT fields (Appendix 1) and casualty quality
indicator (Appendix 2). If no quality indicator is given, then the value is assumed to be 'exact' (i.e.,
no assumtions were used to evaluate the value).

Acronyms used:

PDE:	Preliminary Determination of Epicenters
EHB:	Engdahl, van der Hilst and Buland Catalogue
GCMT:	Global Centroid Moment Tensor Database
PAGER:	Prompt Assessment of Global Earthquakes for Response
ISO:	International Organization for Standardization
EM-DAT:	Emergency Events Database (WHO Collaborating Centre for Research on the Epidemiology of Disasters) 
NGDC: 	National Geophysical Data Center Significant Earthquake Database
HTD:	Historical Tusnami Database (National Geophysical Data Center)
GLIDE: 	GLobal IDEntifier

*************************APPENDIX 1*************************

eqID:				Earthquake identification number (based on PDE origin time)
PAGER_dateStr:			Date string from preferred origin time
PAGER_dateNum:			PAGER preferred date number (number of days starting from January 1st, 0000)
PAGER_lat:			PAGER preferred latitude
PAGER_lon:			PAGER preferred longitude
PAGER_depth:			PAGER preferred depth
PAGER_locSrc:			PAGER preferred location source
PAGER_prefMag:			PAGER preferred magnitude
PAGER_prefMagType:		PAGER preferred magnitude type
PAGER_prefMagSrc:		PAGER preferred magnitude source
PDE_dateNum:			PDE date number (number of days starting from January 1st, 0000)
PDE_lat:			PDE latitude
PDE_lon:			PDE longitude
PDE_depth:			PDE depth
PDE_Mb:				PDE body wave magnitude
PDE_Ms:				PDE surface wave magnitude
PDE_contrib_mag1:		PDE contributed magnitude #1
PDE_contrib_magType1:		PDE contributed magnitude type #1
PDE_contrib_magSrc1:		PDE contributed magnitude source #1
PDE_contrib_mag2:		PDE contributed magnitude #2
PDE_contrib_magType2:		PDE contributed magnitude type #2
PDE_contrib_magSrc2:		PDE contributed magnitude source #2
PDE_prefMagFlag:		PDE preferred magnitude flag (1-4 indicating Mb, Ms, contributed #1 or contributed #2)
PDE_prefMag:			PDE preferred magnitude
PDE_lossFlag:			PDE impact flag (0-3 indicating not felt, felt, damage or casualties, respectively)
EHB_dateNum:			EHB date number (number of days starting from January 1st, 0000)
EHB_lat:			EHB latitude
EHB_lon:			EHB longitude
EHB_depth:			EHB depth
EHB_locSrc:			EHB location source (equal to EHB after 1973, otherwise taken from the Centennial Catalogue)
EHB_prefMag:			EHB preferred magnitude (taken from Centennial Catalogue)
EHB_prefMagType:		EHB preferred magnitude type (taken from Centennial Catalogue)
EHB_prefMagSrc:			EHB preferred magnitude source (taken from Centennial Catalogue)
CMT_moment:			GCMT scalar moment, M0 (dyne-cm)
CMT_Mw:				GCMT moment magnitude determined using the equation Mw = (2/3)*(log M0 - 16.1)
CMT_magSrc:			GCMT magnitude source (HRV, GCMT or empty)
CMT_lat:			GCMT centroid latitude
CMT_lon:			GCMT centroid longitude
CMT_depth:			GCMT centroid depth
CMT_strike1:			GCMT strike of fault plane #1
CMT_dip1:			GCMT dip of fault plane #1
CMT_rake1:			GCMT rake of fault plane #1
CMT_strike2:			GCMT strike of fault plane #2
CMT_dip2:			GCMT dip of fault plane #2
CMT_rake2:			GCMT rake of fault plane #2
CMT_faultType:			GCMT fault type (RS, SS, NS or empty)
ISO_country:			ISO country (ISO)
ISO_code:			ISO two letter country code
ISO_arcDist:			Location distance to nearest ISO country (degrees; equals zero if within political borders)
deltaUTC:			Time difference from Coordinated Universal Time (UTC)
localHour:			Local hour of earthquake
localDOW:			Local day of week of earthquake
daySavingFlag:			Daylight savings flag (equals 1 if daylight savings was observed in 2007)
PDE_shakingDeaths:		PDE number of shaking deaths
PDE_shakingDeathsFlag:		PDE shaking death quality indicator (1-6)
PDE_shakingDeathsComm:		PDE comments on shaking deaths
PDE_landslideDeaths:		PDE number of landslide deaths
PDE_landslideDeathsFlag:	PDE landslide death quality indicator (1-6)
PDE_tsunamiDeaths:		PDE number of tsunami deaths
PDE_tsunamiDeathsFlag:		PDE tsunami death quality indicator (1-6)
PDE_otherDeaths:		PDE number of other deaths
PDE_otherDeathsFlag:		PDE other death quality indicator (1-6)
PDE_missing:			PDE number of people missing
PDE_missingFlag:		PDE missing quality indicator (1-6)
PDE_undiffDeaths:		PDE number of undifferentiated deaths
PDE_undiffDeathsFlag:		PDE undifferentiated deaths quality indicator (1-6)
PDE_totalDeaths:		PDE total deaths
PDE_totalDeathsFlag:		PDE total deaths quality indicator (1-6)
PDE_totalDeathsComm:		PDE total deaths comments
PDE_injured:			PDE number of people injured
PDE_injuredFlag:		PDE injured quality indicator (1-6)
PDE_injuredComm:		PDE injured comments
PDE_homeless:			PDE number of people homeless
PDE_homelessFlag:		PDE people homeless quality indicator (1-6)
PDE_homelessComm:		PDE people homeless comments
PDE_buildDestroyed:		PDE number of buildings destroyed
PDE_buildDestroyedFlag:		PDE buildings destroyed quality indicator (1-6)
PDE_buildDestroyedComm:		PDE buildings destroyed comments
PDE_buildDamaged:		PDE number of buildings damaged only
PDE_totDamagedBuild:		PDE total number of buildings damaged and destroyed
PDE_tsunamiFlag:		PDE tsunami flag (equals 1 if tsunami observed, zero if not)
PDE_landslideFlag:		PDE landslide flag (equals 1 if landslide observed, zero if not)
PDE_liquefactionFlag:		PDE liquefaction flag (equals 1 if liquefaction observed, zero if not)
PDE_comments:			Final PDE comments
UTSU_deathsStr:			Utsu deaths string (may or may not be numerical value)
UTSU_injuriesStr:		Utsu injuries string (may or may not be numerical value)
UTSU_deaths:			Utsu deaths (numerical value only)
UTSU_injuries:			Utsu injuries (numerical value only)
UTSU_deathFlag:			Utsu death flag (equals 1 if deaths observed)
UTSU_tsunamiFlag:		Utsu tsunami flag (equals 1 if tsunami observed, zero if not)
UTSU_landslideFlag:		Utsu landslide flag (equals 1 if landslide observed, zero if not)
UTSU_fireFlag:			Utsu fire flag (equals 1 if fire observed, zero if not)
UTSU_comments:			Final Utsu comments
NGDC_deaths:			NGDC number of deaths
NGDC_injuries:			NGDC number of injuries
NGDC_damage:			NGDC total damage estimate in millions of US dollars
NGDC_buildingsDestroyed:	NGDC number of buildings destroyed
NGDC_tsunamiFlag:		NGDC tsunami flag (equals 1 if tsunami observed, zero if not)
EMDAT_deaths:			EM-DAT number of deaths
EMDAT_injuries:			EM-DAT number of injuries
EMDAT_homeless:			EM-DAT number of people homeless
EMDAT_totalDamage:		EM-DAT total damage estimate in millions of US dollars
EMDAT_insuredLoss:		EM-DAT insured losses estimated in millions of US dollars
EMDAT_aidContribution:		EM-DAT foreign aid estimate in millions of US dollars
EMDAT_tsunamiFlag:		EM-DAT tsunami flag (equals 1 if tsunami observed, zero if not)
EMDAT_landslideFlag:		EM-DAT landslide flag (equals 1 if landslide observed, zero if not)
EMDAT_fireFlag:			EM-DAT fire flag (equals 1 if fire observed, zero if not)
HTD_tsunamiFlag:		HTD flag indicating occurrence of a tsunami
HTD_maxHeight:			HTD maximum water height above sea level in meters
HTD_numRunups:			HTD total number of tsunami runups
HTD_TsunamiDeaths:		HTD number of tsunami deaths
HTD_TsunamiInjuries:		HTD number of tsunami injuries
HTD_TsunamiDamage:		HTD tsunami damage in millions of dollars at time of the event
HTD_TsunamiBuildingsDestroyed:	HTD number of houses destroyed by tsunami
HTD_TotalDeaths:		HTD number of total deaths
HTD_TotalInjuries:		HTD number of total injuries
HTD_Totaldamage:		HTD total damage in millions of dollars at time of the event
HTD_TotalBuildingsDestroyed:	HTD total number of houses destroyed
GLIDE_number:			GLIDE disaster reference number
GLIDE_comment:			GLIDE comments
OTHER_shakingDeaths:		Number of shaking deaths from other source
OTHER_shakingDeathsSrc:		Other source of shaking deaths
OTHER_landslideDeaths:		Number of landslide deaths from other source
OTHER_landslideDeathsSrc:	Other source of landslide deaths
OTHER_tsunamiDeaths:		Number of tsunami deaths from other source
OTHER_tsunamiDeathsSrc:		Other source of tsunami deaths
OTHER_otherDeaths:		Number of other deaths from other source
OTHER_otherDeathsSrc:		Other source of other deaths
OTHER_missing:			Number of people missing from other source
OTHER_missingSrc:		Other source of missing
OTHER_undiffDeaths:		Number of undifferentiated deaths from other source
OTHER_undiffDeathsSrc:		Other source of undifferentiated deaths
OTHER_totalDeaths:		Total deaths from other source
OTHER_totalDeathsSrc:		Other source of total deaths
OTHER_injuries:			Number of injuries from other source
OTHER_injuriesSrc:		Other source of injuries
OTHER_homeless:			Number of homless from other source
OTHER_homelessSrc:		Other source of homeless
PAGER_prefShakingDeaths:	PAGER preferred shaking deaths
PAGER_prefShakingDeathsSrc:	Source of PAGER preferred shaking deaths
PAGER_prefTotalDeaths:		PAGER preferred total deaths
PAGER_prefTotalDeathsSrc:	Source of PAGER preferred total deaths
PAGER_prefInjuries:		PAGER preferred injuries
PAGER_prefInjuriesSrc:		Source of PAGER preferred injuries
PAGER_prefHomeless:		PAGER preferred number of people homeless
PAGER_prefHomelessSrc:		Source of PAGER preferred homeless

*************************APPENDIX 2*************************
Casualty descriptor/quality key:

1) at least, more than, over
2) estimated, approximately, about
3) unconfirmed, possibly
4) x to y
5) nearly, as many as, up to
6) no numerical value

**********************
Tips for ArcGIS users
**********************

GIS software packages, such as ArcGIS, require very specific ASCII data formats so that they can be read
into these programs.  Here we outline the key steps to successfully load PAGER-CAT onto the ArcGIS
platform.

1) Save PAGER_CAT_2008_06.csv as a new file (e.g., PAGER_CAT_GIS.csv). Do not add space or period characters
to the file name.
2) In any text editor, replace all "NaN" values with "0" and re-save the file.*
3) To add data in ArcGIS, select "Tools -> Add XY Data" on the main menu.
4) In the Add XY Data dialog box, browse for your newly modified version of PAGER-CAT
5) Select the X Field as PAGER_lon and the Y Field as PAGER_lat
6) Edit the coordinate system by pressing "Edit -> Select" and select the coordinate system of you choice.
7) Click "OK" on the Add XY Data dialog box

The point data should now be indicated in the Map window.  It is recommend that the user now creat a
Shapefile of these data.  To do this, right click on the modified PAGER-CAT in the Display pane, select
"Data -> Export Data" and follow the promts.  This will now enable the user to sort and select events in
the shapefile attribute table.

*We recommend NOT doing steps 1 & 2 in Microsoft Excel because this program does not always preserve exact
values given in original csv files.