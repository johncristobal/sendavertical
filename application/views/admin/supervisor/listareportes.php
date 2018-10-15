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
		<link rel="shortcut icon" href="<?= base_url(); ?>img/favicon-2.jpg" type="image/x-icon" />

		<title>Reportes supervisor | Senda Vertical</title>
		<link rel='stylesheet' href='<?= base_url(); ?>LayerSlider/css/layerslider.css' type='text/css' media='all' />
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin,latin-ext' type='text/css' media='all' />	
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/settings.css" media="screen" />
		<link rel='stylesheet' href='<?= base_url(); ?>css/style.css' type='text/css' media='screen, print' />
		<link rel='stylesheet' href='<?= base_url(); ?>css/adaptive.css' type='text/css' media='screen, print' />
		<link rel='stylesheet' href='<?= base_url(); ?>css/retina.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url(); ?>css/ilightbox.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url(); ?>css/ilightbox-skins/dark-skin.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url(); ?>css/cmsms-events-style.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url(); ?>css/cmsms-events-adaptive.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url(); ?>css/fontello.css' type='text/css' media='screen' />
		<link rel='stylesheet' href='<?= base_url(); ?>css/animate.css' type='text/css' media='screen' />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel='stylesheet' href='<?= base_url(); ?>css/footerAdmin.css' type='text/css' media='screen' />		
		<!--[if lte IE 9]>
			<link rel='stylesheet' href='css/ie.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_fonts.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_colors_primary.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='css/econature_colors_secondary.css' type='text/css' media='screen' />
		<![endif]-->
				<link rel='stylesheet' href='<?= base_url(); ?>css/econature.css' />
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oxygen%3A300%2C400%2C700&#038;ver=4.2' type='text/css' media='all' />
		 <link rel='stylesheet' href='<?= base_url(); ?>css/jquery.isotope.css' type='text/css' media='screen' />
		
		<script type='text/javascript' src='<?= base_url(); ?>js/jquery.js'></script>
		<script type='text/javascript' src='<?= base_url(); ?>js/jquery-migrate.min.js'></script>		
		
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
			
			#cmsms_icon_list_items_553e49e81f520.cmsms_icon_list_items .cmsms_icon_list_item:before { 
				left:39.5px; 
			} 
			
			#cmsms_icon_list_items_553e49e81f520.cmsms_icon_list_type_block .cmsms_icon_list_item:before { 
				width:1px; 
			} 

			#cmsms_icon_list_items_553e49e81f520 .cmsms_icon_list_icon { 
				border-width:1px; 
				width:80px; 
				height:80px; 
				-webkit-border-radius:50%; 
				-moz-border-radius:50%; 
				border-radius:50%; 
			} 

			#cmsms_icon_list_items_553e49e81f520 .cmsms_icon_list_icon:before { 
				font-size:32px; 
				line-height:78px; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f676 .cmsms_icon_list_icon:before { 
				color:#7ce095; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f676:hover .cmsms_icon_list_icon { 
				background-color:#7ce095; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f676:hover .cmsms_icon_list_icon:before { 
				color:inherit; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f7b9 .cmsms_icon_list_icon:before { 
				color:#a6ec7c; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f7b9:hover .cmsms_icon_list_icon { 
				background-color:#a6ec7c; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f7b9:hover .cmsms_icon_list_icon:before { 
				color:inherit; 
			} 
                        .cmsms_row .cmsms_row_margin {
                            margin: 0 -0.07%;
                            position: relative;
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
				<div id="middle">
				
				
					<div class="cmsms_breadcrumbs">
						<div class="cmsms_breadcrumbs_inner align_right">
							<span>Estás aquí: </span>
							<a href="#" class="cms_home">Supervisor</a>
							<span class="breadcrumbs_sep"> / </span>
							<a href="#" class="cms_home">Reportes</a>
							<span class="breadcrumbs_sep"> / </span>							
							<span>Ver reportes</span>
						</div>
					</div>
					
					<div class="middle_inner">
					
						<div class="content_wrap fullwidth profile_page">
						<!--_________________________ Start Content _________________________ -->
							<div class="middle_content entry" role="main">
								<div class="profiles opened-article">
							<!--_________________________ Start Standard Profile _________________________ -->
									<article class="profile type-profile hentry">
									
										<div class="profile_content">
						<div id="cmsms_row_9" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
									<h1 class="cmsms_post_title entry-title">Administrar reportes</h1>
									<br>
										<div class="cmsms_row_margin">
										
                    <div class="cmsms_column one_half"></div>
											<div class="cmsms_column one_half">
												<ul id="cmsms_icon_list_items_553e49e81f520" class="cmsms_icon_list_items cmsms_icon_list_type_block cmsms_icon_list_pos_left cmsms_color_type_icon">
													<li id="cmsms_icon_list_item_553e49e81f676" class="cmsms_icon_list_item">
														<div class="cmsms_icon_list_item_inner">
															<div class="cmsms_icon_list_icon_wrap">
																<a href="<?= base_url();?>supervisor/nuevoReporte"><span class="cmsms_icon_list_icon cmsms-icon-edit-3"></span></a>
															</div> 
															<div class="cmsms_icon_list_item_content">
																<h2 class="cmsms_icon_list_item_title">Crear Nuevo Reporte</h2>
																 <div class="cmsms_icon_list_item_text">
																	
																</div> 
															</div>
                                                                                                                     
														</div>
													</li>
												</ul>
											</div>
											<br>
											<div class="cmsms_column one_first">
								<div class="cmsms_row_margin cmsms_1212">
										<div class="cmsms_column">
												<ul id="cmsms_icon_list_items_55534c5c711f0" class="cmsms_icon_list_items cmsms_icon_list_type_block cmsms_icon_list_pos_left cmsms_color_type_icon fadeIn animated" data-animation="fadeIn" data-delay="0">
												<!--Draw data in this div-->
												<?php 
														if(isset($reportes)){
														foreach ($reportes as $value) 
														{
												?>
														<li id="cmsms_icon_list_item_55534c5c712ec" class="cmsms_icon_list_item shortcode_animated">
																<div class="cmsms_icon_list_item_inner">
																		<div class="one_third">
																				<div class="cmsms_icon_list_icon_wrap">
																						<a href="<?php echo base_url()?>supervisor/update/<?= $value->id ?>" class="cmsms_icon_list_icon cmsms-icon-info-circled"></a>
																				</div>
																				<div class="cmsms_icon_list_item_content">
																						<div class="one_first">
																								<h4 class="cmsms_icon_list_item_title"><?= $value->cotizacion; ?></h4>
																						</div>                                                                                                                                   
																						<br>
																						<div class="one_half">
																								<div class="cmsms_icon_list_item_text">                                                                                                                                      
																												<p>
																														<?= $value->nombre_proyecto; ?><br>
																														<?= $value->cliente; ?>                                                                                                                                                        
																												</p>                                                                                                                                                
																								</div>
																						</div>
																						<div class="one_half" style="text-align:right;">
																								<a onclick="eliminarReporte(<?= $value->id ?>)" class="notice_close cmsms-icon-trash"></a>
																						</div>
																				</div>
																		</div>
																</div>
														</li>
																		
														<?php }} ?>
														</ul>
										</div>                                                                                                
						</div>
						
						<div id="cmsms_divider_5551a75f0a5e0" class="cmsms_divider cmsms_divider_width_long cmsms_divider_pos_center"></div>
</div>											

										</div>
									</div>
								</div>
							</div>
						</div>
										</div>
									</article>
								</div>
							</div>
						<!-- _________________________ Finish Content _________________________ -->
						</div>
					</div>
				</div>
<!-- _________________________ Finish Middle _________________________ -->
			<?php $this->load->view('admin/footerAdmin') ?>
				<a href="javascript:void(0);" id="slide_top" class="cmsms-icon-up-open-mini"></a>
				<?php $this->load->view('nowosc') ?>
			</div>
<!-- _________________________ Finish Main _________________________ -->
<!-- _________________________ Start Footer _________________________ -->

<!-- _________________________ Finish Footer _________________________ -->
		</div>
                    <script type="text/javascript">
                        
                       function eliminarReporte(id){
                            if(confirm('¿Deseas borrar este reporte?')){
                                jQuery.ajax({
                                    url: "<?= base_url();?>supervisor/deleteReporte",
                                    //data: $("#updateUsuario").serialize(),
                                     data:{id:id},
                                    type: "post",
                                    success: function(res){
                                        if(res == "1"){
                                            alert("Se ha eliminado el reporte con exito");
                                            location.reload();
                                        }else{
                                             //alert(res);
                                             window.location.href = "<?= base_url();?>admin";
                                         }

                                        return false;
                                    }
                                });
                                
                            }
                        }
                        
                    jQuery("#updateUsuario").on("submit",function(){
                       event.preventDefault();
                        var id = jQuery("#idUser").val();
                       jQuery.ajax({
                           url: "<?=base_url()?>Admin/updateUsuario/0/0",
                           data: jQuery("#updateUsuario").serialize(),
                           type: "post",
                           success: function(res){
                               if(res == "Se ha actualizado la información con éxito"){
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
	<!--	<script type='text/javascript' src='js/jsLibraries.min.js'></script>
		<script type='text/javascript' src='js/jquery.iLightBox.min.js'></script>
		<script type='text/javascript' src='js/jqueryLibraries.min.js'></script> -->
		
                <script type='text/javascript' src='<?= base_url(); ?>LayerSlider/js/layerslider.kreaturamedia.jquery.js'></script>
		<script type='text/javascript' src='<?= base_url(); ?>LayerSlider/js/greensock.js'></script>
		<script type='text/javascript' src='<?= base_url(); ?>LayerSlider/js/layerslider.transitions.js'></script>
		<script type='text/javascript' src='<?= base_url(); ?>js/jsLibraries.min.js'></script>
		<script type='text/javascript' src='<?= base_url(); ?>js/jquery.iLightBox.min.js'></script>
		<script type='text/javascript' src='<?= base_url(); ?>js/jqueryLibraries.min.js'></script>
		
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
		<script type='text/javascript' src='<?= base_url(); ?>js/jquery.easing.min.js?ver=1.3.0'></script>
		<script type='text/javascript' src='<?= base_url(); ?>js/jquery.script.js'></script>
		<script type='text/javascript' src='<?= base_url(); ?>js/jquery.tweet.min.js'></script>
		<script type='text/javascript' src='<?= base_url(); ?>js/jquery.isotope.min.js'></script>
		<script type='text/javascript' src='<?= base_url(); ?>js/jquery.isotope.mode.js'></script>
	</body>
</html>
