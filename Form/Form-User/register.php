<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registernya | Nyervisga?</title>
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
						REGISTERNYA <br /><br /><br /><br /><br /><br /><br /><br /><br /><a href="../../index.html"><span style="color:#000">Nyervis<span style="color:#14bdee">ga</span></span></a>
					</span>
				</div>

				<div class="login100-form validate-form" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Username Kamu .... (Min. 6)" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" id="password" placeholder="Password Kamu ...." required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Ulangi Password</span>
						<input class="input100" type="password" name="pass" id="repassword" placeholder="Ulangi Password Kamu ...." required>

						<span class="focus-input100"></span>

					</div>
					<div class="alert-password">
						<span id='message'></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="btn-submit">
							Register
						</button>
						<a href="login.html" class="hvr-icon-forward register-form-btn">
						  Sudah Punya Akun?
						  <i class="fa fa-chevron-circle-right hvr-icon"></i>
						</a>
					</div>
					<a href="../../index.html" class="back-home">Kembali Ke Homenya.</a>
				</div>
			</div>
		</div>
	</div>
	<script src="js/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
	$(document).ready(function(){

		$(function () {

			$('#btn-submit').click(function(){
				var username = $('#username').val();
				var password = $("#password").val();
				var confirmPassword = $("#repassword").val();
				if(username != '' && password != '' && confirmPassword != ''){
					if(password == confirmPassword){
						if(username.length > 5){
							$.get('SQL/create-account.php?username='+username+'&password='+password, function(data){
								if(data=='sukses'){
									swal({
										title : "Selamat!",
										text : "Anda Telah Terdaftar XD",
										icon : "success",
										button : "Ok!",
									});
									self.location='../../';
								}else if (data=='sudah') {
									swal({
										title : "Username Tlah Terdaftar!",
										text : "Pake Username lain, ya.",
										icon : "warning",
										button : "Ok!",
									});
								}
								else{
									$('.box-alert').empty();
									$('.box-alert').append(data);
								}
							});
						}else{
							swal({
								title : "Username terlalu pendek.",
								text : "Pake Username lain, ya.",
								icon : "warning",
								button : "Ok!",
							});
						}
					}
				}
				else{
					swal({
						title : "Kosong",
						text : "Dilengkapi dulu datanya!",
						icon : "warning",
						button : "Ok!",
					});
				}

				var username = $('#username').val();
				var password = $("#password").val();
				var confirmPassword = $("#repassword").val();
				if (password != confirmPassword) {
					$('#message').html('Password Tidak Sama').css('color', 'red');
					swal({
						title : "Not Match",
						text : "Passwordnya tidak sama, lho! Benerin dulu, ya!",
						icon : "error",
						button : "Ok!",
					});
				}
				else{
					$('#message').html('').css('color', 'green');
				}
			});

			$("#password").mouseenter(function () {
				var password = $("#password").val();
				var confirmPassword = $("#repassword").val();
				if (password != confirmPassword) {
					$('#message').html('Password Tidak Sama').css('color', 'red');
				}
				else{
					$('#message').html('').css('color', 'green');
				}
			});
			$("#repassword").mouseenter(function () {
				var password = $("#password").val();
				var confirmPassword = $("#repassword").val();
				if (password != confirmPassword) {
					$('#message').html('Password Tidak Sama').css('color', 'red');
				}
				else{
					$('#message').html('').css('color', 'green');
				}
			});
		});
	});
	</script>
</body>
</html>
