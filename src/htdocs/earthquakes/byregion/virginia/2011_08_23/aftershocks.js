	  /**
 *
 * @import aftershocks.css
 */

	  dojo.require("esri.map");
      dojo.require("esri.dijit.TimeSlider");
	  dojo.require("esri.dijit.Popup");
      dojo.require("esri.layers.FeatureLayer");
      dojo.require("dijit.TooltipDialog");
      dojo.require("dojo.number");
	  dojo.require("dijit.layout.BorderContainer");
	  dojo.require("esri.dijit.Measurement");
      dojo.require("dijit.layout.TabContainer");
      dojo.require("dijit.form.Button");
	  dojo.require("esri.tasks.identify");
	  dojo.require("esri.dijit.Scalebar");
	  
	  var map;
      var dialog;
	  var plates = null;
	  var url;
	  var title;
	  var query;
	  var lat;
	  var lon;
	  var new1;
	  var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

      function init() {
		 
		var lods = [
          {
          "level": 8,
          "resolution": 611.49622628138,
          "scale": 2311162.217155},
		  {
          "level": 9,
          "resolution": 305.748113140558,
          "scale": 1155581.108577},
          {
          "level": 10,
          "resolution": 152.874056570411,
          "scale": 577790.554289},
		  {
          "level": 11,
          "resolution": 76.4370282850732,
          "scale": 288895.277144},
		  {
          "level": 12,
          "resolution": 38.2185141425366,
          "scale": 144447.638572},
		  {
          "level": 13,
          "resolution": 19.1092570712683,
          "scale": 72223.819286},
		  {
          "level": 14,
          "resolution": 9.55462853563415,
          "scale": 36111.909643},
		  {
          "level": 15,
          "resolution": 4.77731426794937,
          "scale": 18055.954822},
		  {
          "level": 16,
          "resolution": 2.38865713397468,
          "scale": 9027.977411}
        ];
		
		var initExtent = esri.geometry.geographicToWebMercator(new esri.geometry.Extent(-78.12, 37.74, -77.72, 38.14, new esri.SpatialReference({wkid: 4326}))); 
		 
		var popup = new esri.dijit.Popup({
          fillSymbol: new esri.symbol.SimpleLineSymbol(esri.symbol.SimpleLineSymbol.STYLE_SOLID, new dojo.Color([255,0,0]), 2, new dojo.Color([255,255,0,0.25]))
        }, dojo.create("div"));
		  
        var map = new esri.Map("map",{
		  infoWindow:popup,
		  lods:lods,
		  wrapAround180:true,
		  isRubberBandZoom:true,
		  extent:initExtent,
		  logo:false});
       
        
		var layers = [];
        var basemap = new esri.layers.ArcGISTiledMapServiceLayer("http://services.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer");
        layers.push(basemap);

        var opLayer = new esri.layers.ArcGISDynamicMapServiceLayer("https://geohazards.usgs.gov/ArcGIS/rest/services/VA_aftershocks/MapServer");
        opLayer.setVisibleLayers([0]);
		
		var mainevent = new esri.layers.ArcGISDynamicMapServiceLayer("https://geohazards.usgs.gov/ArcGIS/rest/services/VA_event/MapServer");
        mainevent.setVisibleLayers([0]);
		
		layers.push(opLayer);
		layers.push(mainevent);
		map.addLayers(layers);

        dojo.connect(map,"onLayersAddResult",initSlider);
		
		dojo.connect(map,"onLoad",mapReady);

      }
	  
	  function mapReady(map){
			
			var scalebar = new esri.dijit.Scalebar({
			map:map,
			attachTo:"bottom-right"
			}
          );
       //resize the map when the browser resizes
       dojo.connect(dijit.byId('map'), 'resize', map,map.resize);
	   
      }
	  
      function initSlider(results) {
        var map = this;
        var timeSlider = new esri.dijit.TimeSlider({style: "width: 800px;"},dojo.byId("timeSliderDiv"));
        map.setTimeSlider(timeSlider);
       
        var timeExtent = new esri.TimeExtent();
        timeExtent.startTime = new Date("08/23/2011 UTC");
        timeExtent.endTime = new Date("12/31/2011 UTC");
        timeSlider.setThumbCount(1);
        timeSlider.createTimeStopsByTimeInterval(timeExtent,12,'esriTimeUnitsHours');
        timeSlider.setThumbIndexes([0]);
        timeSlider.setThumbMovingRate(240);
		timeSlider.setTickCount(0);
		//timeSlider.singleThumbAsTimeInstant(true);
        timeSlider.startup();

        //add labels for every other time stop

	/*	var labels = dojo.map(timeSlider.timeStops, function(timeStop,i){
		 if(i%64 === 0){													 
		return monthNames[timeStop.getUTCMonth()];
		 }
		 else{
			 return "";
			 }
			 
        }); */
		
		
		
       
        //timeSlider.setLabels(labels);

	  }
	
      dojo.addOnLoad(init);