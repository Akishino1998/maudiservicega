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
                    <h4>Mau Nyervis apa?</h4>
                    <br>
                    <img src="" alt="" class="img-rounded" width="200" id="elektronik-service">

                    <div class="input-group">
                        <div class="col-half">
                            <!-- <input type="text" placeholder="Provinsi" name="provinsi" /> -->
                            <select name="provinsi" id="combobox_elekronik" class="combobox">
                              <option value="" selected id="items-service" >Pilih Elektronik</option>
                            </select>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-6">
                <center>
                    <h4>Data Elektronik yang mau kamu service</h4>
                    <h9>*kosongin aja kalau enggak tau...</h9>
                    <br><br><br />
                </center>
                <div class="input-group">
                    <div class="col-half">
                        <center>
                            <label class="textboxlabel" for="merk"> <strong>Merk</strong> </label>
                        </center>
                        <input type="text" placeholder="Contoh : Samsung" name="merk" id="merk" />
                    </div>
                    <div class="col-half">
                        <center>
                            <label class="textboxlabel" for="noseri"> <strong>No. Seri</strong> </label>
                        </center>
                        <input type="text" placeholder="Contoh : S-315GH" name="noseri" id="noseri" />
                    </div>
                </div>
                <div class="input-group">
                    <table id="tableperlengkapan">
                        <tr>
                            <th width="100"><label class="textboxlabel" for="kelengkapan0">Kelengkapan</label></th>
                            <td width="400"><input type="text" placeholder="Contoh : Batrai" name="kelengkapan" id="kelengkapan0" /></td>
                            <td width="20"></td>
                            <td width="30"><button type="button" class="btn btn-success" id="createtextbox">+</button></td>
                        </tr>
                    </table>
                </div>
                <div class="input-group">
                    <div class="col-half">
                        <center>
                            <label class="textboxlabel" for="keterangan"> <strong>Kenapa Bisa Rusak?</strong> </label>
                        </center>
                        <!-- <input type="text" placeholder="Contoh : Kerendem air" name="keterangan" id="keterangan" /> -->
                        <textarea name="keterangan" rows="2" cols="20" placeholder="Contoh : Kerendem Air" id="keterangan"></textarea>
                    </div>
                    <div class="col-half">
                        <center>
                            <label class="textboxlabel" for="keterangan"> <strong>Mau Service Di Mana?</strong> </label>
                        </center>
                        <div class="input-group">
                            <input type="radio" name="order_status" value="Ditempat" id="gender-male"/>
                            <label for="gender-male" id="ditempat"> <i class="fa fa-home fa-3x"></i><br />Rumah </label>
                            <input type="radio" name="order_status" value="Dibawa" id="gender-female"/>
                            <label for="gender-female" id="dibawa"> <i class="fa fa-truck fa-3x"></i><br />Dibawa </label>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="alert alert-info">
                        Sesuaikan alamat dengan lokasi elektronik yang mau diservis, ya!
                    </div>
                </div>
                <div class="input-group">
                    <center>
                        <button type="button" class="btn btn-info" id="btn-change">Ubah Alamat</button>
                    </center>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Alamat (Ex. Jln. P. Suryanata Graha Indah No. 83)" name="alamat" id="alamat" disabled/>
                </div>
                <div class="input-group">
                    <div class="col-third">
                        <input type="text" placeholder="RT" name="rt" id="rt" disabled/>
                    </div>
                    <div class="col-third">
                        <input type="text" placeholder="RW" name="rw" id="rw" disabled/>
                    </div>
                    <div class="col-third">
                        <input type="text" placeholder="Kode Pos" name="kode_pos" id="kodepos" onkeyup="loadData()" disabled />
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
                <div class="input-group">
                    <button type="button" class="btn btn-info" id="btn-confimr">Nyervis Sekarang!</button>
                    <button type="button" class="btn btn-wrong" id="createtextbox">Batal</button>
                </div>
            </div>
            <div class="col-3" id="texx">
                <!--  -->
            </div>
        </div>
    </div>
</form>
<div class="footer-service">
    <?php include('../../layout/footer.php') ?>
</div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="path/to/jquery-3.2.1.js"></\script>')</script>
    <script  src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="../../plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="js/custom.js"></script>


</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        loadData();
        change_add();
        var itemsnumber = 0;
        var number = 1;
        $('#createtextbox').click(function(){
            var items = $('#kelengkapan'+itemsnumber).val();
            if(items != ''){
                var html1 = '<tr><th width="100"></th>';
                var html2 = '<td width="400"><input type="text" placeholder="Contoh : Batrai" name="kelengkapan" id="kelengkapan'+number+'" /></td>';
                var html3 = '<td width="20"></td>';
                var html4 = '<td width="30"></td></tr>';
                $('#tableperlengkapan').append(html1+html2+html3+html4);
                number++;
                itemsnumber++;
            }
        });
        var service = '';
        $('#ditempat').click(function(){
            service = 'Ditempat';
        });
        $('#dibawa').click(function(){
            service = 'dibawa';
        });

        $('#btn-confimr').click(function(){
            // alert(service);
            var perlengkapan = '';
            for (i = 0; i < number;i++){
                if(i == 0){
                    perlengkapan = $('#kelengkapan'+i).val();
                }else{
                    perlengkapan = perlengkapan +', '+ $('#kelengkapan'+i).val();
                }
            }
            // ditempat dibawa


            $.post('SQL/input_proses.php',
            {
                id_elektronik : $('#combobox_elekronik').val(),
                merk : $('#merk').val(),
                noseri : $('#noseri').val(),
                kode_pos : $('#kodepos').val(),
                perlengkapan : perlengkapan,
                keterangan : $('#keterangan').val(),
                order_status : service,
                alamat : $('#alamat').val(),
                rt : $('#rt').val(),
                rw : $('#rw').val(),
                provinsi : $('#combobox_prov').val(),
                kabupaten : $('#combobox_kab').val(),
                kecamatan : $('#combobox_kec').val(),
                kelurahan : $('#combobox_kel').val(),
            }, function(data){
                // alert(data);
            });
        });
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
        $.get('SQL/items-elektronik.php', function(data){
            $('#combobox_elekronik').html(data);
        });
        <?php if(isset($_GET['id'])){
            // $('#items-service').val()
            // mengubahnya menjadi selected agar terselect nantinya
        } ?>
    }
    function change_add(){
        var position = 1;
        $('#btn-change').click(function(){
            if(position == 1){
                $('#btn-change').text('Selesai!');
                position = 2;
            }else{
                $('#btn-change').text('Ubah Alamat');
                position = 1;
            }
        });
    }
</script>
