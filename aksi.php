<?php
include('koneksi.php');
        $nama         = $_POST['nama'];
        $email        = $_POST['email'];
        $telepon   = $_POST['telepon'];
        $pesan  = $_POST['pesan'];
  
        
            $insert ='INSERT INTO `kontakme`(`nama`, `email`, `notlpn`, `message`) VALUES ("'.$nama.'","'.$email.'","'.$telepon.'","'.$pesan.'")';
            $query  = mysql_query($insert);// query untuk menambahkan data ke dalam database
            
            if($query){ // jika query insert berhasil dieksekusi
              echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
        }
      ?>