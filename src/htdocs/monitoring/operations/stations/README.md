Seismic Network Monitoring Stations
-----------------------------------

Metadata for ANSS/GSN (so far) seismic stations.


## Directory Structure

Each station has its own folder, which is largely freeform to hold any station
specific content.  Station folders are organized based on FDSN `network_code` and `station_code`.
```
`network_code`/`station_code`/
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
  "type": "Feature"
  "id": "`network_code`_`station_code`",
  "geometry": {
    "type": "Point",
    "coordinates": [
      `longitude`,
      `latitude`,
      `elevation`
    ]
  },
  "properties": {
    "accelerometer": "accelerometer type",
    "broadband": "broadband type",
    "datalogger": "datalogger type",
    "host": "name of host institution",
    "name": "station name",
    "network_code": "`network_code`",
    "station_code": "`station_code`",
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

- `accelerometer` {String|null}

  description of accelerometer.

- `broadband` {String|null}

  description of broadband.

- `datalogger` {String|null}

  description of datalogger.

- `host` {String|null}

  human readable name of host institution.

- `name` {String}

  human readable station name.

- `network_code` {String}

  FDSN network code.

- `station_code` {String}

  FDSN station code.

- `virtual_networks` {Array<String>}

  Array of virtual networks, of which station is a member.

  Current valid values are `ANSS` and `GSN`.
  Station may be member of multiple virtual networks.


## Station Landing Page

Each station has a Station Landing Page file named `index.php` within its
folder.

```
<?php
// Station template that uses Station JSON content
include '../../_station-details.template.php';
?>

<!-- additional HTML for station-specific information -->
```
