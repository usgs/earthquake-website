<?php

class Features {
  // id for features list.
  public $id = 'usgs_earthquake_home';
  // author for features list.
  public $author = 'U.S. Geological Survey';
  // site url (ends with a /).
  public $siteUrl = 'https://earthquake.usgs.gov/';
  // base url for section (ends with a /).
  public $baseUrl;
  // title of features list.
  public $title;
  // items in list.
  public $items;
  /**
   * Construct a new Features list.
   */
  public function __construct ($items=null) {
    $this->items = array();
  }
  /**
   * Get list of items currently "publish"able.
   *
   * @return {Array<Item>} all items without a publish date, or a publish date in the past.
   */
  public function getItems () {
    $now = time();
    $items = array();
    foreach ($this->items as $item) {
      if (!isset($item['publish']) || $item['publish'] <= $now) {
        $items[] = $item;
      }
    }
    return $items;
  }
  /**
   * Format Features list as Atom feed.
   *
   * @return {String} atom feed.
   */
  public function toAtom() {
    $items = $this->getItems();
    $r = '';
    $r .= '<?xml version="1.0" encoding="utf-8"?>' . PHP_EOL .
      '<feed xmlns="http://www.w3.org/2005/Atom">' .
        '<title>' . $this->title . '</title>' .
        '<updated>' . $this->getAtomDate(time()) . '</updated>' .
        '<author>' .
        '<name>' . $this->author . '</name>' .
        '<uri>' . $this->siteUrl . '</uri>' .
        '</author>' .
        '<id>' . $this->id . '</id>';
    foreach ($items as $item) {
      $r .= $this->getAtomEntry($item);
    }
    $r .= '</feed>';
    return $r;
  }
  /**
   * Format Features list as Html.
   *
   * @return {String} html.
   */
  public function toHtml() {
    $items = $this->getItems();
    $len = count($items);

    $r = '';
    $r .= '<ul class="no-style separator linklist">';
    $r .=   $this->getItemHtml($items[0]);
    $r .=   $this->getItemHtml($items[1]);
    /* $r .=   $this->getItemHtml($items[3]); */
    $r .= '</ul>';

    return $r;
  }
  /**
   * Format a time as ISO8601.
   *
   * @param $time {Integer}
   *        unix epoch timestamp in seconds.
   * @return {String} ISO8601 formatted date.
   */
  protected function getAtomDate ($time) {
    return gmdate('Y-m-d\TH:i:s\Z', $time);
  }
  /**
   * Format an item as an Atom entry.
   *
   * @param item {Item}
   * @return {String} atom entry element.
   */
  protected function getAtomEntry ($item) {
    $r = '';
    $r .= '<entry>' .
      '<id>' . $item['id'] . '</id>' .
      '<title>' . $item['title'] . '</title>' .
      '<updated>' . $this->getAtomDate($item['modified']) . '</updated>' .
      '<link rel="alternate" type="text/html" href="' .
      $this->getLink($item['link']) . '"/>' .
      '<summary type="html"><![CDATA[' .
      '<img src="' . $this->getLink($item['thumbnail']) .
      '" width="100" align="left" hspace="10"/>' . $item['content'] .
      ']]></summary>';
    if (isset($item['tags'])) {
      foreach ($item['tags'] as $tag) {
        $r .= '<category term="' . $tag . '"/>';
      }
    }
    $r .= '</entry>';
    return $r;
  }
  /**
   * Format an item as Html.
   *
   * @param item {Item}
   * @return {String} html formatted item.
   */
   protected function getItemHtml ($item) {
     return '' .
      '<li>' .
        '<a href="' . $item['link'] . '">' .
        '<h3 class="feature-title">' . $item['title'] . '</h3>' .
        '<img class="feature-image" src="' . $item['thumbnail'] .
        '" alt="" />' .
        '</a>' .
        '<p>' . $item['content'] . '</p>' .
      '</li>';
   }
  /**
   * Get an absolute link from a relative link.
   *
   * @param $link {String}
   *        relative or absolute link.
   * @return {String} absolute link.
   */
  protected function getLink ($link) {
    if (strpos($link, 'http') === 0) {
      return $link;
    }
    return $this->siteUrl . $this->baseUrl . $link;
  }
}
