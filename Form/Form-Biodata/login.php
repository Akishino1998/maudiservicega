<?php session_start();session_destroy();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Loginnya | Nyervisga?</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/logonyervisga.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="../../css/hover-min.css">
	<link href="fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 hvr-glow">
				<div class="login100-form-title" style="background-image: url(../../images/background/login-background.jpg);">
					<span class="login100-form-title-1">
						LOGINNYA <br /><br /><br /><br /><br /><br /><br /><br /><br /> <a href="../../index.html"><span style="color:#000">Nyervis<span style="color:#14bdee">ga</span></span></a>
					</span>
				</div>

				<div class="login100-form validate-form" >
					<center>
						<div class="box-alert">

						</div>
					</center>
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Username</span>
						<input class="input100 username" type="text" name="username" placeholder="Username Kamu ...." required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Password</span>
						<input class="input100 password" type="password" name="pass" placeholder="Password Kamu ...." required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<!-- <input class="input-checkbox100 rememberme" id="ckb1" type="checkbox" name="rememberme">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label> -->
						</div>
						<div>
							<a href="lupa-password.php" class="txt1">
								Lupa Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="login">
							Masuk
						</button>
						<a href="register.php" class="hvr-icon-forward register-form-btn">
						  Belum Punya Akun? Ke sini
						  <i class="fa fa-chevron-circle-right hvr-icon"></i>
					  </a>
					</div>
					<a href="../../index.php" class="back-home">Kembali Ke Homenya.</a>
				</div>
			</div>
		</div>
	</div>

	<script src="js/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<script>
	$(document).ready(function(){
		$('#login').click(function(){
			var username = $('.username').val();
			var password = $('.password').val();
			if(username != '' && password != ''){
				$.get('SQL/login-proses.php?username='+username+'&password='+password, function(data){
					if(data=='sukses'){
						swal({
							title : "Login Sukses!",
							text : "Sebentar lagi akan direct ke halaman selanjutnya...",
							icon : "success",
							button : "Ok!",
						});
						self.location='../../';
					}else{
						$('.box-alert').empty();
						$('.box-alert').append(data);
					}
				});
			}else{
				if(username == '' && password == ''){
					$('.box-alert').empty();
					$('.box-alert').append('<div class="alert alert-warning">Username dan password anda kosong!</div>');
					swal({
						title : "Kosong!",
						text : "Username dan passwordnya kosong, lho!",
						icon : "info",
						button : "Ok!",
					});

				}else if(username == ''){
					$('.box-alert').empty();
					$('.box-alert').append('<div class="alert alert-warning">Username anda kosong!</div>');
					swal({
						title : "Kosong!",
						text : "Username kosong, lho!",
						icon : "info",
						button : "Ok!",
					});
				}else if(password == ''){
					$('.box-alert').empty();
					$('.box-alert').append('<div class="alert alert-warning">Password anda kosong!</div>');
					swal({
						title : "Kosong!",
						text : "Passwordnya kosong, lho!",
						icon : "info",
						button : "Ok!",
					});
				}else{
					$('.box-alert').empty();
					$('.box-alert').append('<div class="alert alert-warning">Kesalahan!</div>');
					swal({
						title : "Kesalahan Terdeteksi!",
						text : "Kami tidak tau kenapa, segera laporkan! Apakai ini ulah elit global?",
						icon : "dangers",
						button : "Ok!",
					});
				}
			}
		});
		$('.username').change(function(){
			$('.box-alert').empty();
		});
		$('.password').change(function(){
			$('.box-alert').empty();
		});
	});
</script>
