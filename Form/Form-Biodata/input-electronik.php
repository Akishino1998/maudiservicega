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
    <link rel="stylesheet" href="css/style-elektronik2.css">
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
                    <h4>Data Elektronik yang mau kamu service</h4>
                    <h9>*kosongin aja kalau enggak tau...</h9>
                    <br><br><br />
                </center>
                <div class="input-group">
                    <label class="field a-field a-field_a1 page__field">
                        <input class="field__input" placeholder=" " >
                        <span class="field__label-wrap">
                        <span class="field__label">Merk</span>
                        </span>
                    </label>
                </div>
                <div class="input-group">
                    <label class="field a-field a-field_a1 page__field">
                        <input class="field__input" placeholder=" ">
                        <span class="field__label-wrap">
                        <span class="field__label">No. Seri</span>
                        </span>
                    </label>
                </div>
                <div class="input-group">
                    <label class="field a-field a-field_a1 page__field">
                        <input class="field__input field__input2" placeholder=" " required>
                        <span class="field__label-wrap">
                        <span class="field__label">First name</span>
                        </span>
                    </label>
                </div>
                <div class="input-group">
                    <h2>Checkboxes</h2>
  <div class="inputGroup">
    <input id="option1" name="option1" type="checkbox"/>
    <label for="option1">Option One</label>
  </div>
                </div>
            </div>
            <div class="col-3">
                <!--  -->
            </div>
        </div>
    </div>
</form>
<div class="footer-service">
    <?php include('../../layout/footer.php') ?>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="path/to/jquery-3.2.1.js"><\/script>')</script>
    <script  src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="../../plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="../../plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="../../plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>


</body>
</html>
<script type="text/javascript">
    $(document).click(function(event) {
      if(
        $('.toggle > input').is(':checked') &&
        !$(event.target).parents('.toggle').is('.toggle')
      ) {
        $('.toggle > input').prop('checked', false);
      }
    })
</script>
