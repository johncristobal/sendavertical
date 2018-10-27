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
                                    <div class="">
						<div class=" align_right">
                                                    <br	
						</div>
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
                                        <div class="cmsms_tabs tabs_mode_tab">
                                        <ul class="cmsms_tabs_list">
                                            <li id="cmsms_tabs_list_item_555469b2e5f20" class="cmsms_tabs_list_item current_tab">
                                                <a href="#"><span>Reporte inicio</span></a>
                                            </li>
                                            <li id="cmsms_tabs_list_item_555469b2e612c" class="cmsms_tabs_list_item">
                                                <a href="#"><span>Información de contacto</span></a>
                                            </li>                                                
                                        </ul>
                                        <div class="cmsms_tabs_wrap">    
                                            <!--Inicia hoja uno-->
                                            <div id="cmsms_tab_555469b2e5f20" class="cmsms_tab active_tab">
                                                <div class="cmsms_tab_inner">
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

                                                    <!--fin uno data-->
                                                    </div>
                                                </div>
                                            <!--****************************fin hoja uno****************************-->
                                            
                                            <!--****************************Inicia hoja dos****************************-->
                                            <div id="cmsms_tab_555469b2e612c" class="cmsms_tab">
                                                <div class="cmsms_tab_inner">
                                                <!--fin hoja dos-->
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Información Contacto</h3>
                                                    <div class="form_info cmsms_input one_third">  
                                                            <label for="cmsms_your_phone_number_is">Proyecto</label>
                                                    <div class="form_field_wrap">
                                                            <label for="cmsms_your_phone_number_is">Lugar</label>
                                                            <input type="text" name="lugarmobile" id="lugarmobile" value="" size="35" placeholder="Lugar" />																		
                                                            </div>
                                                    <div class="form_field_wrap">
                                                                            <label for="cmsms_your_phone_number_is">Supervisor</label>
                                                                            <input type="text" name="supervisormobile" id="supervisormobile" value="" size="35" placeholder="Supervisor" />																		
                                                            </div>
                                                    <div class="form_field_wrap">
                                                                            <label for="cmsms_your_phone_number_is">Teléfono</label>
                                                                            <input type="text" name="telefonomobile" id="telefonomobile" value="" size="35" placeholder="Teléfono" />																		
                                                            </div>																
                                                    </div>	

                                                    <div class="form_info cmsms_input one_third">  
                                                    <label for="cmsms_your_phone_number_is">Cliente</label>
                                                    <div class="form_field_wrap">   
                                                        <label for="cmsms_your_phone_number_is">Fecha</label>
                                                        <input type="date" name="fechamobile" id="fechamobile" value="" size="35" />																		
                                                    </div>
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Nombre</label>
                                                        <input type="text" name="nombreclientemobile" id="nombreclientemobile" value="" size="35" placeholder="Nombre del cliente" />																		
                                                    </div>
                                                    <div class="form_field_wrap">
                                                            <label for="cmsms_your_phone_number_is">Email</label>
                                                            <input type="text" name="emailclientemobile" id="emailclientemobile" value="" size="35" placeholder="Email" />																		
                                                        </div>
                                                    <div class="form_field_wrap">
                                                            <label for="cmsms_your_phone_number_is">Teléfono</label>
                                                            <input type="text" name="telefonoclientemobile" id="telefonoclientemobile" value="" size="35" placeholder="Teléfono de cliente" />																		
                                                        </div>																
                                                    </div>
                                                    <div class="form_info cmsms_input one_third">  
                                                    <label for="cmsms_your_phone_number_is">Hospital</label>
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Nombre</label>
                                                        <input type="text" name="hospitalmobile" id="hospitalmobile" value="" size="35" placeholder="Nombre del hospital" />																		
                                                    </div>
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Teléfono</label>
                                                        <input type="text" name="telefonohospitalmobile" id="telefonohospitalmobile" value="" size="35" placeholder="Teléfono del hospital" />																		
                                                    </div>	
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Teléfono de emergencia</label>
                                                        <input type="text" name="telefonoemermobile" id="telefonoemermobile" value="" size="35" placeholder="Teléfono de emergencia" />																		
                                                    </div>																
                                                    </div>			
                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Dirección</h3>
                                                    
                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="emergencia1mobile" id="emergencia1mobile" value="Plan de acción en caso de emergencia,direccion" />
                                                                <label for="emergencia1mobile">Plan de acción en caso de emergencia</label>
                                                        </div>  		
                                                        <br><br>
                                                        <label for="llamadaemermobile">Llamada de emergencia:</label>
                                                        <input type="text" name="llamadaemermobile" id="llamadaemermobile" value="" size="35" placeholder="especificar" />

                                                    </div>
                                                    </div>
                                                    
                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">															
                                                        
                                                        <label for="primerosauxmobile">Primeros auxilios y RCP:</label>
                                                        <input type="text" name="primerosauxmobile" id="primerosauxmobile" value="" size="35" placeholder="especificar" />

                                                        <label for="rescatemobile">Rescate aéreo:</label>
                                                        <input type="text" name="rescatemobile" id="rescatemobile" value="" size="35" placeholder="especificar" />

                                                    </div>
                                                    </div>	
                                                    
                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                        <div class="form_info cmsms_checkboxes">
                                                            <div class="check_parent">
                                                                <input type="checkbox" name="aguaPotablemobile" id="aguaPotablemobile" value="Agua potable,direccion" />
                                                                <label for="aguaPotablemobile">Agua potable</label>
                                                            </div>
                                                            <div class="check_parent">
                                                                <input type="checkbox" name="extinguidormobile" id="extinguidormobile" value="Extinguidor,direccion" />
                                                                <label for="extinguidormobile">Extinguidor</label>
                                                            </div>
                                                            <div class="form_field_wrap">
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="sisCommobile" id="sisCommobile" value="Sistema de Comunicación,direccion" />
                                                                        <label for="sisCommobile">Sistema de Comunicación</label>
                                                                </div>																					

                                                                <input type="text" name="sisComtextmobile" id="sisComtextmobile" value="" size="35" placeholder="especificar" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                        <div class="form_info cmsms_checkboxes">															
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="botiquinmobile" id="botiquinmobile" value="Botiquín de primeros auxilios,direccion" />
                                                                    <label for="botiquinmobile">Botiquín de primeros auxilios</label>
                                                            </div>
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="smamobile" id="smamobile" value="Permiso SMA,direccion" />
                                                                    <label for="smamobile">Permiso SMA</label>
                                                            </div>	
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="inspeccionmobile" id="inspeccionmobile" value="Inspección de equipo,direccion" />
                                                                    <label for="inspeccionmobile">Inspección de equipo</label>
                                                            </div>
                                                            <!--div class="check_parent">
                                                                    <input type="checkbox" name="emergencia1mobile" id="emergencia1mobile" value="em1" />
                                                                    <label for="emergencia1mobile">Plan de acción en caso de emergencia</label>
                                                            </div-->																	
                                                        </div>
                                                    </div>	

                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Descripción del trabajo a desarrollar</h3>
                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                        <div class="form_info cmsms_checkboxes">
                                                            <div class="check_parent">
                                                                <input type="checkbox" name="podamobile" id="podamobile" value="Poda,trabajo" />
                                                                <label for="podamobile">Poda</label>
                                                            </div>
                                                            <div class="check_parent">
                                                                <input type="checkbox" name="remocionmobile" id="remocionmobile" value="Remoción,trabajo" />
                                                                <label for="remocionmobile">Remoción</label>
                                                            </div>
                                                            <div class="check_parent">
                                                                <input type="checkbox" name="manicordajemobile" id="manicordajemobile" value="Maniobras de cordaje,trabajo" />
                                                                <label for="manicordajemobile">Maniobras de cordaje</label>
                                                            </div>																																													
                                                            <div class="check_parent">
                                                                <input type="checkbox" name="ctrlPeatonalmobile" id="ctrlPeatonalmobile" value="Control peatonal,trabajo" />
                                                                <label for="ctrlPeatonalmobile">Control peatonal</label>
                                                            </div>	
                                                            <div class="check_parent">
                                                                <input type="checkbox" name="ctrlTransitomobile" id="ctrlTransitomobile" value="Control de tránsito temporal,trabajo" />
                                                                <label for="ctrlTransitomobile">Control de tránsito temporal</label>
                                                            </div>																		
                                                        </div>
                                                    </div>
                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                        <div class="form_info cmsms_checkboxes">															
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="caidalibremobile" id="caidalibremobile" value="Caída libre,trabajo" />
                                                                    <label for="caidalibremobile">Caída libre</label>
                                                            </div>
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="desramemobile" id="desramemobile" value="Desrame/ Troceado,trabajo" />
                                                                    <label for="desramemobile">Desrame/ Troceado</label>
                                                            </div>	
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="destoconadomobile" id="destoconadomobile" value="Destoconado,trabajo" />
                                                                    <label for="destoconadomobile">Destoconado</label>
                                                            </div>
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="remocionArbmobile" id="remocionArbmobile" value="Remoción de arbustos,trabajo" />
                                                                    <label for="remocionArbmobile">Remoción de arbustos</label>
                                                            </div>	
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="astilladomobile" id="astilladomobile" value="Astillado/Triturado,trabajo" />
                                                                    <label for="astilladomobile">Astillado/Triturado</label>
                                                            </div>
                                                        </div>
                                                    </div>	

                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                        <div class="form_info cmsms_checkboxes">

                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="plagasmobile" id="plagasmobile" value="Tratamiento de plagas o suelo,trabajo" />
                                                                    <label for="plagasmobile">Tratamiento de plagas o suelo</label>
                                                            </div>
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="dostrepamobile" id="dostrepamobile" value="Trepa,trabajo" />
                                                                    <label for="dostrepamobile">Trepa</label>
                                                            </div>																																													
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="materialCortadomobile" id="materialCortadomobile" value="Retiro de material cortado,trabajo" />
                                                                    <label for="materialCortadomobile">Retiro de material cortado</label>
                                                            </div>
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="equipoEspmobile" id="equipoEspmobile" value="Equipo especializado,trabajo" />
                                                                    <label for="equipoEspmobile">Equipo especializado</label>
                                                            </div>	
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="otrosDescripmobile" id="otrosDescripmobile" value="Otros,trabajo" />
                                                                    <label for="otrosDescripmobile">Otros</label>
                                                            </div>	
                                                            <input type="text" name="otrosDescriptextmobile" id="otrosDescriptextmobile" size="35" placeholder="especificar" />
													
                                                        </div>
                                                    </div>	

                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Peligros específicos del área de trabajo</h3>
                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                            <div class="form_info cmsms_checkboxes">

                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="arbolContactomobile" id="arbolContactomobile" value="" />
                                                                            <label for="arbolContactomobile">Árbol en contacto</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="dmamobile" id="dmamobile" value="" />
                                                                            <label for="dmamobile">Árbol/Rama en DMA</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="defEstructmobile" id="defEstructmobile" value="" />
                                                                            <label for="defEstructmobile">Defecto estructural</label>
                                                                    </div>																																													
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="climamobile" id="climamobile" value="" />
                                                                            <label for="climamobile">Clima</label>
                                                                    </div>	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="quimicosmobile" id="quimicosmobile" value="" />
                                                                            <label for="quimicosmobile">Manejo de químicos</label>
                                                                    </div>	
                                                                    <div class="form_field_wrap">
                                                                        <div class="check_parent">
                                                                            <input type="checkbox" name="electricidadmobile" id="electricidadmobile" value="" />
                                                                            <label for="electricidadmobile">Electricidad</label>
                                                                        </div>																					
                                                                        <input type="text" name="electricidadfielmobile" id="electricidadfielmobile" value="" size="35" placeholder="especificar" />
                                                                    </div>																		


                                                            </div>
                                                    </div>
                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                            <div class="form_info cmsms_checkboxes">	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="arbolSecomobile" id="arbolSecomobile" value="" />
                                                                            <label for="arbolSecomobile">Árbol seco</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="ramasMuertasmobile" id="ramasMuertasmobile" value="" />
                                                                            <label for="ramasMuertasmobile">Ramas muertas o colgantes</label>
                                                                    </div>																	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="arbolDescortezadomobile" id="arbolDescortezadomobile" value="" />
                                                                            <label for="arbolDescortezadomobile">Árbol descortezado</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="maderaBajomobile" id="maderaBajomobile" value="" />
                                                                            <label for="maderaBajomobile">Madera bajo tensión</label>
                                                                    </div>	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="silvestre" id="silvestre" value="" />
                                                                            <label for="silvestre">Vida silvestre</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="pudricionmobile" id="pudricionmobile" value="em1" />
                                                                            <label for="pudricionmobile">Pudrición</label>
                                                                    </div>	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="cavidadesmobile" id="cavidadesmobile" value="" />
                                                                            <label for="cavidadesmobile">Cavidades</label>
                                                                    </div>	

                                                            </div>																		
                                                            </div>


                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                            <div class="form_info cmsms_checkboxes">

                                                                    <div class="check_parent">																		
                                                                            <label for="plagas">Obstaculos</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="bardasmobile" id="bardasmobile" value="" />
                                                                            <label for="bardasmobile">Cercas o bardas</label>
                                                                    </div>																																													
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="peatonesmobile" id="peatonesmobile" value="" />
                                                                            <label for="peatonesmobile">Peatones</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="mascotasmobile" id="mascotasmobile" value="" />
                                                                            <label for="mascotasmobile">Perros/Mascotas</label>
                                                                    </div>		
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="jardineriamobile" id="jardineriamobile" value="" />
                                                                            <label for="jardineriamobile">Jardinería</label>
                                                                    </div>	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="estructurasmobile" id="estructurasmobile" value="" />
                                                                            <label for="estructurasmobile">Estructuras<label>
                                                                    </div>
                                                                    <div class="form_field_wrap">
                                                                                                    <div class="check_parent">
                                                                                                            <input type="checkbox" name="otrosPeligrosmobile" id="otrosPeligrosmobile" value="" />
                                                                                                            <label for="otrosPeligrosmobile">Otro</label>
                                                                                                    </div>																																									
                                                                                                    <input type="text" name="peligrosTrabmobile" id="peligrosTrabmobile" value="" size="35" placeholder="especificar" />
                                                                    </div>																		
                                                            </div>
                                                    </div>															

                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Plan de mitigación de peligros</h3>
                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                            <div class="form_info cmsms_checkboxes">

                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="equipProtmobile" id="equipProtmobile" value="" />
                                                                            <label for="equipProtmobile">Equipo de protección personal</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="rcpmobile" id="rcpmobile" value="" />
                                                                            <label for="rcpmobile">Primeros auxilios/RCP</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="supFuegomobile" id="supFuegomobile" value="" />
                                                                            <label for="supFuegomobile">Plan de supresión de fuego</label>
                                                                    </div>																																													
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="juntaTrabmobile" id="juntaTrabmobile" value="" />
                                                                            <label for="juntaTrabmobile">Junta de trabajo</label>
                                                                    </div>	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="inspArbolmobile" id="inspArbolmobile" value="" />
                                                                            <label for="inspArbolmobile">Inspección de árbol(es)</label>
                                                                    </div>					
                                                            </div>
                                                    </div>
                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                            <div class="form_info cmsms_checkboxes">	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="inspEquipomobile" id="inspEquipomobile" value="" />
                                                                            <label for="inspEquipomobile">Inspección equipo de protección contra caídas</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="inspMotosierrasmobile" id="inspMotosierrasmobile" value="" />
                                                                            <label for="inspMotosierrasmobile">Inspección de motosierras y herramientas</label>
                                                                    </div>																	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="equipoCordajemobile" id="equipoCordajemobile" value="" />
                                                                            <label for="equipoCordajemobile">Uso de equipo de cordaje</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="acordonamientomobile" id="acordonamientomobile" value="" />
                                                                            <label for="acordonamientomobile">Acordonamiento del área</label>
                                                                    </div>	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="comunicacionmobile" id="comunicacionmobile" value="" />
                                                                            <label for="comunicacionmobile">Comunicación</label>
                                                                    </div>

                                                            </div>																		
                                                            </div>


                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                            <div class="form_info cmsms_checkboxes">
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="supSitiomobile" id="supSitiomobile" value="" />
                                                                            <label for="supSitiomobile">Supervisión en sitio</label>
                                                                    </div>																																													
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="caidamobile" id="caidamobile" value="" />
                                                                            <label for="caidamobile">Zona de caída</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="prevClimamobile" id="prevClimamobile" value="" />
                                                                            <label for="prevClimamobile">Prevención climática</label>
                                                                    </div>		
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="dañoExismobile" id="dañoExismobile" value="" />
                                                                            <label for="dañoExismobile">Daño existente (documentar)</label>
                                                                    </div>	
                                                                    <div class="form_field_wrap">
                                                                                                    <div class="check_parent">
                                                                                                            <input type="checkbox" name="otrosPlanmobile" id="otrosPlanmobile" value="" />
                                                                                                            <label for="otrosPlanmobile">Otro</label>
                                                                                                    </div>																																									
                                                                                                    <input type="text" name="planmobile" id="planmobile" value="" size="35" placeholder="especificar" />
                                                                    </div>																		
                                                            </div>
                                                    </div>																

                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Equipo de Protección Personal</h3>
                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                            <div class="form_info cmsms_checkboxes">

                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="cascomobile" id="cascomobile" value="" />
                                                                            <label for="cascomobile">Casco</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="gafasmobile" id="gafasmobile" value="" />
                                                                            <label for="gafasmobile">Gafas de seguridad</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="chalecomobile" id="chalecomobile" value="" />
                                                                            <label for="chalecomobile">Chaleco/camiseta reflejante</label>
                                                                    </div>																																																		
                                                            </div>
                                                    </div>
                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                            <div class="form_info cmsms_checkboxes">	
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="auditivamobile" id="auditivamobile" value="" />
                                                                            <label for="auditivamobile">Protección auditiva</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="mascaramobile" id="mascaramobile" value="" />
                                                                            <label for="mascaramobile">Máscara/Protección facial</label>
                                                                    </div>
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="botasmobile" id="botasmobile" value="" />
                                                                            <label for="botasmobile">Botas de trabajo</label>
                                                                    </div>																																												
                                                            </div>																		
                                                            </div>


                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                            <div class="form_info cmsms_checkboxes">
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="chaparrerasmobile" id="chaparrerasmobile" value="" />
                                                                            <label for="chaparrerasmobile">Chaparreras</label>
                                                                    </div>																																													
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="guantesmobile" id="guantesmobile" value="" />
                                                                            <label for="guantesmobile">Guantes</label>
                                                                    </div>
                                                                    <div class="form_field_wrap">
                                                                                                    <div class="check_parent">
                                                                                                            <input type="checkbox" name="otrosEquiposmobile" id="otrosEquiposmobile" value="" />
                                                                                                            <label for="otrosEquiposmobile">Otro</label>
                                                                                                    </div>																																									
                                                                                                    <input type="text" name="otrosEquiposTextmobile" id="otrosEquiposTextmobile" value="" size="35" placeholder="especificar"  />
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
                                            <!--fin hoja dos-->
                                        </div>
                                        </div>
                                                    

                                            </div>
                                        </div>
                                        </form>

                                        <!--ESCRITORIO-->
                                        <form id="formDesktop">
                                        <div class="cmsms_contact_form desktop">
                                        <input type="hidden" name="tipo" id="tipo" value="desktop">
                                        <div class="cmsms-form-builder">
                                        <div class="cmsms_tabs tabs_mode_tab">
                                        <ul class="cmsms_tabs_list">
                                            <li id="cmsms_tabs_list_item_555469b2e5f20" class="cmsms_tabs_list_item current_tab">
                                                <a href="#"><span>Reporte inicio</span></a>
                                            </li>
                                            <li id="cmsms_tabs_list_item_555469b2e612c" class="cmsms_tabs_list_item">
                                                <a href="#"><span>Información de contacto</span></a>
                                            </li>                                                
                                        </ul>
                                        <div class="cmsms_tabs_wrap">
                                            <!--Inicia hoja uno-->
                                            <div id="cmsms_tab_555469b2e5f20" class="cmsms_tab active_tab">
                                                <div class="cmsms_tab_inner">
                                                <!--hoja uino data-->
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
                                                <!--fin uno data-->
                                                </div>
                                            </div>
                                            <!--****************************fin hoja uno****************************-->
                                            
                                            <!--****************************Inicia hoja dos****************************-->
                                            <div id="cmsms_tab_555469b2e612c" class="cmsms_tab">
                                                <div class="cmsms_tab_inner">
                                                    <!--Emepioza hja dos...-->
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Información Contacto</h3>
                                                <div class="form_info cmsms_input one_third">  
                                                    <!--label for="cmsms_your_phone_number_is">Proyecto</label-->
                                                    <div class="form_field_wrap">
                                                        <label for="">Lugar</label>
                                                        <input type="text" name="lugardesktop" id="lugardesktop" value="" size="35"/>																		
                                                    </div>
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Supervisor</label>
                                                        <input type="text" name="supervisordesktop" id="supervisordesktop" value="" size="35" />																		
                                                    </div>
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Teléfono</label>
                                                        <input type="text" name="telefonodesktop" id="telefonodesktop" value="" size="35" />																		
                                                    </div>																
                                                </div>	
                                                <div class="form_info cmsms_input one_third">  
                                                    <!--label for="cmsms_your_phone_number_is">Cliente</label-->
                                                    <div class="form_field_wrap">   
                                                        <label for="cmsms_your_phone_number_is">Fecha</label>
                                                        <input type="date" name="fechadesktop" id="fechadesktop" value="" size="35" />																		
                                                    </div>
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Nombre cliente</label>
                                                        <input type="text" name="nombreclientedesktop" id="nombreclientedesktop" value="" size="35" />																		
                                                    </div>
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Email cliente</label>
                                                        <input type="text" name="emailclientedesktop" id="emailclientedesktop" value="" size="35"  />																		
                                                    </div>
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Teléfono cliente</label>
                                                        <input type="text" name="telefonoclientedesktop" id="telefonoclientedesktop" value="" size="35" />																		
                                                    </div>																
                                                </div>
                                                <div class="form_info cmsms_input one_third">  
                                                    <!--label for="cmsms_your_phone_number_is">Hospital</label-->
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Hospital más cercano</label>
                                                        <input type="text" name="hospitaldesktop" id="hospitaldesktop" value="" size="35" placeholder="" />																		
                                                    </div>
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Teléfono hospital</label>
                                                        <input type="text" name="telefonohospitaldesktop" id="telefonohospitaldesktop" value="" size="35" placeholder="" />																		
                                                    </div>	
                                                    <div class="form_field_wrap">
                                                        <label for="cmsms_your_phone_number_is">Teléfono de emergencia</label>
                                                        <input type="text" name="telefonoemerdesktop" id="telefonoemerdesktop" value="" size="35" placeholder="" />																		
                                                    </div>				
                                                </div>																
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Dirección</h3>
                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="emergencia1desktop" id="emergencia1desktop" value="Plan de acción en caso de emergencia,direccion" />
                                                                <label for="emergencia1desktop">Plan de acción en caso de emergencia</label>
                                                        </div>  		
                                                        <br><br>
                                                        <label for="llamadaemerdesktop">Llamada de emergencia:</label>
                                                        <input type="text" name="llamadaemerdesktop" id="llamadaemerdesktop" value="" size="35" placeholder="especificar" />

                                                    </div>
                                                </div>
                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">															
                                                        
                                                        <label for="primerosauxdesktop">Primeros auxilios y RCP:</label>
                                                        <input type="text" name="primerosauxdesktop" id="primerosauxdesktop" value="" size="35" placeholder="especificar" />

                                                        <label for="rescatedesktop">Rescate aéreo:</label>
                                                        <input type="text" name="rescatedesktop" id="rescatedesktop" value="" size="35" placeholder="especificar" />

                                                    </div>
                                                </div>	
                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="aguaPotabledesktop" id="aguaPotabledesktop" value="Agua potable,direccion" />
                                                                <label for="aguaPotabledesktop">Agua potable</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="extinguidordesktop" id="extinguidordesktop" value="Extinguidor,direccion" />
                                                                <label for="extinguidordesktop">Extinguidor</label>
                                                        </div>
                                                        <div class="form_field_wrap">
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="sisComdesktop" id="sisComdesktop" value="Sistema de Comunicación,direccion" />
                                                                    <label for="sisComdesktop">Sistema de Comunicación</label>
                                                            </div>																					

                                                            <input type="text" name="sisComtextdesktop" id="sisComtextdesktop" value="" size="35" placeholder="especificar" />
                                                        </div>																																														

                                                    </div>
                                                </div>
                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">															
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="botiquindesktop" id="botiquindesktop" value="Botiquín de primeros auxilios,direccion" />
                                                                <label for="botiquindesktop">Botiquín de primeros auxilios</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="smadesktop" id="smadesktop" value="Permiso SMA,direccion" />
                                                                <label for="smadesktop">Permiso SMA</label>
                                                        </div>	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="inspecciondesktop" id="inspecciondesktop" value="Inspección de equipo,direccion" />
                                                                <label for="inspecciondesktop">Inspección de equipo</label>
                                                        </div>
                                                        <!--div class="check_parent">
                                                                <input type="checkbox" name="emergencia1desktop" id="emergencia1desktop" value="Plan de acción en caso de emergencia,direccion" />
                                                                <label for="emergencia1desktop">Plan de acción en caso de emergencia</label>
                                                        </div-->																	
                                                    </div>
                                                </div>	
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Descripción del trabajo a desarrollar</h3>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                <div class="form_info cmsms_checkboxes">

                                                    <div class="check_parent">
                                                            <input type="checkbox" name="podadesktop" id="podadesktop" value="Poda,trabajo" />
                                                            <label for="podadesktop">Poda</label>
                                                    </div>
                                                    <div class="check_parent">
                                                            <input type="checkbox" name="remociondesktop" id="remociondesktop" value="Remoción,trabajo" />
                                                            <label for="remociondesktop">Remoción</label>
                                                    </div>
                                                    <div class="check_parent">
                                                            <input type="checkbox" name="manicordajedesktop" id="manicordajedesktop" value="Maniobras de cordaje,trabajo" />
                                                            <label for="manicordajedesktop">Maniobras de cordaje</label>
                                                    </div>																																													
                                                    <div class="check_parent">
                                                            <input type="checkbox" name="ctrlPeatonaldesktop" id="ctrlPeatonaldesktop" value="Control peatonal,trabajo" />
                                                            <label for="ctrlPeatonaldesktop">Control peatonal</label>
                                                    </div>	
                                                    <div class="check_parent">
                                                            <input type="checkbox" name="ctrlTransitodesktop" id="ctrlTransitodesktop" value="Control de tránsito temporal,trabajo" />
                                                            <label for="ctrlTransitodesktop">Control de tránsito temporal</label>
                                                    </div>																		
                                                </div>
                                                </div>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">															
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="caidalibredesktop" id="caidalibredesktop" value="Caída libre,trabajo" />
                                                                <label for="caidalibredesktop">Caída libre</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="desramedesktop" id="desramedesktop" value="Desrame/ Troceado,trabajo" />
                                                                <label for="desramedesktop">Desrame/ Troceado</label>
                                                        </div>	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="destoconadodesktop" id="destoconadodesktop" value="Destoconado,trabajo" />
                                                                <label for="destoconadodesktop">Destoconado</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="remocionArbdesktop" id="remocionArbdesktop" value="Remoción de arbustos,trabajo" />
                                                                <label for="remocionArbdesktop">Remoción de arbustos</label>
                                                        </div>	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="astilladodesktop" id="astilladodesktop" value="Astillado/Triturado,trabajo" />
                                                                <label for="astilladodesktop">Astillado/Triturado</label>
                                                        </div>																		
                                                    </div>
                                                </div>	
                                                <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                    <div class="form_info cmsms_checkboxes">

                                                        <div class="check_parent">
                                                                <input type="checkbox" name="plagasdesktop" id="plagasdesktop" value="Tratamiento de plagas o suelo,trabajo" />
                                                                <label for="plagasdesktop">Tratamiento de plagas o suelo</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="dostrepadesktop" id="dostrepadesktop" value="Trepa,trabajo" />
                                                                <label for="dostrepadesktop">Trepa</label>
                                                        </div>																																													
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="materialCortadodesktop" id="materialCortadodesktop" value="Retiro de material cortado,trabajo" />
                                                                <label for="materialCortadodesktop">Retiro de material cortado</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="equipoEspdesktop" id="equipoEspdesktop" value="Equipo especializado,trabajo" />
                                                                <label for="equipoEspdesktop">Equipo especializado</label>
                                                        </div>	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="otrosDescripdesktop" id="otrosDescripdesktop" value="Otros,trabajo" />
                                                                <label for="otrosDescripdesktop">Otros</label>
                                                        </div>	
                                                        <input type="text" name="otrosDescriptextdesktop" id="otrosDescriptextdesktop" size="35" placeholder="especificar" />
                                                                                                        
                                                    </div>
                                                </div>	
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Peligros específicos del área de trabajo</h3>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">

                                                        <div class="check_parent">
                                                                <input type="checkbox" name="arbolContactodesktop" id="arbolContactodesktop" value="Árbol en contacto,peligros" />
                                                                <label for="arbolContactodesktop">Árbol en contacto</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="dmadesktop" id="dmadesktop" value="Árbol/Rama en DMA,peligros" />
                                                                <label for="dmadesktop">Árbol/Rama en DMA</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="defEstructdesktop" id="defEstructdesktop" value="Defecto estructural,peligros" />
                                                                <label for="defEstructdesktop">Defecto estructural</label>
                                                        </div>																																													
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="climadesktop" id="climadesktop" value="Clima,peligros" />
                                                                <label for="climadesktop">Clima</label>
                                                        </div>	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="quimicosdesktop" id="quimicosdesktop" value="Manejo de químicos,peligros" />
                                                                <label for="quimicosdesktop">Manejo de químicos</label>
                                                        </div>	
                                                        <div class="form_field_wrap">
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="electricidaddesktop" id="electricidaddesktop" value="Electricidad,peligros" />
                                                                    <label for="electricidaddesktop">Electricidad</label>
                                                            </div>																					

                                                            <input type="text" name="electricidadfielddesktop" id="electricidadfielddesktop" value="" size="35" placeholder="especificar" />
                                                        </div>																		
                                                    </div>
                                                </div>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="arbolSecodesktop" id="arbolSecodesktop" value="Árbol seco,peligros" />
                                                                <label for="arbolSecodesktop">Árbol seco</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="ramasMuertasdesktop" id="ramasMuertasdesktop" value="Ramas muertas o colgantes,peligros" />
                                                                <label for="ramasMuertasdesktop">Ramas muertas o colgantes</label>
                                                        </div>																	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="arbolDescortezadodesktop" id="arbolDescortezadodesktop" value="Árbol descortezado,peligros" />
                                                                <label for="arbolDescortezadodesktop">Árbol descortezado</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="maderaBajodesktop" id="maderaBajodesktop" value="Madera bajo tensión,peligros" />
                                                                <label for="maderaBajodesktop">Madera bajo tensión</label>
                                                        </div>	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="silvestredesktop" id="silvestredesktop" value="Vida silvestre,peligros" />
                                                                <label for="silvestredesktop">Vida silvestre</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="pudriciondesktop" id="pudriciondesktop" value="Pudrición,peligros" />
                                                                <label for="pudriciondesktop">Pudrición</label>
                                                        </div>	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="cavidadesdesktop" id="cavidadesdesktop" value="Cavidades,peligros" />
                                                                <label for="cavidadesdesktop">Cavidades</label>
                                                        </div>	

                                                    </div>																		
                                                </div>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                    <div class="form_info cmsms_checkboxes">

                                                        <div class="check_parent">																		
                                                                <label for="plagas">Obstaculos</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="bardasdesktop" id="bardasdesktop" value="Cercas o bardas,peligros" />
                                                                <label for="bardasdesktop">Cercas o bardas</label>
                                                        </div>																																													
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="peatonesdesktop" id="peatonesdesktop" value="Peatones,peligros" />
                                                                <label for="peatonesdesktop">Peatones</label>
                                                        </div>
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="mascotasdesktop" id="mascotasdesktop" value="Perros/Mascotas,peligros" />
                                                                <label for="mascotasdesktop">Perros/Mascotas</label>
                                                        </div>		
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="jardineriadesktop" id="jardineriadesktop" value="Jardinería,peligros" />
                                                                <label for="jardineriadesktop">Jardinería</label>
                                                        </div>	
                                                        <div class="check_parent">
                                                                <input type="checkbox" name="estructurasdesktop" id="estructurasdesktop" value="Estructuras,peligros" />
                                                                <label for="estructurasdesktop">Estructuras</label>
                                                        </div>
                                                        <div class="form_field_wrap">
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="otrosPeligrosdesktop" id="otrosPeligrosdesktop" value="Otro,peligros" />
                                                                    <label for="otrosPeligrosdesktop">Otro</label>
                                                            </div>																																									
                                                            <input type="text" name="otrospeligrosfielddesktop" id="otrospeligrosfielddesktop" value="" size="35" placeholder="especificar" />
                                                        </div>																		
                                                    </div>
                                                </div>	
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Plan de mitigación de peligros</h3>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                        <div class="form_info cmsms_checkboxes">

                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="equipProtdesktop" id="equipProtdesktop" value="Equipo de protección personal,mitigacion" />
                                                                        <label for="equipProtdesktop">Equipo de protección personal</label>
                                                                </div>
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="rcpdesktop" id="rcpdesktop" value="Primeros auxilios/RCP,mitigacion" />
                                                                        <label for="rcpdesktop">Primeros auxilios/RCP</label>
                                                                </div>
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="supFuegodesktop" id="supFuegodesktop" value="Plan de supresión de fuego,mitigacion" />
                                                                        <label for="supFuegodesktop">Plan de supresión de fuego</label>
                                                                </div>																																													
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="juntaTrabdesktop" id="juntaTrabdesktop" value="Junta de trabajo,mitigacion" />
                                                                        <label for="juntaTrabdesktop">Junta de trabajo</label>
                                                                </div>	
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="inspArboldesktop" id="inspArboldesktop" value="Inspección de árbol(es),mitigacion" />
                                                                        <label for="inspArboldesktop">Inspección de árbol(es)</label>
                                                                </div>					
                                                        </div>
                                                </div>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                        <div class="form_info cmsms_checkboxes">	
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="inspEquipodesktop" id="inspEquipodesktop" value="Inspección equipo de protección contra caídas,mitigacion" />
                                                                        <label for="inspEquipodesktop">Inspección equipo de protección contra caídas</label>
                                                                </div>
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="inspMotosierrasdesktop" id="inspMotosierrasdesktop" value="Inspección de motosierras y herramientas,mitigacion" />
                                                                        <label for="inspMotosierrasdesktop">Inspección de motosierras y herramientas</label>
                                                                </div>																	
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="equipoCordajedesktop" id="equipoCordajedesktop" value="Uso de equipo de cordaje,mitigacion" />
                                                                        <label for="equipoCordajedesktop">Uso de equipo de cordaje</label>
                                                                </div>
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="acordonamientodesktop" id="acordonamientodesktop" value="Acordonamiento del área,mitigacion" />
                                                                        <label for="acordonamientodesktop">Acordonamiento del área</label>
                                                                </div>	
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="comunicaciondesktop" id="comunicaciondesktop" value="Comunicación,mitigacion" />
                                                                        <label for="comunicaciondesktop">Comunicación</label>
                                                                </div>

                                                        </div>																		
                                                </div>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                        <div class="form_info cmsms_checkboxes">
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="supSitiodesktop" id="supSitiodesktop" value="Supervisión en sitio,mitigacion" />
                                                                        <label for="supSitiodesktop">Supervisión en sitio</label>
                                                                </div>																																													
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="caidadesktop" id="caidadesktop" value="Zona de caída,mitigacion" />
                                                                        <label for="caidadesktop">Zona de caída</label>
                                                                </div>
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="prevClimadesktop" id="prevClimadesktop" value="Prevención climática,mitigacion" />
                                                                        <label for="prevClimadesktop">Prevención climática</label>
                                                                </div>		
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="dañoExisdesktop" id="dañoExisdesktop" value="Daño existente (documentar),mitigacion" />
                                                                        <label for="dañoExisdesktop">Daño existente (documentar)</label>
                                                                </div>	
                                                                <div class="form_field_wrap">
                                                                    <div class="check_parent">
                                                                            <input type="checkbox" name="otrosPlandesktop" id="otrosPlandesktop" value="Otro,mitigacion" />
                                                                            <label for="otrosPlandesktop">Otro</label>
                                                                    </div>																																									
                                                                    <input type="text" name="otrosplanfielddesktop" id="otrosplanfielddesktop" value="" size="35" placeholder="especificar" />
                                                                </div>																		
                                                        </div>
                                                </div>	
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Equipo de Protección Personal</h3>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                        <div class="form_info cmsms_checkboxes">

                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="cascodesktop" id="cascodesktop" value="Casco,proteccion" />
                                                                        <label for="cascodesktop">Casco</label>
                                                                </div>
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="gafasdesktop" id="gafasdesktop" value="Gafas de seguridad,proteccion" />
                                                                        <label for="gafasdesktop">Gafas de seguridad</label>
                                                                </div>
                                                                <div class="check_parent">
                                                                        <input type="checkbox" name="chalecodesktop" id="chalecodesktop" value="Chaleco/camiseta reflejante,proteccion" />
                                                                        <label for="chalecodesktop">Chaleco/camiseta reflejante</label>
                                                                </div>																																																		
                                                        </div>
                                                </div>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                    <div class="form_info cmsms_checkboxes">	
                                                    <div class="check_parent">
                                                            <input type="checkbox" name="auditivadesktop" id="auditivadesktop" value="Protección auditiva,proteccion" />
                                                            <label for="auditivadesktop">Protección auditiva</label>
                                                    </div>
                                                    <div class="check_parent">
                                                            <input type="checkbox" name="mascaradesktop" id="mascaradesktop" value="Máscara/Protección facial,proteccion" />
                                                            <label for="mascaradesktop">Máscara/Protección facial</label>
                                                    </div>
                                                    <div class="check_parent">
                                                            <input type="checkbox" name="botasdesktop" id="botasdesktop" value="Botas de trabajo,proteccion" />
                                                            <label for="botasdesktop">Botas de trabajo</label>
                                                    </div>																																												
                                                </div>																		
                                                </div>
                                                <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                    <div class="form_info cmsms_checkboxes">
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="chaparrerasdesktop" id="chaparrerasdesktop" value="Chaparreras,proteccion" />
                                                                    <label for="chaparrerasdesktop">Chaparreras</label>
                                                            </div>																																													
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="guantesdesktop" id="guantesdesktop" value="Guantes,proteccion" />
                                                                    <label for="guantesdesktop">Guantes</label>
                                                            </div>
                                                            <div class="form_field_wrap">
                                                            <div class="check_parent">
                                                                    <input type="checkbox" name="otrosEquiposdesktop" id="otrosEquiposdesktop" value="Otro,proteccion" />
                                                                    <label for="otrosEquiposdesktop">Otro</label>
                                                            </div>																																									
                                                            <input type="text" name="otrosequiposfielddesktop" id="otrosequiposfielddesktop" value="" size="35" placeholder="especificar" />
                                                            </div>																		
                                                    </div>
                                                </div>
                                                <div class="form_info cmsms_input one_third"></div>
                                                <div class="form_info cmsms_input one_third"></div>
                                                <div class="form_info cmsms_input one_third">  
                                                <div id="cmsms_button_555444cd12761" class="button_wrap">
                                                    <input type="submit" id="contact_form_2_formsend" class="cmsms_button" value="Enviar informaciòn"/>
                                                    <!--a href="#" class="cmsms_button">Click Me</a-->
                                                </div>
                                                </div>
                                                <!--    <input type="submit" id="contact_form_2_formsend" class="cmsms_button" value="Enviar informaciòn"/>
                                                </div-->
                                                <!--fin hoja dos-->
                                                </div>
                                            </div>                                                
                                            <!--fin hoja dos-->
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                            
                                        <!--div class="cmsms_contact_form desktop">
                                            <input type="hidden" name="tipo" id="tipo" value="desktop">
                                            <div class="cmsms-form-builder">
                                                
                                                
                                            </div>
                                            <div class="cl"></div>
                                        </div-->
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
