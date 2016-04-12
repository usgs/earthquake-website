# Catalog Metadata information

Each catalog has a directory for documentation inside the
`src/htdocs/data/comcat/catalog` directory.  This corresponds to the base url
on the earthquake web site of `http://earthquake.usgs.gov/data/comcat/catalog`


Each directory must:
  - be lower case
  - contain a file named `index.json`
  - contain a file named `index.php`


## Logos

Catalog logos are in the `src/htdocs/data/comcat/logos` directory, named
`contributor.svg` (where `contributor` is the lower case contributor code).

- SVG 1.1 format (preferred) or optimized PNG
- trim to artwork (i.e. not 8.5x11)
- may use transparency
- will be displayed
  - 56px tall
  - on a dark background


## index.json

File for structured metadata.

Minimal example (assuming code 'abc'):

```json
{
  "id": "abc",
  "title": "ABC Research Catalog"
}
```

More complete example:
```json
{
  "id": "nc",
  "title": "Northern California Seismic System, UC Berkeley and USGS Menlo Park",
  "url": "http://www.ncedc.org/",
  "email": "ncsn@andreas.wr.usgs.gov",
  "address": [{
    "org": "U.S. Geological Survey\nSeismology Section",
    "street-address": "345 Middlefield Road",
    "extended-address": "MS 977",
    "locality": "Menlo Park",
    "region": "CA",
    "postal-code": "94025"
  }],
  "tel": [
    {
      "type": "Earthquake Information",
      "value": "+1-650-329-4025"
    },
    {
      "type": "Voice",
      "value": "+1-650-329-4085"
    },
    {
      "type": "Fax",
      "value": "+1-650-329-5163"
    }
  ]
}
```



### Supported JSON Properties

<dl>
<dt>`id`</dt>
<dd>
  (Required)
  Catalog code, should match the directory name.
</dd>

<dt>`title`</dt>
<dd>
  (Required)
  Full name for catalog organization.
  This title is displayed when linking to this page.
</dd>

<dt>`url`</dt>
<dd>URL for catalog home page, or more information about catalog.</dd>

<dt>`citation`</dt>
<dd>
  DOI number (preferred),
  or other citation information for users to reference this catalog.
</dd>

<dt>`email`</dt>
<dd>
  <p>NOTE: contact information is more commonly included on
  contributor pages, which may be linked in the PHP file.</p>

  Email address to contact catalog.
</dd>

<dt>`email-name`</dt>
<dd>
  Name or text associated with email address (`email`)
  Only used when `email` is set.
</dd>

<dt>`address`</dt>
<dd>
  <p>NOTE: contact information is more commonly included on
  contributor pages, which may be linked in the PHP file.</p>

  Mailing address or addresses.
  May be an array containing multiple addresses.
  Each address has the following properties:

  <dl>
  <dt>`org`</dt>
  <dd>Title or organization for address</dd>

  <dt>`street-address`</dt>
  <dd>
    (Required)
    First line of address
  </dd>

  <dt>`extended-address`</dt>
  <dd>Second line of address</dd>

  <dt>`locality`</dt>
  <dd>
    (Required)
    Address city
  </dd>

  <dt>`region`</dt>
  <dd>
    (Required)
    Address state/region
  </dd>

  <dt>`postal-code`</dt>
  <dd>
    (Required)
    Address ZIP/postal code
  </dd>

  <dt>`country`</dt>
  <dd>Address country</dd>
  </dl>
</dd>


<dt>`tel`</dt>
<dd>
  <p>NOTE: contact information is more commonly included on
  contributor pages, which may be linked in the PHP file.</p>

  Array of telephone numbers.
  Each telephone number has the following properties:

  <dl>
  <dt>`type`</dt>
  <dd>
    (Required)
    Text describing telephone number, e.g. "Earthquake Information".
  </dd>

  <dt>`value`</dt>
  <dd>
    (Required)
    Phone number with country and area code, e.g. "+1-555-555-5555".
  </dd>
  </dl>
</dd>


## index.php

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


Minimal example:
```php
<?php
include '../_catalog.inc.php';
?>
```

More complete example:
```php
<?php
include '../_catalog.inc.php';
?>

<h2 id="description">Description</h2>
<p>This catalog is unique because...</p>

<h2 id="contributors">Contributors</h2>
<ul>
  <li><a href="../../contributor/nc/">NC (Contributor)</a></li>
</ul>

<h2 id="references">References</h2>
<ul class="referencelist">
  <li>Reference 1</li>
  <li>Reference 2</li>
</ul>
```
