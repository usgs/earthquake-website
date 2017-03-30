/*
HTML ImageMapper 10.0.24
---------------------------------------------------------------
Here are some variables which can be customized. You can change
behavior by setting either True or False.
---------------------------------------------------------------
*/

function config_IM() {

// startup message
g_startUpMessage = "Loading Map...";

// does the project contain an overview map?
g_hasOvMap = true;
// should it be visible at startup?
g_showOvMapAtStart = false;

// does the project contain a legend?
g_hasLegend = true;
// should it be visible at startup?
g_showLegendAtStart = false;

// does the project contain a search?
g_hasSearch = false;
// should it be visible at startup?
g_showSearchAtStart = false;

// does the project contain lists?
g_hasLists = false;
// should it be visible at startup?
g_showListsAtStart = false;

// display the information bar (containing title, icon etc...)
g_hasInfoBar = true;
// does the information bar contain a title?
g_hasTitle = true;
g_title = "Soil Type and Shaking Hazard in the San Francisco Bay Area";
// does the information bar contain the description (below the title)?
g_hasComments = false;
g_comments = "USGS";
// shall the logo be shown in the information bar (right)?
g_hasLogo = true;
// display a scalebar?
g_hasScalebar = true;
// display current mouse coordinates?
g_hasCoordsDisplay = false;

// do buttons exist which enable printing (map, attributes, search result)?
g_hasPrintKnob = true;

// shall we draw a zoombar?
g_hasZoomBar = true;

// disable zoom animation?
g_animatedZoom = true;

// print the whole visible map or constrain on DIN A4
g_printAll = false;


/*
---------------------------------------------------------------------
the following Options Not should Changed without further knowledge
---------------------------------------------------------------------
*/

g_baseMapExt = new Array(796,732);

// fullscreen version
g_viewOff = new Array(0,0);
calc_g_viewExt();
g_viewPosType = "px";

g_picUL = new Array(-1, -1);
g_iniPxDelta = new Array(0,0);

g_zoomFactors = new Array();
g_zoomFactors[0] = 1;
g_zoomFactors[1] = 4.39233;
g_zoomFactors[2] = 10.98081;
g_zoomFactors[3] = 21.96163;
g_zoomFactors[4] = 43.92326;
set_zoomLevel(0);

g_tSize = new Array(256, 256);
g_maptileimageFormat = "png";

g_geoTileSize = new Array(512 ,512);
g_geoTilesDir = "geoTiles/tiles_";

g_ovMapExt = new Array(200, 183);
g_ovMapImgSrc = "maptileimages/ovmap.png";

g_dCLength = 0;

g_legendImgSrc = "maptileimages/legend.png";
g_legendExt = new Array(140,319);


g_logoSize = new Array(144,53);
g_logoPath = "design/usgs_lg.blk[1].gif";

g_listsDir = "lists/";
g_lists = new Array();

g_rwUL = new Array(-123.630675433265,39.1032627602316);
g_rwLR = new Array(-121.134888715604,36.8081423113275);
g_coordSys = "GCS_Assumed_Geographic_1";
g_coordUnits = "dd";

g_attDir = "attributes/";
g_maptileimagePraefix = "diemap_";
g_maptileimageDir = "maptileimages/images_";

g_mapViewDirs = new Array();

g_designDir = "design/";
g_spaceImg = g_designDir+"spacer_white.gif";
g_transpLayImg = g_designDir+"leer.gif";

g_scaleBarImgSrc = g_designDir + "scalebar.gif";
g_scaleBarWidth = 100;

g_zBSizeMulti = 14;

g_areaCon = "area_Con";
g_areaLay = "area_layer";

g_dBCon = "dB_Con";

g_postToMapGallery = false;

g_mapGalleryAuthor = "";
g_mapGalleryTitle = "";
g_mapGalleryComment = "";
g_mapGalleryCopyright = "";
g_mapGalleryEmail = "";
g_mapGalleryIndustryId = 0;
g_mapGalleryIndustryText = "";

g_hasCopyrightInfo = false;

g_langDir = "languages/";

load_lang();
posCalc();
urlHandler();
}

