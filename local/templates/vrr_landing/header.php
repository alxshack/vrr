<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" /> 	
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/plugins/retina/retina.min.js"></script>
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/plugins/magnific-popup.css" rel="stylesheet" type="text/css">
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/plugins/background.css" rel="stylesheet" type="text/css">
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/plugins/animate.css" rel="stylesheet" type="text/css">
		<link id="changeable-colors" rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css\vitality-turquoise.css">
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/css/vitality-main.css" rel="stylesheet">
		<link href="<?=SITE_TEMPLATE_PATH?>/assets/demo/style-switcher.css" rel="stylesheet">
		<!-- IE8 support for HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page-top">
		
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
	<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/creative/logo.png" class="img-responsive" alt="">
                </a>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
            </div>
        </div>
    </nav>
	<header style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/img/creative/bg-header.jpg');">
        <div class="intro-content">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/creative/profile.png" class="img-responsive img-centered" alt="">
            <div class="brand-name">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."/include/name.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
			</div>
            <hr class="colored">
            <div class="brand-name-subtext">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."/include/studio.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
			</div>
        </div>
        <div class="scroll-down">
            <a class="btn page-scroll" href="#about"><i class="fa fa-angle-down fa-fw"></i></a>
        </div>
  </header>