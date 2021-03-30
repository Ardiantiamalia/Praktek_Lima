<!--Script untuk menmberi warna background web-->
<style type="text/css">
        body{
            color: black;
            background: rgb(255, 174, 0);
            font-family: times new roman;
            font-size: 15px;
        }
</style>
<!--Deklarasi script PHP untuk menampilkan waktu, hari dan jam login-->
<?php
	date_default_timezone_set("Asia/Jakarta");
	echo "<center>Anda login pada : ".date("D, m F Y, G:i:s")."</center>";
?>