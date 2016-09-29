/* global NETOPS_WEBSITE_BASEURL */
'use strict';


var TELEMETRY_DESCRIPTIONS,
    TELEMETRY_ICONS,
    TELEMETRY_SHADOW_ICON;


TELEMETRY_SHADOW_ICON = NETOPS_WEBSITE_BASEURL + '/images/station-shadow.png';

TELEMETRY_DESCRIPTIONS = [
  'Telemetry Undefined',
  'No data in more than 24 hours',
  'Last data in less than 24 hours and more than 10 minutes',
  'Last data in less than 10 minutes'
];

TELEMETRY_ICONS = [
  NETOPS_WEBSITE_BASEURL + '/images/station-gray.png',
  NETOPS_WEBSITE_BASEURL + '/images/station-red.png',
  NETOPS_WEBSITE_BASEURL + '/images/station-yellow.png',
  NETOPS_WEBSITE_BASEURL + '/images/station-green.png'
];
