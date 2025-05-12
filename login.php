<?php
	session_start();
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<!-- Bagian Login-->
	<div class="Bagian-Login">
		<!-- Bagian Box-->
		<div class="Bagian-Box Box-Login">
			<!-- Bagian Box Header -->
			<div class="Bagian-Box-Header Text-Center">
				Login
			</div>
			<!-- Bagian Box Body -->
			<div class="Bagian-Box-Body">

				<?php 
					if(isset($_GET['pesan'])){
						echo "<div class='Peringatan'>".$_GET['pesan']."</div>";
					}
				?>
				<!-- Form Login -->
				<form action="" method="POST">
					<div class="Bagian-Form">
						<label>Username</label>
						<input type="text" name="User" placeholder="Masukkan Username" class="input-control">
					</div>
					<div class="Bagian-Form">
						<label>Password</label>
						<input type="password" name="Password" placeholder="Masukkan Password" class="input-control">
					</div>
					<input type="submit" name="submit" value="Login" class="Tombol">
				</form>
			</div>
			<?php
				if(isset($_POST['submit'])){
					$User = $_POST['User'];
					$Password = $_POST['Password'];

				
					if(empty($User) || empty($Password)) {
						echo '<div class="Peringatan">Harap Isi Username dan Password Anda</div>';
					} else {
						$cek  = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$User."' ");
						if(mysqli_num_rows($cek) > 0){
							$d = mysqli_fetch_object($cek);
							if(md5($Password) == $d->password){
								$_SESSION['Status_Login'] = true;
								$_SESSION['uid']          = $d->id;
								$_SESSION['uname']        = $d->nama;
								$_SESSION['ulevel']       = $d->level;
								echo "<script>window.location = 'admin/index.php'</script>";
							} else {
								echo '<div class="Peringatan">Password Salah</div>';
							}
						} else {
							echo '<div class="Peringatan">Username Tidak Ada</div>';
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>