# UAS_PW_KELOMPOK2
UAS Pemrograman Web 2

- Nama       :  Arma Tri Wahyudi
- NIM        :  191011402659
- Kode Kelas :  06TPLM005

# Deskripsi
Program ini dibuat menggunakan PHP Native tanpa Framework dan menggunakan MySQL untuk database sebagai penyimpanan data yang telah di input dengan query INSERT INTO tabel relawan, kemudian data dipanggil kembali untuk dicetak/diprint menggunakan query SELECT * FROM tabel relawan, dan ada fungsi hapus menggunakan DELETE * FROM serta ubah data menggunakan UPDATE tabel.

Kemudian untuk mengkoneksikan ke database menggunakan fungsi :

```
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
```

![1 login](https://user-images.githubusercontent.com/103981622/177731481-ad5a6e91-d899-44d9-babd-dca7726942ba.jpeg)
![2 data](https://user-images.githubusercontent.com/103981622/177731498-5ca7b687-2d5d-4351-9121-5d28ce4fb533.jpeg)
![3 form input](https://user-images.githubusercontent.com/103981622/177731504-491ab9bf-8c02-42e7-b61a-e912d0ec9dcd.jpeg)
![4 contoh input data relawan](https://user-images.githubusercontent.com/103981622/177731509-1bf46017-181f-4a95-834b-475b3ca4909a.jpeg)
![5 cetak](https://user-images.githubusercontent.com/103981622/177731514-2d5c5231-a8ca-445a-9c13-bda6abdb815c.jpeg)
![6 tampilan cetak](https://user-images.githubusercontent.com/103981622/177731518-116b98ec-56c7-4d54-96f2-bc8c0a0b8d82.jpeg)

# Kontribusi Kelompok
```
Alizha Dwi Putri Yana -> Membuat lampiran memenuhi persyaratan UAS per anggota untuk di upload ke E-learning dan Github.
```
```
Alvin Setiawan -> membuat tampilan data program.
```
```
Arif Setyawan -> mengupload ke hosting (000webhost).
```
```
Arma Tri Wahyudi -> membuat database dan codingan.
```
```
Bayu Alfadryan -> mengkoneksikan file ke database.
```
