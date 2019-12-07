<?php
$koneksi = NEW mysqli('localhost','root','','kasir');
$data = $koneksi->query("SELECT * FROM baru")->fetch_array();
$info = json_decode($data['info']);
echo $info->umur;
?>