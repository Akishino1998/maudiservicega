<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Biodatamu | Nyervisga?</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
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
<form class="" action="change-password.php" method="post">
    <div class="container bio">
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
