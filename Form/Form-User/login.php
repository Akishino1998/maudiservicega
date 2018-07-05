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

				<div class="login100-form validate-form" action="">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Username</span>
						<input class="input100 username" type="text" name="username" placeholder="Username Kamu ....">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Password</span>
						<input class="input100 password" type="password" name="pass" placeholder="Password Kamu ....">
						<span class="focus-input100"></span>
					</div>
					<div class="box-alert">

					</div>
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Lupa Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="login">
							Masuk
						</button>
						<a href="register.html" class="hvr-icon-forward register-form-btn">
						  Belum Punya Akun? Ke sini
						  <i class="fa fa-chevron-circle-right hvr-icon"></i>
					  </a>
					</div>
					<a href="../../index.html" class="back-home">Kembali Ke Homenya.</a>
				</div>

			</div>
		</div>
	</div>
	<link rel="stylesheet" href="css/sweetalert.min.js">
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<script>
	$(document).ready(function(){
		$('#login').click(function(){
			if(username != '' && password != ''){
				var username = $('.username').val();
				var password = $('.password').val();
				$.get('SQL/login-proses.php?username='+username+'&password='+password, function(data){
					$('.box-alert').empty();
					$('.box-alert').append(data);
				});
			}
		});

		$('.password').change(function(){
			$('.box-alert').empty();
		});
	});
</script>
