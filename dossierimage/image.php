<?php
header ("Content-type: image/jpeg");
$img = imagecreatefromjpeg("dossierimage/testbdds.jpeg");
imagejpeg($img, "dossierimage/testbdds.jpeg");
?>