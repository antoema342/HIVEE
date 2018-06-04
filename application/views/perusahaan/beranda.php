<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard Perusahaan</title>
	</head>
	<body>
		<h1>Login berhasil !</h1>
		<h2>Hallo, <?php echo strtoupper($this->session->userdata("nama")) ; ?> Selamat Datang Di Halaman Dashboard Perusahaan</h2>
		<a href="<?php echo base_url('login?logout=signout');?>">Logout</a>
	</body>
</html>