<?php

if (!isset($TEMPLATE)) {
  $index = 'index.json';

  if (!file_exists($index)) {
    http_response_code(400);
    exit();
  } else {
    $json = json_decode(file_get_contents($index), true);

    $id = $json['id'];
    $title = $json['title'];
    $url = $json['url'];
    $logo = '../../logos/' . $id . '.svg';

    $TITLE = strtoupper($id) . ' (Catalog)';
    $NAVIGATION = true;

    if (file_exists($logo)) {
      $COOPERATORS =
          '<a class="cooperator" href="' . $url . '">' .
            '<img src="' . $logo . '"' .
            ' alt="in cooperation with ' . $title . '"/>' .
          '</a>';
    }
  }

  include 'template.inc.php';
}

echo '<section class="vcard">';
echo '<h2 class="org fn">' . $title . '</h2>';

if ($url !== null) {
  echo '<p><a class="url" href="' . $url . '">' . $url . '</a></p>';
}

$citation = (isset($json['citation']) ? $json['citation'] : null);
if ($citation) {
  echo '<h2 id="citation">Citation</h2>';
  echo '<div class="citation">' . $citation . '</div>';
}

$address = (isset($json['address']) ? $json['address'] : null);
$email = (isset($json['email']) ? $json['email'] : null);
$tel = (isset($json['tel']) ? $json['tel'] : null);
if ($address || $email || $tel) {
  echo '<h2 id="contact">Contact</h2>';

  if ($address) {
    echo '<h3 id="mailing-address">Mailing Address</h3>';
    echo '<div class="adr">';
    if (isset($address['org'])) {
      echo '<div>' . str_replace("\n", '<br/>', $address['org']) . '</div>';
    }
    echo '<div class="street-address">' . $address['street-address'] . '</div>';
    if (isset($address['extended-address'])
        && $address['extended-address'] !== null) {
      echo '<div class="extended-address">' .
          $address['extended-address'] .
          '</div>';
    }
    echo '<span class="locality">' . $address['locality'] . '</span>';
    echo ', <span class="region">' . $address['region'] . '</span>';
    echo ' <span class="postal-code">' . $address['postal-code'] . '</span>';
    if (isset($address['country'])) {
      echo '<div class="country">' . $address['country'] . '</div>';
    }
    echo '</div>'; // class="adr"
  }

  if ($tel !== null) {
    echo '<h3 id="telephone">Telephone</h3>';
    foreach ($tel as $t) {
      echo '<div class="tel">' .
          '<span class="type">' . $t['type'] . '</span>: ' .
          '<tel class="value">' . $t['value'] . '</tel>' .
          '</div>';
    }
  }

  if ($email) {
    echo '<h3 id="email">Email</h3>';
    echo '<a href="mailto:' . $email . '">';
    if (isset($json['email-name'])) {
      echo $json['email-name'] . ' &lt;' . $email . '&gt;';
    } else {
      echo $email;
    }
    echo '</a>';
  }
}

echo '</section>'; // class="vcard"

?>
