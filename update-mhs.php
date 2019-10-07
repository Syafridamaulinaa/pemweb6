<?php 
  include ('conn.php'); 

  $status = '';
  $result = '';
  
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {
          
          $upd = $_GET['npm'];
          $query = "SELECT * FROM biow WHERE NPM = '$upd'"; 

          
          $result = mysqli_query(connection(),$query);
      }  
  }


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $upd = $_POST['NPM'];
      $Alamat = $_POST['al'];
      
      $sql = "UPDATE biow SET Alamat='$Alamat' WHERE NPM='$upd'";

      
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
      
      header('Location: beranda-mhs.php?status='.$status);
  }
  

?>

<!DOCTYPE html>
<html>
  <head>
    <title> Update Data Mahasiswa </title>
    <link href="aset/css/bootstrap.min.css" rel="stylesheet">
    <link href="aset/css/dashboard.css" rel="stylesheet">
 </head>

 <body>
   <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark text-white">
      <p style="font-size: 20px; margin-left: 20px;"> Tugas pemograman web 5</p>
  </nav>

  <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:50px;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "beranda-mhs.php"; ?>">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "data-mhs.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "form-mhs.php"; ?>">Tambah Data Mahasiswa</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-8 ml-sm-auto col-lg-10 px-2">

         <h2 style="margin: 80px 0 30px 0;">Update Data Mahasiswa</h2>
          <form action="update-mhs.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>

            <div class="form-group">
              <label>NPM</label>
              <input type="text" class="form-control" name="NPM" value="<?php echo $data['NPM'];  ?>" required="required">
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="al" value="<?php echo $data['Alamat'];  ?>" required="required">
            </div>
            <?php endwhile; ?>

            <button type="submit" class="btn btn-primary">SIMPAN</button>
          
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
