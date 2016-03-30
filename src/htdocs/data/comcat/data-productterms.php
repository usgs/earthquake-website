<?php
  // Author: Lisa Wald
  // Contact: Paul Earle,
  // Last modified: 03/03/2016
  if (!isset($TEMPLATE)) {
  $TITLE = 'ComCat Documentation - Product Terms';
  $HEAD = '
    <link rel="stylesheet" href="comcat.css"/>
  ';
  $NAVIGATION = true;
  include 'template.inc.php';
  }
?>

<!-- TABLE of CONTENTS -->

<ul>
  <li><a href="#product_content">content</a></li>
  <li><a href="#product_id">id</a></li>
  <li><a href="#product_property">link</a></li>
  <li><a href="#product_property">property</a></li>
  <li><a href="#product_preferredWeight">preferredWeight</a></li>
  <li><a href="#product_status">status</a></li>
</ul>

<hr/>

    <dl class="typelist vertical">

      <dt id="product_content">content</dt>
      <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">Object</dd>
          <dt>Description</dt>
          <dd>
            A file or group of bytes associated with a product.

            <ul class="attribute-list">
              <li>
                <em>contentType</em>
                String mime type of this content.
              </li>
              <li>
                <em>lastModified</em>
                Millisecond timestamp when this content was modified.
              </li>
              <li>
                <em>length</em>
                Integer number of bytes in this content.
              </li>
              <li>
                <em>&lt;path&gt;</em>
                String relative path within this product, frequently a filename.
              </li>
              <li>
                <em>url</em>
                Link to download this content.
                When <code>&lt;path&gt;</code> is empty (""),
                there will be <code>bytes</code> property with content inline.
              </li>
            </ul>
          </dd>
        </dl>
      </dd>

      <dt id="product_id">id</dt>
        <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">String</dd>
          <dt>Description</dt>
          <dd>
            Unique identifier for a specific version of a product.

            The id is made of of these four attributes:

            <ul class="attribute-list">
              <li>
                <em>source</em>
                The product contributor, usually a <a href="#net">network code</a>.
              </li>
              <li>
                <em>type</em>
                The type of product.
                See <a href="http://ehppdl1.cr.usgs.gov/userguide/products/"
                  >http://ehppdl1.cr.usgs.gov/userguide/products/</a>
                  for a list of product types.
              </li>
              <li>
                <em>code</em>
                A unique identifier from the product <code>source</code>, for
                this <code>type</code> of product.
              </li>
              <li>
                <em>updateTime</em>
                A millisecond timestamp that indicates when this version of the
                product was created.
                <br />
                Two products with the same <code>source</code>,
                <code>type</code>, and <code>code</code>, with different
                <code>updateTime</code>s indicate different versions of the
                same product. The latest updateTime for a product supersedes
                any earlier updateTime for the same product.
              </li>
            </ul>
          </dd>
        </dl>
      </dd>

      <dt id="product_link">link</dt>
        <dd>
          <dl>
            <dt>Data Type</dt><dd class="datatype">String</dd>
            <dt>Description</dt>
            <dd>
              Products have zero or more links, which consist of:
              <ul class="attribute-list">
                <li>
                  <em>&lt;relation&gt;</em>
                  Relation describes how the link is related to the product.
                </li>
                <li>
                  <em>href</em>
                  Link is a URI, and may be a URL or a URN depending on product
                  type and <code>relation</code>.
                </li>
              </ul>
            Links vary depending on <a href="#product_id">product type</a>.
          </dd>
        </dl>
      </dd>

      <dt id="product_property">property</dt>
        <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">String</dd>
          <dt>Description</dt>
          <dd>
            Products have zero or more key/value properties, which are both
            Strings. Properties vary depending on
            <a href="#product_id">product type</a>.
          </dd>
        </dl>
      </dd>

      <dt id="product_preferredWeight">preferredWeight</dt>
        <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">Integer</dd>
          <dt>Description</dt>
          <dd>
            Relative weight of product.
            When multiple products of the same type are associated to an event,
            one product of each type is considered &ldquo;most preferred&rdquo;
            This is defined as the product of that type with the largest
            <code>preferredWeight</code>, and when two products have equal
            preferredWeight the most recent updateTime is more preferred.
          </dd>
        </dl>
      </dd>

      <dt id="product_status">status</dt>
        <dd>
        <dl>
          <dt>Data Type</dt><dd class="datatype">String</dd>
          <dt>Description</dt>
          <dd>
            Status of the product.
            There is only one reserved status <code>DELETE</code>, which
            indicates the product has been deleted. Any other value indicates
            a product update, and may vary depending on <a href="#product_id">
            product type</a>.
          </dd>
        </dl>
      </dd>
    </dl>
