<!--Script untuk menmberi warna background web-->
<style type="text/css">
        body{
            color: black;
            background: rgb(255, 174, 0);
            font-family: times new roman;
            font-size: 15px;
        }
</style>
<!--Deklarasi script php untuk menampilkan hasil inputan-->
<?php
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
	include 'tugas1include.php'; //Untuk memanggil file tugas1include.php
?>