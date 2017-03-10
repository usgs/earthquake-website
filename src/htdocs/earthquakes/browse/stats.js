/* global options */
'use strict';

function info_earthquake(options) {
  var endtime,
      starttime,
      url,
      max;

  endtime = new Date(Date.UTC(options[0] + 1, 0, 1));
  starttime = new Date(Date.UTC(options[0], 0, 1));
  if (options[1] == 8.0) {
    max = 15.0
  }
  else {
    max = options[1] + .999
  }
  url = 'https://earthquake.usgs.gov/fdsnws/event/1/count?' +
      [
        'starttime=' + starttime.toISOString(),
        'endtime=' + endtime.toISOString(),
        'minmagnitude=' + options[1],
        'maxmagnitude=' + max
      ].join('&');

  //console.log(url);
  var container = document.getElementById(options[2]);
  var response = new XMLHttpRequest();
  response.open("GET", url, false);
  response.send();
  container.innerHTML = response.response;
}
//8.0+ world earthquakes
info_earthquake([1990, 8.0, "1990_8.0_world"]);
info_earthquake([1991, 8.0, "1991_8.0_world"]);
info_earthquake([1992, 8.0, "1992_8.0_world"]);
info_earthquake([1993, 8.0, "1993_8.0_world"]);
info_earthquake([1994, 8.0, "1994_8.0_world"]);
info_earthquake([1995, 8.0, "1995_8.0_world"]);
info_earthquake([1996, 8.0, "1996_8.0_world"]);
info_earthquake([1997, 8.0, "1997_8.0_world"]);
info_earthquake([1998, 8.0, "1998_8.0_world"]);
info_earthquake([1999, 8.0, "1999_8.0_world"]);
info_earthquake([2000, 8.0, "2000_8.0_world"]);
info_earthquake([2001, 8.0, "2001_8.0_world"]);
info_earthquake([2002, 8.0, "2002_8.0_world"]);
info_earthquake([2003, 8.0, "2003_8.0_world"]);
info_earthquake([2004, 8.0, "2004_8.0_world"]);
info_earthquake([2005, 8.0, "2005_8.0_world"]);
info_earthquake([2006, 8.0, "2006_8.0_world"]);
info_earthquake([2007, 8.0, "2007_8.0_world"]);
info_earthquake([2008, 8.0, "2008_8.0_world"]);
info_earthquake([2009, 8.0, "2009_8.0_world"]);
info_earthquake([2010, 8.0, "2010_8.0_world"]);
info_earthquake([2011, 8.0, "2011_8.0_world"]);
info_earthquake([2012, 8.0, "2012_8.0_world"]);
info_earthquake([2013, 8.0, "2013_8.0_world"]);
info_earthquake([2014, 8.0, "2014_8.0_world"]);
info_earthquake([2015, 8.0, "2015_8.0_world"]);

//7.0 world earthquakes
info_earthquake([1990, 7.0, "1990_7.0_world"]);
info_earthquake([1991, 7.0, "1991_7.0_world"]);
info_earthquake([1992, 7.0, "1992_7.0_world"]);
info_earthquake([1993, 7.0, "1993_7.0_world"]);
info_earthquake([1994, 7.0, "1994_7.0_world"]);
info_earthquake([1995, 7.0, "1995_7.0_world"]);
info_earthquake([1996, 7.0, "1996_7.0_world"]);
info_earthquake([1997, 7.0, "1997_7.0_world"]);
info_earthquake([1998, 7.0, "1998_7.0_world"]);
info_earthquake([1999, 7.0, "1999_7.0_world"]);
info_earthquake([2000, 7.0, "2000_7.0_world"]);
info_earthquake([2001, 7.0, "2001_7.0_world"]);
info_earthquake([2002, 7.0, "2002_7.0_world"]);
info_earthquake([2003, 7.0, "2003_7.0_world"]);
info_earthquake([2004, 7.0, "2004_7.0_world"]);
info_earthquake([2005, 7.0, "2005_7.0_world"]);
info_earthquake([2006, 7.0, "2006_7.0_world"]);
info_earthquake([2007, 7.0, "2007_7.0_world"]);
info_earthquake([2008, 7.0, "2008_7.0_world"]);
info_earthquake([2009, 7.0, "2009_7.0_world"]);
info_earthquake([2010, 7.0, "2010_7.0_world"]);
info_earthquake([2011, 7.0, "2011_7.0_world"]);
info_earthquake([2012, 7.0, "2012_7.0_world"]);
info_earthquake([2013, 7.0, "2013_7.0_world"]);
info_earthquake([2014, 7.0, "2014_7.0_world"]);
info_earthquake([2015, 7.0, "2015_7.0_world"]);

