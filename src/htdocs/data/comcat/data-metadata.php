<?php
  // Author: Lisa Wald
  // Contact: Paul Earle,
  // Last modified: 03/03/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'ComCat Documentation - Metadata Terms';
  $HEAD = '
    <link rel="stylesheet" href="comcat.css"/>
  ';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<!-- TABLE of CONTENTS -->

<ul>
  <li><a href="#metadata_api">api</a></li>
  <li><a href="#metadata_count">count</a></li>
  <li><a href="#metadata_generated">generated</a></li>
  <li><a href="#metadata_title">title</a></li>
  <li><a href="#metadata_url">url</a></li>
  <li><a href="#metadata_status">status</a></li>
</ul>

<hr/>

    <dl class="typelist vertical">
      <dt id="metadata_api">api</dt>
      <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">String</dd>
          <dt>Description</dt>
          <dd>
            Version of API that generated feed.
          </dd>
        </dl>
      </dd>

      <dt id="metadata_count">count</dt>
      <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">Integer</dd>
          <dt>Description</dt>
          <dd>
            Number of earthquakes in feed.
          </dd>
        </dl>
      </dd>

      <dt id="metadata_generated">generated</dt>
      <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">Long Integer</dd>
          <dt>Description</dt>
          <dd>
            Time when the feed was most recently updated.
            Times are reported in <em>milliseconds</em> since the
            <abbr title="January 1, 1970">epoch</abbr>.
          </dd>
        </dl>
      </dd>

      <dt id="metadata_title">title</dt>
      <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">String</dd>
          <dt>Typical Values</dt>
          <dd>
            &ldquo;USGS Magnitude 1+ Earthquakes, Past Day&rdquo;,
            &ldquo;USGS Magnitude 4.5+ Earthquakes, Past Month&rdquo;
          </dd>
          <dt>Description</dt>
          <dd>
            The title of the feed.
          </dd>
        </dl>
      </dd>

      <dt id="metadata_url">url</dt>
      <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">String</dd>
          <dt>Description</dt>
          <dd>
            Url of the feed.
          </dd>
        </dl>
      </dd>

      <dt id="metadata_status">status</dt>
      <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">Integer</dd>
          <dt>Description</dt>
          <dd>
            HTTP status code of response.
          </dd>
        </dl>
      </dd>
    </dl>
