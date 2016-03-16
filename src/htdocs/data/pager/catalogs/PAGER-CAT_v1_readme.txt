*************************
PAGER-CAT_v1_readme.txt
*************************

Below we provide a brief description of the PAGER-CAT data and tools available for download. 

The catalogue is more fully described in:

Allen, T.I., Marano, K.D., Earle, P.S., and Wald, D.J. (in review). PAGER-CAT: A composite earthquake
catalog for calibrating global fatality models: Seism. Res. Lett.

**********************
Index
**********************
readpagercat.m
PAGER_CAT_v1.csv
- Appendix 1: Description of PAGER-CAT fields
- Appendix 2: Casualty descriptor/quality key
Tips for ArcGIS users

**********************
readpagercat.m
**********************

readpagercat.m is a Matlab function to query the Matlab structure contained in the download
PAGER_CAT_v1.mat.

Queries that the user can perform with the Matlab function include searches on: start and stop dates,
country, shaking and total death thresholds, magnitude threshold, tsunami or landslide flags, or events
within a given radius about a point.

To get started, type "load PAGER_CAT_v1" in your working directory.  This will load the variable
"pagerCat" which is parsed by the function readpagercat. For function usage, type "help readpagercat" in
the Matlab command window.

**********************
PAGER-CAT_v1.csv
**********************

The following list provides a description of the PAGER-CAT fields (Appendix 1) and casualty quality
indicator (Appendix 2). If no quality indicator is given, then the value is assumed to be 'exact' (i.e.,
no approximations were used to eveluate the value).

Acronyms used:

PDE:	Preliminary Determination of Epicenters
EHB:	Engdahl, van der Hilst and Buland Catalogue
GCMT:	Global Centroid Moment Tensor Database
PAGER:	Prompt Assessment of Global Earthquakes for Response
ISO:	International Organization for Standardization
EM-DAT:	Emergency Events Database
HTD:	Historical Tusnami Database (National Geophysical Data Center)

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
PDE_tsunamiDeaths:		PDE comments on landslide deaths
PDE_tsunamiDeathsFlag:		PDE number of tsunami deaths
PDE_otherDeaths:		PDE tsunami death quality indicator (1-6)
PDE_otherDeathsFlag:		PDE comments on tsunami deaths
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
EMDAT_deaths:			EM-DAT number of deaths
EMDAT_injuries:			EM-DAT number of injuries
EMDAT_homeless:			EM-DAT number of people homeless
EMDAT_totalDamage:		EM-DAT total damage estimate in thousands of US dollars
EMDAT_insuredLoss:		EM-DAT insured losses estimated in thousands of US dollars
EMDAT_aidContribution:		EM-DAT foreign aid estimate in thousands of US dollars
EMDAT_tsunamiFlag:		EM-DAT tsunami flag (equals 1 if tsunami observed, zero if not)
EMDAT_landslideFlag:		EM-DAT landslide flag (equals 1 if landslide observed, zero if not)
EMDAT_fireFlag:			EM-DAT fire flag (equals 1 if fire observed, zero if not)
HTD_tsunamiFlag:		HTD flag indicating occurrence of a tsunami
HTD_maxHeight:			HTD maximum water height above sea level in meters
HTD_numRunups:			HTD total number of tsunami runups
HTD_deaths:			HTD number of deaths
HTD_injuries:			HTD number of injuries
HTD_damage:			HTD damage in millions of dollars at time of the event
HTD_buildingsDestroyed:		HTD number of houses destroyed by tsunami
OTHER_shakingDeaths:		Number of shaking deaths from other source
OTHER_totalDeaths:		Total deaths from other source
OTHER_injuries:			Number of injuries from other source
OTHER_source:			Reference to other source
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

1) To add data in ArcGIS, select "Tools -> Add XY Data" on the main menu.
2) In the Add XY Data dialog box, browse for your newly modified version of PAGER-CAT
3) Select the X Field as PAGER_lon and the Y Field as PAGER_lat
4) Edit the coordinate system by pressing "Edit -> Select" and select the coordinate system of you choice.
5) Click "OK" on the Add XY Data dialog box

The point data should now be indicated in the Map window.  It is recommend that the user now creat a
Shapefile of these data.  To do this, right click on the modified PAGER-CAT in the Display pane, select
"Data -> Export Data" and follow the promts.  This will now enable the user to sort and select events in
the shapefile attribute table.