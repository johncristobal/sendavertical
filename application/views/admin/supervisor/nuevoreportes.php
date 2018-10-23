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
                <link rel='stylesheet' href='<?= base_url(); ?>css/contact-form-style.css' type='text/css' media='screen' />

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
                        
                        .cmsms_heading{
                            margin-left: 5px !important;
                        }
                        
                        @media only screen and (max-width: 768px) {
                            /* For mobile phones: */
                            .mobile{
                                display: block;                                
                            }
                            input[type=text], input[type=email], input[type=password], input[type=number], input[type=url], input[type=tel], textarea, select, option, code {
                                font-family: Verdana, Geneva, 'DejaVu Sans', sans-serif;
                                font-size: 10px;
                                line-height: 8px;
                                font-weight: normal;
                                font-style: normal;
                                padding: 7px;
                            }
                            .desktop{
                                display: none;
                            }
                            .cmsms-form-builder label {
                                display: inline-block;
                                padding-bottom: 6px;
                            }
                            .ancho60 label{
                                width: 60px;
                            }
                            .ancho80 label{
                                width: 80px;
                            }
                        }
                        @media only screen and (min-width: 769px) {
                            .mobile{
                                display: none;
                            }
                            .desktop{
                                display: block;
                            }
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
							<a href="<?= base_url();?>admin" class="cms_home">Reporte nuevo</a>
							<span class="breadcrumbs_sep"> / </span>							
							<span>Llena reporte nuevo</span>
						</div>
					</div>
					
					<div class="middle_inner">                                            
						<div id="cmsms_row_5550b989a6296" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
			<div class="cmsms_column one_first">																								
					<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
					<!--mobile-->
							<form id="formMobile">
							<div class="cmsms_contact_form mobile">
											<input type="hidden" name="tipo" id="tipo" value="mobile">
											<div class="cmsms-form-builder">
													<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Reportes</h3>
													<div class="form_info cmsms_input one_half">
																	<label for="numcotizacion">Número de cotizaciòn</label>
																	<div class="form_field_wrap">
																			<input type="text" name="numcotizacionmobile" id="numcotizacionmobile" value="" size="35" />
																	</div>
													</div>
													<div class="form_info cmsms_input one_half">
																	<label for="cmsms_your_phone_number_is">Cliente</label>
																	<div class="form_field_wrap">
																					<input type="text" name="clientemobile" id="clientemobile" value="" size="35" />
																	</div>
													</div>
													<div class="form_info cmsms_input one_third">
																	<label for="contact_email">Nombre del proyecto</label>
																	<div class="form_field_wrap">
																			<input type="text" name="proyectomobile" id="proyectomobile" value="" size="35" />
																	</div>
													</div>
													<div class="form_info cmsms_input one_third">
																	<label for="cmsms_your_phone_number_is">Ingresos</label>
																	<div class="form_field_wrap">
																					<input type="number" name="ingresosmobile" id="ingresosmobile" value="" size="35"/>
																	</div>
													</div>
													<div class="form_info cmsms_input one_third">
																	<label for="cmsms_your_phone_number_is">Forma de pago</label>
																	<div class="form_field_wrap">
																			<input type="text" name="formapagomobile" id="formapagomobile" value="" size="35" />
																	</div>
													</div>

													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<br>
													<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Gastos Nónima</h3>

													<div class="ancho60">
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Nombre</label>
															<input type="text" name="gastos1mobile" id="gastos1mobile" value="" size="35"/>
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Posiciòn</label>
															<input type="text" name="posicion1mobile" id="posicion1mobile" value="" size="35" />
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">$</label>
															<input type="text" name="ingreso1mobile" id="ingreso1mobile" value="" size="35" class="validate[custom[number]]" />
													</div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<br>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Nombre</label>
															<input type="text" name="gastos2mobile" id="gastos2mobile" value="" size="35"/>
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Posiciòn</label>
															<input type="text" name="posicion2mobile" id="posicion2mobile" value="" size="35" />
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">$</label>
															<input type="text" name="ingreso2mobile" id="ingreso2mobile" value="" size="35" class="validate[custom[number]]" />
													</div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<br>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Nombre</label>
															<input type="text" name="gastos3mobile" id="gastos3mobile" value="" size="35"/>
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Posiciòn</label>
															<input type="text" name="posicion3mobile" id="posicion3mobile" value="" size="35" />
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">$</label>
															<input type="text" name="ingreso3mobile" id="ingreso3mobile" value="" size="35" class="validate[custom[number]]" />
													</div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<br>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Nombre</label>
															<input type="text" name="gastos4mobile" id="gastos4mobile" value="" size="35"/>
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Posiciòn</label>
															<input type="text" name="posicion4mobile" id="posicion4mobile" value="" size="35" />
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">$</label>
															<input type="text" name="ingreso4mobile" id="ingreso4mobile" value="" size="35" class="validate[custom[number]]" />
													</div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<br>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Nombre</label>
															<input type="text" name="gastos5mobile" id="gastos5mobile" value="" size="35"/>
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Posiciòn</label>
															<input type="text" name="posicion5mobile" id="posicion5mobile" value="" size="35" />
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">$</label>
															<input type="text" name="ingreso5mobile" id="ingreso5mobile" value="" size="35" class="validate[custom[number]]" />
													</div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<br>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Nombre</label>
															<input type="text" name="gastos6mobile" id="gastos6mobile" value="" size="35"/>
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">Posiciòn</label>
															<input type="text" name="posicion6mobile" id="posicion6mobile" value="" size="35" />
													</div>
													<div class="form_info cmsms_input">
															<label for="cmsms_your_phone_number_is">$</label>
															<input type="text" name="ingreso6mobile" id="ingreso6mobile" value="" size="35" class="validate[custom[number]]" />
													</div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													</div>                                                                                                                                                                                                                          
													
													<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Gastos Otros</h3>
													<div class="ancho80">
															<div class="form_info cmsms_input">
																	<label for="cmsms_your_phone_number_is">Descripción</label>
																	<input type="text" name="descripcion1mobile" id="descripcion1mobile" value="" size="35" />
																	<label for="cmsms_your_phone_number_is">$</label>
																	<input type="text" name="gastodescripcion1mobile" id="gastodescripcion1mobile" value="" size="35" class="validate[custom[number]]" />
															</div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<br>
													
															<div class="form_info cmsms_input">
																	<label for="cmsms_your_phone_number_is">Descripción</label>
																	<input type="text" name="descripcion2mobile" id="descripcion2mobile" value="" size="35" />
																	<label for="cmsms_your_phone_number_is">$</label>
																	<input type="text" name="gastodescripcion2mobile" id="gastodescripcion2mobile" value="" size="35" class="validate[custom[number]]" />                                                                                                        
															</div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<br>
															
															<div class="form_info cmsms_input">
																	<label for="cmsms_your_phone_number_is">Descripción</label>
																	<input type="text" name="descripcion3mobile" id="descripcion3mobile" value="" size="35" />
																	<label for="cmsms_your_phone_number_is">$</label>
																	<input type="text" name="gastodescripcion3mobile" id="gastodescripcion3mobile" value="" size="35" class="validate[custom[number]]" />                                                                                                        
															</div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<br>
															
															<div class="form_info cmsms_input">
																	<label for="cmsms_your_phone_number_is">Descripción</label>
																	<input type="text" name="descripcion4mobile" id="descripcion4mobile" value="" size="35" />
																	<label for="cmsms_your_phone_number_is">$</label>
																	<input type="text" name="gastodescripcion4mobile" id="gastodescripcion4mobile" value="" size="35" class="validate[custom[number]]" />                                                                                                        
															</div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<br>
															
															<div class="form_info cmsms_input">
																	<label for="cmsms_your_phone_number_is">Descripción</label>
																	<input type="text" name="descripcion5mobile" id="descripcion5mobile" value="" size="35" />
																	<label for="cmsms_your_phone_number_is">$</label>
																	<input type="text" name="gastodescripcion5mobile" id="gastodescripcion5mobile" value="" size="35" class="validate[custom[number]]" />                                                                                                        
															</div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<br>
															
															<div class="form_info cmsms_input">
																	<label for="cmsms_your_phone_number_is">Descripción</label>
																	<input type="text" name="descripcion6mobile" id="descripcion6mobile" value="" size="35" />
																	<label for="cmsms_your_phone_number_is">$</label>
																	<input type="text" name="gastodescripcion6mobile" id="gastodescripcion6mobile" value="" size="35" class="validate[custom[number]]" />                                                                                                        
															</div>
													</div>
													
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
													<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Equipo utilizado</h3>
													<div class="form_info cmsms_input one_half">
																	<div class="form_field_wrap">
																			<label for="cmsms_your_phone_number_is">Camión</label>
																			<div class="form_field_wrap">
																					<input type="text" name="camionmobile" id="camionmobile" value="" size="35" class="validate[custom[number]]" />
																			</div>
																	</div>
																	<div class="form_field_wrap">
																			<label for="cmsms_your_phone_number_is">Equipo de trepa</label>
																			<div class="form_field_wrap">
																			<input type="text" name="trepamobile" id="trepamobile" value="" size="35" class="validate[custom[number]]" />
																			</div>
																	</div>
																	<div class="form_field_wrap">
																			<label for="cmsms_your_phone_number_is">Motosierras</label>
																			<div class="form_field_wrap">
																					<input type="text" name="motosierramobile" id="motosierramobile" value="" size="35" class="validate[custom[number]]" />
																			</div>
																	</div>
																	 <div class="form_field_wrap">
																			<label for="cmsms_your_phone_number_is">Equipo de cordaje</label>
																			<div class="form_field_wrap">
																					<input type="text" name="cordajemobile" id="cordajemobile" value="" size="35" class="validate[custom[number]]" />
																			</div>
																	</div>

													</div>
													<div class="form_info cmsms_input one_half">                                                                                                                                   
																	<div class="form_field_wrap">
																			<label for="cmsms_your_phone_number_is">Equipo de asperjado</label>
																			<div class="form_field_wrap">
																					<input type="text" name="asperjadomobile" id="asperjadomobile" value="" size="35" class="validate[custom[number]]" />
																			</div>
																	</div>
																	<div class="form_field_wrap">
																			<label for="cmsms_your_phone_number_is">Equipo de limpieza</label>
																			<div class="form_field_wrap">
																					<input type="text" name="limpiezamobile" id="limpiezamobile" value="" size="35" class="validate[custom[number]]" />
																			</div>
																	</div>
																	<div class="form_field_wrap">
																			<label for="cmsms_your_phone_number_is">Otro</label>
																			<input type="text" name="otrodetail1mobile" id="otrodetail1mobile" value="" size="35" placeholder="especificar" />
																			<div class="form_field_wrap">
																					<input type="text" name="otro1mobile" id="otro1mobile" value="" size="35" class="validate[custom[number]]" />
																			</div>
																	</div>
																	<div class="form_field_wrap">
																			<label for="cmsms_your_phone_number_is">Otro</label>
																			<input type="text" name="otrodetail2mobile" id="otrodetail2mobile" value="" size="35" placeholder="especificar" />
																			<div class="form_field_wrap">
																					<input type="text" name="otro2mobile" id="otro2mobile" value="" size="35" class="validate[custom[number]]" />
																			</div>
																	</div>
													</div>



													<div class="cl"></div>
													<div class="loading"></div>
													
													<!-- Here you need to set the path to the sendmail file -->
													<div class="form_info submit_wrap">
															<input type="submit" id="contact_form_2_formsend" class="cmsms_button" value="Enviar informaciòn"/>
													</div>
													<div class="cl"></div>

											</div>
									</div>
							</form>
                                                                                    
									<!--ESCRITORIO-->
									<form id="formDesktop">
											<div class="cmsms_contact_form desktop">
													<input type="hidden" name="tipo" id="tipo" value="desktop">
													<div class="cmsms-form-builder">
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Reportes</h3>
															<div class="form_info cmsms_input one_half">
																			<label for="numcotizacion">Número de cotizaciòn</label>
																			<div class="form_field_wrap">
																					<input type="text" name="numcotizaciondesktop" id="numcotizaciondesktop" value="" size="35" />
																			</div>
															</div>
															<div class="form_info cmsms_input one_half">
																			<label for="cmsms_your_phone_number_is">Cliente</label>
																			<div class="form_field_wrap">
																							<input type="text" name="clientedesktop" id="clientedesktop" value="" size="35" />
																			</div>
															</div>
															<div class="form_info cmsms_input one_third">
																			<label for="contact_email">Nombre del proyecto</label>
																			<div class="form_field_wrap">
																					<input type="text" name="proyectodesktop" id="proyectodesktop" value="" size="35" />
																			</div>
															</div>
															<div class="form_info cmsms_input one_third">
																			<label for="cmsms_your_phone_number_is">Ingresos</label>
																			<div class="form_field_wrap">
																							<input type="number" name="ingresosdesktop" id="ingresosdesktop" value="" size="35"/>
																			</div>
															</div>
															<div class="form_info cmsms_input one_third">
																			<label for="cmsms_your_phone_number_is">Forma de pago</label>
																			<div class="form_field_wrap">
																					<input type="text" name="formapagodesktop" id="formapagodesktop" value="" size="35" />
																			</div>
															</div>

															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Gastos Nónima</h3>

															<div class="form_info cmsms_input one_third">
																	<label for="cmsms_your_phone_number_is">Nombre</label>
															</div>
															<div class="form_info cmsms_input one_third">
																	<label for="cmsms_your_phone_number_is">Posiciòn</label>
															</div>
															<div class="form_info cmsms_input one_third">
																	<label for="cmsms_your_phone_number_is">$</label>
															</div>
															<div class="form_info cmsms_input one_third">
																	<div class="form_field_wrap">
																			<input type="text" name="gastos1desktop" id="gastos1desktop" value="" size="35"/>
																			<input type="text" name="gastos2desktop" id="gastos2desktop" value="" size="35"/>
																			<input type="text" name="gastos3desktop" id="gastos3desktop" value="" size="35"/>
																			<input type="text" name="gastos4desktop" id="gastos4desktop" value="" size="35"/>
																			<input type="text" name="gastos5desktop" id="gastos5desktop" value="" size="35"/>
																			<input type="text" name="gastos6desktop" id="gastos6desktop" value="" size="35"/>
																	</div>
															</div>
															<div class="form_info cmsms_input one_third">
																	<div class="form_field_wrap">
																			<input type="text" name="posicion1desktop" id="posicion1desktop" value="" size="35" />
																			<input type="text" name="posicion2desktop" id="posicion2desktop" value="" size="35" />
																			<input type="text" name="posicion3desktop" id="posicion3desktop" value="" size="35" />
																			<input type="text" name="posicion4desktop" id="posicion4desktop" value="" size="35" />
																			<input type="text" name="posicion5desktop" id="posicion5desktop" value="" size="35" />
																			<input type="text" name="posicion6desktop" id="posicion6desktop" value="" size="35" />
																	</div>
															</div>
															<div class="form_info cmsms_input one_third">
																	<div class="form_field_wrap">
																			<input type="text" name="ingreso1desktop" id="ingreso1desktop" value="" size="35" class="validate[custom[number]]" />
																			<input type="text" name="ingreso2desktop" id="ingreso2desktop" value="" size="35" class="validate[custom[number]]" />
																			<input type="text" name="ingreso3desktop" id="ingreso3desktop" value="" size="35" class="validate[custom[number]]" />
																			<input type="text" name="ingreso4desktop" id="ingreso4desktop" value="" size="35" class="validate[custom[number]]" />
																			<input type="text" name="ingreso5desktop" id="ingreso5desktop" value="" size="35" class="validate[custom[number]]" />
																			<input type="text" name="ingreso6desktop" id="ingreso6desktop" value="" size="35" class="validate[custom[number]]" />
																	</div>
															</div>                                                                                                                            
															
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Gastos Otros</h3>
															<div class="form_info cmsms_input one_half">
																	<label for="cmsms_your_phone_number_is">Descripción</label>
																	<div class="form_field_wrap">
																					<input type="text" name="descripcion1desktop" id="descripcion1desktop" value="" size="35" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="descripcion2desktop" id="descripcion2desktop" value="" size="35" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="descripcion3desktop" id="descripcion3desktop" value="" size="35" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="descripcion4desktop" id="descripcion4desktop" value="" size="35" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="descripcion5desktop" id="descripcion5desktop" value="" size="35" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="descripcion6desktop" id="descripcion6desktop" value="" size="35"/>
																	</div>
															</div>
															<div class="form_info cmsms_input one_half">
																	<label for="cmsms_your_phone_number_is">$</label>
																	<div class="form_field_wrap">
																					<input type="text" name="gastodescripcion1desktop" id="gastodescripcion1desktop" value="" size="35" class="validate[custom[number]]" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="gastodescripcion2desktop" id="gastodescripcion2desktop" value="" size="35" class="validate[custom[number]]" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="gastodescripcion3desktop" id="gastodescripcion3desktop" value="" size="35" class="validate[custom[number]]" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="gastodescripcion4desktop" id="gastodescripcion4desktop" value="" size="35" class="validate[custom[number]]" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="gastodescripcion5desktop" id="gastodescripcion5desktop" value="" size="35" class="validate[custom[number]]" />
																	</div>
																	<div class="form_field_wrap">
																					<input type="text" name="gastodescripcion6desktop" id="gastodescripcion6desktop" value="" size="35" class="validate[custom[number]]" />
																	</div>
															</div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Equipo utilizado</h3>
															<div class="form_info cmsms_input one_half">
																			<div class="form_field_wrap">
																					<label for="cmsms_your_phone_number_is">Camión</label>
																					<div class="form_field_wrap">
																							<input type="text" name="camiondesktop" id="camiondesktop" value="" size="35" class="validate[custom[number]]" />
																					</div>
																			</div>
																			<div class="form_field_wrap">
																					<label for="cmsms_your_phone_number_is">Equipo de trepa</label>
																					<div class="form_field_wrap">
																					<input type="text" name="trepadesktop" id="trepadesktop" value="" size="35" class="validate[custom[number]]" />
																					</div>
																			</div>
																			<div class="form_field_wrap">
																					<label for="cmsms_your_phone_number_is">Motosierras</label>
																					<div class="form_field_wrap">
																							<input type="text" name="motosierradesktop" id="motosierradesktop" value="" size="35" class="validate[custom[number]]" />
																					</div>
																			</div>
																			 <div class="form_field_wrap">
																					<label for="cmsms_your_phone_number_is">Equipo de cordaje</label>
																					<div class="form_field_wrap">
																							<input type="text" name="cordajedesktop" id="cordajedesktop" value="" size="35" class="validate[custom[number]]" />
																					</div>
																			</div>

															</div>
															<div class="form_info cmsms_input one_half">                                                                                                                                   
																			<div class="form_field_wrap">
																					<label for="cmsms_your_phone_number_is">Equipo de asperjado</label>
																					<div class="form_field_wrap">
																							<input type="text" name="asperjadodesktop" id="asperjadodesktop" value="" size="35" class="validate[custom[number]]" />
																					</div>
																			</div>
																			<div class="form_field_wrap">
																					<label for="cmsms_your_phone_number_is">Equipo de limpieza</label>
																					<div class="form_field_wrap">
																							<input type="text" name="limpiezadesktop" id="limpiezadesktop" value="" size="35" class="validate[custom[number]]" />
																					</div>
																			</div>
																			<div class="form_field_wrap">
																					<label for="cmsms_your_phone_number_is">Otro</label>
																					<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="especificar" />
																					<div class="form_field_wrap">
																							<input type="text" name="otro1desktop" id="otro1desktop" value="" size="35" class="validate[custom[number]]" />
																					</div>
																			</div>
																			<div class="form_field_wrap">
																					<label for="cmsms_your_phone_number_is">Otro</label>
																					<input type="text" name="otrodetail2desktop" id="otrodetail2desktop" value="" size="35" placeholder="especificar" />
																					<div class="form_field_wrap">
																							<input type="text" name="otro2desktop" id="otro2desktop" value="" size="35" class="validate[custom[number]]" />
																					</div>
																			</div>
															</div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Información Contacto</h3>
															<div class="form_info cmsms_input one_third">  
																<label for="cmsms_your_phone_number_is">Proyecto</label>
														  	<div class="form_field_wrap">
																		<label for="cmsms_your_phone_number_is">Lugar</label>
																		<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="Lugar" />																		
																</div>,
														  	<div class="form_field_wrap">
																		<label for="cmsms_your_phone_number_is">Supervisor</label>
																		<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="Supervisor" />																		
																</div>
														  	<div class="form_field_wrap">
																		<label for="cmsms_your_phone_number_is">Teléfono</label>
																		<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="Teléfono" />																		
																</div>																
															</div>	
															<div class="form_info cmsms_input one_third">  
																<label for="cmsms_your_phone_number_is">Cliente</label>
														  	<div class="form_field_wrap">
																		<label for="cmsms_your_phone_number_is">Nombre</label>
																		<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="Nombre del cliente" />																		
																</div>
														  	<div class="form_field_wrap">
																		<label for="cmsms_your_phone_number_is">Email</label>
																		<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="Email" />																		
																</div>
														  	<div class="form_field_wrap">
																		<label for="cmsms_your_phone_number_is">Teléfono</label>
																		<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="Teléfono de cliente" />																		
																</div>																
															</div>
															<div class="form_info cmsms_input one_third">  
																<label for="cmsms_your_phone_number_is">Hospital</label>
														  	<div class="form_field_wrap">
																		<label for="cmsms_your_phone_number_is">Nombre</label>
																		<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="Nombre del hospital" />																		
																</div>
														  	<div class="form_field_wrap">
																		<label for="cmsms_your_phone_number_is">Teléfono</label>
																		<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="Teléfono del hospital" />																		
																</div>	
														  	<div class="form_field_wrap">
																		<label for="cmsms_your_phone_number_is">Teléfono de emergencia</label>
																		<input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="Teléfono de emergencia" />																		
																</div>																
															</div>																
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Dirección</h3>
														  <div class="form_info cmsms_input one_half">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">
																
																	<div class="check_parent">
																		<input type="checkbox" name="aguaPotable" id="aguaPotable" value="aguaPotable" />
																		<label for="aguaPotable">Agua potable</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="extinguidor" id="extinguidor" value="extinguidor" />
																		<label for="extinguidor">Extinguidor</label>
																	</div>
																	<div class="form_field_wrap">
																					<div class="check_parent">
																						<input type="checkbox" name="sisCom" id="sisCom" value="sisCom" />
																						<label for="sisCom">Sistema de Comunicación</label>
																					</div>																					
																					
																					<input type="text" name="sisComdesktop" id="sisComdesktop" value="" size="35" placeholder="especificar" />
																	</div>																																														
																	
																</div>
															</div>
														  <div class="form_info cmsms_input one_half">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">															
																	<div class="check_parent">
																		<input type="checkbox" name="botiquin" id="botiquin" value="" />
																		<label for="botiquin">Botiquín de primeros auxilios</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="sma" id="sma" value="" />
																		<label for="sma">Permiso SMA</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="inspeccion" id="inspeccion" value="" />
																		<label for="inspeccion">Inspección de equipo</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="emergencia1" id="emergencia1" value="em1" />
																		<label for="emergencia1">Plan de acción en caso de emergencia</label>
																	</div>																	
																</div>
																																																														
																</div>		
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Descripción del trabajo a desarrollar</h3>
														  <div class="form_info cmsms_input one_third">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">
																
																	<div class="check_parent">
																		<input type="checkbox" name="poda" id="poda" value="" />
																		<label for="poda">Poda</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="remocion" id="remocion" value="" />
																		<label for="remocion">Remoción</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="cordaje" id="cordaje" value="" />
																		<label for="cordaje">Maniobras de cordaje</label>
																	</div>																																													
																	<div class="check_parent">
																		<input type="checkbox" name="ctrlPeatonal" id="ctrlPeatonal" value="" />
																		<label for="ctrlPeatonal">Control peatonal</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="ctrlTransito" id="ctrlTransito" value="" />
																		<label for="ctrlTransito">Control de tránsito temporal</label>
																	</div>																		
																</div>
															</div>
														  <div class="form_info cmsms_input one_third">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">															
																	<div class="check_parent">
																		<input type="checkbox" name="caidalibre" id="caidalibre" value="" />
																		<label for="caidalibre">Caída libre</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="desrame" id="desrame" value="" />
																		<label for="desrame">Desrame/ Troceado</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="destoconado" id="destoconado" value="" />
																		<label for="destoconado">Destoconado</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="remocionArb" id="remocionArb" value="em1" />
																		<label for="remocionArb">Remoción de arbustos</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="astillado" id="astillado" value="" />
																		<label for="astillado">Astillado/Triturado</label>
																	</div>																		
																</div>
																																																														
																</div>	

														  <div class="form_info cmsms_input one_third">                                                                                                                                 
																<div class="form_info cmsms_checkboxes">
																
																	<div class="check_parent">
																		<input type="checkbox" name="plagas" id="plagas" value="" />
																		<label for="plagas">Tratamiento de plagas o suelo</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="trepa" id="trepa" value="" />
																		<label for="trepa">Trepa</label>
																	</div>																																													
																	<div class="check_parent">
																		<input type="checkbox" name="materialCortado" id="materialCortado" value="" />
																		<label for="materialCortado">Retiro de material cortado</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="equipoEsp" id="equipoEsp" value="" />
																		<label for="equipoEsp">Equipo especializado</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="otrosDescrip" id="otrosDescrip" value="" />
																		<label for="otrosDescrip">Otros</label>
																	</div>																	
																</div>
															</div>	
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Peligros específicos del área de trabajo</h3>
														  <div class="form_info cmsms_input one_third">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">
																
																	<div class="check_parent">
																		<input type="checkbox" name="arbolContacto" id="arbolContacto" value="" />
																		<label for="arbolContacto">Árbol en contacto</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="dma" id="dma" value="" />
																		<label for="dma">Árbol/Rama en DMA</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="defEstruct" id="defEstruct" value="" />
																		<label for="defEstruct">Defecto estructural</label>
																	</div>																																													
																	<div class="check_parent">
																		<input type="checkbox" name="clima" id="clima" value="" />
																		<label for="clima">Clima</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="quimicos" id="quimicos" value="" />
																		<label for="quimicos">Manejo de químicos</label>
																	</div>	
																	<div class="form_field_wrap">
																					<div class="check_parent">
																						<input type="checkbox" name="electricidad" id="electricidad" value="" />
																						<label for="electricidad">Electricidad</label>
																					</div>																					
																					
																					<input type="text" name="sisComdesktop" id="sisComdesktop" value="" size="35" placeholder="especificar" />
																	</div>																		
		
																		
																</div>
															</div>
														  <div class="form_info cmsms_input one_third">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">	
																	<div class="check_parent">
																		<input type="checkbox" name="arbolSeco" id="arbolSeco" value="" />
																		<label for="arbolSeco">Árbol seco</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="ramasMuertas" id="ramasMuertas" value="" />
																		<label for="ramasMuertas">Ramas muertas o colgantes</label>
																	</div>																	
																	<div class="check_parent">
																		<input type="checkbox" name="arbolDescortezado" id="arbolDescortezado" value="" />
																		<label for="arbolDescortezado">Árbol descortezado</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="maderaBajo" id="maderaBajo" value="" />
																		<label for="maderaBajo">Madera bajo tensión</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="silvestre" id="silvestre" value="" />
																		<label for="silvestre">Vida silvestre</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="pudricion" id="pudricion" value="em1" />
																		<label for="pudricion">Pudrición</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="cavidades" id="cavidades" value="" />
																		<label for="cavidades">Cavidades</label>
																	</div>	
																																																														
																</div>																		
																</div>


														  <div class="form_info cmsms_input one_third">                                                                                                                                 
																<div class="form_info cmsms_checkboxes">
																
																	<div class="check_parent">																		
																		<label for="plagas">Obstaculos</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="bardas" id="bardas" value="" />
																		<label for="bardas">Cercas o bardas</label>
																	</div>																																													
																	<div class="check_parent">
																		<input type="checkbox" name="peatones" id="peatones" value="" />
																		<label for="peatones">Peatones</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="mascotas" id="mascotas" value="" />
																		<label for="mascotas">Perros/Mascotas</label>
																	</div>		
																	<div class="check_parent">
																		<input type="checkbox" name="jardineria" id="jardineria" value="" />
																		<label for="jardineria">Jardinería</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="estructuras" id="estructuras" value="" />
																		<label for="estructuras">Estructuras<label>
																	</div>
																	<div class="form_field_wrap">
																					<div class="check_parent">
																						<input type="checkbox" name="otrosPeligros" id="otrosPeligros" value="" />
																						<label for="otrosPeligros">Otro</label>
																					</div>																																									
																					<input type="text" name="sisComdesktop" id="sisComdesktop" value="" size="35" placeholder="especificar" />
																	</div>																		
																</div>
															</div>	
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Plan de mitigación de peligros</h3>
														  <div class="form_info cmsms_input one_third">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">
																
																	<div class="check_parent">
																		<input type="checkbox" name="equipProt" id="equipProt" value="" />
																		<label for="equipProt">Equipo de protección personal</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="rcp" id="rcp" value="" />
																		<label for="rcp">Primeros auxilios/RCP</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="supFuego" id="supFuego" value="" />
																		<label for="supFuego">Plan de supresión de fuego</label>
																	</div>																																													
																	<div class="check_parent">
																		<input type="checkbox" name="juntaTrab" id="juntaTrab" value="" />
																		<label for="juntaTrab">Junta de trabajo</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="inspArbol" id="inspArbol" value="" />
																		<label for="inspArbol">Inspección de árbol(es)</label>
																	</div>					
																</div>
															</div>
														  <div class="form_info cmsms_input one_third">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">	
																	<div class="check_parent">
																		<input type="checkbox" name="inspEquipo" id="inspEquipo" value="" />
																		<label for="inspEquipo">Inspección equipo de protección contra caídas</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="inspMotosierras" id="inspMotosierras" value="" />
																		<label for="inspMotosierras">Inspección de motosierras y herramientas</label>
																	</div>																	
																	<div class="check_parent">
																		<input type="checkbox" name="equipoCordaje" id="equipoCordaje" value="" />
																		<label for="equipoCordaje">Uso de equipo de cordaje</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="acordonamiento" id="acordonamiento" value="" />
																		<label for="acordonamiento">Acordonamiento del área</label>
																	</div>	
																	<div class="check_parent">
																		<input type="checkbox" name="comunicacion" id="comunicacion" value="" />
																		<label for="comunicacion">Comunicación</label>
																	</div>
																																											
																</div>																		
																</div>


														  <div class="form_info cmsms_input one_third">                                                                                                                                 
																<div class="form_info cmsms_checkboxes">
																	<div class="check_parent">
																		<input type="checkbox" name="supSitio" id="supSitio" value="" />
																		<label for="supSitio">Supervisión en sitio</label>
																	</div>																																													
																	<div class="check_parent">
																		<input type="checkbox" name="caida" id="caida" value="" />
																		<label for="caida">Zona de caída</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="prevClima" id="prevClima" value="" />
																		<label for="prevClima">Prevención climática</label>
																	</div>		
																	<div class="check_parent">
																		<input type="checkbox" name="dañoExis" id="dañoExis" value="" />
																		<label for="dañoExis">Daño existente (documentar)</label>
																	</div>	
																	<div class="form_field_wrap">
																					<div class="check_parent">
																						<input type="checkbox" name="otrosPlan" id="otrosPlan" value="" />
																						<label for="otrosPlan">Otro</label>
																					</div>																																									
																					<input type="text" name="sisComdesktop" id="sisComdesktop" value="" size="35" placeholder="especificar" />
																	</div>																		
																</div>
															</div>	
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
															<h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Equipo de Protección Personal</h3>
														  <div class="form_info cmsms_input one_third">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">
																
																	<div class="check_parent">
																		<input type="checkbox" name="casco" id="casco" value="" />
																		<label for="casco">Casco</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="gafas" id="gafas" value="" />
																		<label for="gafas">Gafas de seguridad</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="chaleco" id="chaleco" value="" />
																		<label for="chaleco">Chaleco/camiseta reflejante</label>
																	</div>																																																		
																</div>
															</div>
														  <div class="form_info cmsms_input one_third">                                                                                                                                   
																<div class="form_info cmsms_checkboxes">	
																	<div class="check_parent">
																		<input type="checkbox" name="auditiva" id="auditiva" value="" />
																		<label for="auditiva">Protección auditiva</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="mascara" id="mascara" value="" />
																		<label for="mascara">Máscara/Protección facial</label>
																	</div>
																	<div class="check_parent">
																		<input type="checkbox" name="botas" id="botas" value="" />
																		<label for="botas">Botas de trabajo</label>
																	</div>																																												
																</div>																		
																</div>


														  <div class="form_info cmsms_input one_third">                                                                                                                                 
																<div class="form_info cmsms_checkboxes">
																	<div class="check_parent">
																		<input type="checkbox" name="chaparreras" id="chaparreras" value="" />
																		<label for="chaparreras">Chaparreras</label>
																	</div>																																													
																	<div class="check_parent">
																		<input type="checkbox" name="guantes" id="guantes" value="" />
																		<label for="guantes">Guantes</label>
																	</div>
																	<div class="form_field_wrap">
																					<div class="check_parent">
																						<input type="checkbox" name="otrosEquipos" id="otrosEquipos" value="" />
																						<label for="otrosEquipos">Otro</label>
																					</div>																																									
																					<input type="text" name="sisComdesktop" id="sisComdesktop" value="" size="35" placeholder="especificar" />
																	</div>																		
																</div>
																</div>																
															</div>
															<div class="cl"></div>
															<div class="loading"></div>
															<div class="form_info submit_wrap">
																	<input type="submit" id="contact_form_2_formsend" class="cmsms_button" value="Enviar informaciòn">
															</div>
															<div class="cl"></div>

													</div>
											</div>
                                                                                    </form>

                                                                                </div>
                                                                            </div>
									</div>
								</div>
							</div>
						</div>
						<div class="cl"></div>
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
                                            
                    jQuery("#formMobile").submit(function(e){
                        e.preventDefault();
                        if(confirm("¿Deseas guardar reporte?")){
                        jQuery.ajax({
                           url: "<?=base_url()?>supervisor/saveReporte",
                           data: jQuery("#formMobile").serialize(),
                           type: "post",
                           success: function(res){
                               //alert(res);
                               window.location.href = "<?= base_url() ?>supervisor/reportes"
                               return false;
                           }
                       });
                       }
                    });
                    
                    jQuery("#formDesktop").submit(function(e){
                        e.preventDefault();
                        if(confirm("¿Deseas guardar reporte?")){
                        jQuery.ajax({
                           url: "<?=base_url()?>supervisor/saveReporte",
                           data: jQuery("#formDesktop").serialize(),
                           type: "post",
                           success: function(res){
                               //alert(res);
                                window.location.href = "<?= base_url() ?>supervisor/reportes"
                               return false;
                           }
                       });
                       }
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
