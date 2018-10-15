<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 8)]><!-->
<html lang="en-US" class="cmsms_html">
<!--<![endif]-->
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="shortcut icon" href="<?= base_url()?>img/favicon-2.jpg" type="image/x-icon" />

		<title>Blog | Senda Vertical </title>

		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin,latin-ext' type='text/css' media='all' />
		<link rel='stylesheet' href='<?= base_url()?>css/style.css' type='text/css' media='screen, print' />
		<link rel='stylesheet' href='<?= base_url()?>css/adaptive.css' type='text/css' media='screen, print' />
		<link rel='stylesheet' href='<?= base_url()?>css/retina.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url()?>css/ilightbox.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url()?>css/ilightbox-skins/dark-skin.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url()?>css/cmsms-events-style.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url()?>css/cmsms-events-adaptive.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url()?>css/fontello.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url()?>css/animate.css' type='text/css' media='screen' />
		<!--[if lte IE 9]>
			<link rel='stylesheet' href='css/ie.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_fonts.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_colors_primary.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_colors_secondary.css' type='text/css' media='screen' />
		<![endif]-->
		<link rel='stylesheet' href='<?= base_url()?>css/econature.css' />
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oxygen%3A300%2C400%2C700&#038;ver=4.2.1' type='text/css' media='all' />

		<!--script type='text/javascript' src='<?= base_url()?>js/jquery-migrate.min.js'></script-->
                <script type='text/javascript' src='<?= base_url()?>js/jquery.js'></script>
                <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"-->
                <script type="text/javascript">
                    jQuery.noConflict();
                    jQuery(document).ready(function( $ ){
                        $('#previewing0').click(function(){ 
                            $('#foto0').trigger('click'); 
                        });
                        $('#previewing1').click(function(){ 
                            $('#foto1').trigger('click'); 
                        });
                        $('#previewing2').click(function(){ 
                            $('#foto2').trigger('click'); 
                        });
                        $('#previewing3').click(function(){ 
                            $('#foto3').trigger('click'); 
                        });
                    });
                    
                    function validar(elemento,indice){
                        //del elemento seleccionadosubo y actualizo foto del respectivo indice
                        //alert(elemento);
                        indiceChange = indice;
                        //$("#message").empty(); // To remove the previous error message
                        var file = elemento.files[0];
                        var imagefile = file.type;
                        var match= ["image/jpeg","image/png","image/jpg"];
                        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
                        {
                            jQuery('#previewing'+indice).attr('src','<?php echo base_url();?>img/profile.jpg');
                            //$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                            return false;
                        }
                        else
                        {
                            var reader = new FileReader();
                            reader.onload = imageIsLoaded;
                            reader.readAsDataURL(elemento.files[0]);
                        }
                    }
                    
                    function imageIsLoaded(e) {
                        //$("#foto"+indiceChange).css("color","green");
                        //$('#image_preview').css("display", "none");
                        jQuery('#previewing'+indiceChange).attr('src', e.target.result);
                        //$('#previewing').attr('width', '250px');
                        //$('#previewing').attr('height', '230px');
                    }
                    </script>
                    
                </script>

                <script type='text/javascript' src='<?= base_url()?>js/jsLibraries.min.js'></script>
		<script type='text/javascript' src='<?= base_url()?>js/jquery.iLightBox.min.js'></script>
		<script type='text/javascript' src='<?= base_url()?>js/jqueryLibraries.min.js'></script>
                
                    
                <script type='text/javascript'>
		/* <![CDATA[ */
			var cmsms_script = {
				"ilightbox_skin":"dark",
				"ilightbox_path":"vertical",
				"ilightbox_infinite":"0",
				"ilightbox_aspect_ratio":"1",
				"ilightbox_mobile_optimizer":"1",
				"ilightbox_max_scale":"1",
				"ilightbox_min_scale":"0.2",
				"ilightbox_inner_toolbar":"0",
				"ilightbox_smart_recognition":"0",
				"ilightbox_fullscreen_one_slide":"0",
				"ilightbox_fullscreen_viewport":"center",
				"ilightbox_controls_toolbar":"1",
				"ilightbox_controls_arrows":"0",
				"ilightbox_controls_fullscreen":"1",
				"ilightbox_controls_thumbnail":"1",
				"ilightbox_controls_keyboard":"1",
				"ilightbox_controls_mousewheel":"1",
				"ilightbox_controls_swipe":"1",
				"ilightbox_controls_slideshow":"0",
				"ilightbox_close_text":"Close",
				"ilightbox_enter_fullscreen_text":"Enter Fullscreen (Shift+Enter)",
				"ilightbox_exit_fullscreen_text":"Exit Fullscreen (Shift+Enter)",
				"ilightbox_slideshow_text":"Slideshow",
				"ilightbox_next_text":"Next",
				"ilightbox_previous_text":"Previous",
				"ilightbox_load_image_error":"An error occurred when trying to load photo.",
				"ilightbox_load_contents_error":"An error occurred when trying to load contents.",
				"ilightbox_missing_plugin_error":"The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."
			};
		/* ]]> */
		</script>
		<script type='text/javascript' src='<?= base_url()?>js/jquery.easing.min.js?ver=1.3.0'></script>
		<script type='text/javascript' src='<?= base_url()?>js/jquery.script.js'></script>
		<script type='text/javascript' src='<?= base_url()?>js/jquery.tweet.min.js'></script>
		<script type='text/javascript' src='<?= base_url()?>js/jquery.isotope.min.js'></script>
		<script type='text/javascript' src='<?= base_url()?>js/jquery.isotope.mode.js'></script>
                    
		
		<style type="text/css">
			.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list {
			overflow-y:auto;
			}

			.header_mid_inner .logo {
				position:static;
			}
			#footer.cmsms_footer_default .footer_inner {
				min-height:450px;
			}
			
			.fixed_footer #main {
				margin-bottom:450px;
			}
			
			.headline_outer {
				background-image: url(img/images/bg-big-water.jpg); 
				background-repeat:repeat;
				background-attachment:fixed;
				background-size:cover;
			}
				
			.headline_color {
				background-color:#000000;
				opacity:0;
			}
			
			.headline_aligner {
				min-height:100px;
			}
			
			#cmsms_row_title_1 h3,
			#cmsms_row_title_2 h3,
			#cmsms_row_title_3 h3,
			#cmsms_row_title_4 h3{
				margin: 0;
				text-transform: uppercase;
			}
			
			#cmsms_row_title_1,
			#cmsms_row_title_2,
			#cmsms_row_title_3,
			#cmsms_row_title_4{
				padding-top: 50px; 
				padding-bottom: 50px; 
				border-top: 1px solid #dadada;
				border-bottom: 1px solid #dadada;
			} 
			
			#cmsms_row_55533402e9ab5 .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_55533402e9ab5 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			
			#cmsms_heading_55533402e9d9b, #cmsms_heading_55533402e9d9b a,
			#cmsms_heading_55533402efefb, #cmsms_heading_55533402efefb a,
			#cmsms_heading_55533402f170d, #cmsms_heading_55533402f170d a{ 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:20px; 
			} 
			
			#cmsms_row_55533402ef970 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_55533402ef970 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			
			#cmsms_divider_55533402efbb2 { 
				padding-top:30px; 
				margin-bottom:70px; 
			} 
			
			#cmsms_row_55533402efcad .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_55533402efcad .cmsms_row_outer_parent { 
				padding-bottom: 80px; 
			} 
			
			#cmsms_row_5552f7fc00cb1 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5552f7fc00cb1 .cmsms_row_outer_parent { 
				padding-bottom: 50px; 
			} 
			
			#cmsms_heading_5552f7fc00f25, 
			#cmsms_heading_5552f7fc00f25 a { 
				color:#72757c; color:rgba(114, 117, 124, 1);
				font-size:34px; 
				text-align:center; 
				font-weight:300; 
				font-style:normal; 
				margin-top:50px; 
				margin-bottom:20px; 
			} 
			
			#cmsms_row_555212697abbb { 
				background-color: #ffffff; 
				background-image: url(img/images/bg-grass-2.jpg); 
				background-position: bottom center; 
				background-repeat: no-repeat; 
				background-attachment: scroll; 
				background-size: contain; 
			} 
			
			#cmsms_row_555212697abbb .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_555212697abbb .cmsms_row_outer_parent { 
				padding-bottom: 250px; 
			} 
			
			#cmsms_row_555212697bbe6 .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_555212697bbe6 .cmsms_row_outer_parent { 
				padding-bottom: 50px; 
			} 
			
			#cmsms_heading_5552f7fc020f4, 
			#cmsms_heading_5552f7fc020f4 a { 
				color:#72757c; color:rgba(114, 117, 124, 1);
				font-size:34px; 
				text-align:center; 
				font-weight:300; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:20px; 
			}
			
			#cmsms_stat_555212697c017 .cmsms_stat_counter { 
				color:#57cbe1; 
			} 

			#cmsms_stat_555212697c0b2 .cmsms_stat_counter { 
				color:#7fe092; 
			} 

			#cmsms_stat_555212697c14e .cmsms_stat_counter { 
				color:#d0f275; 
			} 
			
			#cmsms_row_555212697c32b { 
				background-color: #f4f4f4; 
			} 

			#cmsms_row_555212697c32b .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_555212697c32b .cmsms_row_outer_parent { 
				padding-bottom: 50px; 
			} 
			
			.cmsms_stats.shortcode_animated #cmsms_stat_555212697c641.cmsms_stat { 
				width:88%; 
			} 

			#cmsms_stat_555212697c641 .cmsms_stat_inner { 
				background-color:#57cbe1; 
				color:#ffffff; 
			} 

			.cmsms_stats.shortcode_animated #cmsms_stat_555212697c6e2.cmsms_stat { 
				width:68%; 
			} 

			#cmsms_stat_555212697c6e2 .cmsms_stat_inner { 
				background-color:#62e0c1; 
				color:#ffffff; 
			} 

			.cmsms_stats.shortcode_animated #cmsms_stat_555212697c76c.cmsms_stat { 
				width:84%; 
			} 

			#cmsms_stat_555212697c76c .cmsms_stat_inner { 
				background-color:#7fe092; 
				color:#ffffff; 
			} 

			.cmsms_stats.shortcode_animated #cmsms_stat_555212697c7f2.cmsms_stat { 
				width:75%; 
			} 

			#cmsms_stat_555212697c7f2 .cmsms_stat_inner { 
				background-color:#b7f275; 
				color:#ffffff; 
			} 

			.cmsms_stats.shortcode_animated #cmsms_stat_555212697c875.cmsms_stat { 
				width:77%; 
			} 

			#cmsms_stat_555212697c875 .cmsms_stat_inner { 
				background-color:#d0f275; 
				color:#ffffff; 
			} 
			
			#cmsms_row_55544abfb78d1 { 
				background-image: url(img/images/bg-big-water.jpg); 
				background-position: top center; 
				background-repeat: no-repeat; 
				background-attachment: scroll; 
				background-size: cover; 
			} 

			#cmsms_row_55544abfb78d1 .cmsms_row_outer_parent { 
				padding-top: 75px; 
			} 

			#cmsms_row_55544abfb78d1 .cmsms_row_outer_parent { 
				padding-bottom: 75px; 
			} 
			 
			#cmsms_heading_55544abfb8187, #cmsms_heading_55544abfb8187 a { 
				color:#ffffff; color:rgba(255, 255, 255, 1);
				text-align:left; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:20px; 
			} 
			
			#cmsms_clients_55544abfb8253 .cmsms_clients_item { height:140px; line-height:140px; } 
			#cmsms_clients_55544abfb8253 .cmsms_clients_item a { line-height:140px; } 
			
			#cmsms_clients_55544abfb9f83 .cmsms_clients_item { height:170px; line-height:170px; } 
			#cmsms_clients_55544abfb9f83 .cmsms_clients_item a { line-height:170px; } 
			
			#cmsms_row_55544abfb9cdf .cmsms_row_outer_parent { 
				padding-top: 75px; 
			} 

			#cmsms_row_55544abfb9cdf .cmsms_row_outer_parent { 
				padding-bottom: 75px; 
			} 
			
			#cmsms_heading_55544abfb9eef, #cmsms_heading_55544abfb9eef a { 
				text-align:left; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:20px; 
			} 
			
			#cmsms_row_55544abfbb4dc { 
				background-image: url(img/images/bg-big-water.jpg); 
				background-position: top center; 
				background-repeat: no-repeat; 
				background-attachment: scroll; 
				background-size: cover; 
			} 

			#cmsms_row_55544abfbb4dc .cmsms_row_outer_parent { 
				padding-top: 75px; 
			} 

			#cmsms_row_55544abfbb4dc .cmsms_row_outer_parent { 
				padding-bottom: 75px; 
			} 
			
			#cmsms_heading_55544abfbb9bf, #cmsms_heading_55544abfbb9bf a { 
				color:#ffffff; color:rgba(255, 255, 255, 1);
				text-align:left; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:20px; 
			} 
			
			#cmsms_clients_55544abfbba60 .cmsms_clients_item { height:140px; line-height:140px; } 
			#cmsms_clients_55544abfbba60 .cmsms_clients_item a { line-height:140px; } 
			
			#cmsms_row_55544abfbd039 .cmsms_row_outer_parent { 
				padding-top: 75px; 
			} 

			#cmsms_row_55544abfbd039 .cmsms_row_outer_parent { 
				padding-bottom: 75px; 
			} 
			
			#cmsms_heading_55544abfbd262, #cmsms_heading_55544abfbd262 a { 
				text-align:left; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:20px; 
			} 
			
			#cmsms_clients_55544abfbd2fc .cmsms_clients_item { height:170px; line-height:170px; } 
			#cmsms_clients_55544abfbd2fc .cmsms_clients_item a { line-height:170px; }
			
			#cmsms_row_5554657d7fed1 .cmsms_row_outer_parent { 
				padding-top: 75px; 
			} 

			#cmsms_row_5554657d7fed1 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			
			#cmsms_row_5554657d804a3 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5554657d804a3 .cmsms_row_outer_parent { 
				padding-bottom: 50px; 
			}
			
			#cmsms_divider_5554657d806d6,
			#cmsms_divider_5554657d80f0d { 
				padding-top:50px; 
				margin-bottom:20px; 
			} 
			
			#cmsms_row_5554657d80816 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5554657d80816 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			
			#cmsms_heading_5554657d80a81, #cmsms_heading_5554657d80a81 a,
			#cmsms_heading_5554657d812a5, #cmsms_heading_5554657d812a5 a,
			#cmsms_heading_5554657d801f6, #cmsms_heading_5554657d801f6 a{ 
				text-align:center; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:40px; 
			} 
			
			#cmsms_row_5554657d80ce6 .cmsms_row_outer_parent,
			#cmsms_row_5554657d81044 .cmsms_row_outer_parent{ 
				padding-top: 0px; 
				padding-bottom: 50px; 
			} 
                        .cmsms_gallery li {
                            margin-bottom: 4%;
                             -webkit-transform: scale(1); 
                            -moz-transform: scale(1);
                             transform: scale(1); 
                            opacity: 0.5;
                        }
		</style>
                

	</head>
	<body>
	<!-- _________________________ Start Page _________________________ -->
		<div id="page" class="csstransition cmsms_liquid fixed_header hfeed site">
	<!-- _________________________ Start Main _________________________ -->
			<div id="main">
	<!-- _________________________ Start Header _________________________ -->
				<?php $this->load->view('admin/menuAdm'); ?>

	<!-- _________________________ Finish Header _________________________ -->
	<!-- _________________________ Start Middle _________________________ -->
				<section id="middle">
					
					<div class="middle_inner">
	<!--_________________________ Start Content _________________________ -->
						<div id="cmsms_row_title_1" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<h3 class="cmsms_heading align_left cmsms_valid_title">Crea una nueva entrada</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
        
                                                <div id="cmsms_row_5550b989a6296" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin cmsms_11">
											<div class="cmsms_column one_first">
												<div class="cmsms_text">
                                                                                                <br>
                                                                                                    <p>Una herramienta para que pueda agregar <strong>diferentes entradas al blog</strong>, por favor siga las instrucciones para crear una nueva entrada.</p>
												</div>
												<div id="cmsms_divider_5550b989a6913" class="cmsms_divider solid"></div>
                                                                                                <br>                                                                                                
												<h3 id="cmsms_heading_5550b989a69ca" class="cmsms_heading">Primeramente algunos datos...</h3>												
												<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading"></h3>
												<div class="cmsms_contact_form">
													<div class="cmsms-form-builder">														
                                                                                                            <form method="post" id="formdatos" enctype="multipart/form-data">
															
															<div class="form_info cmsms_input one_half">
																<label for="contact_email">Titulo del blog</label>
																<div class="form_field_wrap">
																	<input type="text" name="titulo" id="titulo" value="" size="35">
																</div>
															</div>
															<div class="form_info cmsms_input one_half">
																<label for="cmsms_your_phone_number_is">Autor</label>
                                                                                                                                <div class="form_field_wrap">
																	<select name="autor" id="autor">
                                                                                                                                    <?php foreach ($admin as $value) { ?>
                                                                                                                                        <option value="<?= $value->id ?>"><?= $value->nombre ?></option>
	                                                                                                                            <?php } ?>
                                                                                                                                    </select>
																</div>
																<div class="cl"></div>
																<!--div class="form_field_wrap">
																	<input type="text" name="cmsms_your_phone_number_is" id="cmsms_your_phone_number_is" value="" size="35" class="validate[custom[number]]">
																</div-->
															</div>
                                                                                                                        <div class="form_info cmsms_input one_half">
																<label for="cmsms_your_phone_number_is">Categoría</label>
                                                                                                                                <div class="form_field_wrap">
                                                                                                                                    <select name="categoria" id="categoria">
                                                                                                                                    <?php foreach ($servicios as $value) { ?>
                                                                                                                                        <option value="<?= $value->id ?>"><?= $value->descripcion ?></option>
	                                                                                                                            <?php } ?>
                                                                                                                                    </select>
																</div>
																<div class="cl"></div>
																<!--div class="form_field_wrap">
																	<input type="text" name="cmsms_your_phone_number_is" id="cmsms_your_phone_number_is" value="" size="35" class="validate[custom[number]]">
																</div-->
															</div>
                                                                                                                        <div class="form_info cmsms_input">
                                                                                                                            <!--div id="cmsms_divider_5550b989a6913" class="cmsms_divider solid"></div-->
                                                                                                                            <div class="cl"><br></div>
                                                                                                                            <h3 id="cmsms_heading_5550b989a69ca" class="cmsms_heading">Ahora agrega algunas imágenes...</h3>												
                                                                                                                            <div class="cmsms_text">
                                                                                                                                
                                                                                                                                <p>Da clic en cada recuadro para agregar una imagen <strong>las fotos deben ser de 1920 x 670 px</strong></p>
                                                                                                                            </div>
                                                                                                                        </div>                                                                                                                        
                                                                                                                        <div class="form_info">
                                                                                                                            <div class="cmsms_gallery">
                                                                                                                                <ul>
                                                                                                                                    <li class="one_half">
                                                                                                                                        <input type="file" value="Actualizar banner" name="foto0" id="foto0" onchange="validar(this,0);" style="display:none"/>
                                                                                                                                            <figure>
                                                                                                                                                <img id="previewing0" width="300" height="238" src="../LayerSlider/img/bg.jpg" class="attachment-medium" alt="life" />                                                                                                                                                
                                                                                                                                            </figure>
                                                                                                                                    </li>
                                                                                                                                    <li class="one_half">
                                                                                                                                        <input type="file" value="Actualizar banner" name="foto1" id="foto1" onchange="validar(this,1);" style="display:none"/>
                                                                                                                                            <figure>                                                                                                                                                        
                                                                                                                                                <img id="previewing1" width="300" height="238" src="../LayerSlider/img/bg.jpg" class="attachment-medium" alt="life" />                                                                                                                                                       
                                                                                                                                            </figure>
                                                                                                                                    </li>
                                                                                                                                    <li class="one_half">
                                                                                                                                        <input type="file" value="Actualizar banner" name="foto2" id="foto2" onchange="validar(this,2);" style="display:none"/>
                                                                                                                                            <figure>
                                                                                                                                                <img id="previewing2" width="300" height="238" src="../LayerSlider/img/bg.jpg" class="attachment-medium" alt="white-tiger-1" />
                                                                                                                                            </figure>
                                                                                                                                    </li>
                                                                                                                                    <li class="one_half">
                                                                                                                                        <input type="file" value="Actualizar banner" name="foto3" id="foto3" onchange="validar(this,3);" style="display:none"/>
                                                                                                                                            <figure>                                                                                                                                                        
                                                                                                                                                <img id="previewing3" width="300" height="238" src="../LayerSlider/img/bg.jpg" class="attachment-medium" alt="ocean-1" />                                                                                                                                                        
                                                                                                                                            </figure>
                                                                                                                                    </li>                                                                                                                                        
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form_info cmsms_input">
                                                                                                                            <!--div id="cmsms_divider_5550b989a6913" class="cmsms_divider solid"></div-->
                                                                                                                            <h3 id="cmsms_heading_5550b989a69ca" class="cmsms_heading">Por último agrega el contenido...</h3>												
                                                                                                                            <div class="cmsms_text">                                                                                                                                
                                                                                                                                <p>En el siguiente recuadro agregue el texto que se visualizará en el blog. <strong>Recuerda colocar espacios, acentos y saltos de línea</strong></p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form_info cmsms_textarea">
                                                                                                                            <label for="contact_message_1"></label>
                                                                                                                            <div class="form_field_wrap">
                                                                                                                                    <textarea name="texto" id="texto" cols="100" rows="10" tabindex="13" class="validate[required,minSize[3]]"></textarea>
                                                                                                                            </div>
															</div>
                                                                                                                        <div class="form_info submit_wrap" style="text-align:right; padding-bottom: 30px; padding-top: 30px;">
                                                                                                                            <a id="previewBlog" class="cmsms_button">
                                                                                                                                <span>Previsualizar</span>
                                                                                                                            </a>
                                                                                                                            <a id="uploadData" class="cmsms_button">
                                                                                                                                <span>Subir nueva entrada</span>
                                                                                                                            </a>                                                                                                                                
															</div>												
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
												
						<div class="cl"></div>                                                

	<!-- _________________________ Finish Content _________________________ -->
					</div>
				</section>
				<!-- _________________________ Start Bottom _________________________ -->
				<?php //$this->load->view('footer'); ?>
	<!-- _________________________ Finish Bottom _________________________ -->
	<!-- _________________________ Finish Middle _________________________ -->
				<a href="javascript:void(0);" id="slide_top" class="cmsms-icon-up-open-mini"></a>
			</div>
	<!-- _________________________ Finish Main _________________________ -->
	<!-- _________________________ Start Footer _________________________ -->
			<?php $this->load->view('nowosc'); ?>   
	<!-- _________________________ Finish Footer _________________________ -->
		</div>
	<!-- _________________________ Finish Page _________________________ -->

        
        <script>
        
            jQuery("#previewBlog").click(function(e){
                e.preventDefault();
                var formData = new FormData(jQuery("#formdatos")[0]);
                
               jQuery.ajax({
                   url:'<?= base_url()?>admin/saveDataBlog',
                   data:formData,
                   contentType: false,       // The content type used when sending data to the server.
                   cache: false,             // To unable request pages to be cached
                   processData:false, 
                   type:'POST',
                   success: function(data){
                       //alert('bb');
                       window.location.href = "<?= base_url() ?>admin/previewblog";
                   }
               });
            });
        
            jQuery("#uploadData").click(function(e){
                e.preventDefault();
                //alert
                var a = confirm("¿Deseas guardar el blog?");
                if(a){
                   jQuery.ajax({
                   url:'<?= base_url()?>admin/saveDataBlog',
                   data:formData,
                   contentType: false,       // The content type used when sending data to the server.
                   cache: false,             // To unable request pages to be cached
                   processData:false, 
                   type:'POST',
                   success: function(data){
                       //alert('bb');
                       jQuery.ajax({
                            url:'<?= base_url()?>admin/saveBlog',
                            data:{},
                            contentType: false,       // The content type used when sending data to the server.
                            cache: false,             // To unable request pages to be cached
                            processData:false, 
                            type:'POST',
                            success: function(data){
                                //alert('bb');
                                window.location.href = "<?= base_url() ?>admin/blog"
                            }
                        });
                    }
                    });
                }
            });
        
        </script>
	</body>
</html>
