<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Biodatamu | Nyervisga?</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/zebra_datepicker/dist/css/bootstrap/zebra_datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-regeister-2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/header-second-bar.css">
    <link rel="stylesheet" href="css/hover-min.css">
</head>
<body>

    <header class="header-two-bars">
    	<div class="header-first-bar">
    		<div class="header-limiter">
    			<h1><img src="image/logo/logonyervisga.png" class="img-fluid" alt="Responsive image" width="100"></h1>
    			<nav>
    				<a href="form-biodata.php"  >Profilemu</a>
    				<a href="change-password.php" class="selected">Ganti Password</a>
    			</nav>
    			<a href="#" class="logout-button hvr-bounce-out">Logout</a>
    		</div>
    	</div>
    	<div class="header-second-bar">
    		<div class="header-limiter">
    			<h2><a href="#">Hai, <?php  ?></a></h2>
    			<nav>

    				<a href="#"><i class="fa fa-file-text"></i> Data Elektronikmu</a>
    				<!-- <a href="#"><i class="fa fa-group"></i> Participants</a> -->
    				<!-- <a href="#"><i class="fa fa-cogs"></i> Settings</a> -->
                    <a href="#"><i class="fa fa-comments-o"></i> Bertanya?</a>
    			</nav>
    		</div>
    	</div>
    </header>
<br>
<form class="" action="change-password.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <center>
                    <h4>Foto Kamu</h4>
                    <br>
                    <img src="image/profile-blank.png" alt="" class="img-rounded" width="200">
                    <br><br>
                </center>
            </div>
            <div class="col-6">
                <center>
                    <h4>Mau Ganti Password?</h4>
                    <br>
                </center>
                <div class="input-group input-group-icon">
                    <input type="password" placeholder="Password Lama" name="passlama" required id="passlama" />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="password" placeholder="Password Baru" name="passbaru1" required id="passbaru1"/>
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="password" placeholder="Ulangi Password Barumu" name="passbaru2"  required id="passbaru2" />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
                <div class="row">
            		<input type="submit" name="submit" value="Simpan!" id="submit" onclick="verivikasipasswor()" />
            	</div>
            </div>
        </div>
    </div>
</form>
<br><br>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script  src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        // loadData();
    });

    function loadData(){
        var kodepos = document.getElementById('kodepos').value;
        $.get('SQL/datawilayah_prov.php?id='+kodepos, function(data){
            $('#combobox_prov').html(data);
        });
    }
    function verivikasipasswor(){
        var passlama = document.getElementById('passlama').value;
        var passbaru1 = document.getElementById('passbaru1').value;
        var passbaru2 = document.getElementById('passbaru2').value;
        if (passbaru1 != passbaru2) {
            swal(":(", "Password Baru Tidak Sama", "error");
        }else{
            swal(":D", "Password Berhasil Diubah!", "success");
        }
    }
</script>
