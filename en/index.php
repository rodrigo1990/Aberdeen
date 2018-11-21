<?php
	error_reporting(0);

	$__SECCIONES = array(
		"home"						=> "Home",
		"nosotros"					=> "Nosotros",
		"marcas"					=> "Nuestras Marcas",
		"contacto"					=> "Contacto",
		"pilsner"					=> "Pilsner",
		"oranjeboom"				=> "Oranjeboom",
		"kronenbourg"				=> "Kronenbourg 1664",
		"fullers"					=> "Fuller's",
		"gulden_draak"				=> "Gulden Draak",
		"czechvar"					=> "Czechvar",
		"weidmann"					=> "Weidmann",
		"coopers"					=> "Coopers",
		"grimbergen"				=> "Grimbergen",
		"piraat"					=> "Piraat",
		"vedett"					=> "Vedett",
		"belhaven"					=> "Belhaven",
		"ponti"						=> "Ponti",
		"duvel"						=> "Duvel",
		"maredsous"					=> "Maredsous",
		"chouffe"					=> "Chouffe",
		"abbot"						=> "Abbot",
		"pocoloco"					=> "Pocoloco",
		"speckled"					=> "Speckled",
		"hertog"					=> "Hertog Jan",
		"krakus"					=> "Krakus",
		"westmalle"					=> "Westmalle",
		"celis_white"				=> "Celis White",
		"casafiesta"				=> "Casa Fiesta",
		"louisiana"					=> "Louisiana Gold",
		"richter"					=> "Richter",
		"santiago"					=> "Santiago Queirolo",
		"inkakola"					=> "Inca Kola",
		"darguner"					=> "DARGUNER",
		"horses"					=> "Inca Kola",
		"flensburger"				=> "Inca Kola",
	);

	if(!$__SECCIONES[$_GET['s']])
	{
		$__SEC = "home";
	}
	else
	{
		$__SEC = $_GET['s'];
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Aberdeen</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!--CSS-->
	<link rel="stylesheet" media="screen" type="text/css" href="css/general.css" />
	<link rel="stylesheet" media="screen" type="text/css" href="css/menu.css" />
	
	<!--Google fonts-->
	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Sail' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Flamenco:400,300' rel='stylesheet' type='text/css'>

	<!--JS-->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function()
		{
			var id = location.search.substring(3);
			$('#'+id).css('border-bottom', '1px solid #AE8C59');
			$('#'+id).css('padding-bottom', '2px');
		});
	</script>

	<!-- the CSS for Smooth Div Scroll -->
	<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />	
	<script src="js/jquery.smoothDivScroll-1.1-min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function() {
			$("div#makeMeScrollable").smoothDivScroll({ autoScroll: "onstart", 
														autoScrollDirection: "backandforth",
														autoScrollStep: 0,
														autoScrollInterval: 15,
														startAtElementId: "startAtMe",
														visibleHotSpots: "always" });

		});
	</script>
	<style type="text/css">
		#makeMeScrollable
		{
			width:100%;
			height: 95px;
			position: relative;
		}
		
		#makeMeScrollable div.scrollableArea *
		{
			position: relative;
			float: left;
			margin: 0px 15px;
			padding: 0;
		}
		.latest_img {
			cursor: pointer;
		}
	</style>
	<!--[if lt IE 8]>
   <style type="text/css">
   li a {display:inline-block;}
   li a {display:block;}
   </style>
   <![endif]-->

