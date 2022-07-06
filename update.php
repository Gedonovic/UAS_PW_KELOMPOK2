<html>
    <head>
        <title>Input Data</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">         
    </head>
    <body>          
      <div class="mt-5 container">

        <div class="row">
          <ul class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="input.php">Update Data Barang</a>
            </li>            
          </ul>
        </div> 

        <?php 
          include 'db_connect.php';
            $id = $_GET["id_relawan"];
            $sql = "SELECT * FROM relawan WHERE id_relawan='".$id."' ";

            $result = $db->prepare($sql);
            $result->execute();

            if($row = $result->fetch()){
                $id_relawan = $row['id_relawan'];
                $nama_lengkap = $row['nama_lengkap'];
                $alamat = $row['alamat'];
                $provinsi = $row['provinsi'];
                $email = $row['email'];
                $no_hp = $row['no_hp'];
                $keahlian = $row['keahlian'];
            }
        ?>

        <form action="update_proses.php" method="post" enctype="multipart/form-data">
          <div class="mt-3 row col-12 border border-1">
            <!-- Teks Untuk Header -->
            <h3 class="text-center">
              Update Data Relawan
            </h3>
            <!-- Penutup header -->

              <div class="mb-3">
                <label class="form-label">ID Relawan</label>
                <input value="<?php echo $id_relawan;?>" type="text" class="form-control" name="n" id="n" placeholder="ID Relawan" disabled>
              </div>

              <input type="hidden" name="txtKode" id="txtKode" value="<?php echo $id_relawan;?>">

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">Nama lengkap</label>
                <input value="<?php echo $nama_lengkap;?>" type="text" class="form-control" name="txtNama" id="txtNama" placeholder="Nama Lengkap">
              </div>

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">Alamat</label>
                <input value="<?php echo $alamat;?>" type="text" class="form-control" name="txtAlamat" id="txtAlamat" placeholder="Alamat">
              </div>

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">Provinsi</label>
                <input value="<?php echo $provinsi;?>" type="text" class="form-control" name="sWilayah" id="sWilayah" placeholder="Alamat">
              </div>

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">Email</label>
                <input value="<?php echo $email;?>" type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email">
              </div>

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">No hp</label>
                <input value="<?php echo $no_hp;?>" type="text" class="form-control" name="txtHp" id="txtHp" placeholder="Nomor Handphone">
              </div>

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">Keahlian</label>
                <input value="<?php echo $keahlian;?>" type="text" class="form-control" name="txtKeahlian" id="txtKeahlian" placeholder="Keahlian">
              </div>

              

              <div class="col mb-2">
                <button type="submit" class="btn btn-primary">Update Data</button>
               <!--  <button type="button" class="btn btn-danger">Batal</button> -->
              </div>

          </div>  
        </form>
        
      </div>                           
    </body>
</html>