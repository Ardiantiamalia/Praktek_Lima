<html>
<head>
	<title>Biodata</title>
    <!--Script untuk menmberi warna background web-->
    <style type="text/css">
        body{
            color: black;
            background: rgb(255, 174, 0);
            font-family: times new roman;
            font-size: 15px;
        }
        </style>
</head>
<body>
	<form method="POST" action="tugas3postAct.php">
		<h2 align="center">BIODATA</h1>
		<!--Untuk mengatur tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--Untuk membuat cell inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">TTL</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Alamat Rumah</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">No. WA</td>
				<td><input type="text" name="wa"></td>
			</tr>
			<tr>
				<td width="130">Hobi</td>
				<td><input type="text" name="hobi"></td>
			</tr>
		</table>
		<!--Untuk membuat button eksekusi file postAct.php-->
		<p align="center"><input type="submit" name="btnLogin" value="Submit"><input type="reset" name="reset" value="Reset"></p>
	</form>
</body>
</html>