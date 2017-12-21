<html>
	<head>
		<title>Web Movies</title>
	</head>
	<body>
	<h1>Konfirmasi Proses </h1>
		<?php 
		include 'koneksi.php';
		if(isset($_POST['upload'])){
      $judul = $_POST['judul'];
      $keterangan = $_POST['keterangan'];
			$ekstensi_diperbolehkan	= array('mp4','avi');
			$video = $_FILES['file']['name'];
			$x = explode('.', $video);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070000000000){
          $chapter='gambar/'.$nama;			
          move_uploaded_file($file_tmp, $chapter);
					$query = mysql_query("INSERT INTO film VALUES(NULL, '$judul', '$keterangan', '$chapter')");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		?>
 
		<br/>
		<br/>
		<a href="upload.php">Upload Lagi</a>
		<br/>
		<br/>
	</body>
</html>