# UAS PEMROGRAMAN WEB KELOMPOK 2
NAMA: ARMA TRI WAHYUDI
NIM: 191011402659
KELAS: 06TPLM005

## DESKRIPSI
Program ini dibuat menggunakan PHP Native tanpa Framework dan menggunakan MySQL untuk database sebagai penyimpanan data yang telah di input dengan query INSERT INTO tabel relawan,
kemudian data dipanggil kembali untuk dicetak/diprint menggunakan query SELECT * FROM tabel relawan, dan ada fungsi hapus menggunakan DELETE * FROM serta ubah data menggunakan UPDATE tabel.

Kemudian untuk mengkoneksikan ke database menggunakan fungsi:
<?php
$servername = "localhost";
$database = "uas";
$username = "root";
$password = "";
 
$db = mysqli_connect($servername, $username, $password, $database);

if (!$db) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
echo "Koneksi Berhasil";
mysqli_close($db);
?>

![WhatsApp Image 2022-07-07 at 13 05 45](https://user-images.githubusercontent.com/96682868/177727625-f91f825b-f834-4cad-93ca-c7d62c555de6.jpeg)
![WhatsApp Image 2022-07-07 at 13 05 37](https://user-images.githubusercontent.com/96682868/177727634-bafc09d2-80df-445c-8150-b0e33c36388a.jpeg)
![WhatsApp Image 2022-07-07 at 13 06 33](https://user-images.githubusercontent.com/96682868/177727635-6353cfb3-c3e9-4583-8128-a457971376ff.jpeg)
![WhatsApp Image 2022-07-07 at 13 06 22](https://user-images.githubusercontent.com/96682868/177727639-54e7ff5b-d02a-403e-b999-874e906ac571.jpeg)
![WhatsApp Image 2022-07-07 at 13 06 09](https://user-images.githubusercontent.com/96682868/177727640-50c8786c-5652-4e50-988a-2d1381569b88.jpeg)
![WhatsApp Image 2022-07-07 at 13 05 58](https://user-images.githubusercontent.com/96682868/177727643-d320df5c-a0ef-4e5a-a965-ff33495f2748.jpeg)