</head>
<body <?php if(($__SEC == "home") || ($__SEC == "" )) { ?> style="overflow: hidden;" <?php } ?>>
	<?php if($__SEC == "home") {} else { ?><div class="centra960"><?php } ?><div id="logo"><a href="?s=home"><img src="imagenes/logo.png" alt="" /></a></div><?php if($__SEC == "home") {} else{ ?></div><?php } ?>
	<div id="franja_menu">
		<?php if($__SEC == "home") {} else { ?><div class="centra960"><?php } ?>
			<?php
			/*
			<div id="redes_sociales" <?php if($__SEC == "home") {} else{ ?>style="width: 60px;"<?php } ?>>
				<a href="" style="margin-right: 5px;"><img src="imagenes/facebook.png" alt="" /></a>
				<a href="" ><img src="imagenes/twitter.png" alt="" /></a>
			</div>
			*/
			?>
			<div id="menu">
				<ul id="nav">
					<li>
						<a href="?s=home" id="home">HOME</a>
					</li>
					<li>
						<a href="?s=nosotros" id="nosotros">ABOUT US</a>
					</li>
					<li>
						<a style="cursor: pointer;" id="servicios">PRODUCTS</a>
						<ul id="menudesplegadoconhover" style="margin-left: 30px;">
							<li><a href="?s=oranjeboom" class="producto_menu">Oranjeboom</a></li>
							<li><a href="?s=hertog" class="producto_menu">Hertog Jan</a></li>
							<li><a href="?s=horses" class="producto_menu">3 Horses Malt</a></li>
							<li><a href="?s=darguner" class="producto_menu">Darguner</a></li>
							<li><a href="?s=flensburger" class="producto_menu">Flensburger</a></li>
							<li><a href="?s=weidmann" class="producto_menu">Weidmann</a></li>
							<li><a href="?s=gulden_draak" class="producto_menu">Gulden Draak</a></li>
							<li><a href="?s=westmalle" class="producto_menu">Westmalle</a></li>
							<li><a href="?s=piraat" class="producto_menu">Piraat</a></li>
							<li><a href="?s=vedett" class="producto_menu">Vedett</a></li>
							<li><a href="?s=duvel" class="producto_menu">Duvel</a></li>
							<li><a href="?s=maredsous" class="producto_menu">Maredsous</a></li>
							<li><a href="?s=chouffe" class="producto_menu">La Chouffe</a></li>
							<li><a href="?s=grimbergen" class="producto_menu">Grimbergen</a></li>
							<li><a href="?s=kronenbourg" class="producto_menu">Kronenbourg 1664</a></li>
							<li><a href="?s=speckled" class="producto_menu">Old Speckled Hen</a></li>
							<li><a href="?s=abbot" class="producto_menu">Abbot Ale</a></li>
							<li><a href="?s=czechvar" class="producto_menu">Czechvar</a></li>
							<li><a href="?s=pilsner" class="producto_menu">Pilsner Urquell</a></li>


							<li><a href="?s=belhaven" class="producto_menu">Belhaven</a></li>
							<li><a href="?s=coopers" class="producto_menu">Coopers</a></li>
							<li><a href="?s=inkakola" class="producto_menu">Inca Kola</a></li>
							<li><a href="?s=ponti" class="producto_menu">Ponti</a></li>
							<li><a href="?s=krakus" class="producto_menu">Krakus</a></li>
							<li><a href="?s=pocoloco" class="producto_menu">Pocoloco</a></li>
							<!--  <li><a href="?s=celis_white" class="producto_menu">Celis White</a></li>
							<li><a href="?s=casafiesta" class="producto_menu">Casa Fiesta</a></li>
							<li><a href="?s=louisiana" class="producto_menu">Louisiana Gold</a></li>
							<li><a href="?s=richter" class="producto_menu">Richter</a></li>
							<li><a href="?s=santiago" class="producto_menu">Santiago Queirolo</a></li>
							
							<li><a href="?s=fullers" class="producto_menu">Fuller's</a></li>-->

						</ul>
					</li>
					<li>
						<a href="?s=marcas" id="marcas">OUR BRANDS</a>
					</li>
					<li>
						<a href="?s=contacto" id="contacto">CONTACT US</a>
					</li>
					<li><a style="margin-right: 10px;"><img src="imagenes/facebook.png" alt="" /></a></li>
					<li><a style="margin-right: 5px;"><img src="imagenes/en.png" alt="" /></a></li>
					<li><a style="margin-right: 5px;">|</a></li>
					<li><a style="margin-right: 0px;" href="../index.php"><img src="imagenes/es.png" alt="" /></a></li>
				</ul>
			</div>
			<div class="clear"></div>
		<?php if($__SEC == "home") {} else{ ?></div><?php } ?>
	</div>
	<div id="efecto_secciones"><?php @require_once("secciones/$__SEC.php"); ?><div class="clear"></div></div><br /><br />
	
	<?php
	if(($__SEC == "home") || ($__SEC == "") || ($__SEC == "marcas"))
	{}
	else
	{
		?>
		<div id="franja_logos">
			<div id="logos">
				<div id="makeMeScrollable">
					<div class="scrollingHotSpotLeft"></div>
					<div class="scrollingHotSpotRight"></div>
					<div class="scrollWrapper">
						<div class="scrollableArea">
							<a href="?s=oranjeboom" ><img src="imagenes/logos_nuevos/1.png" alt="" alt="" width="81" height="60" style="border:0;" /></a>
							<a href="?s=kronenbourg" ><img src="imagenes/logos_nuevos/2.png" alt="" alt="" width="71" height="60" style="border:0;" /></a>
							<a href="?s=fullers" ><img src="imagenes/logos_nuevos/3.png" alt="" alt="" width="95" height="60" style="border:0;" /></a>
							<a href="?s=gulden_draak" ><img src="imagenes/logos_nuevos/4.png" alt="" alt="" width="91" height="60" style="border:0;" /></a>
							<a href="?s=czechvar" ><img src="imagenes/logos_nuevos/5.png" alt="" alt="" width="91" height="60" style="border:0;" /></a>
							<a href="?s=weidmann" ><img src="imagenes/logos_nuevos/6.png" alt="" alt="" width="56" height="60" style="border:0;" /></a>
							<a href="?s=coopers" ><img src="imagenes/logos_nuevos/7.png" alt="" alt="" width="81" height="60" style="border:0;" /></a>
							<a href="?s=grimbergen" ><img src="imagenes/logos_nuevos/11.png" alt="" alt="" width="81" height="60" style="border:0;" /></a>
							<a href="?s=piraat" ><img src="imagenes/logos_nuevos/12.png" alt="" alt="" width="86" height="60" style="border:0;" /></a>
							<a href="?s=hertog" ><img src="imagenes/logos_nuevos/13.png" alt="" alt="" width="91" height="60" style="border:0;" /></a>
							<a href="?s=westmalle" ><img src="imagenes/logos_nuevos/8.png" alt="" alt="" width="91" height="60" style="border:0;" /></a>
							<a href="?s=celis_white" ><img src="imagenes/logos_nuevos/9.png" alt="" alt="" width="61" height="60" style="border:0;" /></a>
							<a href="?s=casafiesta" ><img src="imagenes/logos_nuevos/14.png" alt="" alt="" width="106" height="60" style="border:0;" /></a>
							<a href="?s=louisiana" ><img src="imagenes/logos_nuevos/15.png" alt="" alt="" width="106" height="60" style="border:0;" /></a>
							<a href="?s=richter" ><img src="imagenes/logos_nuevos/16.png" alt="" alt="" width="106" height="60" style="border:0;" /></a>
							<a href="?s=santiago" ><img src="imagenes/logos_nuevos/17.png" alt="" alt="" width="101" height="60" style="border:0;" /></a>
							<a href="?s=inkakola" ><img src="imagenes/logos_nuevos/10.png" alt="" alt="" width="91" height="60" style="border:0;" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	?>
</body>
</html>