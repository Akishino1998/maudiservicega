<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Biodatamu | Nyervisga?</title>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/zebra_datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-regeister-2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/main_styles.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="css/dropdown.css">
</head>
<body>
<div class="super_container">
    <header class="header">
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
                        <input type="text" placeholder="Nama Depan" name="nama_depan" disabled />
                        <div class="input-icon"><i class="fa fa-user"></i></div>
                    </div>
                    <div class="col-half">
                        <input type="text" placeholder="Nama Belakang" name="nama_belakang" disabled />
                    </div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="text" placeholder="Alamat (Ex. Jln. P. Suryanata)" name="alamat" disabled/>
                    <div class="input-icon"><i class="fa fa-street-view"></i></div>
                </div>
                <div class="input-group">
                    <div class="col-third">
                        <input type="text" placeholder="RT" name="rt" disabled/>
                    </div>
                    <div class="col-third">
                        <input type="text" placeholder="RW" name="rw" disabled/>
                    </div>
                    <div class="col-third">
                        <input type="text" placeholder="Kode Pos" name="kode_pos" id="kodepos" onkeyup="loadData()" disabled/>
                    </div>
                </div>
                <div class="input-group">
                    <div class="col-half">
                        <?php
                            if(isset($_GET['edit'])=='true'){
                                echo '<select name="provinsi" id="combobox_prov" class="combobox">';
                                    echo '<option value="" selected="selected" id="items" >Pilih Provinsi</option>';
                                echo '</select>';
                            }else{
                                echo '<input type="text" placeholder="Provinsi" name="provinsi" disabled/>';
                            }
                        ?>

                    </div>
                    <div class="col-half">
                        <?php
                            if(isset($_GET['edit'])=='true'){
                                echo '<select name="kabupaten" id="combobox_kab" class="combobox">';
                                    echo '<option value="" selected="selected" id="items">Pilih Kabupaten</option>';
                                echo '</select>';
                            }else{
                                echo '<input type="text" placeholder="Kabupaten" name="kabupaten" disabled/>';
                            }
                        ?>
                    </div>
                </div>
                <div class="input-group">
                    <div class="col-half">
                        <?php
                            if(isset($_GET['edit'])=='true'){
                                echo '<select name="kecamatan" id="combobox_kec" class="combobox">';
                                    echo '<option value="" selected="selected" id="items">Pilih Kecamatan</option>';
                                echo '</select>';
                            }else{
                                echo '<input type="combobox" placeholder="Kecamatan" name="kecamatan" disabled />';
                            }
                        ?>
                    </div>
                    <div class="col-half">
                        <?php
                            if(isset($_GET['edit'])=='true'){
                                echo '<select name="kelurahan" id="combobox_kel" class="combobox">';
                                    echo '<option value="" selected="selected" id="items">Pilih Keluaran</option>';
                                echo '</select>';
                            }else{
                                echo '<input type="text" placeholder="Keluaran" name="kelurahan" disabled/>';
                            }
                        ?>
                    </div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="email" placeholder="Email" name="email" disabled/>
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="email" placeholder="No. Telp" name="nohp" id="nohp" disabled/>
                    <div class="input-icon"><i class="fa fa-phone"></i></div>
                </div>
                <div class="row">
                    <div class="col-half">
                        <h5>Tanggal Lahir</h5>
                        <div class="input-group">
                            <input type="text" name="tgl_lahir" id="datepicker" placeholder="Tanggal Lahir" disabled/>
                        </div>
                    </div>
                    <div class="col-half">
                        <h5>Jenis Kelamin</h5>
                        <div class="input-group">
                        <input type="radio" name="gender" value="laki" id="gender-male" disabled/>
                        <label for="gender-male">Laki-Laki</label>
                        <input type="radio" name="gender" value="perempuan" id="gender-female" disabled/>
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
</form>
<div class="footer-service">
    <?php include('../../layout/footer.php') ?>
</div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="path/to/jquery-3.2.1.js"><\/script>')</script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/zebra_datepicker/dist/zebra_datepicker.min.js"></script> -->
    <script src="js/zebra_datepicker.min.js"></script>
    <script  src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="../../plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="../../plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="../../plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>

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
    </script>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        loadData();
        <?php
        if(isset($_GET['edit'])){
            // echo "$('input').;";
        }
         ?>

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
