<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Biodatamu | Nyervisga?</title>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-regeister-2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="css/header-second-bar.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
</head>
<body>

    <header class="header-two-bars">
    	<div class="header-first-bar">
    		<div class="header-limiter">
    			<h1><img src="image/logo/logonyervisga.png" class="img-fluid" alt="Responsive image" width="100"></h1>
    			<nav>
    				<a href="form-biodata.php"  class="selected">Profilemu</a>
    				<a href="change-password.php">Ganti Password</a>
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
<form class="" action="form-biodata.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <center>
                    <h4>Tentang Kamu</h4>
                    <br>
                </center>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>Tempat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Eko</td>
                            <td>Samarinda</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Eko</td>
                            <td>Samarinda</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Eko</td>
                            <td>Samarinda</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Eko</td>
                            <td>Samarinda</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Eko</td>
                            <td>Samarinda</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>
</form>
<br><br>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</body>
</html>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
