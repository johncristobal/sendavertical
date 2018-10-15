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
		<link rel="shortcut icon" href="img/favicon-2.jpg" type="image/x-icon" />
		
		<title>Login</title>
		
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin,latin-ext' type='text/css' media='all' />
		<link rel="stylesheet" type="text/css" href="<?= base_url()?>css/settings.css" media="screen" />
		<link rel='stylesheet' href='<?= base_url()?>css/style.css' />
		<link rel='stylesheet' href='<?= base_url()?>css/adaptive.css' />
		<link rel='stylesheet' href='<?= base_url()?>css/retina.css' />
		<link rel='stylesheet' href='<?= base_url()?>css/ilightbox.css' />
		<link rel='stylesheet' href='<?= base_url()?>css/ilightbox-skins/dark-skin.css' />
		<link rel='stylesheet' href='<?= base_url()?>css/cmsms-events-style.css' />
		<link rel='stylesheet' href='<?= base_url()?>css/cmsms-events-adaptive.css' />
		<link rel='stylesheet' href='<?= base_url()?>css/fontello.css' />
		<link rel='stylesheet' href='<?= base_url()?>css/animate.css' />
		<link rel='stylesheet' href='<?= base_url()?>css/jquery.isotope.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url()?>css/contact-form-style.css' type='text/css' media='screen' />
		<!--[if lte IE 9]>
			<link rel='stylesheet' href='css/ie.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_fonts.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_colors_primary.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_colors_secondary.css' type='text/css' media='screen' />
		<![endif]-->
		<link rel='stylesheet' href='<?= base_url()?>css/econature.css' />
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oxygen%3A300%2C400%2C700&#038;ver=4.2' type='text/css' media='all' />
		
		<script type='text/javascript' src='<?= base_url()?>js/jquery.js'></script>
		<script type='text/javascript' src='<?= base_url()?>js/jquery-migrate.min.js'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>		
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
			
			.headline_color {
				background-color:#000000;
				opacity:0;
			}
			
			.headline_aligner {
				min-height:70px;
			}
			
			#cmsms_row_555091c556a5e .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_555091c556a5e .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 

			#cmsms_row_555091c556a5e .cmsms_row_inner.cmsms_row_fullwidth { 
				padding-left:0%; 
			} 
			#cmsms_row_555091c556a5e .cmsms_row_inner.cmsms_row_fullwidth { 
				padding-right:0%; 
			} 

			#google_map_555091c556dfc{
				height: 400px;
			}
			 
			#cmsms_row_555091c556fa4 .cmsms_row_outer_parent { 
				padding-top:25px; 
			} 

			#cmsms_row_555091c556fa4 .cmsms_row_outer_parent { 
				padding-bottom: 25px; 
			} 
			 
			#cmsms_heading_555091c557200, #cmsms_heading_555091c557200 a { 
				font-size:24px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:20px; 
			} 
			 
			#cmsms_heading_555091c5584b3, #cmsms_heading_555091c5584b3 a { 
				font-size:24px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:38px; 
			} 
			 #cmsms_icon_list_items_555091c558691 { 
				padding-left:38px; 
			} 

			#cmsms_icon_list_items_555091c558691 .cmsms_icon_list_item:before { 
				font-size:18px; 
				left:-38px; 
			} 

			.cmsms_icon_list_items #cmsms_icon_list_item_555091c5587e4:before { 
				color:#4ecdc4; 
			} 

			.cmsms_icon_list_items #cmsms_icon_list_item_555091c558872:before { 
				color:#58cf90; 
			} 

			.cmsms_icon_list_items #cmsms_icon_list_item_555091c5588fb:before { 
				color:#58cf90; 
			} 
			 
			#cmsms_row_555091c558a73 { 
				background-image: url(img/images/bg-big-sky.jpg); 
				background-position: top center; 
				background-repeat: repeat-y; 
				background-attachment: scroll; 
				background-size: cover; 
			} 

			#cmsms_row_555091c558a73 .cmsms_row_outer_parent { 
				padding-top: 40px; 
			} 

			#cmsms_row_555091c558a73 .cmsms_row_outer_parent { 
				padding-bottom: 20px; 
			}
                        .headline_outer {
                            background-image: url(<?= base_url()?>img/tierra2.png);
                            background-repeat: repeat;
                            background-attachment: fixed;
                            background-size: cover;
                        }
                        
                        .headline_color {
                            background-color: #000000;
                            opacity: 0;
                        }
                        .headline_aligner {
                            min-height: 150px;
                        }
                        .cmsms_icon_box.cmsms_box_colored{
                            background-color: rgba(38, 121, 0,0.8);
                        }
		</style>
	</head>
	<body>
