<?php
  $TITLE = 'Feed Life Cycle Policy';
  $HEAD = '
    <link rel="stylesheet" href="policy.css"/>
  ';

  include_once 'feedfuncs.inc.php';
  include_once 'template.inc.php';
?>

<div class="policy">
  <ol>
    <li>
      Users should <a
      href="https://geohazards.usgs.gov/mailman/listinfo/realtime-feeds"
      target="_blank">subscribe to the API mailing list</a> to be informed
      of feed changes and updates to the policy.
    </li>
    <li>
      We will offer 3 levels of feeds:
      <dl>
        <dt><a href="#preview">Preview feed</a></dt>
        <dd>
          This is a development/work in progress feed, it may be
          modified before it becomes a production feed.
          Different versions in preview will not be
          preserved/deprecated, but changes will be documented. A
          preview feed may or may not ever become the production feed.
        </dd>
        <dt><a href="#production">Production feed</a></dt>
        <dd>
          Any feed in production will be available for at least 6
          months in either production or as a deprecated feed.
        </dd>
        <dt><a href="#deprecated">Deprecated feed</a></dt>
        <dd>
          There will be at least 30 days advance notice before a feed
          is deprecated and again before it is removed entirely. We
          may have multiple deprecated feed versions available at the
          same time.
        </dd>
      </dl>
    </li>
  </ol>
  <p>
    Users may reference a specific version of a feed.  If a version is not
    specified, the production version will be used.
  </p>
</div>

<div>
  <h2>About Feed Versions</h2>
  <p>
    Each feed revision is assigned a unique feed version number. These
    version numbers represent <code>major.minor.bugfix</code> changes.
  </p>
  <p>
    An increment in the &ldquo;major&rdquo; version number may include
    backward incompatibile changes. These can include changing available
    formats, or available data within a given format. Upgrading software to
    use the latest major feed revision is strongly recommended.
  </p>
  <p>
    An increment in the &ldquo;minor&rdquo; version number will not include
    backward incompatible changes. These changes can include making new
    data and/or formats available. These changes can also include
    reformatting existing data so long as the format still conforms to the
    indicated specification. Upgrading software to use the latest minor feed
    revision is optional.
  </p>
  <p>
    An increment in the &ldquo;bugfix&rdquo; version number will not include
    backward incompatible changes. These changes are generally to address
    issues that have been noticed in the existing feed formats. Upgrading
    software to use the latest bug fix revision is not required unless your
    software had been modified to use the invalid feed format previously
    available.
  </p>

  <p>
    Each <code>major.minor</code> feed version will exist and proceed
    through the feed life cycle independently. As these feed versions
    proceed from &ldquo;preview&rdquo; to &ldquo;production&rdquo; to
    &ldquo;deprecated&rdquo; you will be able to <a href="#versions">
    manually specify a particular feed version</a> to compare differences
    between revisions.
  </p>
  <p>
    Each <code>bugfix</code> feed version will silently patch its parent
    <code>major.minor</code> version as it becomes available. There is no
    option to use an old <code>bugfix</code> version of a feed.
  </p>
</div>

<h2 id="versions">Available Feed Versions</h2>
<p>
  Available feed versions are listed below. If a specific feed format is
  specified in requests, that format will always be returned so long as it
  remains available regardless of where that format is in its life cycle. If
  no specific format is specified, whichever format is currently considered
  the &ldquo;production&rdquo; format will be returned.
</p>

<ul class="legend">
  <?php print feed_info('Definition of Terms', $LEGEND); ?>
</ul>

<div class="preview" id="preview">
  <h3>Preview Versions</h3>
  <?php
  if (sizeof($PREVIEW) > 0) {
    print '<ul>';
    foreach ($PREVIEW as $version) {
      print feed_info($version, $VERSIONS['settings'][$version]);
    }
    print '</ul>';
  } else {
  ?>
    <p>
      No feed format is currently in &ldquo;preview&rdquo; status.
    </p>
  <?php
  } // END: if (sizeof($PREVIEW) > 0)
  ?>
</div>

<div class="production" id="#production">
  <h3>Production Version</h3>
  <?php
  if ($CURRENT != '') {
    print '<ul>' . 
        feed_info($CURRENT, $VERSIONS['settings'][$CURRENT]) . '</ul>';
  } else {
    // This won't happen often
  ?>
    <p>
      No feed version format is currently in &ldquo;production&rdquo;
      status.
    </p>
  <?php
  } // END: if ($CURRENT != '')
  ?>
</div>

<div class="deprecated" id="deprecated">
  <h3>Deprecated Versions</h3>
  <?php
  if (sizeof($DEPRECATED) > 0) {
    print '<ul>';
    foreach ($DEPRECATED as $version) {
      print feed_info($version, $VERSIONS['settings'][$version]);
    }
    print '</ul>';
  } else {
  ?>
    <p>
      No feed format is currently in &ldquo;deprecated&rdquo; status.
    </p>
  <?php
  } // END: if (sizeof($DEPRECATED) > 0)
  ?>
</div>
