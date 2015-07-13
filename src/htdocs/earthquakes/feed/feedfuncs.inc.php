<?php

if (!function_exists('feed_info')) {

  $URLSTUB = ((isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!='') ?
    'https://' : 'http://') .
    $_SERVER['HTTP_HOST'] . '/earthquakes/feed/';

  $LEGEND = array(
    'version' => 'major.minor.bugfix release number.',
    'preview_date' => 'Date when feed version was initially released for preview.',
    'current_date' => 'Date when feed version will become (or became) current production version.',
    'deprecated_date' => 'Date when feed version will become (or became) deprecated.',
    'eol_date' => 'Date when feed version will no longer be available.',
    'url' => 'Location where more information about this feed version can be found.'
  );

  $VERSIONS = json_decode(file_get_contents('versions.json'), true);
  $DEPRECATED = $VERSIONS['deprecated'];
  $CURRENT = $VERSIONS['current'];
  $PREVIEW = $VERSIONS['preview'];

  /**
   * Generates markup to describe the information stored in $info. This
   * information should describe a feed version configuration.
   *
   * @param version {String}
   *    The Major/Minor version number for this version.
   * @param info {Array}
   *    Contains configuration information for a specific feed version.
   *
   * @return {String}
   *    Markup for the version configuration info.
   */
  function feed_info ($version, $info) {
    global $URLSTUB;
    $markup = '';

    $markup .= '<li id="' . $version . '"><strong>' . $version .
        '</strong><dl class="version">';

    if (!isset($info['version']) ||
        !isset($info['preview_date']) ||
        !isset($info['current_date']) ||
        !isset($info['deprecated_date']) ||
        !isset($info['eol_date'])) {
      // Incomplete version information. Error
    } else {
      $markup .= '<dt>Version Number</dt><dd>' .
          (($info['version']!='') ?
          str_replace('v', '', $info['version']) :
          'No version specified') . '</dd>';

      $markup .= '<dt>Preview Date</dt><dd>' .
          (($info['preview_date']!='') ?
          $info['preview_date'] :
          'No preview date specified') . '</dd>';

      $markup .= '<dt>Current Date</dt><dd>' .
          (($info['current_date']!='') ?
          $info['current_date'] :
          'No current date specified') . '</dd>';

      $markup .= '<dt>Deprecated Date</dt><dd>' .
          (($info['deprecated_date']!='') ?
          $info['deprecated_date'] :
          'No deprecated date specified') . '</dd>';

      $markup .= '<dt>End of Life Date</dt><dd>' .
          (($info['eol_date']!='') ?
          $info['eol_date'] :
          'No end of life specified') . '</dd>';

       $markup .= '<dt>More Information</dt>';

      if (isset($info['url'])) {
        $markup .= '<dd>' . $info['url'] . '</dd>';
      } else {
        $url = $URLSTUB . $version . '/';
        $markup .= '<dd><a href="' . $url . '">' .
            $url . '</a></dd>';
      }
    }

    $markup .= '</dl></li>';

    return $markup;
  }
}