<?php 
define('ds', DIRECTORY_SEPARATOR);
require_once('inc'.ds.'helper.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marttinda Silveira - MachiMorales">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo Helper::traduc('title-main') ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo Helper::base_path();?>css/bootstrap.min.css">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo Helper::base_path();?>css/themes_base_jquery-ui.css">

    <!-- TimeCircles-countdown -->
    <link rel="stylesheet" href="<?php echo Helper::base_path();?>libs/TimeCircles-countdown/TimeCircles.css">

    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="<?php echo Helper::base_path();?>libs/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo Helper::base_path();?>libs/owl-carousel/owl.theme.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo Helper::base_path();?>libs/magnific-popup/magnific-popup.css">

    <!-- Loading Rolling -->
    <link rel="stylesheet" href="<?php echo Helper::base_path();?>libs/loading/rolling.css">

    <!-- Fonts -->
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Oswald:400,300,700'>
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,300italic,400italic,700italic,600italic,800italic'>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="<?php echo Helper::base_path();?>css/font-awesome.min.css">

    <!-- Theme Main Style -->
    <link rel="stylesheet" href="<?php echo Helper::base_path();?>css/theme-style.css">
    
    <!--========================Color Variant====================-->
    <link rel="stylesheet" type="text/css" href="<?php echo Helper::base_path();?>css/colors/pink.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>