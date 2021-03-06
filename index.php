<?php 
    require_once('header.php');
?>
  <body>
    <!-- END: fullscreenloading -->
    <div id="fullscreenloading">
        <div id="fullscreenloading-content">
            <div id="boxedResult">
                <div id="sendResult">
                    <div class="uil-rolling-css"><div><div></div><div></div></div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: fullscreenloading -->
    
    <!-- START SECTION: home -->
  	<section id="home" data-stellar-background-ratio="0.5">
        <div class="container">
        	<div class="row">
                <div class="col-xs-12">
                    <a href="/pt/">PORTUGUÊS</a> | 
                    <a href="/es/">ESPAÑOL</a>
                	<h3 class="title"><span></span><?php echo Helper::traduc('nos casamos'); ?>
                    <span></span></h3>
                    <ul class="names">
                    	<li>&nbsp;&nbsp;Thiago</li>
                        <li class="circle">&amp;</li>
                        <li>Mariana</li>
                    </ul>
                    <div class="date"><?php echo Helper::traducMes('novembro', true) ?> <span>24</span> 2018</div>
                    <div class="hour">20:00 <span>pm</span></div>
                    <div class="place">
                    	<h3><?php echo Helper::traduc('salão festas e eventos'); ?></h3>
                        <p>Juan José Quesada, 3434 esq. Marne - Montevideo, Uruguay.</p>
                    </div>
                </div>
			</div>
        </div>
    </section>
    <!-- END SECTION: home -->
    
    <!-- START: main-sticky-nav -->
    <header>
        <div class="sticky-wrapper" id="nav-sticky-wrapper"><nav id="nav" class="navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="#">
                	<ul class="names">
                    	<li>Thiago</li>
                        <li class="circle">&amp;</li>
                        <li>Mariana</li>
                    </ul>
                </a>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav_menu">
                        <span class="sr-only"><?php echo Helper::traduc('mudar navegação'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav_menu">
                    <ul id="nav_list" class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home"><?php echo Helper::traduc('home'); ?></a></li>
                        <li class=""><a href="#couple"><?php echo Helper::traduc('casal'); ?></a></li>	
                        <li class=""><a href="#our-story"><?php echo Helper::traduc('nossa história'); ?></a></li>
                        <li class=""><a href="#gallery"><?php echo Helper::traduc('galeria'); ?></a></li>
                        <li class=""><a href="#gift-registry"><?php echo Helper::traduc('contribuição'); ?></a></li>
                        <li class=""><a href="#rsvp"><?php echo Helper::traduc('comparecer'); ?></a></li>
                        <li class=""><a href="#info"><?php echo Helper::traduc('informações'); ?></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav></div>
    </header>
    <!-- END: main-sticky-nav -->
    
    <!-- START SECTION: couple -->
    <section id="couple" class="bg-gray-1">
        <div class="container">
        	<div class="row">
                <div class="col-md-6 col-xs-12 text-center">
                	<div class="profile">
                        <h2>Thiago <span>da Silveira</span></h2>
                        <img src="../img/perfil/Thiago.jpg" class="img-responsive img-circle" alt="Groom"/>
                		<div class="social-icons">
                            <a href="https://www.facebook.com/capirotoKhun" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://instagram.com/pedrothiagosilveira" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 text-center">
                	<div class="profile">
                        <h2>Mariana <span>Gerali</span></h2>
                        <img src="../img/perfil/Mariana.jpg" width="395" class="img-responsive img-circle" alt="Groom"/>
                        <p>
                            
                        </p>
                		<div class="social-icons">
                            <a href="https://www.facebook.com/Sakufeli" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://instagram.com/maru_gerali" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
			</div>
        </div>
    </section>
    <!-- END SECTION: couple -->
    
    <!-- START SECTION: frase -->
    <section id="frase" class="img-bg-2" data-stellar-background-ratio="0.5">
        <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                        <h2><i class="fa fa-quote-left" aria-hidden="true"></i> Kiss me beneath the milky twilight.
                            Lead me out on the moonlit floor.
                            Lift your open hand,
                            strike up the band
                            and make the fireflies dance
                            silver moon's sparkling...
                            So kiss me. <i class="fa fa-quote-right" aria-hidden="true"></i></h2>
                            <h2><i> - Sixpence None The Richer </i></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION: frase -->
    
    <!-- START SECTION: our-story -->
    <section id="our-story">
        <div class="container">
        	<div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                	<div class="title-block">
                        <h1><?php echo Helper::traduc('nossa') ?> <span><em><?php echo Helper::traduc('história'); ?></em></span></h1>
                        <div class="divider"></div>
                        <p><em><?php echo Helper::traduzir('breve relato de'); ?></em></p>
                    </div>
                </div>
            </div>
        	<ul class="timeline">
                <li>
                  <div class="timeline-badge"><i class="fa fa-heart" aria-hidden="true"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h2 class="timeline-title"><span><?php echo Helper::traducMes('janeiro'); ?></span> 2016</h2>
                    </div>
                    <div class="timeline-body text-center">
                      <img src="img/Fotoshistoria/DSC_0499.JPG" class="img-responsive" alt="Our Story"/>
                      <h2 class="timeline-title"><?php echo Helper::traduc('começa a viagem...'); ?></h2>
                      <p> <?php echo Helper::traduzir('tudo começa em');?></p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge"><i class="fa fa-heart" aria-hidden="true"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h2 class="timeline-title"><span><?php echo Helper::traducMes('setembro'); ?></span> 2016</h2>
                    </div>
                    <div class="timeline-body text-center">
                      <img src="../img/Fotoshistoria/4.jpg" class="img-responsive" alt="Our Story"/>
                      <h2 class="timeline-title"><?php echo Helper::traduc('ventos de primavera'); ?></h2>
                      <p><?php echo Helper::traduzir('a meses indo') ?></p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge"><i class="fa fa-heart" aria-hidden="true"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h2 class="timeline-title"> <span><?php echo Helper::traducMes('dezembro'); ?></span> 2016</h2>
                    </div>
                    <div class="timeline-body text-center">
                      <img src="../img/Fotoshistoria/3.jpg" class="img-responsive" alt="Our Story"/>
                      <h2 class="timeline-title"><?php echo Helper::traduc('ano novo, vida nova'); ?></h2>
                      <p><?php echo Helper::traduzir('desde aquele setembro'); ?></p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge"><i class="fa fa-heart" aria-hidden="true"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h2 class="timeline-title"><span><?php echo Helper::traducMes('janeiro'); ?></span> 2018</h2>
                    </div>
                    <div class="timeline-body text-center">
                      <img src="../img/Fotoshistoria/IMG_20180207_070812_068.jpg" class="img-responsive" alt="Our Story"/>
                      <h2 class="timeline-title"><?php echo Helper::traduc('tempo circular'); ?></h2>
                      <p><?php echo Helper::traduzir('existem pessoas que'); ?></p>
                    </div>
                  </div>
                </li>
                <li>
                	<div class="timeline-end">
                        <div class="timeline-badge"><i class="fa fa-heart" aria-hidden="true"></i></div>
                	</div>
                </li>
            </ul>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                	<div class="final-frase"><?php echo Helper::traduc('por isso daremos'); ?> <span><?php echo Helper::traduc('próximo passo') ?>...</span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION: our-story -->
    
    <!-- START SECTION: counter -->
    <section id="counter" class="img-bg-3" data-stellar-background-ratio="0.5">
        <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                    	
                        <h2><?php echo Helper::traduc('contando os minutos') ?></h2>
                        
                        <!-- Countdown -->
						<div class="countdown" data-date="2018-11-24 21:00:00"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION: counter -->
    
    <!-- START SECTION: gallery -->
    <section id="gallery" class="bg-gray-1">
		<div class="container">
	        <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                    <div class="title-block">
                        <h1><span><em><?php echo Helper::traduc('galeria'); ?></em></span></h1>
                        <div class="divider"></div>
                        <p><em><?php echo Helper::traduc('recordações em foto'); ?></em></p>
                    </div>
                </div>
            </div>
            <div class="row gallery-popup">

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-family">
	                <a href="../img/fotos/1.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/fotos/1.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-friends">
	                <a href="../img/fotos/2.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/fotos/2copia.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-family">
	                <a href="../img/fotos/3.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/fotos/3copia.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-portraits">
	                <a href="../img/fotos/6.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/fotos/6copia.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-trips">
	                <a href="../img/fotos/8.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/fotos/8copia.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-portraits">
	                <a href="../img/fotos/9.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/fotos/9copia.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-trips">
	                <a href="../img/fotos/10.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/fotos/10.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-portraits">
	                <a href="../img/fotos/11.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/fotos/11.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-portraits">
	                <a href="../img/fotos/12.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/fotos/13.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>
	        </div>
	    </div>
    </section>
    <!-- END SECTION: gallery -->
    
    <!-- START SECTION: gift-registry -->
    <section id="gift-registry" class="img-bg-4" data-stellar-background-ratio="0.5">
        <div class="container">
        	<div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="title-block">
                        <h1><span><em><?php echo Helper::traduc('contribuição'); ?></em></span></h1>
                        <div class="divider"></div>
                        <p><em><?php echo Helper::traduc('para brasil e uruguay') ?></em></p>
                        <a href="http://bit.ly/2nJEzFo" target="_blank">
                            <img src="../img/featured/logoColectate.png" width="250" alt="" />
                        </a>
                        <p><em><?php echo Helper::traduc('atenção: valores') ?></em></p>
                    </div>
                    <div class="title-block">
                    <?php
                        $date_nail = strtotime('2018-09-03');
                        $date_haystack = strtotime(date('Y-m-d', time()));
                        $day_condition = '';
                        if ($date_haystack < $date_nail) {
                            $day_condition = '(A partir del 3 de setiembre)';
                        } else {
                            $day_condition = '';
                        }
                    ?>
                        <p><em class="danger">Colectivo Nº 66557 "Thiago y Mariana" <?php echo $day_condition;?></em></p>
                            <img src="../img/featured/logo-RedPagos.jpg" width="250" alt="" />
                        <p></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION: gift-registry -->

    <!-- START SECTION: rsvp -->
    <section id="rsvp">
        <div class="container">
        	<div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                	<div class="title-block">
                        <h1><?php echo Helper::traduc('obrigado por comparecer!'); ?></h1>
                        <div class="divider"></div>
                        <p><em><?php echo Helper::traduc('em breve, fotos'); ?></em></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION: rsvp -->

    <!-- START SECTION: info -->
    <section id="info" class="img-bg-4" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="title-block">
                        <h1><span><em><?php echo Helper::traduc('informações'); ?></em></span></h1>
                        <div class="divider"></div>
                        <p><em> <?php echo Helper::traduc('sugestões de hostels'); ?> </em></p>
                    </div>
                    <div class="row">
                        <table class="table table-dark">
                            <tr>
                                <td><a target="_blank" href="http://www.daysinn.com.uy/inicio.asp"><em>Days Inn (Atrás de tres cruces)</em></a></td>
                            </tr>
                            <tr>
                                <td><a target="_blank" href="http://www.mercosuruniversitas.com/es/"><em>Mercosur Universitas (Hospital Italiano)</em></a></td>
                            </tr>
                            <tr>
                                <td><a target="_blank" href="http://costauruguay.uy/hoteles.php#"><em>Ciudadano Suites (Problemas en la página)</em></a></td>
                            </tr>
                            <tr>
                                <td><a target="_blank" href="http://hotel.hotelescuelakolping.edu.uy/"><em>Hotel Escuela Kolping</em></a></td>
                            </tr>
                            <tr>
                                <td><a target="_blank" href="http://www.canebnb.com/"><em>Bed and Brekfast Cane</em></a></td>
                            </tr>
                            <tr>
                                <td><a target="_blank" href="https://www.chelagarto.com/es"><em>Hostel Che Lagarto</em></a></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION: info -->

    <!-- START: footer -->
    <section id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
					<h1><?php echo Helper::traduc('obrigado'); ?></h1>
                    <ul class="names">
                    	<li>&nbsp;&nbsp;Thiago</li>
                        <li class="circle">&amp;</li>
                        <li>Mariana</li>
                    </ul>
                    <div class="copyright">All Rights Reserved © 2017 | Design: <a href="http://marttinfisher.com" target="_blank">Marttin Fisher</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: footer -->

    <!-- START: scripts -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-1.12.4.min.js"></script>

    <!-- jQuery ui (necessary for suggestion box) -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Bootstrap main Js File-->
    <script src="../js/bootstrap.min.js"></script>
    
    <!-- Sticky Navbar -->
    <script type="text/javascript" src="../js/jquery.sticky.js"></script>
    <script type="text/javascript" src="../js/jquery.nav.js"></script>
    <!-- owl-carousel -->
	<script src="../libs/owl-carousel/owl.carousel.min.js"></script>
    <!-- Stellar -->
    <script src="../libs/stellar/jquery.stellar.min.js"></script>
    <!-- TimeCircles-countdown -->
    <script src="../libs/TimeCircles-countdown/TimeCircles.js"></script>
    <!-- gallery-grid -->
    <script src="../libs/gallery-grid/gallery-grid.js"></script>
    <!-- Magnific Popup core JS file -->
	<script src="../libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Bootstrap Validator -->
    <script src="../libs/bootstrap-validator/validator.js"></script>
	<!-- Theme Main Js file -->
	<script src="../js/theme-main.js"></script>
    <!-- END: scripts -->


  </body>
</html>