//6.0 world earthquakes
info_earthquake([1990, 6.0, "1990_6.0_world"]);
info_earthquake([1991, 6.0, "1991_6.0_world"]);
info_earthquake([1992, 6.0, "1992_6.0_world"]);
info_earthquake([1993, 6.0, "1993_6.0_world"]);
info_earthquake([1994, 6.0, "1994_6.0_world"]);
info_earthquake([1995, 6.0, "1995_6.0_world"]);
info_earthquake([1996, 6.0, "1996_6.0_world"]);
info_earthquake([1997, 6.0, "1997_6.0_world"]);
info_earthquake([1998, 6.0, "1998_6.0_world"]);
info_earthquake([1999, 6.0, "1999_6.0_world"]);
info_earthquake([2000, 6.0, "2000_6.0_world"]);
info_earthquake([2001, 6.0, "2001_6.0_world"]);
info_earthquake([2002, 6.0, "2002_6.0_world"]);
info_earthquake([2003, 6.0, "2003_6.0_world"]);
info_earthquake([2004, 6.0, "2004_6.0_world"]);
info_earthquake([2005, 6.0, "2005_6.0_world"]);
info_earthquake([2006, 6.0, "2006_6.0_world"]);
info_earthquake([2007, 6.0, "2007_6.0_world"]);
info_earthquake([2008, 6.0, "2008_6.0_world"]);
info_earthquake([2009, 6.0, "2009_6.0_world"]);
info_earthquake([2010, 6.0, "2010_6.0_world"]);
info_earthquake([2011, 6.0, "2011_6.0_world"]);
info_earthquake([2012, 6.0, "2012_6.0_world"]);
info_earthquake([2013, 6.0, "2013_6.0_world"]);
info_earthquake([2014, 6.0, "2014_6.0_world"]);
info_earthquake([2015, 6.0, "2015_6.0_world"]);

//5.0 world earthquakes
info_earthquake([1990, 5.0, "1990_5.0_world"]);
info_earthquake([1991, 5.0, "1991_5.0_world"]);
info_earthquake([1992, 5.0, "1992_5.0_world"]);
info_earthquake([1993, 5.0, "1993_5.0_world"]);
info_earthquake([1994, 5.0, "1994_5.0_world"]);
info_earthquake([1995, 5.0, "1995_5.0_world"]);
info_earthquake([1996, 5.0, "1996_5.0_world"]);
info_earthquake([1997, 5.0, "1997_5.0_world"]);
info_earthquake([1998, 5.0, "1998_5.0_world"]);
info_earthquake([1999, 5.0, "1999_5.0_world"]);
info_earthquake([2000, 5.0, "2000_5.0_world"]);
info_earthquake([2001, 5.0, "2001_5.0_world"]);
info_earthquake([2002, 5.0, "2002_5.0_world"]);
info_earthquake([2003, 5.0, "2003_5.0_world"]);
info_earthquake([2004, 5.0, "2004_5.0_world"]);
info_earthquake([2005, 5.0, "2005_5.0_world"]);
info_earthquake([2006, 5.0, "2006_5.0_world"]);
info_earthquake([2007, 5.0, "2007_5.0_world"]);
info_earthquake([2008, 5.0, "2008_5.0_world"]);
info_earthquake([2009, 5.0, "2009_5.0_world"]);
info_earthquake([2010, 5.0, "2010_5.0_world"]);
info_earthquake([2011, 5.0, "2011_5.0_world"]);
info_earthquake([2012, 5.0, "2012_5.0_world"]);
info_earthquake([2013, 5.0, "2013_5.0_world"]);
info_earthquake([2014, 5.0, "2014_5.0_world"]);
info_earthquake([2015, 5.0, "2015_5.0_world"]);
