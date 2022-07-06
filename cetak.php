<html>

    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">      
    </head>
    <body onload="window.print()">          
      <div class="mt-5 container">


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
            <h5 style="text-align:center">
                Data Relawan Covid19 wilayah DKI Jakarta <br>
                Per 06 Juli 2022 11:30:16 
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
                      
                      echo '</form>';
                      
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