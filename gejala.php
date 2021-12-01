
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    require 'function.php';
    // if(isset($_GET["jumlahkan"])){
    //   echo "<script>
    //   alert('Data gejala anda telah dihitung <br> klik Diagnosa untuk melihat hasil !');
    //   </script>"; 
    // }

    $inputan = [28];
    $hasilCormes = [8][28];
    $hasilJumlah = array(0,0,0,0,0,0,0,0);
    $hasilMax = 0;
    $metaDataPenyakit = array(
                              array(1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
                              array(0,0,0,0,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
                              array(0,0,0,0,0,0,0,0,0,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
                              array(0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0),
                              array(0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1,0,1,1,0,0,0,0,0,0,0,0,0),
                              array(0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,0,0,0),
                              array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,1,1,0,0,0),
                              array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,1,1,1)
                              );
    ?>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="user.css">
    <title>Halaman Dashboard</title>
  </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">SELAMAT DATANG | <b>DETECTION OF REPRODUCTIVE SYSTEM DISEASES</b></a>
    
    <a class="btn btn-danger" href="logout.php">Sign Out</a>
    </div>
  </div>
</nav>
    <!-- End Navbar -->

    <!-- Menu Bar -->
    <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pt-4">
    <ul class="nav flex-column">
  <li class="nav-item mb-1">
    <a class="nav-link active text-light" aria-current="page" href="dashboard.php">Profile</a><hr class="bg-white">
  </li>
  <li class="nav-item mb-1">
    <a class="nav-link text-light" href="penyakit.php">Daftar Penyakit</a><hr class="bg-white">
  </li>
  <li class="nav-item mb-1">
    <a class="nav-link text-light" href="gejala.php">DETECTION OF REPRODUCTIVE SYSTEM DISEASES</a><hr class="bg-white">
  </li>
</ul>
    </div>

<div class="col-md-10 mt-5">
    <div class="card">
  <h5 class="card-header">Gejala Penyakit</h5>
  <div class="container">
  <table class="table table-bordered table-hover">
  <br>
  <thead>
  <tr>
  <th>GEJALA PENYAKIT</th>
  <th>PILIHAN</th>
  </tr>
  </thead>
    <tbody>
    <!-- Inputan User -->
    <form action="" method="GET">

      <tr>
        <td>Kram perut</td>
        <td><input type="checkbox" name="G1" ></td>
        <?php if(isset($_GET['G1'])) {
          $inputan[0] = 1;
          } else{
            $inputan[0] = 0;
          }?>
      </tr> 

      <tr>
        <td>Sakit saat buang air besar atau kecil</td>
        <td><input type="checkbox" name="G2" ></td>
        <?php if(isset($_GET['G2'])) {
          $inputan[1] = 1;
          } else{
            $inputan[1] = 0;
          }?>
      </tr>

      <tr>
        <td>Sakit punggung bagian bawah saat menstruasi</td>
        <td><input type="checkbox" name="G3" ></td>
        <?php if(isset($_GET['G3'])) {
          $inputan[2] = 1;
          } else{
            $inputan[2] = 0;
          }?>
      </tr>

      <tr>
        <td>Pendarahan diluar siklus menstruasi</td>
        <td><input type="checkbox" name="G4" ></td>
        <?php if(isset($_GET['G4'])) {
          $inputan[3] = 1;
          } else{
            $inputan[3] = 0;
          }?>
      </tr>

      <tr>
        <td>Nyeri ketika buan air kecil</td>
        <td><input type="checkbox" name="G5" ></td>
        <?php if(isset($_GET['G5'])) {
          $inputan[4] = 1;
          } else{
            $inputan[4] = 0;
          }?>
      </tr>

      <tr>
        <td>Nyeri saat berhubungan sosial</td>
        <td><input type="checkbox" name="G6" ></td>
        <?php if(isset($_GET['G6'])) {
          $inputan[5] = 1;
          } else{
            $inputan[5] = 0;
          }?>
      </tr>

      <tr>
        <td>Menstruasi lama dan lebih deras</td>
        <td><input type="checkbox" name="G7" ></td>
        <?php if(isset($_GET['G7'])) {
          $inputan[6] = 1;
          } else{
            $inputan[6] = 0;
          }?>
      </tr>

      <tr>
        <td>Mual dan muntah</td>
        <td><input type="checkbox" name="G8" ></td>
        <?php if(isset($_GET['G8'])) {
          $inputan[7] = 1;
          } else{
            $inputan[7] = 0;
          }?>
      </tr>

      <tr>
        <td>Demam</td>
        <td><input type="checkbox" name="G9" ></td>
        <?php if(isset($_GET['G9'])) {
          $inputan[8] = 1;
          } else{
            $inputan[8] = 0;
          }?>
      </tr>

      <tr>
        <td>Menstruasi tidak teratur</td>
        <td><input type="checkbox" name="G10" ></td>
        <?php if(isset($_GET['G10'])) {
          $inputan[9] = 1;
          } else{
            $inputan[9] = 0;
          }?>
      </tr>
      
      <tr>
        <td>Pertumbuhan rambut yang berlebihan (punggung,bokong,wajah atau dada)
</td>
        <td><input type="checkbox" name="G11" ></td>
        <?php if(isset($_GET['G11'])) {
          $inputan[10] = 1;
          } else{
            $inputan[10] = 0;
          }?>
      </tr>
      <tr>
        <td>Kulit berminyak dan berjerawat</td>
        <td><input type="checkbox" name="G12" ></td>
        <?php if(isset($_GET['G12'])) {
          $inputan[11] = 1;
          } else{
            $inputan[11] = 0;
          }?>
      </tr>

      <tr>
        <td>Kerap depresi dan ganggugan makan</td>
        <td><input type="checkbox" name="G13" ></td>
        <?php if(isset($_GET['G13'])) {
          $inputan[12] = 1;
          } else{
            $inputan[12] = 0;
          }?>
      </tr>

      <tr>
        <td>Pendarahan menstruasi yang berlebihan lebih dari seminggu</td>
        <td><input type="checkbox" name="G14" ></td>
        <?php if(isset($_GET['G14'])) {
          $inputan[13] = 1;
          } else{
            $inputan[13] = 0;
          }?>
      </tr>

      <tr>
        <td>Darah menggumpal</td>
        <td><input type="checkbox" name="G15" ></td>
        <?php if(isset($_GET['G15'])) {
          $inputan[14] = 1;
          } else{
            $inputan[14] = 0;
          }?>
      </tr>

      <tr>
        <td>Sering buang air kecil</td>
        <td><input type="checkbox" name="G16" ></td>
        <?php if(isset($_GET['G16'])) {
          $inputan[15] = 1;
          } else{
            $inputan[15] = 0;
          }?>
      </tr>

      <tr>
        <td>Nyeri perut bagian bawah</td>
        <td><input type="checkbox" name="G17" ></td>
        <?php if(isset($_GET['G17'])) {
          $inputan[16] = 1;
          } else{
            $inputan[16] = 0;
          }?>
      </tr>

      <tr>
        <td>Skrotum bengkak dan nyeri saat disentuh</td>
        <td><input type="checkbox" name="G18" ></td>
        <?php if(isset($_GET['G18'])) {
          $inputan[17] = 1;
          } else{
            $inputan[17] = 0;
          }?>
      </tr>

      <tr>
        <td>Darah pada cairah sperma</td>
        <td><input type="checkbox" name="G19" ></td>
        <?php if(isset($_GET['G19'])) {
          $inputan[18] = 1;
          } else{
            $inputan[18] = 0;
          }?>
      </tr>

      <tr>
        <td>Mudah lelah</td>
        <td><input type="checkbox" name="G20" ></td>
        <?php if(isset($_GET['G20'])) {
          $inputan[19] = 1;
          } else{
            $inputan[19] = 0;
          }?>
      </tr>

      <tr>
        <td>Nyeri pada testis dan terasa berat</td>
        <td><input type="checkbox" name="G21" ></td>
        <?php if(isset($_GET['G21'])) {
          $inputan[20] = 1;
          } else{
            $inputan[20] = 0;
          }?>
      </tr>

      <tr>
        <td>Pembengkakkan kelenjar getah bening diselakangan</td>
        <td><input type="checkbox" name="G22" ></td>
        <?php if(isset($_GET['G22'])) {
          $inputan[21] = 1;
          } else{
            $inputan[21] = 0;
          }?>
      </tr>

      <tr>
        <td>Perih saat buang air</td>
        <td><input type="checkbox" name="G23" ></td>
        <?php if(isset($_GET['G23'])) {
          $inputan[22] = 1;
          } else{
            $inputan[22] = 0;
          }?>
      </tr>

      <tr>
        <td>Rasa sakit ketika ejakulasi</td>
        <td><input type="checkbox" name="G24" ></td>
        <?php if(isset($_GET['G24'])) {
          $inputan[23] = 1;
          } else{
            $inputan[23] = 0;
          }?>
      </tr>

      <tr>
        <td>Disfungsi seksual / Kehilangan Libido</td>
        <td><input type="checkbox" name="G25" ></td>
        <?php if(isset($_GET['G25'])) {
          $inputan[24] = 1;
          } else{
            $inputan[24] = 0;
          }?>

        <tr>
        <td>Kehilangan rambut ditubuh</td>
        <td><input type="checkbox" name="G26" ></td>
        <?php if(isset($_GET['G26'])) {
          $inputan[25] = 1;
          } else{
            $inputan[25] = 0;
          }?>
      </tr>

      <tr>
        <td>Kehilangan massa otot</td>
        <td><input type="checkbox" name="G27" ></td>
        <?php if(isset($_GET['G27'])) {
          $inputan[26] = 1;
          } else{
            $inputan[26] = 0;
          }?>
      </tr>

      <tr>
        <td>Tidak Tertarik Pada Lawan Jenis</td>
        <td><input type="checkbox" name="G28" ></td>
        <?php if(isset($_GET['G28'])) {
          $inputan[27] = 1;
          } else{
            $inputan[27] = 0;
          }?>
      </tr>

      <tr>
        <td>Impotensi</td>
        <td><input type="checkbox" name="G29" ></td>
        <?php if(isset($_GET['G29'])) {
          $inputan[28] = 1;
          } else{
            $inputan[28] = 0;
          }?>
      </tr>

     
      <!--Mencari Hasil CorrelationMeasurement dengan pengkalian-->
      <?php
        for($baris=0;$baris< count($metaDataPenyakit);$baris++){
          for($kolom=0;$kolom < count($metaDataPenyakit[$baris]);$kolom++){
              $hasilCormes[$baris][$kolom] = $inputan[$kolom]*$metaDataPenyakit[$baris][$kolom];
              // echo $hasilCormes[$baris][$kolom];
              
          }
      } 
      ?>
    
      <!-- Menjumlahkan Cormes -->
      <?php
      for($i=0;$i<count($hasilCormes);$i++){
        for($j=0;$j<count($hasilCormes[$i]);$j++){
            $hasilJumlah[$i] = $hasilCormes[$i][$j] + $hasilJumlah[$i];
            
            
        }
    }
      ?>

      <!-- Mencari Nilai Tertinggi -->
      <?php
      for($i=0;$i < 8; $i++){
        if($hasilJumlah[$i] > $hasilMax){
          $hasilMax = $hasilJumlah[$i];
        }
      }
      ?>

      <?php
      if($hasilJumlah[0]==$hasilMax){
        if(isset($_GET["jumlahkan"])){
          echo "<a class='btn btn-success' id='diagnosa1' name='diagnosa1' href='endometriosis.php'>Diagnosa</a>";
        }
      }
      if($hasilJumlah[1]==$hasilMax){
        if(isset($_GET["jumlahkan"])){
          echo "<a class='btn btn-success' name='diagnosa' href='radang_panggul.php'>Diagnosa</a>";
        }
      }
      if($hasilJumlah[2]==$hasilMax){
        if(isset($_GET["jumlahkan"])){
          echo "<a class='btn btn-success' name='diagnosa' href='pcos.php'>Diagnosa</a>";
        }
      }
      if($hasilJumlah[3]==$hasilMax){
        if(isset($_GET["jumlahkan"])){
          echo "<a class='btn btn-success' name='diagnosa' href='miom.php'>Diagnosa</a>";
        }
      }
      if($hasilJumlah[4]==$hasilMax){
        if(isset($_GET["jumlahkan"])){
          echo "<a class='btn btn-success' name='diagnosa' href='epidemitis.php'>Diagnosa</a>";
        }
      }
      if($hasilJumlah[5]==$hasilMax){
        if(isset($_GET["jumlahkan"])){
          echo "<a class='btn btn-success' name='diagnosa' href='orchitis.php'>Diagnosa</a>";
        }
      }
      if($hasilJumlah[6]==$hasilMax){
        if(isset($_GET["jumlahkan"])){
          echo "<a class='btn btn-success' name='diagnosa' href='prostat.php'>Diagnosa</a>";
        }
      }
      if($hasilJumlah[7]==$hasilMax){
        if(isset($_GET["jumlahkan"])){
          echo "<a class='btn btn-success' name='diagnosa' href='hipogonadisme.php'>Diagnosa</a>";
        }
      }
     
      ?>

     <p></p><button type="submit" class="btn btn-warning" name="jumlahkan" id="jumlahkan">Jumlahkan</button>

      </form>
    </tbody>
    
  </table>
  </div>
</div>

    </div>
    </div>
    <!-- End Bar-->
  </body>
</html>