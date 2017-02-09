# Contributor Metadata information

Each contributor has a directory for documentation inside the
`src/htdocs/data/comcat/contributor` directory.  This corresponds to the base url
on the earthquake web site of `https://earthquake.usgs.gov/data/comcat/contributor`


Each directory must:
  - be lower case
  - contain a file named `index.json`
  - contain a file named `index.php`


## Logos

Contributor logos are in the `src/htdocs/data/comcat/logos` directory, named
`contributor.svg` (where `contributor` is the lower case contributor code).

- SVG 1.1 format
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
  "aliases": null,
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
include '../_contributor.inc.php';
?>
```

More complete example:
```php
<?php
include '../_contributor.inc.php';
?>

<h2 id="description">Description</h2>
<p>This catalog is unique because...</p>

<h2 id="references">References</h2>
<ul class="referencelist">
  <li>Reference 1</li>
  <li>Reference 2</li>
</ul>
```
