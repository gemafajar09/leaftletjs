<?php
$dataJson = '{"nama":"gema fajar","info":"Single","alamat":"Padang"}';
$dataDiri = json_decode($dataJson);
echo $dataDiri->alamat;
