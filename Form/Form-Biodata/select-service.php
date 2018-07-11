<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Biodatamu | Nyervisga?</title>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style-service.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="../../styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="../../styles/responsive.css">
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
                    <br>
                    <!-- <img src="image/profile-blank.png" alt="" class="img-rounded" width="200"> -->
                    <br><br>
                </center>
            </div>
            <div class="col-6">
                <center>
                    <h4 class="hvr-underline-from-center">Mau Nyervis Apa?</h4>
                    <br>
                </center>
                <div class="input-group">
                    <select id="service">
                        <option value="hide">--Pilih Elektronik Yang Mau Diservis--</option>
                        <option value="laptop">Laptop</option>
                        <option value="smartphone">Smartphone</option>
                        <option value="pc">PC</option>
                        <option value="mobo">Mother Board</option>
                        <option value="tv">TV</option>
                        <option value="2015">2015</option>
                    </select>
            	</div>
                <center>
                    <button type="button" class="btn btn-primary hvr-grow" onclick="selectService()" style="width:255px; cursor: pointer;">Nyervisin Sekarang!</button>
                </center>
            </div>
        </div>
        <br><br><br>
        <div class="row">

            <div class="col-12">
                <center>
                    <h4 class="hvr-underline-from-center">Brand</h4>
                    <hr>
                    <img src="image/brand/acer.png" alt="" class="img-rounded" width="100">
                    <img src="image/brand/asus.png" alt="" class="img-rounded" width="100">
                    <img src="image/brand/google.png" alt="" class="img-rounded" width="100">
                    <img src="image/brand/iphone.png" alt="" class="img-rounded" width="100">
                    <img src="image/brand/microsoft.png" alt="" class="img-rounded" width="100">
                    <img src="image/brand/polytron.png" alt="" class="img-rounded" width="100">
                    <img src="image/brand/samsung.png" alt="" class="img-rounded" width="100">
                    <img src="image/brand/toshiba.png" alt="" class="img-rounded" width="100">
                </center>

            </div>

        </div>

    </div>

</form>

<div class="footer-service">

    <?php include('../../layout/footer.php') ?>
</div>

<br><br>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script  src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="../../plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
</body>
</html>
<script type="text/javascript">

$('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });

    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });

    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});

function selectService(){
    var service = document.getElementById('service').value;
    alert(service);
}
</script>
