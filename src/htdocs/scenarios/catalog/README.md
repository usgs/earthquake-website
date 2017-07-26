# Catalog Metadata information

Each catalog has a directory for documentation inside the
`src/htdocs/data/comcat/catalog` directory.  This corresponds to the base url
on the earthquake web site of `https://earthquake.usgs.gov/data/comcat/catalog`


Each directory must:
  - be lower case
  - contain a file named `index.json`
  - contain a file named `index.php`


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
  "attribution-url": "http://www.ncedc.org/",
  "catalog-url": "https://earthquake.usgs.gov/scenarios/map/#%7B%22feed%22%3A%22nclegacy%22%7D",
  "email": "ncsn@andreas.wr.usgs.gov",
  "address": {
    "org": "U.S. Geological Survey\nSeismology Section",
    "street-address": "345 Middlefield Road",
    "extended-address": "MS 977",
    "locality": "Menlo Park",
    "region": "CA",
    "postal-code": "94025"
  },
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


## index.php

File for metadata that doesn't have a place in `index.json`.
Any valid HTML markup may follow the PHP template preamble.

- The first heading level that should be used is `<h2>`.
- PHP template classes and styles are available, and are described at
  https://earthquake.usgs.gov/theme/
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

<h2 id="references">References</h2>
<ul class="referencelist">
  <li>Reference 1</li>
  <li>Reference 2</li>
</ul>
```
