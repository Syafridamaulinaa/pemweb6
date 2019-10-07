<?php 
  include ('conn.php'); 
 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> beranda maulina </title>

    <link href="aset/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    	body{
    		background-image: url(6.jpg);
    	}

    	.kepala {
    		box-shadow: 3px 3px 3px 3px rgba(0,0,0,0.9);
    		background-color: pink;  
    		margin-top: 100px;"

    		
    	}

    	table,tr,td{
		font-family: time new roman;
		font-size: 16px;
		color: navy;
		border: 1px solid slategray;
		padding: 5px;
		border-collapse: collapse;
		}

		.tempat{
		position: absolute;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: auto;
		margin-top: auto;
		left: 70px;
		right: 0;
		top: 20px;
		bottom: 0;
		}

		.tombol{
			float: left;
		}

    </style>
</head>

    <body>

    	
    	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark ">
	  <a class="navbar-brand" href="#">
	    <ul class="navbar-nav">
	    	<li class="nav-item ">
	        <a class="nav-link text-white" href="<?php echo "form-mhs.php"; ?>">Form Mahasiswa</a>
	      </li>
	    </ul>
	</div>
</a>
</nav>
    	
    	<div class="container">
    		<div class="row">
    			<div class="col text-center">
    				<div class="kepala">
    	<b style="font-size: 30px;"> BIODATA SAYA </b>
	</div>
	</div>
	</div>
</div>
</div>

	<div class="container"> 
	<div class="row">
		<div class="col-8">
				<img src="logo1.jpg" class="foto" style=" width: 190px; border-radius: 30px; margin-top: 55px; margin-left: 170px;">
					<p align="justify" style="font-family: arial; font-size: 16px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Saya mempunyai sebuah keluarga yang beranggotakan 5 orang. Kedua orang tua saya, 2 kakak perempuan dan saya anak terakhir. Ayah saya sudah tiada semenjak saya di kelas akhir bangku SMA lebih tepatnya saat hari pertama ujian nasional. Ibu saya adalah seorang ibu rumah tangga dan menerima pesanan berupa nasi bungkus atau kotakan maupun jajanan kecil. Kakak pertama sekarang sedang bekerja diluar pulau, sedangkan kakak kedua bekerja didekat rumah. Saya adalah seorang mahasiswa. </b></p>
		</div> 

		<div class="col-4">
		<img src="me.jpg"  style=" width :160px; margin-left: 80px; margin-top: 100px; border-radius: 30px;">
			</div>
		</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-8">
				<img src="logo2.jpg" class="foto" style=" width: 190px; margin-left: 170px; margin-top: 40px; border-radius: 30px; ">
					<p align="justify" style="font-family: arial; font-size: 16px;"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Sebelum masuk tk, saya tinggal di samarinda. Saya bersekolah dari TK hingga SMA di samarinda. Dulu saya masuk TK Ihya Ulumudin Samarinda. Kemudian, saya masuk SDN 004 Pelita Samarinda. SMP saya masuk di SMPN 6 Samarinda. Saat SMA saya masuk di SMA Negeri 1 Samarinda tetapi sebelumnya saya pindahan dari SMA Negeri 5 Samarinda.</b> </p>

		</div>
				
			<div class="col-4">
				<div class="tempat">
				<?php 
	                  $query = "SELECT * FROM biow";
	                  $result = mysqli_query(connection(),$query);
	                 ?>

	                <?php while($data = mysqli_fetch_array($result)): ?>

	                	<table>
	                		<tr>
	                			<td><b>Nama</b></td>
	                			<td><b><?php echo $data['Nama'];  ?></b></td>
	                		</tr>
	                		<tr>
	                			<td><b>NPM</b></td>
	                			<td><b><?php echo $data['NPM'];  ?></b></td>
	                		</tr>
	                		<tr>
	                			<td><b>TTL</b></td>
	                			<td><b><?php echo $data['TTL'];  ?></b></td>
	                		</tr>
	                		<tr>
	                			<td><b>Agama</b></td>
	                			<td><b><?php echo $data['Agama'];  ?></b></td>
	                		</tr>
	                		<tr>
	                			<td><b>Alamat</b></td>
	                			<td><b><?php echo $data['Alamat'];  ?></b></td>
	                		</tr>
	                		<tr>
	                			<td><b>Email</b></td>
	                			<td><b><?php echo $data['Email'];  ?></b></td>
	                		</tr>
	                		<tr>
	                			<td><b>Hobi</b></td>
	                			<td><b><?php echo $data['Hobi'];  ?></b></td>
	                			<br>
	                		</tr>
	                	</table>

	                	<div>
	                	<table style="margin-top: -20px; margin-left: 50px;">
                   <tr>
                   	<br>
                        <td>                      
                          <a href="<?php echo "update-mhs.php?npm=".$data['NPM']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                          &nbsp;&nbsp;
                          <a href="<?php echo "delete-mhs.php?npm=".$data['NPM']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                        </td>
                      </tr>
	                	</table>
	                	</div>

	                <?php endwhile ?>
				
			</div>
		</div>
			</div>
			</div>
		
		<div class="container">
			<div class="row">
				<div class="col-8">
				<img src="logo3.png" class="foto" style=" width: 180px; margin-top: 30px; margin-right: 10px; border-radius: 30px; margin-left: 195px;">
				<p align="justify" style="font-family: arial; font-size: 16px;"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Setelah saya lulus SMA, saya memutuskan untuk melanjutkan perkuliahan ke salah satu universitas yang ada di jawa timur atau kota kelahiran saya yaitu surabya. Saya mengikuti tes SBMPTN dan alhamdullilah keterima di Universitas Pembangunan Nasional "VETERAN" Jawa Timur. Di universitas itu saya masuk ke dalam program studi Teknik Infromatika sesuai dengan keinginan mendiang ayah saya. Sekarang saya sudah semester 5 dan berdoa agar bisa lulus dengan cepat 1,5 tahun lagi.</b></p>
			</div>
		</div>
	</div>


    </body>
</html>