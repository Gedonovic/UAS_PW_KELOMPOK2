<?php

include 'db_connect.php';

$id = $_POST['txtKode'];
$nama_lengkap = $_POST['txtNama'];
$alamat = $_POST['txtAlamat'];
$provinsi = $_POST['sWilayah'];
$email = $_POST['txtEmail'];
$no_hp = $_POST['txtHp'];
$keahlian = $_POST['txtKeahlian'];

$sql = "UPDATE relawan SET nama_lengkap='$nama_lengkap', alamat='$alamat', provinsi='$provinsi', email='$email', no_hp='$no_hp', keahlian='$keahlian' WHERE id_relawan='$id'";

$result = $db->prepare($sql);
$result->execute();

header('Location: index.php')

?>
