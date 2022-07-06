<html>

    <head>
        <title>Home</title>
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
            <li class="nav-item">
              <a class="nav-link" href="cetak.php">Print Data</a>
            </li>     
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>               
          </ul>
        </div>  

        <!-- <form id="register" method="post"> -->
          <div class="mt-3 row col-12">
            <!-- Teks Untuk Header -->

            <?php 
              include 'db_connect.php';

                $sql = "SELECT * FROM relawan";

                $result = $db->prepare($sql);
                $result->execute();
            ?>

            <div class="mt-5"></div>

            <h5 style="text-align:center; margin-bottom:25px;">
                Data Relawan Covid19 wilayah DKI Jakarta <br>
                Per 06 Juli 2022 11:30:16 &nbsp;
            </h5>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID Relawan</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Alamat Rumah</th>
                  <th scope="col">Provinsi</th>
                  <th scope="col">Email</th>
                  <th scope="col">No HP</th>
                  <th scope="col">Keahlian</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                  <?php  
                    while($row = $result->fetch()){
                      echo '<tr>';
                      echo '<td>'.$row['id_relawan'].'</td>';
                      echo '<td>'.$row['nama_lengkap'].'</td>';
                      echo '<td>'.$row['alamat'].'</td>';
                      echo '<td>'.$row['provinsi'].'</td>';
                      echo '<td>'.$row['email'].'</td>';
                      echo '<td>'.$row['no_hp'].'</td>';
                      echo '<td>'.$row['keahlian'].'</td>';
                      echo '<form action="update.php?id_relawan='.$row['id_relawan'].'" method="post">';
                      echo '<td><button type="submit" class="btn btn-success m-b-sm ubah">Ubah</button>';
                      echo '</form>';
                      echo '<form action="delete.php?id_relawan='.$row['id_relawan'].'" method="post">';
                      echo '<button type="submit" class="btn btn-danger m-b-sm ubah">Hapus</button></td>';
                      echo '</tr>';
                      echo '</form>';
                    }
                  ?>
              </tbody>
            </table>

          </div>  
       
        
      </div>
      <script type="text/javascript" src="{{ url_for('static', filename='js/bootstrap.bundle.min.js') }}"></script>        
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    </body>
</html>