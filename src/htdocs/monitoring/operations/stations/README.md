Seismic Network Monitoring Stations
===================================

Metadata for ANSS/GSN (so far) seismic stations.


## Directory Structure

Each station has its own folder, which is largely freeform to hold any station
specific content.  Station folders are organized based on FDSN `network_code` and `station_code`.
```
{NETWORK_CODE}/{STATION_CODE}/
```

Within each station folder there are two required files:

- `index.json`

  A Station JSON (see below) file containing structured metadata for the
  station.

- `index.php`

  Station Landing Page (see below) for less-structured, station-specific
  information.


## Station JSON

Each station has a Station JSON file named `index.json` within its folder.
Station JSON extends a GeoJSON Feature
  ( http://geojson.org/geojson-spec.html#feature-objects )

```
{
  "type": "Feature",
  "id": "{NETWORK_CODE}_{STATION_CODE}",
  "geometry": {
    "type": "Point",
    "coordinates": [
      LONGITUDE,
      LATITUDE,
      ELEVATION
    ]
  },
  "properties": {
    "accelerometer": "accelerometer type",
    "broadband": "broadband type",
    "datalogger": "datalogger type",
    "host": "name of host institution",
    "name": "station name",
    "network_code": "{NETWORK_CODE}",
    "start_time": "{YEAR},{JULIAN_DAY}",
    "station_code": "{STATION_CODE}",
    "virtual_networks": [
      "ANSS",
      "GSN"
    ]
  }
}
```

### Feature `id`

A unique identifier for the station.
A combination of FDSN `network_code` and `station_code` separated by an
underscore.

### Feature `geometry`

The station location and elevation.
Longitude and latitude units are decimal degrees.
Elevation units are meters.

### Feature `properties`

When properties are not known, they should be set to `null`.

- `accelerometer` {String} optional

  description of accelerometer.

- `broadband` {String} optional

  description of broadband.

- `datalogger` {String} optional

  description of datalogger.

- `host` {String} optional

  human readable name of host institution.

- `name` {String} required

  human readable station name.

- `network_code` {String} required

  FDSN network code.

- `start_time` {String} optional

  When station became operational.
  A combination of Year and Julian Day separated by a comma.

- `station_code` {String} required

  FDSN station code.

- `virtual_networks` {Array<String>}

  Array of virtual networks, of which station is a member.
  If not a member of any virtual networks, use an empty array (`[]`)
  instead of null.

  Current valid values are `ANSS` and `GSN`.
  Stations may be members of multiple virtual networks.


### Example
```json
{
  "type": "Feature",
  "id": "IU_ANMO",
  "geometry": {
    "type": "Point",
    "coordinates": [
      -106.457,
      34.946,
      1820
    ]
  },
  "properties": {
    "accelerometer": "FBA_ES-T_EpiSensor_Accelerometer",
    "broadband": "KS-54000",
    "datalogger": "Q330",
    "host": "US Geological Survey",
    "name": "Albuquerque, New Mexico, USA",
    "network_code": "IU",
    "start_time": "1989,241",
    "station_code": "ANMO",
    "virtual_networks": [
      "ANSS",
      "GSN"
    ]
  }
}
```


## Station Landing Page

File for metadata that doesn't have a place in `index.json`.
Any valid HTML markup may follow the PHP template preamble.

- The first heading level that should be used is `<h2>`.
- PHP template classes and styles are available, and are described at
  http://earthquake.usgs.gov/theme/
- Please use well-formed markup.
- When using images or other content:
  - optimize images for the web
  - use relative `src` attribute urls
  - ensure accessibility by using `alt` attributes, and/or
    `figure`/`figcaption` elements.

### Minimal example

```php
<?php
// Station template that uses Station JSON content
include '../../_station-details.template.php';
?>
```

### More complete example

```php
<?php
// Station template that uses Station JSON content
include '../../_station-details.template.php';
?>

<!-- additional HTML for station-specific information -->
<h2>Station Issues</h2>
<ul>
<li>
  <strong>2016-01-01</strong> - something happened at this station.
</li>
</ul>

<h2>Station Photos</h2>
<figure>
  <img src="relative/path/to/image.png" alt="terse description"/>
  <figcaption>
    description of photo
  </figcaption>
</figure>
```
