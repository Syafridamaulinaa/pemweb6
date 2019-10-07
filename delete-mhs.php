<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {

          $del = $_GET['npm'];
          $query = "DELETE FROM biow WHERE NPM = '$del'"; 

          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          header('Location: beranda-mhs.php?status='.$status);
      }  
  }