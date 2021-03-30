<html>
<head>
	<title>Login Page</title>
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
	<form method="POST" action="tugas2postAct.php">
		<!--Untuk mengatur tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--Untuk membuat cell inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<!--Untuk membuat button eksekusi file postAct.php-->
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>