<!--CSS-->
<link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
		
<!--JS-->
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
<script type="text/javascript">
	jQuery(function($){
				$.supersized({
				
					// Functionality
					slide_interval          :   4000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,		// Speed of transition
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'imagenes/home/oranjeboom.jpg'},
														{image : 'imagenes/home/darguner.jpg'},
														{image : 'imagenes/home/kronenbourg.jpg'},
														{image : 'imagenes/home/fullers.jpg'},
														{image : 'imagenes/home/flensburger.jpg'},
														{image : 'imagenes/home/gulden_draak.jpg'},
														{image : 'imagenes/home/czechvar.jpg'},
														{image : 'imagenes/home/weidmann.jpg'},
														{image : 'imagenes/home/coopers.jpg'},
														{image : 'imagenes/home/grimbergen.jpg'},
														{image : 'imagenes/home/piraat.jpg'},
														{image : 'imagenes/home/hertog.jpg'},
														{image : 'imagenes/home/westmalle.jpg'},
														{image : 'imagenes/home/celis_white.jpg'},
														{image : 'imagenes/home/horses.jpg'},
														{image : 'imagenes/home/casafiesta.jpg'},
														{image : 'imagenes/home/louisiana.jpg'},
														{image : 'imagenes/home/richter.jpg'},
														{image : 'imagenes/home/santiago.jpg'},
														{image : 'imagenes/home/inkakola.jpg'}
												]
					
				});
	});

	$(function()
	{
		$("#home_abre_recomendados").click(function() 
		{
			$('#home_titulo_recomendados').css('display', 'none');
			$('#home_abiertos_recomendados').css('display', 'inline');
			$('#franja_recomendados').css('padding-bottom', '5px');
		})

		$("#home_cierra_recomendados").click(function() 
		{
			$('#home_titulo_recomendados').css('display', 'inline');
			$('#home_abiertos_recomendados').css('display', 'none');
		})
	});
</script>

<!--FLECHAS-->
<a id="prevslide" class="load-item" ></a>
<a id="nextslide" class="load-item"></a>

<div id="frase_home"><img src="imagenes/home/frase.png" alt="" /></div>

<div id="franja_recomendados" style="display:none;">
	<div id="home_titulo_recomendados"><a id="home_abre_recomendados"><img src="imagenes/home/recomendados/titulo.png" alt="" /></a></div>
	<div id="home_abiertos_recomendados">
		<div class="centra960">
			<div class="contiene_recomendado_home" >
				<div class="home_recomendado_foto">
					<?php
					$recomendado1 = rand(1, 4);
					?>
					<img src="imagenes/home/recomendados/<?php echo ($recomendado1); ?>.png" alt="" />
				</div>
				<div class="home_recomendado_texto">
					<div class="titulos_recomendados_textos">NUEVOS PRODUCTOS</div>
					<?php
					if($recomendado1 == 1)
					{
						?>
						<div class="subtitulo_recomendados_textos">Filets de Arenque Richter</div>
						Prob&aacute; nuestra nueva l&iacute;nea de Arenques del B&aacute;ltico Richter; un pr&aacute;ctico "tentempi&eacute;" listo para servir y disponible en cuatro variedades.
						<?php
					}
					else if($recomendado1 == 2)
					{
						?>
						<div class="subtitulo_recomendados_textos">Cervezas Brit&aacute;nicas Fuller&#39;s</div>
						La cervecer&iacute;a londinense Fuller&#39;s Griffin Brewery es hogar de una familia de cervezas reconocidas como unas de las mejores cervezas del mundo. Encontralas en los m&aacute;s exclusivos bares, hoteles y tiendas de nuestro pa&iacute;s.
						<?php
					}
					else if($recomendado1 == 3)
					{
						?>
						<div class="subtitulo_recomendados_textos">Oranjeboom Extra Strong 8,5% & Super Strong 12%</div>
						Nuestra l&iacute;nea de Cervezas Oranjeboom Extra Strong 8,5% y Super Strong 12% invitan a la novedosa y singular experiencia que s&oacute;lo las cervezas de alta graduaci&oacute;n ofrecen.
						<?php
					}
					else if($recomendado1 == 4)
					{
						?>
						<div class="subtitulo_recomendados_textos">Gift-Pack Cerveza Patag&oacute;nica Berlina</div>
						Regal&aacute; o regalate un Gift Pack de Cervezas Artesanales Berlina y podr&aacute;s disfrutar de tres de las mejores cervezas artesanales elaboradas en nuestro pa&iacute;s: una Rubia "Golden Ale", una Roja "India Pale Ale" y una Negra "Foreign Stout"
						<?php
					}
					?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="contiene_recomendado_home">
				<div class="home_recomendado_foto">
					<?php
					$recomendado2 = rand(5, 8);
					?>
					<img src="imagenes/home/recomendados/<?php echo ($recomendado2); ?>.png" alt="" />
				</div>
				<div class="home_recomendado_texto">
					<div class="titulos_recomendados_textos">RECOMENDACIONES</div>
					<?php
					if($recomendado2 == 5)
					{
						?>
						<div class="subtitulo_recomendados_textos">Salsas Rojas Louisiana Gold</div>
						Para amantes del picante. Una mezcla premium de pimientos tabasco y otros seleccionados pimientos para acompa&ntilde;ar y realzar el sabor de tus comidas. Una gota de Louisiana Gold lo hace posible!
						<?php
					}
					else if($recomendado2 == 6)
					{
						?>
						<div class="subtitulo_recomendados_textos">Nuestra Receta de Pisco Sour (Santiago Queirolo)</div>
						A la Coctelera: 3 Onzas (90ml) de Pisco Quebranta Santiago Queirolo | 1 Onza (30ml) de Jarabe de Goma o Almibar | 3/4 Onza (22,5ml) de Jugo de Lima | 8 Cubos de Hielo | 1 Clara de Huevo > Agitar la Coctelera por 8 segundos, servir en dos tiempos, agregar 1 toquecito de Bitter La Angostura sobre la espuma del Pisco Sour servido... y a disfrutarlo! 
						<?php
					}
					else if($recomendado2 == 7)
					{
						?>
						<div class="subtitulo_recomendados_textos">Casa Fiesta Salsa Dip de Guacamole</div>
						Por lejos, nuestro producto favorito de la l&iacute;nea Tex-Mex Casa Fiesta; cuando lo pruebes seguramente va a ser el tuyo tambi&eacute;n. Guacamole Dip de Casa Fiesta. Guacamole Dip de Casa Fiesta, sin comparaciones.
						<?php
					}
					else if($recomendado2 == 8)
					{
						?>
						<div class="subtitulo_recomendados_textos">Cerveza Fuller&#39;s London Porter</div>
						Te recomendamos Fuller&#39;s London Porter ya que es considerada como la cerveza Porter m&aacute;s fina del Mundo. Muestra de ello es la <a href="http://www.fullers.co.uk/rte.asp?id=142" target="_blank" style="text-decoration: none; color: #000; font-weight: bold;">gran cantidad de premios</a> que ha obtenido a nivel internacional  Rica, compleja y de una excepcional profundidad de sabor.
						<?php
					}
					?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div id="home_cierra_recomendados"><img src="imagenes/home/recomendados/cierra.png" alt="" /></div>
		</div>
	</div>
</div>

