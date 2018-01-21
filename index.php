<?php 
require_once('inc/traduc.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marttinda Silveira - MachiMorales">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo Helper::traduc('title-main') ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- TimeCircles-countdown -->
    <link rel="stylesheet" href="../libs/TimeCircles-countdown/TimeCircles.css">

    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="../libs/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../libs/owl-carousel/owl.theme.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../libs/magnific-popup/magnific-popup.css">

    <!-- Loading Rolling -->
    <link rel="stylesheet" href="../libs/loading/rolling.css">

    <!-- Fonts -->
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Oswald:400,300,700'>
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic,700italic,600italic,800italic'>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Theme Main Style -->
    <link rel="stylesheet" href="../css/theme-style.css">
    
    <!--========================Color Variant====================-->
    <link rel="stylesheet" type="text/css" href="../css/colors/pink.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
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
                    <a href="/thiagoymariana/pt/">PORTUGUÊS</a> | 
                    <a href="/thiagoymariana/es/">ESPAÑOL</a>
                	<h3 class="title"><span></span><?php echo Helper::traduc('nos casamos'); ?>
                    <span></span></h3>
                    <ul class="names">
                    	<li>&nbsp;&nbsp;Thiago</li>
                        <li class="circle">&amp;</li>
                        <li>Mariana</li>
                    </ul>
                    <div class="date"><?php echo Helper::traducMes('novembro', true) ?> <span>24</span> 2018</div>
                    <div class="hour">21:00 <span>pm</span></div>
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
                        <span class="sr-only">Toggle navigation</span>
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
                        <li class=""><a href="#gift-registry"><?php echo Helper::traduc('caixinha'); ?></a></li>
                        <li class=""><a href="#rsvp"><?php echo Helper::traduc('comparecer'); ?></a></li>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor non sem eu faucibus. Aenean pellentesque dui tincidunt, dictum massa congue, euismod ipsum. Duis auctor in est ac dignissim.</p>
                		<div class="social-icons">
                            <a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                            <!-- <a href="#" target="_blank" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" target="_blank" class="google"><i class="fa fa-google-plus"></i></a>
                            <a href="#" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" target="_blank" class="vimeo"><i class="fa fa-vimeo"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 text-center">
                	<div class="profile">
                        <h2>Mariana <span>Gerali</span></h2>
                        <img src="../img/perfil/Thiago.jpg" class="img-responsive img-circle" alt="Groom"/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor non sem eu faucibus. Aenean pellentesque dui tincidunt, dictum massa congue, euismod ipsum. Duis auctor in est ac dignissim.</p>
                		<div class="social-icons">
                            <a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                            <!-- <a href="#" target="_blank" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" target="_blank" class="google"><i class="fa fa-google-plus"></i></a>
                            <a href="#" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" target="_blank" class="vimeo"><i class="fa fa-vimeo"></i></a> -->
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
                        <p><em> Breve relato de viajes, horas y distancias, y con un hermoso final. ¿O comienzo?.</em></p>
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
                      <img src="../img/Fotoshistoria/DSC_0499.JPG" class="img-responsive" alt="Our Story"/>
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
                      <img src="../img/Fotoshistoria/received_10206616443150461.jpeg" class="img-responsive" alt="Our Story"/>
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
                      <img src="../img/Fotoshistoria/20170508_223935.jpg" class="img-responsive" alt="Our Story"/>
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
                      <img src="../img/story/story-img-04.jpg" class="img-responsive" alt="Our Story"/>
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
                        <div class="gallery_nav">
                            <button class="btn btn-primary btn-bordered filter-button active" data-filter="all">All</button>
                            <button class="btn btn-primary btn-bordered filter-button" data-filter="gallery-family">Family</button>
                            <button class="btn btn-primary btn-bordered filter-button" data-filter="gallery-friends">Friends</button>
                            <button class="btn btn-primary btn-bordered filter-button" data-filter="gallery-trips">Trips</button>
                            <button class="btn btn-primary btn-bordered filter-button" data-filter="gallery-portraits">Portraits</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gallery-popup">

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-family">
	                <a href="../img/gallery/gallery-image-01.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/gallery/gallery-image-01.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-friends">
	                <a href="../img/gallery/gallery-image-02.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/gallery/gallery-image-02.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-family">
	                <a href="../img/gallery/gallery-image-03.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/gallery/gallery-image-03.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-portraits">
	                <a href="../img/gallery/gallery-image-04.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/gallery/gallery-image-04.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-trips">
	                <a href="../img/gallery/gallery-image-05.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/gallery/gallery-image-05.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-portraits">
	                <a href="../img/gallery/gallery-image-06.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/gallery/gallery-image-06.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-trips">
	                <a href="../img/gallery/gallery-image-07.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/gallery/gallery-image-07.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-portraits">
	                <a href="../img/gallery/gallery-image-08.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/gallery/gallery-image-08.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>

	            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter gallery-portraits">
	                <a href="../img/gallery/gallery-image-09.jpg" class="mfp-image" title="Gallery image title">
	                	<img src="../img/gallery/gallery-image-09.jpg" class="img-responsive" alt="Gallery image">
	                </a>
	            </div>
	        </div>
	    </div>
    </section>
    <!-- END SECTION: gallery -->
    
    <!-- START SECTION: featured-people -->
    <!-- <section id="featured-people">
        <div class="container">
        	<div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                	<div class="title-block">
                        <h1>Featured <span><em>People</em></span></h1>
                        <div class="divider"></div>
                        <p><em>Dolor sit amet, consectetur adipiscing elit. Mauris porttitor non sem eu faucibus. Aenean pellentesque dui tincidunt, dictum massa congue, euismod ipsum. Duis auctor in est ac dignissim.</em></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="featured">
                        <img src="../img/featured/featured-01.jpg" class="img-responsive img-circle" alt="Groom"/>
                        <div class="text">
                            <h2>Mark Gamberther</h2>
                            <h4><span><em>Best Man</em></span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor non sem eu faucibus. Aenean pellentesque dui tincidunt, dictum massa congue, euismod ipsum. Duis auctor in est ac dignissim.</p>   
                		</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="featured">
                        <img src="../img/featured/featured-03.jpg" class="img-responsive img-circle" alt="Groom"/>
                        <div class="text">
                            <h2>Pablo Ibañez</h2>
                            <h4><span><em>Groomsman</em></span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor non sem eu faucibus. Aenean pellentesque dui tincidunt, dictum massa congue, euismod ipsum. Duis auctor in est ac dignissim.</p>   
                		</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="featured">
                        <img src="../img/featured/featured-04.jpg" class="img-responsive img-circle" alt="Groom"/>
                        <div class="text">
                            <h2>Donald Bessue</h2>
                            <h4><span><em>Groomsman</em></span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor non sem eu faucibus. Aenean pellentesque dui tincidunt, dictum massa congue, euismod ipsum. Duis auctor in est ac dignissim.</p>   
                		</div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 featured-right">
                   <div class="featured">
                        <img src="../img/featured/featured-02.jpg" class="img-responsive img-circle" alt="Groom"/>
                        <div class="text">
                            <h2>Christine Doe</h2>
                            <h4><span><em>Maid of honor</em></span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor non sem eu faucibus. Aenean pellentesque dui tincidunt, dictum massa congue, euismod ipsum. Duis auctor in est ac dignissim.</p>   
                		</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="featured">
                        <img src="../img/featured/featured-05.jpg" class="img-responsive img-circle" alt="Groom"/>
                        <div class="text">
                            <h2>Samantha Markesh</h2>
                            <h4><span><em>Bridesmaid</em></span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor non sem eu faucibus. Aenean pellentesque dui tincidunt, dictum massa congue, euismod ipsum. Duis auctor in est ac dignissim.</p>   
                		</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="featured">
                        <img src="../img/featured/featured-06.jpg" class="img-responsive img-circle" alt="Groom"/>
                        <div class="text">
                            <h2>Kesha Martinez</h2>
                            <h4><span><em>Bridesmaid</em></span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor non sem eu faucibus. Aenean pellentesque dui tincidunt, dictum massa congue, euismod ipsum. Duis auctor in est ac dignissim.</p>   
                		</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END SECTION: featured-people -->
    
    <!-- START SECTION: gift-registry -->
    <section id="gift-registry" class="img-bg-4" data-stellar-background-ratio="0.5">
        <div class="container">
        	<div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                	<div class="title-block">
                        <h1><span><em><?php echo Helper::traduc('caixinha'); ?></em></span></h1>
                        <div class="divider"></div>
                        <p><em> Abitab Número de Cuenta </em></p>
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
                        <h1><?php echo Helper::traduc('quer confirmar'); ?> <span><em><?php echo Helper::traduc('presença'); ?></em></span></h1>
                        <div class="divider"></div>
                        <p><em><?php echo Helper::traduzir('por favor,'); ?></em></p>
                    </div>
                    
                </div>
                <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">

                    <form id="ajaxForm" data-toggle="validator">
                        <div class="row bot-mrg-20">
			                <div class="col-md-4 text-center">
                                <input type="checkbox" id="checkbox-1" name="events[]" value="Pre-Wedding Dinner">
                                <label for="checkbox-1" class="checkbox-button"><i class="fa fa-circle-o" aria-hidden="true"></i> Pre-Wedding Dinner</label>
                                <p>Victory Gardens Hall, 11 Grant Ave. Carteret NJ 9851 (732) 841-45 90, (732) 634-13 86 info@emailname.com</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <input type="checkbox" id="checkbox-2" name="events[]" value="Ceremony">
                                <label for="checkbox-2" class="checkbox-button"><i class="fa fa-circle-o" aria-hidden="true"></i> Ceremony</label>
                                <p>Victory Gardens Hall, 11 Grant Ave. Carteret NJ 9851 (732) 841-45 90, (732) 634-13 86 info@emailname.com</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <input type="checkbox" id="checkbox-3" name="events[]" value="Party">
                                <label for="checkbox-3" class="checkbox-button"><i class="fa fa-circle-o" aria-hidden="true"></i> Party</label>
                                <p>Victory Gardens Hall, 11 Grant Ave. Carteret NJ 9851 (732) 841-45 90, (732) 634-13 86 info@emailname.com</p>
                            </div>
			            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea rows="5" class="form-control" name="message" placeholder="Write your message...​" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <button class="btn btn-primary btn-lg" id="ajaxFormSubmit">Asistiré</button>
            	</div>
            </div>
        </div>
    </section>
    <!-- END SECTION: rsvp -->

    <!-- START: footer -->
    <section id="footer" class="img-bg-5" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
					<h1>¡Gracias!</h1>
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
    <script src="../libs/bootstrap-validator/validator.min.js"></script>
	<!-- Theme Main Js file -->
	<script src="../js/theme-main.js"></script>
    <!-- END: scripts -->


  </body>
</html>