<!-- _________________________ Start Page _________________________ -->
		<div id="page" class="csstransition cmsms_liquid fixed_header hfeed site">
<!-- _________________________ Start Main _________________________ -->
			<div id="main">
			<!-- _________________________ Start Header _________________________ -->
			<!-- _________________________ Finish Header _________________________ -->

				
			<!-- _________________________ Start Middle _________________________ -->
				<section id="">
					<div class="headline cmsms_color_scheme_first">
						<div class="headline_outer">
							<div class="headline_color"></div>
							<div class="headline_inner align_center">
								<div class="headline_aligner"></div><div class="headline_text headline_subtitle"><h1 class="entry-title">Iniciar sesiòn</h1></div>
							</div>
						</div>
					</div>
                                        <!--div class="headline cmsms_color_scheme_default">
						<div class="headline_outer">
							<div class="headline_color"></div>
							<div class="headline_inner align_left">
								<div class="headline_aligner"></div><div class="headline_text"><h1 class="entry-title">Contacto</h1></div>
							</div>
						</div>
					</div-->
          <br>
					<div class="middle_inner">
						<div id="cmsms_row_555091c556fa4" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column ">
												<!-- <h3 id="cmsms_heading_555091c557200" class="cmsms_heading">Iniciar Sesión</h3> -->
												<div class="cmsms_contact_form">
													<div class="cmsms-form-builder">
														<div id="cmsms_row_555310a3f40ff" class="cmsms_row cmsms_color_scheme_default">
                                                                                                                    <div class="cmsms_row_outer_parent">
                                                                                                                            <div class="cmsms_row_outer">
                                                                                                                                    <div class="cmsms_row_inner">
                                                                                                                                            <div class="cmsms_row_margin cmsms_131313">
                                                                                                                                                    <div class="cmsms_column one_third fadeInUp animated" data-animation="fadeInUp">
                                                                                                                                                            <!--div id="cmsms_icon_box_555310a400160" class="cmsms_icon_box cmsms_box_colored cmsms-icon-pagelines shortcode_animated">
                                                                                                                                                                    <div class="icon_box_inner">
                                                                                                                                                                            <h3 class="cmsms_valid_title">Fresh &amp; New</h3>
                                                                                                                                                                            <div class="icon_box_text">
                                                                                                                                                                                    <p>Etiam venenatis tortor odio, at pellentesque neque tincidunt ut. Aenean a diam pulvinar, convallis diam eget, mollis lorem. In id neque ante. Mauris felis neque, tempus a scelerisque in, ultrices non velit. Aenean ac dui vitae odio condimentum congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                                                                                                                                            </div>
                                                                                                                                                                    </div>
                                                                                                                                                            </div-->
                                                                                                                                                    </div>
                                                                                                                                                    <div class="cmsms_column one_third fadeInUp animated" data-animation="fadeInUp" data-delay="50">
                                                                                                                                                            <div id="cmsms_icon_box_555310a4004c7" class="cmsms_icon_box cmsms_box_colored shortcode_animated">
                                                                                                                                                                    <div class="icon_box_inner">
                                                                                                                                                                        <form action="<?= base_url()?>Admin/login" method="post" id="contactform">
                                                                                                                                                                            <div class="form_info cmsms_input">
                                                                                                                                                                                    <label for="contact_name">Correo <span class="color_3">*</span></label>															
                                                                                                                                                                                    <div class="form_field_wrap">
                                                                                                                                                                                        <input  type="text" name="correo" id="correo" value="" size="35" tabindex="3"/>
                                                                                                                                                                                        <?php echo form_error('correo'); ?>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <br>
                                                                                                                                                                                    <label for="password">Contraseña <span class="color_3">*</span></label>

                                                                                                                                                                                    <div class="form_field_wrap">
                                                                                                                                                                                        <input type="password" name="password" id="password" value="" size="35" tabindex="4"  />
                                                                                                                                                                                        <?php echo form_error('password'); ?>	
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <label style="color:#d9e687;font-size: 18px;"><?php if(isset($error)){echo $error;}?></label>
                                                                                                                                                                                    <div class="form_info submit_wrap" style="text-align:center">
                                                                                                                                                                                    <input type="submit" class="cmsms_button" value="Iniciar" tabindex="8">
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <br>
                                                                                                                                                                                    <label ><a href="#" style="color:#f3f4f4; font-size: 18px;" data-toggle="modal" data-target="#myModal" style="text-align:center">¿Olvidaste la contraseña?</a></label>
                                                                                                                                                                                    
                                                                                                                                                                            </div>

                                                                                                                                                                    </form>
                                                                                                                                                                            <!--h3 class="cmsms_valid_title">Eco Fuel</h3>
                                                                                                                                                                            <div class="icon_box_text">
                                                                                                                                                                                    <p>Etiam venenatis tortor odio, at pellentesque neque tincidunt ut. Aenean a diam pulvinar, convallis diam eget, mollis lorem. In id neque ante. Mauris felis neque, tempus a scelerisque in, ultrices non velit. Aenean ac dui vitae odio condimentum congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                                                                                                                                            </div-->
                                                                                                                                                                    </div>
                                                                                                                                                            </div>
                                                                                                                                                    </div>
                                                                                                                                                    <!--div class="cmsms_column one_third fadeInUp animated" data-animation="fadeInUp" data-delay="100">
                                                                                                                                                            <div id="cmsms_icon_box_555310a400811" class="cmsms_icon_box cmsms_box_colored cmsms-icon-globe-1 shortcode_animated">
                                                                                                                                                                    <div class="icon_box_inner">
                                                                                                                                                                            <h3 class="cmsms_valid_title">Earth Saving</h3>
                                                                                                                                                                            <div class="icon_box_text">
                                                                                                                                                                                    <p>Etiam venenatis tortor odio, at pellentesque neque tincidunt ut. Aenean a diam pulvinar, convallis diam eget, mollis lorem. In id neque ante. Mauris felis neque, tempus a scelerisque in, ultrices non velit. Aenean ac dui vitae odio condimentum congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                                                                                                                                            </div>
                                                                                                                                                                    </div>
                                                                                                                                                            </div>
                                                                                                                                                    </div-->
                                                                                                                                            </div>
                                                                                                                                    </div>
                                                                                                                            </div>
                                                                                                                    </div>
						</div>
														
														<!-- Modal -->
														<div class="modal fade" id="myModal" role="dialog">
															<div class="modal-dialog">
															<!--form action="<?=base_url()?>Admin/recuperar" method="post"--> 
                               <form id="recuperarpass" method="post"> 
																<!-- Modal content-->
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">&times;</button>
																		<h4 class="modal-title">Recuperar Contraseña</h4>
																	</div>
																	<div class="modal-body">
																<label for="contact_name">Correo<span class="color_3">*</span></label>															
																<div class="form_field_wrap">
																	<input  type="text" name="correo" id="correorecover" value="" size="35" tabindex="3"/>
																</div>
																</div>
																<div class="form_info submit_wrap">
																<input type="submit" class="cmsms_button" value="Enviar" tabindex="8">		
													
																</div>
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
							</div>
						</div>
                                                <?php $this->load->view('footer') ?>

				<!-- _________________________ Finish Content _________________________ -->
					</div>
				</section>
				<!-- _________________________ Finish Middle _________________________ -->
			<a href="javascript:void(0);" id="slide_top" class="cmsms-icon-up-open-mini"></a>
			</div>
<!-- _________________________ Finish Main _________________________ -->
<!-- _________________________ Start Footer _________________________ -->
			<?php $this->load->view('nowosc') ?>

<!-- _________________________ Finish Footer _________________________ -->
		</div>
                <script type="text/javascript">
                    $("#recuperarpass").on("submit",function(){
                       event.preventDefault();
                       var mail = $("#correorecover").val();
                       $.ajax({
                           url: "<?=base_url()?>Admin/recuperar",
                           data: {correo:mail},
                           type: "post",
                           success: function(res){
                               if(res != "No existe el correo en nuestra base de datos"){
                                   alert(res);
                                   location.reload();
                               }else{
                                    alert(res);
                                }
                               
                               return false;
                           }
                       });
                    });
                </script>

<!-- _________________________ Finish Page _________________________ -->
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
		<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
		<script src="<?= base_url()?>js/jquery.gMap.min.js" type="text/javascript"></script>
		<script src="<?= base_url()?>js/jquery.validationEngine-lang.js" type="text/javascript"></script>
		<script src="<?= base_url()?>js/jquery.validationEngine.js" type="text/javascript"></script>
	</body>
</html>
