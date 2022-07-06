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
              <a class="nav-link" href="input.php">Input Data Relawan</a>
            </li>            
          </ul>
        </div> 

        <form action="input_proses.php" method="post" enctype="multipart/form-data">
          <div class="mt-3 row col-12 border border-1">
            <!-- Teks Untuk Header -->
            <h3 class="text-center">
              Input Data Relawan
            </h3>
            <!-- Penutup header -->

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">Nama lengkap</label>
                <input type="text" class="form-control" name="txtNama" id="txtNama" placeholder="Nama Lengkap">
              </div>

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="txtAlamat" id="txtAlamat" placeholder="Alamat">
              </div>

              <div class="form mb-2"> 
              <label for="sWilayah" class="form-label">Nama Wilayah</label>
              <select name="sWilayah" class="form-select" aria-label="Default select example">
                  <option selected>--- Pilih Wilayah ---</option>
                  <option value="DKI Jakarta">DKI Jakarta</option>
                  <option value="Jawab Barat">Jawab Barat</option>
                  <option value="Banten">Banten</option>
                  <option value="Jawa Tengah">Jawa Tengah</option>
              </select>
              </div> 

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">Email</label>
                <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email">
              </div>

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">No hp</label>
                <input type="text" class="form-control" name="txtHp" id="txtHp" placeholder="Nomor Handphone">
              </div>

              <div class="mb-3">
                <label for="jumlahdirawat" class="form-label">Keahlian</label>
                <input type="text" class="form-control" name="txtKeahlian" id="txtKeahlian" placeholder="Keahlian">
              </div>

              

              <div class="col mb-2">
                <button type="submit" class="btn btn-primary">Input Relawan</button>
                <!-- <button type="button" class="btn btn-danger">Batal</button> -->
              </div>

          </div>  
        </form>
        
      </div>                           
    </body>
</html>