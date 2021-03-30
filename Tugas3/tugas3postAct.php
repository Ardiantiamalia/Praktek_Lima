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
	echo "<center><h2>Halooo... Selamat datang ".$_POST['nama'].", berikut Biodata Kamu"."</h2></center><br>";
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Tempat, tanggal lahir :".$_POST['ttl']."</center><br>";
	echo "<center>Alamat Rumah :".$_POST['alamat']."</center><br>";
	echo "<center>No. WA:".$_POST['wa']."</center><br>";
	echo "<center>Hobi : ".$_POST['hobi']."</center><br>";
?>