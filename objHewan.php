<?php
require_once 'Kucing.php';
require_once 'Kambing.php';
require_once 'Anjing.php';

$tom = new Kucing();
$saune = new Kambing();
$heli = new Anjing();

$suara_hewan = [$tom, $saune, $heli];

foreach ($suara_hewan as $hewan) {
    echo '<br/>' . $hewan->bersuara();
}
