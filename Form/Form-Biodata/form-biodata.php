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
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="css/dropdown.css">
</head>
<body>

    <!-- <header class="header-two-bars">
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
    				<a href="#"><i class="fa fa-group"></i> Participants</a>
    				<a href="#"><i class="fa fa-cogs"></i> Settings</a>
                    <a href="#"><i class="fa fa-comments-o"></i> Bertanya?</a>
    			</nav>
    		</div>
    	</div>
    </header> -->
<div class="super_container">
    <header class="header">

		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Mau Bertanya?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+6285828949395</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>Nyervis@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
                                    <?php
                                    if(isset($_GET['tes']))
                                    {
                                    ?>
                                    <div class="register_button hvr-grow">
										<a href="#">Daftar</a>
									</div>
									<div class="login_button hvr-grow">
										<a href="#">Masuk</a>
									</div>
                                <?php }else{ ?>
									<!-- <div class="login_button hvr-grow login-sukses">
                                        <div class="dropdown toggle">
                                          <input id="t1" type="checkbox" checked>
                                          <label for="t1">Toggle Menu</label>
                                          <ul>
                                            <li><a href="#">Item</a></li>
                                            <li><a href="#">Product</a></li>
                                            <li><a href="#">Text</a></li>
                                            <li><a href="#">Page</a></li>
                                            <li><a href="#">Thing</a></li>
                                          </ul>
                                        </div>
									</div> -->
                                    <div class="search-select">
                                        <span class="field">
                                            <label class="seltext" for="opened"><span style="color: white;">...</span>Hai, <i class="icon list"></i></label>
                                        </span>
                                        <input id="opened" type="checkbox" />
                                      <ul class="select">
                                        <li class="icon arrow"></li>
                                        <li class="sel">
                                          <a href="#">Tentangku</a> <i class="icon list"></i>
                                        </li>
                                        <li>
                                          Ganti Password<i class="icon stat"></i>
                                        </li>
                                        <li>
                                          Data Elektronikku</i>
                                        </li>
                                        <li>
                                          sign out<i class="icon sign"></i>
                                        </li>

                                      </ul>
                                    </div>
                                <?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text"> <img src="image\logo\logonyervisga.png" alt="Nyevisga?"> </div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="about.html" class="hvr-underline-from-center">Mau Service?</a></li>
									<li><a href="courses.html" class="hvr-underline-from-center">Cara Kerja Kami</a></li>
									<li><a href="courses.html" class="hvr-underline-from-center">Tentang Kami</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="newsletter_container2 d-flex flex-lg-row flex-column align-items-center justify-content-start">
							<!-- Newsletter Content -->
							<div class="newsletter_content text-lg-left text-center">
								<div class="newsletter_title">Lacak Elekronik yang kamu service</div>
								<div class="newsletter_subtitle"></div>
							</div>

							<!-- Newsletter Form -->
							<div class="newsletter_form_container ml-lg-auto">
								<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
									<input type="email" class="newsletter_input" placeholder="Kode Unik Nyervismu ...." required="required">
									<button type="submit" class="newsletter_button">Lacak</button>
								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
<br>
<form class="" action="form-biodata.php" method="post">
    <div class="container bio">
        <div class="row">
            <div class="col-3">
                <center>
                    <h4>Foto Kamu</h4>
                    <br>
                    <img src="image/profile-blank.png" alt="" class="img-rounded" width="200">
                    <br><br>
                    <?php
                        if(isset($_GET['edit'])){
                            echo "<p>Size fotonya jangan besar-besar, ya!</p>";
                            echo "<div class='btn btn-default image-preview-input'>
                                    <input type='file' accept='image/png, image/jpeg, image/gif' name='input-file-preview'/>
                                </div>
                            <button type='button' class='btn btn-primary'>Upload</button>";
                        }
                    ?>
                </center>
            </div>
            <div class="col-6">
                <center>
                    <h4>Tentang Kamu</h4>
                    <br>
                </center>
                <div class="input-group input-group-icon">
                    <div class="col-half">
                        <input type="text" placeholder="Nama Depan" name="nama_depan" />
                        <div class="input-icon"><i class="fa fa-user"></i></div>
                    </div>
                    <div class="col-half">
                        <input type="text" placeholder="Nama Belakang" name="nama_belakang" />
                    </div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="text" placeholder="Alamat (Ex. Jln. P. Suryanata)" name="alamat" />
                    <div class="input-icon"><i class="fa fa-street-view"></i></div>
                </div>
                <div class="input-group">
                    <div class="col-third">
                        <input type="text" placeholder="RT" name="rt" />
                    </div>
                    <div class="col-third">
                        <input type="text" placeholder="RW" name="rw" />
                    </div>
                    <div class="col-third">
                        <input type="text" placeholder="Kode Pos" name="kode_pos" id="kodepos" onkeyup="loadData()" />
                    </div>
                </div>
                <div class="input-group">
                    <div class="col-half">
                        <!-- <input type="text" placeholder="Provinsi" name="provinsi" /> -->
                        <select name="provinsi" id="combobox_prov" class="combobox">
                          <option value="" selected="selected" id="items" >Pilih Provinsi</option>
                        </select>
                    </div>
                    <div class="col-half">
                        <!-- <input type="text" placeholder="Kabupaten" name="kabupaten" /> -->
                        <select name="kabupaten" id="combobox_kab" class="combobox">
                          <option value="" selected="selected" id="items">Pilih Kabupaten</option>
                        </select>
                    </div>
                </div>
                <div class="input-group">
                    <div class="col-half">
                        <!-- <input type="combobox" placeholder="Kecamatan" name="kecamatan" /> -->
                        <select name="kecamatan" id="combobox_kec" class="combobox">
                          <option value="" selected="selected" id="items">Pilih Kecamatan</option>
                        </select>
                    </div>
                    <div class="col-half">
                        <!-- <input type="text" placeholder="Keluaran" name="kelurahan" /> -->
                        <select name="kelurahan" id="combobox_kel" class="combobox">
                          <option value="" selected="selected" id="items">Pilih Keluaran</option>
                        </select>
                    </div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="email" placeholder="Email" name="email" />
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="email" placeholder="No. Telp" name="nohp" id="nohp" />
                    <div class="input-icon"><i class="fa fa-phone"></i></div>
                </div>
                <div class="row">
                    <div class="col-half">
                        <h5>Tanggal Lahir</h5>
                        <div class="input-group">
                            <input type="text" name="tgl_lahir" id="datepicker" placeholder="Tanggal Lahir" />
                        </div>
                    </div>
                    <div class="col-half">
                        <h5>Jenis Kelamin</h5>
                        <div class="input-group">
                        <input type="radio" name="gender" value="laki" id="gender-male"/>
                        <label for="gender-male">Laki-Laki</label>
                        <input type="radio" name="gender" value="perempuan" id="gender-female"/>
                        <label for="gender-female">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="row">
            		<!-- <input type="submit" name="submit" value="Simpan!" id="submit" class="hvr-rectangle-in" /> -->
            	</div>
            </div>
            <div class="col-3">
                <br><br>
                <center>
                <?php
                    if (isset($_GET['edit'])) {
                        echo "<a href='form-biodata.php?save=true'>
                            <button type='button' class='btn btn-primary'>Simpan</button>
                        </a>";
                        echo "<a href='form-biodata.php'>
                            <button type='button' class='btn btn-warning'>Cancel</button>
                        </a>";
                    }else{
                        echo "<a href='form-biodata.php?edit=true'>
                            <button type='button' class='btn btn-primary'>Edit Profilemu</button>
                        </a>";
                    }
                 ?>
                </center>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
</form>
<br><br><br><br>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="path/to/jquery-3.2.1.js"><\/script>')</script>
    <script src="https://cdn.jsdelivr.net/npm/zebra_datepicker/dist/zebra_datepicker.min.js"></script>
    <script  src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/bootstrap-select.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datepicker').Zebra_DatePicker({
                direction: ['1998-01-01', true],
                format: 'l, d F Y',
                months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                days:['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
                offset:[-300,10],
                show_select_today: false,
                lang_clear_date: "Hapus",
            });
        });

        $('.select').on('click','li',function(){
  $('#opened').click();
  var $t = $(this),
      $f = $('.field')
      text = $t.text(),
      icon = $t.find('i').attr('class');
  $f.find('label').text(text);
  $f.find('i').attr('class',icon)
});
$('.field').click(function(e){
  e.preventDefault();
  $('#opened').click();
})


    </script>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        loadData();
    });

    function loadData(){
        var kodepos = document.getElementById('kodepos').value;
        $.get('SQL/datawilayah_prov.php?id='+kodepos, function(data){
            $('#combobox_prov').html(data);
        });
        $.get('SQL/datawilayah_kab.php?id='+kodepos, function(data){
            $('#combobox_kab').html(data);
        });
        $.get('SQL/datawilayah_kec.php?id='+kodepos, function(data){
            $('#combobox_kec').html(data);
        });
        $.get('SQL/datawilayah_kel.php?id='+kodepos, function(data){
            $('#combobox_kel').html(data);
        });
    }
    $(document).click(function(event) {
      if(
        $('.toggle > input').is(':checked') &&
        !$(event.target).parents('.toggle').is('.toggle')
      ) {
        $('.toggle > input').prop('checked', false);
      }
    })
</script>
<?php
if(isset($_POST['submit']))
{
    //Dapatkan Tanggal Lahir
    $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    echo $_POST['nama_depan']." ".$_POST['nama_belakang'];
    $tgl = explode(" ",$_POST['tgl_lahir']);
    $getBulan = 0;
    //getBulan
    for ($i=0; $i < count($bulan); $i++) {
        if ($tgl[2] == $bulan[$i]) {
            $getBulan = $i+1;
        }
    }
    $tgl_lahir = $tgl[3]."-0".$getBulan."-".$tgl[1];

    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $gender = $_POST['gender'];
    $kode_pos = $_POST['kode_pos'];
    $alamat = $_POST['alamat'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $provinsi = $_POST['provinsi'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];


    //cek database dulu sebelum insert data
    //dan ingat, user kadang enggak ngisi semuanya
    //user kadang ngisi seperlunya saja, jadi enggak pasti ngisinya
    //
}
?>
