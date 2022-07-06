<?php

include 'db_connect.php';


$nama_lengkap = $_POST['txtNama'];
$alamat = $_POST['txtAlamat'];
$provinsi = $_POST['sWilayah'];
$email = $_POST['txtEmail'];
$no_hp = $_POST['txtHp'];
$keahlian = $_POST['txtKeahlian'];

$sql = "INSERT INTO relawan(nama_lengkap, alamat, provinsi, email, no_hp, keahlian)
        VALUES (?, ?, ?, ?, ?, ?)";

$result = $db->prepare($sql);
$result->execute([$nama_lengkap, $alamat, $provinsi, $email, $no_hp, $keahlian]);

header('Location: index.php')

?>
