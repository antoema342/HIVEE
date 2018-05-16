<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Kandidat</title>
</head>
<body>
<h1>Login berhasil !</h1>
 <h2>Hallo, <?php echo $this->session->userdata("nama"); ?> Selamat Datang</h2>
 <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>