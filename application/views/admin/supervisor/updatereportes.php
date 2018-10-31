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
							<a href="" class="cms_home">Actualizar</a>
							<span class="breadcrumbs_sep"> / </span>							
							<span>Actualiza reporte</span>
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
                                                                                            <input type="hidden" name="idreporte" id="idreporte" value="<?= $reportes[0]->id; ?>">
                                                                                            <div class="cmsms-form-builder">
                                                                                                
                                                                                                <div class="cmsms_tabs tabs_mode_tab">
                                                                                                <ul class="cmsms_tabs_list">
                                                                                                    <li id="cmsms_tabs_list_item_555469b2e5f20" class="cmsms_tabs_list_item current_tab">
                                                                                                        <a href="#"><span>Reporte inicio</span></a>
                                                                                                    </li>
                                                                                                    <li id="cmsms_tabs_list_item_555469b2e612c" class="cmsms_tabs_list_item">
                                                                                                        <a href="#"><span>Información de contacto</span></a>
                                                                                                    </li>
                                                                                                    <li id="cmsms_tabs_list_item_555469b2e631b" class="cmsms_tabs_list_item">
                                                                                                        <a href="#"><span>Firmas</span></a>
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
                                                                                                            <input type="text" name="numcotizacionmobile" id="numcotizacionmobile" value="<?= $reportes[0]->cotizacion; ?>" size="35" />
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_half">
                                                                                                        <label for="cmsms_your_phone_number_is">Cliente</label>
                                                                                                        <div class="form_field_wrap">
                                                                                                                <input type="text" name="clientemobile" id="clientemobile" value="<?= $reportes[0]->cliente; ?>" size="35" />
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_third">
                                                                                                        <label for="contact_email">Nombre del proyecto</label>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="proyectomobile" id="proyectomobile" value="<?= $reportes[0]->nombre_proyecto; ?>" size="35" />
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_third">
                                                                                                        <label for="cmsms_your_phone_number_is">Ingresos</label>
                                                                                                        <div class="form_field_wrap">
                                                                                                                <input type="number" name="ingresosmobile" id="ingresosmobile" value="<?= $reportes[0]->ingreso; ?>" size="35"/>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_third">
                                                                                                        <label for="cmsms_your_phone_number_is">Forma de pago</label>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="formapagomobile" id="formapagomobile" value="<?= $reportes[0]->forma_pago; ?>" size="35" />
                                                                                                        </div>
                                                                                                </div>

                                                                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                <br>
                                                                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Gastos Nónima</h3>

                                                                                                <div class="ancho60">
                                                                                                <?php
                                                                                                    $i=1;
                                                                                                    $indice = 0;
                                                                                                    for($i;$i<=6;$i++){
                                                                                                        if(isset($gastos[$indice]) && $gastos[$indice] != ''){
                                                                                                ?>
                                                                                                    <div class="form_info cmsms_input">
                                                                                                    <label for="cmsms_your_phone_number_is">Nombre</label>
                                                                                                    <input type="text" name="gastos<?= $i ?>mobile" id="gastos<?= $i ?>mobile" value="<?= $gastos[$indice]->nombre ?>" size="35"/>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input">
                                                                                                        <label for="cmsms_your_phone_number_is">Posiciòn</label>
                                                                                                        <input type="text" name="posicion<?= $i ?>mobile" id="posicion<?= $i ?>mobile" value="<?= $gastos[$indice]->posicion ?>" size="35" />
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input">
                                                                                                        <label for="cmsms_your_phone_number_is">$</label>
                                                                                                        <input type="text" name="ingreso<?= $i ?>mobile" id="ingreso<?= $i ?>mobile" value="<?= $gastos[$indice]->ingreso ?>" size="35" class="validate[custom[number]]" />
                                                                                                    </div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <br>
                                                                                                <?php
                                                                                                        }else{
                                                                                                ?>
                                                                                                    <div class="form_info cmsms_input">
                                                                                                    <label for="cmsms_your_phone_number_is">Nombre</label>
                                                                                                    <input type="text" name="gastos<?= $i ?>mobile" id="gastos<?= $i ?>mobile" value="" size="35"/>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input">
                                                                                                        <label for="cmsms_your_phone_number_is">Posiciòn</label>
                                                                                                        <input type="text" name="posicion<?= $i ?>mobile" id="posicion<?= $i ?>mobile" value="" size="35" />
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input">
                                                                                                        <label for="cmsms_your_phone_number_is">$</label>
                                                                                                        <input type="text" name="ingreso<?= $i ?>mobile" id="ingreso<?= $i ?>mobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                    </div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <br>
                                                                                                <?php            
                                                                                                        }
                                                                                                        $indice = $indice+1;
                                                                                                    }
                                                                                                ?>
                                                                                                
                                                                                                </div>                                                                                                                                                                                                                          
                                                                                                
                                                                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Gastos Otros</h3>
                                                                                                <div class="ancho80">
                                                                                                    <?php
                                                                                                        $i = 1;
                                                                                                        $indice = 0;
                                                                                                        for($i;$i<=6;$i++){
                                                                                                            if(isset($otros[$indice]) && $otros[$indice] != ''){
                                                                                                    ?>
                                                                                                        <div class="form_info cmsms_input">
                                                                                                            <label for="cmsms_your_phone_number_is">Descripción</label>
                                                                                                            <input type="text" name="descripcion<?= $i ?>mobile" id="descripcion<?= $i ?>mobile" value="<?= $otros[$indice]->descripcion ?>" size="35" />
                                                                                                            <label for="cmsms_your_phone_number_is">$</label>
                                                                                                            <input type="text" name="gastodescripcion<?= $i ?>mobile" id="gastodescripcion<?= $i ?>mobile" value="<?= $otros[$indice]->gasto ?>" size="35" class="validate[custom[number]]" />
                                                                                                        </div>
                                                                                                        <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                        <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                        <br>
                                                                                                    <?php
                                                                                                            }else {
                                                                                                    ?>
                                                                                                        <div class="form_info cmsms_input">
                                                                                                            <label for="cmsms_your_phone_number_is">Descripción</label>
                                                                                                            <input type="text" name="descripcion<?= $i ?>mobile" id="descripcion<?= $i ?>mobile" value="" size="35" />
                                                                                                            <label for="cmsms_your_phone_number_is">$</label>
                                                                                                            <input type="text" name="gastodescripcion<?= $i ?>mobile" id="gastodescripcion<?= $i ?>mobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                        </div>
                                                                                                        <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                        <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                        <br>
                                                                                                    <?php
                                                                                                            }
                                                                                                            $indice = $indice + 1;
                                                                                                        }
                                                                                                    ?> 
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Equipo utilizado</h3>
                                                                                                <div class="form_info cmsms_input one_half">
                                                                                                    
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Camión</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($camion) && $camion != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="camionmobile" id="camionmobile" value="<?= $camion->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="camionmobile" id="camionmobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Equipo de trepa</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                 <?php
                                                                                                                    if(isset($trepa) && $trepa != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="trepamobile" id="trepamobile" value="<?= $trepa->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="trepamobile" id="trepamobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Motosierras</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                 <?php
                                                                                                                    if(isset($motosierra) && $motosierra != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="motosierramobile" id="motosierramobile" value="<?= $motosierra->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="motosierramobile" id="motosierramobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                         <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Equipo de cordaje</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                 <?php
                                                                                                                    if(isset($cordaje) && $cordaje != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="cordajemobile" id="cordajemobile" value="<?= $cordaje->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="cordajemobile" id="cordajemobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Equipo de asperjado</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($asperjado) && $asperjado != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="asperjadomobile" id="asperjadomobile" value="<?= $asperjado->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="asperjadomobile" id="asperjadomobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Equipo de limpieza</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($limpieza) && $limpieza != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="limpiezamobile" id="limpiezamobile" value="<?= $limpieza->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="limpiezamobile" id="limpiezamobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Otro</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($otro1) && $otro1 != ''){
                                                                                                                ?>
                                                                                                                    <input type="text" name="otrodetail1mobile" id="otrodetail1mobile" value="<?= $otro1->concepto; ?>" size="35" placeholder="especificar" />
                                                                                                                   <input type="text" name="otro1mobile" id="otro1mobile" value="<?= $otro1->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                            
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                    <input type="text" name="otro1mobile" id="otro1mobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                                    <input type="text" name="otrodetail1mobile" id="otrodetail1mobile" value="" size="35" placeholder="especificar" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Otro</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($otro2) && $otro2 != ''){
                                                                                                                ?>
                                                                                                                    <input type="text" name="otrodetail2mobile" id="otrodetail2mobile" value="<?= $otro2->concepto; ?>" size="35" placeholder="especificar" />
                                                                                                                   <input type="text" name="otro2mobile" id="otro2mobile" value="<?= $otro2->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                            
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                    <input type="text" name="otro2mobile" id="otro2mobile" value="" size="35" class="validate[custom[number]]" />
                                                                                                                    <input type="text" name="otrodetail2mobile" id="otrodetail2mobile" value="" size="35" placeholder="especificar" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
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
                                                                                                        <input type="text" name="lugarmobile" id="lugarmobile" value="<?= $reportes_contacto[0]->lugar; ?>" size="35" placeholder="Lugar" />																		
                                                                                                    </div>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <label for="cmsms_your_phone_number_is">Supervisor</label>
                                                                                                        <input type="text" name="supervisormobile" id="supervisormobile" value="<?= $reportes_contacto[0]->supervisor; ?>" size="35" placeholder="Supervisor" />																		
                                                                                                    </div>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <label for="cmsms_your_phone_number_is">Teléfono</label>
                                                                                                        <input type="text" name="telefonomobile" id="telefonomobile" value="<?= $reportes_contacto[0]->telefono; ?>" size="35" placeholder="Teléfono" />																		
                                                                                                    </div>																
                                                                                                    </div>	

                                                                                                    <div class="form_info cmsms_input one_third">  
                                                                                                    <label for="cmsms_your_phone_number_is">Cliente</label>
                                                                                                    <div class="form_field_wrap">   
                                                                                                        <label for="cmsms_your_phone_number_is">Fecha</label>
                                                                                                        <input type="date" name="fechamobile" id="fechamobile" value="<?= $reportes_contacto[0]->fecha; ?>" size="35" />																		
                                                                                                    </div>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <label for="cmsms_your_phone_number_is">Nombre </label>
                                                                                                        <input type="text" name="nombreclientemobile" id="nombreclientemobile" value="<?= $reportes_contacto[0]->nombre_cliente; ?>" size="35" placeholder="Nombre del cliente" />																		
                                                                                                    </div>
                                                                                                    <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Email</label>
                                                                                                            <input type="text" name="emailclientemobile" id="emailclientemobile" value="<?= $reportes_contacto[0]->email_cliente; ?>" size="35" placeholder="Email" />																		
                                                                                                        </div>
                                                                                                    <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Teléfono</label>
                                                                                                            <input type="text" name="telefonoclientemobile" id="telefonoclientemobile" value="<?= $reportes_contacto[0]->telefono_cliente; ?>" size="35" placeholder="Teléfono de cliente" />																		
                                                                                                        </div>																
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">  
                                                                                                    <label for="cmsms_your_phone_number_is">Hospital</label>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <label for="cmsms_your_phone_number_is">Nombre</label>
                                                                                                        <input type="text" name="hospitalmobile" id="hospitalmobile" value="<?= $reportes_contacto[0]->hospital; ?>" size="35" placeholder="Nombre del hospital" />																		
                                                                                                    </div>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <label for="cmsms_your_phone_number_is">Teléfono</label>
                                                                                                        <input type="text" name="telefonohospitalmobile" id="telefonohospitalmobile" value="<?= $reportes_contacto[0]->telefono_hospital; ?>" size="35" placeholder="Teléfono del hospital" />																		
                                                                                                    </div>	
                                                                                                    <div class="form_field_wrap">
                                                                                                        <label for="cmsms_your_phone_number_is">Teléfono de emergencia</label>
                                                                                                        <input type="text" name="telefonoemermobile" id="telefonoemermobile" value="<?= $reportes_contacto[0]->emergencia_hospital; ?>" size="35" placeholder="Teléfono de emergencia" />																		
                                                                                                    </div>																
                                                                                                    </div>			
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Dirección</h3>

                                                                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                    <div class="form_info cmsms_checkboxes">
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="emergencia1mobile" id="emergencia1mobile" value="Plan de acción en caso de emergencia,direccion" <?php if (isset($reportes_direccion["emergencia1mobile"]) && $reportes_direccion["emergencia1mobile"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="emergencia1mobile">Plan de acción en caso de emergencia</label>
                                                                                                        </div>  		
                                                                                                        <br><br>
                                                                                                        <label for="llamadaemermobile">Llamada de emergencia:</label>
                                                                                                        <input type="text" name="llamadaemermobile" id="llamadaemermobile" <?php if (isset($reportes_direccion["llamadaemermobile"]) && $reportes_direccion["llamadaemermobile"] != ""){echo "value='".$reportes_direccion["llamadaemermobile"]."'";}?> size="35" placeholder="especificar" />

                                                                                                    </div>
                                                                                                    </div>

                                                                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                    <div class="form_info cmsms_checkboxes">															

                                                                                                        <label for="primerosauxmobile">Primeros auxilios y RCP:</label>
                                                                                                        <input type="text" name="primerosauxmobile" id="primerosauxmobile" <?php if (isset($reportes_direccion["primerosauxmobile"]) && $reportes_direccion["primerosauxmobile"] != ""){echo "value='".$reportes_direccion["primerosauxmobile"]."'";}?> size="35" placeholder="especificar" />

                                                                                                        <label for="rescatemobile">Rescate aéreo:</label>
                                                                                                        <input type="text" name="rescatemobile" id="rescatemobile" <?php if (isset($reportes_direccion["rescatemobile"]) && $reportes_direccion["rescatemobile"] != ""){echo "value='".$reportes_direccion["rescatemobile"]."'";}?> size="35" placeholder="especificar" />

                                                                                                    </div>
                                                                                                    </div>	

                                                                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                        <div class="form_info cmsms_checkboxes">
                                                                                                            <div class="check_parent">
                                                                                                                <input type="checkbox" name="aguaPotablemobile" id="aguaPotablemobile" value="Agua potable,direccion" <?php if (isset($reportes_direccion["aguaPotablemobile"]) && $reportes_direccion["aguaPotablemobile"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="aguaPotablemobile">Agua potable</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                <input type="checkbox" name="extinguidormobile" id="extinguidormobile" value="Extinguidor,direccion" <?php if (isset($reportes_direccion["extinguidormobile"]) && $reportes_direccion["extinguidormobile"] == "1"){echo "checked";}?> />
                                                                                                                <label for="extinguidormobile">Extinguidor</label>
                                                                                                            </div>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <div class="check_parent">
                                                                                                                        <input type="checkbox" name="sisCommobile" id="sisCommobile" value="Sistema de Comunicación,direccion" <?php if (isset($reportes_direccion["sisCommobile"]) && $reportes_direccion["sisCommobile"] == "1"){echo "checked";}?>/>
                                                                                                                        <label for="sisCommobile">Sistema de Comunicación</label>
                                                                                                                </div>																					

                                                                                                                <input type="text" name="sisComtextmobile" id="sisComtextmobile" <?php if (isset($reportes_direccion["sisComtextmobile"]) && $reportes_direccion["sisComtextmobile"] != ''){echo "value='".$reportes_direccion["sisComtextmobile"]."'";}?> size="35" placeholder="especificar" />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                        <div class="form_info cmsms_checkboxes">															
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="botiquinmobile" id="botiquinmobile" value="Botiquín de primeros auxilios,direccion" <?php if (isset($reportes_direccion["botiquinmobile"]) && $reportes_direccion["botiquinmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="botiquinmobile">Botiquín de primeros auxilios</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="smamobile" id="smamobile" value="Permiso SMA,direccion" <?php if (isset($reportes_direccion["smamobile"]) && $reportes_direccion["smamobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="smamobile">Permiso SMA</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="inspeccionmobile" id="inspeccionmobile" value="Inspección de equipo,direccion" <?php if (isset($reportes_direccion["inspeccionmobile"]) && $reportes_direccion["inspeccionmobile"] == "1"){echo "checked";}?>/>
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
                                                                                                                <input type="checkbox" name="podamobile" id="podamobile" value="Poda,trabajo"value="Poda,trabajo" <?php if (isset($reportes_trabajo["podamobile"]) && $reportes_trabajo["podamobile"] == "1"){echo "checked";}?> />
                                                                                                                <label for="podamobile">Poda</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                <input type="checkbox" name="remocionmobile" id="remocionmobile" value="Remoción,trabajo" <?php if (isset($reportes_trabajo["remocionmobile"]) && $reportes_trabajo["remocionmobile"] == "1"){echo "checked";}?> />
                                                                                                                <label for="remocionmobile">Remoción</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                <input type="checkbox" name="manicordajemobile" id="manicordajemobile" value="Maniobras de cordaje,trabajo" <?php if (isset($reportes_trabajo["manicordajemobile"]) && $reportes_trabajo["manicordajemobile"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="manicordajemobile">Maniobras de cordaje</label>
                                                                                                            </div>																																													
                                                                                                            <div class="check_parent">
                                                                                                                <input type="checkbox" name="ctrlPeatonalmobile" id="ctrlPeatonalmobile" value="Control peatonal,trabajo" <?php if (isset($reportes_trabajo["ctrlPeatonalmobile"]) && $reportes_trabajo["ctrlPeatonalmobile"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="ctrlPeatonalmobile">Control peatonal</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                <input type="checkbox" name="ctrlTransitomobile" id="ctrlTransitomobile" value="Control de tránsito temporal,trabajo" <?php if (isset($reportes_trabajo["ctrlTransitomobile"]) && $reportes_trabajo["ctrlTransitomobile"] == "1"){echo "checked";}?> />
                                                                                                                <label for="ctrlTransitomobile">Control de tránsito temporal</label>
                                                                                                            </div>																		
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                        <div class="form_info cmsms_checkboxes">															
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="caidalibremobile" id="caidalibremobile" value="Caída libre,trabajo" <?php if (isset($reportes_trabajo["caidalibremobile"]) && $reportes_trabajo["caidalibremobile"] == "1"){echo "checked";}?>  />
                                                                                                                    <label for="caidalibremobile">Caída libre</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="desramemobile" id="desramemobile" value="Desrame/ Troceado,trabajo" <?php if (isset($reportes_trabajo["desramemobile"]) && $reportes_trabajo["desramemobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="desramemobile">Desrame/ Troceado</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="destoconadomobile" id="destoconadomobile" value="Destoconado,trabajo"  <?php if (isset($reportes_trabajo["destoconadomobile"]) && $reportes_trabajo["destoconadomobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="destoconadomobile">Destoconado</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="remocionArbmobile" id="remocionArbmobile" value="Remoción de arbustos,trabajo"  <?php if (isset($reportes_trabajo["remocionArbmobile"]) && $reportes_trabajo["remocionArbmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="remocionArbmobile">Remoción de arbustos</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="astilladomobile" id="astilladomobile" value="Astillado/Triturado,trabajo" <?php if (isset($reportes_trabajo["astilladomobile"]) && $reportes_trabajo["astilladomobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="astilladomobile">Astillado/Triturado</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>	

                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                                                                        <div class="form_info cmsms_checkboxes">

                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="plagasmobile" id="plagasmobile" value="Tratamiento de plagas o suelo,trabajo" <?php if (isset($reportes_trabajo["plagasmobile"]) && $reportes_trabajo["plagasmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="plagasmobile">Tratamiento de plagas o suelo</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="dostrepamobile" id="dostrepamobile" value="Trepa,trabajo" <?php if (isset($reportes_trabajo["dostrepamobile"]) && $reportes_trabajo["dostrepamobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="dostrepamobile">Trepa</label>
                                                                                                            </div>																																													
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="materialCortadomobile" id="materialCortadomobile" value="Retiro de material cortado,trabajo" <?php if (isset($reportes_trabajo["materialCortadomobile"]) && $reportes_trabajo["materialCortadomobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="materialCortadomobile">Retiro de material cortado</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="equipoEspmobile" id="equipoEspmobile" value="Equipo especializado,trabajo" <?php if (isset($reportes_trabajo["equipoEspmobile"]) && $reportes_trabajo["equipoEspmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="equipoEspmobile">Equipo especializado</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="otrosDescripmobile" id="otrosDescripmobile" value="Otros,trabajo" <?php if (isset($reportes_trabajo["otrosDescripmobile"]) && $reportes_trabajo["otrosDescripmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="otrosDescripmobile">Otros</label>
                                                                                                            </div>	
                                                                                                            <input type="text" name="otrosDescriptextmobile" id="otrosDescriptextmobile" size="35" placeholder="especificar" <?php if (isset($reportes_trabajo["otrosDescriptextmobile"]) && $reportes_trabajo["otrosDescriptextmobile"] != ''){echo "value='".$reportes_trabajo["otrosDescriptextmobile"]."'";}?>/>

                                                                                                        </div>
                                                                                                    </div>	

                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Peligros específicos del área de trabajo</h3>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                            <div class="form_info cmsms_checkboxes">

                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="arbolContactomobile" id="arbolContactomobile" value="Árbol en contacto,peligros" <?php if (isset($reporte_peligros["arbolContactomobile"]) && $reporte_peligros["arbolContactomobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="arbolContactomobile">Árbol en contacto</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="dmamobile" id="dmamobile" value="Árbol/Rama en DMA,peligros"   <?php if (isset($reporte_peligros["dmamobile"]) && $reporte_peligros["dmamobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="dmamobile">Árbol/Rama en DMA</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="defEstructmobile" id="defEstructmobile" value="Defecto estructural,peligros"  <?php if (isset($reporte_peligros["defEstructmobile"]) && $reporte_peligros["defEstructmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="defEstructmobile">Defecto estructural</label>
                                                                                                                    </div>																																													
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="climamobile" id="climamobile" value="Clima,peligros"   <?php if (isset($reporte_peligros["climamobile"]) && $reporte_peligros["climamobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="climamobile">Clima</label>
                                                                                                                    </div>	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="quimicosmobile" id="quimicosmobile" value="Manejo de químicos,peligros"   <?php if (isset($reporte_peligros["quimicosmobile"]) && $reporte_peligros["quimicosmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="quimicosmobile">Manejo de químicos</label>
                                                                                                                    </div>	
                                                                                                                    <div class="form_field_wrap">
                                                                                                                        <div class="check_parent">
                                                                                                                            <input type="checkbox" name="electricidadmobile" id="electricidadmobile" value="Electricidad,peligros"   <?php if (isset($reporte_peligros["electricidadmobile"]) && $reporte_peligros["electricidadmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="electricidadmobile">Electricidad</label>
                                                                                                                        </div>																					
                                                                                                                        <input type="text" name="electricidadfielmobile" id="electricidadfielmobile"   <?php if (isset($reporte_peligros["electricidadfieldmobile"]) && $reporte_peligros["electricidadfieldmobile"] != ""){echo "value='".$reporte_peligros["electricidadfieldmobile"]."'";}?> size="35" placeholder="especificar" />
                                                                                                                    </div>																		


                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                            <div class="form_info cmsms_checkboxes">	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="arbolSecomobile" id="arbolSecomobile" value="Árbol seco,peligros"   <?php if (isset($reporte_peligros["arbolSecomobile"]) && $reporte_peligros["arbolSecomobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="arbolSecomobile">Árbol seco</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="ramasMuertasmobile" id="ramasMuertasmobile" value="Ramas muertas o colgantes,peligros"  <?php if (isset($reporte_peligros["ramasMuertasmobile"]) && $reporte_peligros["ramasMuertasmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="ramasMuertasmobile">Ramas muertas o colgantes</label>
                                                                                                                    </div>																	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="arbolDescortezadomobile" id="arbolDescortezadomobile" value="Árbol descortezado,peligros"   <?php if (isset($reporte_peligros["arbolDescortezadomobile"]) && $reporte_peligros["arbolDescortezadomobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="arbolDescortezadomobile">Árbol descortezado</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="maderaBajomobile" id="maderaBajomobile" value="Madera bajo tensión,peligros"   <?php if (isset($reporte_peligros["maderaBajomobile"]) && $reporte_peligros["maderaBajomobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="maderaBajomobile">Madera bajo tensión</label>
                                                                                                                    </div>	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="silvestremobile" id="silvestremobile" value="Vida silvestre,peligros"  <?php if (isset($reporte_peligros["silvestremobile"]) && $reporte_peligros["silvestremobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="silvestremobile">Vida silvestre</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="pudricionmobile" id="pudricionmobile" value="Pudrición,peligros"  <?php if (isset($reporte_peligros["pudricionmobile"]) && $reporte_peligros["pudricionmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="pudricionmobile">Pudrición</label>
                                                                                                                    </div>	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="cavidadesmobile" id="cavidadesmobile" value="Cavidades,peligros"  <?php if (isset($reporte_peligros["cavidadesmobile"]) && $reporte_peligros["cavidadesmobile"] == "1"){echo "checked";}?>/>
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
                                                                                                                            <input type="checkbox" name="bardasmobile" id="bardasmobile" value="Cercas o bardas,peligros"  <?php if (isset($reporte_peligros["bardasmobile"]) && $reporte_peligros["bardasmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="bardasmobile">Cercas o bardas</label>
                                                                                                                    </div>																																													
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="peatonesmobile" id="peatonesmobile" value="Peatones,peligros"  <?php if (isset($reporte_peligros["peatonesmobile"]) && $reporte_peligros["peatonesmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="peatonesmobile">Peatones</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="mascotasmobile" id="mascotasmobile" value="Perros/Mascotas,peligros"  <?php if (isset($reporte_peligros["mascotasmobile"]) && $reporte_peligros["mascotasmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="mascotasmobile">Perros/Mascotas</label>
                                                                                                                    </div>		
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="jardineriamobile" id="jardineriamobile" value="Jardinería,peligros"  <?php if (isset($reporte_peligros["jardineriamobile"]) && $reporte_peligros["jardineriamobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="jardineriamobile">Jardinería</label>
                                                                                                                    </div>	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="estructurasmobile" id="estructurasmobile" value="Estructuras,peligros"  <?php if (isset($reporte_peligros["estructurasmobile"]) && $reporte_peligros["estructurasmobile"] == "1"){echo "checked";}?> />
                                                                                                                            <label for="estructurasmobile">Estructuras<label>
                                                                                                                    </div>
                                                                                                                    <div class="form_field_wrap">
                                                                                                                        <div class="check_parent">
                                                                                                                                <input type="checkbox" name="otrosPeligrosmobile" id="otrosPeligrosmobile" value="Otro,peligros" <?php if (isset($reporte_peligros["otrosPeligrosmobile"]) && $reporte_peligros["otrosPeligrosmobile"] == "1"){echo "checked";}?>/>
                                                                                                                                <label for="otrosPeligrosmobile">Otro</label>
                                                                                                                        </div>																																									
                                                                                                                        <input type="text" name="otrospeligrosfieldmobile" id="otrospeligrosfieldmobile"  <?php if (isset($reporte_peligros["otrospeligrosfieldmobile"]) && $reporte_peligros["otrospeligrosfieldmobile"] != ""){echo "value='".$reporte_peligros["otrospeligrosfieldmobile"]."'";}?> size="35" placeholder="especificar" />
                                                                                                                    </div>																		
                                                                                                            </div>
                                                                                                    </div>															

                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Plan de mitigación de peligros</h3>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                        <div class="form_info cmsms_checkboxes">

                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="equipProtmobile" id="equipProtmobile" value="Equipo de protección personal,mitigacion" <?php if (isset($reporte_mitigacion["equipProtmobile"]) && $reporte_mitigacion["equipProtmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="equipProtmobile">Equipo de protección personal</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="rcpmobile" id="rcpmobile" value="Primeros auxilios/RCP,mitigacion"  <?php if (isset($reporte_mitigacion["rcpmobile"]) && $reporte_mitigacion["rcpmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="rcpmobile">Primeros auxilios/RCP</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="supFuegomobile" id="supFuegomobile" value="Plan de supresión de fuego,mitigacion"  <?php if (isset($reporte_mitigacion["supFuegomobile"]) && $reporte_mitigacion["supFuegomobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="supFuegomobile">Plan de supresión de fuego</label>
                                                                                                            </div>																																													
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="juntaTrabmobile" id="juntaTrabmobile" value="Junta de trabajo,mitigacion" <?php if (isset($reporte_mitigacion["juntaTrabmobile"]) && $reporte_mitigacion["juntaTrabmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="juntaTrabmobile">Junta de trabajo</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="inspArbolmobile" id="inspArbolmobile" value="Inspección de árbol(es),mitigacion"  <?php if (isset($reporte_mitigacion["inspArbolmobile"]) && $reporte_mitigacion["inspArbolmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="inspArbolmobile">Inspección de árbol(es)</label>
                                                                                                            </div>					
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                            <div class="form_info cmsms_checkboxes">	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="inspEquipomobile" id="inspEquipomobile" value="Inspección equipo de protección contra caídas,mitigacion" <?php if (isset($reporte_mitigacion["inspEquipomobile"]) && $reporte_mitigacion["inspEquipomobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="inspEquipomobile">Inspección equipo de protección contra caídas</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="inspMotosierrasmobile" id="inspMotosierrasmobile" value="Inspección de motosierras y herramientas,mitigacion" <?php if (isset($reporte_mitigacion["inspMotosierrasmobile"]) && $reporte_mitigacion["inspMotosierrasmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="inspMotosierrasmobile">Inspección de motosierras y herramientas</label>
                                                                                                                    </div>																	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="equipoCordajemobile" id="equipoCordajemobile" value="Uso de equipo de cordaje,mitigacion"  <?php if (isset($reporte_mitigacion["equipoCordajemobile"]) && $reporte_mitigacion["equipoCordajemobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="equipoCordajemobile">Uso de equipo de cordaje</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="acordonamientomobile" id="acordonamientomobile" value="Acordonamiento del área,mitigacion"  <?php if (isset($reporte_mitigacion["acordonamientomobile"]) && $reporte_mitigacion["acordonamientomobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="acordonamientomobile">Acordonamiento del área</label>
                                                                                                                    </div>	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="comunicacionmobile" id="comunicacionmobile" value="Comunicación,mitigacion"  <?php if (isset($reporte_mitigacion["comunicacionmobile"]) && $reporte_mitigacion["comunicacionmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="comunicacionmobile">Comunicación</label>
                                                                                                                    </div>

                                                                                                            </div>																		
                                                                                                            </div>


                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                                                                    <div class="form_info cmsms_checkboxes">
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="supSitiomobile" id="supSitiomobile" value="Supervisión en sitio,mitigacion" <?php if (isset($reporte_mitigacion["supSitiomobile"]) && $reporte_mitigacion["supSitiomobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="supSitiomobile">Supervisión en sitio</label>
                                                                                                            </div>																																													
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="caidamobile" id="caidamobile" value="Zona de caída,mitigacion"  <?php if (isset($reporte_mitigacion["caidamobile"]) && $reporte_mitigacion["caidamobile"] == "1"){echo "checked";}?> />
                                                                                                                    <label for="caidamobile">Zona de caída</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="prevClimamobile" id="prevClimamobile" value="Prevención climática,mitigacion"  <?php if (isset($reporte_mitigacion["prevClimamobile"]) && $reporte_mitigacion["prevClimamobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="prevClimamobile">Prevención climática</label>
                                                                                                            </div>		
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="dañoExismobile" id="dañoExismobile" value="Daño existente (documentar),mitigacion"  <?php if (isset($reporte_mitigacion["dañoExismobile"]) && $reporte_mitigacion["dañoExismobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="dañoExismobile">Daño existente (documentar)</label>
                                                                                                            </div>	
                                                                                                            <div class="form_field_wrap">
                                                                                                                <div class="check_parent">
                                                                                                                    <input type="checkbox" name="otrosPlanmobile" id="otrosPlanmobile" value="Otro,mitigacion"  <?php if (isset($reporte_mitigacion["otrosPlanmobile"]) && $reporte_mitigacion["otrosPlanmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="otrosPlanmobile">Otro</label>
                                                                                                                </div>																																									
                                                                                                                <input type="text" name="otrosplanfieldmobile" id="otrosplanfieldmobile" size="35" placeholder="especificar"  <?php if (isset($reporte_mitigacion["otrosplanfieldmobile"]) && $reporte_mitigacion["otrosplanfieldmobile"] != ""){echo "value='".$reporte_mitigacion["otrosplanfieldmobile"]."'";}?>/>
                                                                                                            </div>																		
                                                                                                    </div>
                                                                                                    </div>																

                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Equipo de Protección Personal</h3>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                            <div class="form_info cmsms_checkboxes">

                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="cascomobile" id="cascomobile" value="Casco,proteccion"  <?php if (isset($reporte_proteccion["cascomobile"]) && $reporte_proteccion["cascomobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="cascomobile">Casco</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="gafasmobile" id="gafasmobile" value="Gafas de seguridad,proteccion" <?php if (isset($reporte_proteccion["gafasmobile"]) && $reporte_proteccion["gafasmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="gafasmobile">Gafas de seguridad</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="chalecomobile" id="chalecomobile" value="Chaleco/camiseta reflejante,proteccion"  <?php if (isset($reporte_proteccion["chalecomobile"]) && $reporte_proteccion["chalecomobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="chalecomobile">Chaleco/camiseta reflejante</label>
                                                                                                                    </div>																																																		
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                            <div class="form_info cmsms_checkboxes">	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="auditivamobile" id="auditivamobile" value="Protección auditiva,proteccion" <?php if (isset($reporte_proteccion["auditivamobile"]) && $reporte_proteccion["auditivamobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="auditivamobile">Protección auditiva</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="mascaramobile" id="mascaramobile" value="Máscara/Protección facial,proteccion" <?php if (isset($reporte_proteccion["mascaramobile"]) && $reporte_proteccion["mascaramobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="mascaramobile">Máscara/Protección facial</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="botasmobile" id="botasmobile" value="Botas de trabajo,proteccion" <?php if (isset($reporte_proteccion["botasmobile"]) && $reporte_proteccion["botasmobile"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="botasmobile">Botas de trabajo</label>
                                                                                                                    </div>																																												
                                                                                                            </div>																		
                                                                                                            </div>


                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                                                                    <div class="form_info cmsms_checkboxes">
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="chaparrerasmobile" id="chaparrerasmobile" value="Chaparreras,proteccion" <?php if (isset($reporte_proteccion["chaparrerasmobile"]) && $reporte_proteccion["chaparrerasmobile"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="chaparrerasmobile">Chaparreras</label>
                                                                                                        </div>																																													
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="guantesmobile" id="guantesmobile" value="Guantes,proteccion"  <?php if (isset($reporte_proteccion["guantesmobile"]) && $reporte_proteccion["guantesmobile"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="guantesmobile">Guantes</label>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="otrosEquiposmobile" id="otrosEquiposmobile" value="Otro,proteccion"  <?php if (isset($reporte_proteccion["otrosEquiposmobile"]) && $reporte_proteccion["otrosEquiposmobile"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="otrosEquiposmobile">Otro</label>
                                                                                                            </div>																																									
                                                                                                            <input type="text" name="otrosequiposfieldmobile" id="otrosequiposfieldmobile" <?php if (isset($reporte_proteccion["otrosequiposfieldmobile"]) && $reporte_proteccion["otrosequiposfieldmobile"] != ""){echo "value='".$reporte_proteccion["otrosequiposfieldmobile"]."'";}?> size="35" placeholder="especificar"  />
                                                                                                        </div>																		
                                                                                                    </div>
                                                                                                    </div>
                                                                                                    <div class="cl"></div>
                                                                                                    <div class="loading"></div>

                                                                                                    
                                                                                                </div>
                                                                                            </div>                                                
                                                                                            <!--fin hoja dos-->
                                                                                            <!--===================FRIMAS==================-->
                                                                                            <div id="cmsms_tab_555469b2e631b" class="cmsms_tab">
                                                                                                <div class="cmsms_tab_inner">
                                                                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                    <div class="form_field_wrap">
                                                                                                        <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                        <input type="text" name="nombre1mobile" id="nombre1mobile" size="35" placeholder="Nombre" <?php if(isset($firmas[0]->nombre) && $firmas[0]->nombre != ""){echo "value='".$firmas[0]->nombre."'";}?>>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="firma1mobile" id="firma1mobile" <?php if(isset($firmas[0]->firma) && $firmas[0]->firma != ""){echo "value='".$firmas[0]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                        <br>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                        <input type="text" name="nombre2mobile" id="nombre2mobile" <?php if(isset($firmas[1]->nombre) && $firmas[1]->nombre != ""){echo "value='".$firmas[1]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="firma2mobile" id="firma2mobile" <?php if(isset($firmas[1]->firma) && $firmas[1]->firma != ""){echo "value='".$firmas[1]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                        <br>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                        <input type="text" name="nombre3mobile" id="nombre3mobile" <?php if(isset($firmas[2]->nombre) && $firmas[2]->nombre != ""){echo "value='".$firmas[2]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="firma3mobile" id="firma3mobile" <?php if(isset($firmas[2]->firma) && $firmas[2]->firma != ""){echo "value='".$firmas[2]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                        <br>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                        <input type="text" name="nombre4mobile" id="nombre4mobile" <?php if(isset($firmas[3]->nombre) && $firmas[3]->nombre != ""){echo "value='".$firmas[3]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="firma4mobile" id="firma4mobile" <?php if(isset($firmas[3]->firma) && $firmas[3]->firma != ""){echo "value='".$firmas[3]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                    <div class="form_field_wrap">
                                                                                                        <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                        <input type="text" name="nombre5mobile" id="nombre5mobile" <?php if(isset($firmas[4]->nombre) && $firmas[4]->nombre != ""){echo "value='".$firmas[4]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="firma5mobile" id="firma5mobile" <?php if(isset($firmas[4]->firma) && $firmas[4]->firma != ""){echo "value='".$firmas[4]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                        <br>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                        <input type="text" name="nombre6mobile" id="nombre6mobile" <?php if(isset($firmas[5]->nombre) && $firmas[5]->nombre != ""){echo "value='".$firmas[5]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="firma6mobile" id="firma6mobile" <?php if(isset($firmas[5]->firma) && $firmas[5]->firma != ""){echo "value='".$firmas[5]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                        <br>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                        <input type="text" name="nombre7mobile" id="nombre7mobile" <?php if(isset($firmas[6]->nombre) && $firmas[6]->nombre != ""){echo "value='".$firmas[6]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="firma7mobile" id="firma7mobile" <?php if(isset($firmas[6]->firma) && $firmas[6]->firma != ""){echo "value='".$firmas[6]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                        <br>
                                                                                                    <div class="form_field_wrap">
                                                                                                        <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                        <input type="text" name="nombre8mobile" id="nombre8mobile" <?php if(isset($firmas[7]->nombre) && $firmas[7]->nombre != ""){echo "value='".$firmas[7]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="firma8mobile" id="firma8mobile" <?php if(isset($firmas[7]->firma) && $firmas[7]->firma != ""){echo "value='".$firmas[7]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                    <div class="cl"></div>
                                                                                                    <div class="loading"></div>

                                                                                                    <!-- Here you need to set the path to the sendmail file -->
                                                                                                    <div class="form_info submit_wrap" style="text-align: center;">
                                                                                                        <input type="submit" id="contact_form_2_formsend" class="cmsms_button" value="Actualizar informaciòn"/>
                                                                                                    </div>
                                                                                                    <div class="cl"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--===================fin FRIMAS==================-->
                                                                                        </div>
                                                                                        </div>

                                                                                        </div>
                                                                                        </div>
                                                                                    </form>
                                                                                    
                                                                                    <!--ESCRITORIO-->
                                                                                    <form id="formDesktop">
                                                                                        <div class="cmsms_contact_form desktop">
                                                                                            <input type="hidden" name="tipo" id="tipo" value="desktop">
                                                                                            <input type="hidden" name="idreporte" id="idreporte" value="<?= $reportes[0]->id; ?>">
                                                                                            <div class="cmsms-form-builder">
                                                                                                <div class="cmsms_tabs tabs_mode_tab">
                                                                                                <ul class="cmsms_tabs_list">
                                                                                                    <li id="cmsms_tabs_list_item_555469b2e5f20" class="cmsms_tabs_list_item current_tab">
                                                                                                        <a href="#"><span>Reporte inicio</span></a>
                                                                                                    </li>
                                                                                                    <li id="cmsms_tabs_list_item_555469b2e612c" class="cmsms_tabs_list_item">
                                                                                                        <a href="#"><span>Información de contacto</span></a>
                                                                                                    </li>          
                                                                                                    <li id="cmsms_tabs_list_item_555469b2e631b" class="cmsms_tabs_list_item">
                                                                                                        <a href="#"><span>Firmas</span></a>
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
                                                                                                            <input type="text" name="numcotizaciondesktop" id="numcotizaciondesktop" value="<?= $reportes[0]->cotizacion; ?>" size="35" />
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_half">
                                                                                                        <label for="cmsms_your_phone_number_is">Cliente</label>
                                                                                                        <div class="form_field_wrap">
                                                                                                                <input type="text" name="clientedesktop" id="clientedesktop" value="<?= $reportes[0]->cliente; ?>" size="35" />
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_third">
                                                                                                        <label for="contact_email">Nombre del proyecto</label>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="proyectodesktop" id="proyectodesktop" value="<?= $reportes[0]->nombre_proyecto; ?>" size="35" />
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_third">
                                                                                                        <label for="cmsms_your_phone_number_is">Ingresos</label>
                                                                                                        <div class="form_field_wrap">
                                                                                                                <input type="number" name="ingresosdesktop" id="ingresosdesktop" value="<?= $reportes[0]->ingreso; ?>" size="35"/>
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_third">
                                                                                                        <label for="cmsms_your_phone_number_is">Forma de pago</label>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <input type="text" name="formapagodesktop" id="formapagodesktop" value="<?= $reportes[0]->forma_pago; ?>" size="35" />
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
                                                                                                        <?php
                                                                                                            $i = 1; $indice = 0;
                                                                                                            for($i;$i<=6;$i++){
                                                                                                                if(isset($gastos[$indice]) && $gastos[$indice] != ''){
                                                                                                        ?>
                                                                                                                    <input type="text" name="gastos<?= $i ?>desktop" id="gastos<?= $i ?>desktop" value="<?= $gastos[$indice]->nombre; ?>" size="35"/>
                                                                                                        <?php
                                                                                                                }else {
                                                                                                        ?>
                                                                                                                    <input type="text" name="gastos<?= $i ?>desktop" id="gastos<?= $i ?>desktop" value="" size="35"/>
                                                                                                        <?php
                                                                                                                }
                                                                                                                $indice = $indice+1;
                                                                                                            }
                                                                                                        ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_third">
                                                                                                    <div class="form_field_wrap">
                                                                                                        <?php
                                                                                                            $i = 1;$indice = 0;
                                                                                                            for($i;$i<=6;$i++){
                                                                                                                if(isset($gastos[$indice]) && $gastos[$indice] != ''){
                                                                                                        ?>
                                                                                                                    <input type="text" name="posicion<?= $i ?>desktop" id="posicion<?= $i ?>desktop" value="<?= $gastos[$indice]->posicion; ?>" size="35"/>
                                                                                                        <?php
                                                                                                                }else {
                                                                                                        ?>
                                                                                                                    <input type="text" name="posicion<?= $i ?>desktop" id="posicion<?= $i ?>desktop" value="" size="35"/>
                                                                                                        <?php
                                                                                                                }
                                                                                                                $indice = $indice+1;
                                                                                                            }
                                                                                                        ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_third">
                                                                                                    <div class="form_field_wrap">
                                                                                                        <?php
                                                                                                            $i = 1;
                                                                                                            $indice = 0;
                                                                                                            for($i;$i<=6;$i++){
                                                                                                                if(isset($gastos[$indice]) && $gastos[$indice] != ''){
                                                                                                        ?>
                                                                                                                    <input type="text" name="ingreso<?= $i ?>desktop" id="ingreso<?= $i ?>desktop" value="<?= $gastos[$indice]->ingreso; ?>" size="35"/>
                                                                                                        <?php
                                                                                                                }else {
                                                                                                        ?>
                                                                                                                    <input type="text" name="ingreso<?= $i ?>desktop" id="ingreso<?= $i ?>desktop" value="" size="35"/>
                                                                                                        <?php
                                                                                                                }
                                                                                                                $indice = $indice + 1;
                                                                                                            }
                                                                                                        ?>
                                                                                                    </div>
                                                                                                </div>                                                                                                                            
                                                                                                
                                                                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Gastos Otros</h3>
                                                                                                <div class="form_info cmsms_input one_half">
                                                                                                    <label for="cmsms_your_phone_number_is">Descripción</label>
                                                                                                    <?php
                                                                                                        $i = 1;
                                                                                                        $indice = 0;
                                                                                                        for($i;$i<=6;$i++){
                                                                                                            if(isset($otros[$indice]) && $otros[$indice] != ''){
                                                                                                    ?>
                                                                                                                <div class="form_field_wrap">
                                                                                                                    <input type="text" name="descripcion<?= $i ?>desktop" id="descripcion<?= $i ?>desktop" value="<?= $otros[$indice]->descripcion; ?>" size="35" />
                                                                                                                </div>
                                                                                                    <?php
                                                                                                            }else {
                                                                                                    ?>
                                                                                                                <div class="form_field_wrap">
                                                                                                                    <input type="text" name="descripcion<?= $i ?>desktop" id="descripcion<?= $i ?>desktop" value="" size="35" />
                                                                                                                </div>
                                                                                                    <?php
                                                                                                            }
                                                                                                            $indice = $indice + 1;
                                                                                                        }
                                                                                                    ?>
                                                                                                    
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_half">
                                                                                                    <label for="cmsms_your_phone_number_is">$</label>
                                                                                                    <?php
                                                                                                        $i = 1;
                                                                                                        $indice = 0;
                                                                                                        for($i;$i<=6;$i++){
                                                                                                            if(isset($otros[$indice]) && $otros[$indice] != ''){
                                                                                                    ?>
                                                                                                                <div class="form_field_wrap">
                                                                                                                    <input type="text" name="gastodescripcion<?= $i ?>desktop" id="gastodescripcion<?= $i ?>desktop" value="<?= $otros[$indice]->gasto; ?>" size="35" />
                                                                                                                </div>
                                                                                                    <?php
                                                                                                            }else {
                                                                                                    ?>
                                                                                                                <div class="form_field_wrap">
                                                                                                                    <input type="text" name="gastodescripcion<?= $i ?>desktop" id="gastodescripcion<?= $i ?>desktop" value="" size="35" />
                                                                                                                </div>
                                                                                                    <?php
                                                                                                            }
                                                                                                            $indice = $indice + 1;
                                                                                                        }
                                                                                                    ?>                                                                                                    
                                                                                                </div>
                                                                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Equipo utilizado</h3>
                                                                                                <div class="form_info cmsms_input one_half">
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Camión</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($camion) && $camion != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="camiondesktop" id="camiondesktop" value="<?= $camion->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="camiondesktop" id="camiondesktop" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Equipo de trepa</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($trepa) && $trepa != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="trepadesktop" id="trepadesktop" value="<?= $trepa->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="trepadesktop" id="trepadesktop" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Motosierras</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($motosierra) && $motosierra != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="motosierradesktop" id="motosierradesktop" value="<?= $motosierra->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="motosierradesktop" id="motosierradesktop" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                         <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Equipo de cordaje</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($cordaje) && $cordaje != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="cordajedesktop" id="cordajedesktop" value="<?= $cordaje->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="cordajedesktop" id="cordajedesktop" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Equipo de asperjado</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($asperjado) && $asperjado != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="asperjadodesktop" id="asperjadodesktop" value="<?= $asperjado->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="asperjadodesktop" id="asperjadodesktop" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Equipo de limpieza</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($limpieza) && $limpieza != ''){
                                                                                                                ?>
                                                                                                                   <input type="text" name="limpiezadesktop" id="limpiezadesktop" value="<?= $limpieza->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                   <input type="text" name="limpiezadesktop" id="limpiezadesktop" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Otro</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($otro1) && $otro1 != ''){
                                                                                                                ?>
                                                                                                                    <input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="<?= $otro1->concepto; ?>" size="35" placeholder="especificar" />
                                                                                                                   <input type="text" name="otro1desktop" id="otro1desktop" value="<?= $otro1->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                    <input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="" size="35" placeholder="especificar" />
                                                                                                                   <input type="text" name="otro1desktop" id="otro1desktop" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Otro</label>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <?php
                                                                                                                    if(isset($otro2) && $otro2 != ''){
                                                                                                                ?>
                                                                                                                    <input type="text" name="otrodetail1desktop" id="otrodetail1desktop" value="<?= $otro2->concepto; ?>" size="35" placeholder="especificar" />
                                                                                                                   <input type="text" name="otro2desktop" id="otro2desktop" value="<?= $otro2->descripcion; ?>" size="35" class="validate[custom[number]]" />
                                                                                                                 
                                                                                                                <?php
                                                                                                                    }else{
                                                                                                                ?>
                                                                                                                    <input type="text" name="otrodetail2desktop" id="otrodetail2desktop" value="" size="35" placeholder="especificar" />
                                                                                                                   <input type="text" name="otro2desktop" id="otro2desktop" value="" size="35" class="validate[custom[number]]" />
                                                                                                                <?php
                                                                                                                    }
                                                                                                                ?>
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
                                                                                                            <input type="text" name="lugardesktop" id="lugardesktop" value="<?= $reportes_contacto[0]->lugar; ?>" size="35"/>																		
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Supervisor</label>
                                                                                                            <input type="text" name="supervisordesktop" id="supervisordesktop" value="<?= $reportes_contacto[0]->supervisor; ?>" size="35" />																		
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Teléfono</label>
                                                                                                            <input type="text" name="telefonodesktop" id="telefonodesktop" value="<?= $reportes_contacto[0]->telefono; ?>" size="35" />																		
                                                                                                        </div>																
                                                                                                    </div>	
                                                                                                    <div class="form_info cmsms_input one_third">  
                                                                                                        <!--label for="cmsms_your_phone_number_is">Cliente</label-->
                                                                                                        <div class="form_field_wrap">   
                                                                                                            <label for="cmsms_your_phone_number_is">Fecha</label>
                                                                                                            <input type="date" name="fechadesktop" id="fechadesktop" value="<?= $reportes_contacto[0]->fecha; ?>" size="35" />																		
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Nombre cliente</label>
                                                                                                            <input type="text" name="nombreclientedesktop" id="nombreclientedesktop" value="<?= $reportes_contacto[0]->nombre_cliente; ?>" size="35" />																		
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Email cliente</label>
                                                                                                            <input type="text" name="emailclientedesktop" id="emailclientedesktop" value="<?= $reportes_contacto[0]->email_cliente; ?>" size="35"  />																		
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Teléfono cliente</label>
                                                                                                            <input type="text" name="telefonoclientedesktop" id="telefonoclientedesktop" value="<?= $reportes_contacto[0]->telefono_cliente; ?>" size="35" />																		
                                                                                                        </div>																
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">  
                                                                                                        <!--label for="cmsms_your_phone_number_is">Hospital</label-->
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Hospital más cercano</label>
                                                                                                            <input type="text" name="hospitaldesktop" id="hospitaldesktop" value="<?= $reportes_contacto[0]->hospital; ?>" size="35" placeholder="" />																		
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Teléfono hospital</label>
                                                                                                            <input type="text" name="telefonohospitaldesktop" id="telefonohospitaldesktop" value="<?= $reportes_contacto[0]->telefono_hospital; ?>" size="35" placeholder="" />																		
                                                                                                        </div>	
                                                                                                        <div class="form_field_wrap">
                                                                                                            <label for="cmsms_your_phone_number_is">Teléfono de emergencia</label>
                                                                                                            <input type="text" name="telefonoemerdesktop" id="telefonoemerdesktop" value="<?= $reportes_contacto[0]->emergencia_hospital; ?>" size="35" placeholder="" />																		
                                                                                                        </div>				
                                                                                                    </div>																
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Dirección</h3>
                                                                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                    <div class="form_info cmsms_checkboxes">
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="emergencia1desktop" id="emergencia1desktop" value="Plan de acción en caso de emergencia,direccion" <?php if (isset($reportes_direccion["emergencia1desktop"]) && $reportes_direccion["emergencia1desktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="emergencia1desktop">Plan de acción en caso de emergencia</label>
                                                                                                        </div>
                                                                                                        <br><br>
                                                                                                        <label for="llamadaemerdesktop">Llamada de emergencia:</label>
                                                                                                        <input type="text" name="llamadaemerdesktop" id="llamadaemerdesktop" size="35" placeholder="especificar"  <?php if (isset($reportes_direccion["llamadaemerdesktop"]) && $reportes_direccion["llamadaemerdesktop"] != ""){echo "value='".$reportes_direccion["llamadaemerdesktop"]."'";}?>/>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                    <div class="form_info cmsms_checkboxes">															

                                                                                                        <label for="primerosauxdesktop">Primeros auxilios y RCP:</label>
                                                                                                       <input type="text" name="primerosauxdesktop" id="primerosauxdesktop" size="35" placeholder="especificar"  <?php if (isset($reportes_direccion["primerosauxdesktop"]) && $reportes_direccion["primerosauxdesktop"] != ""){echo "value='".$reportes_direccion["primerosauxdesktop"]."'";}?>/>

                                                                                                        <label for="rescatedesktop">Rescate aéreo:</label>
                                                                                                        <input type="text" name="rescatedesktop" id="rescatedesktop" size="35" placeholder="especificar"  <?php if (isset($reportes_direccion["rescatedesktop"]) && $reportes_direccion["rescatedesktop"] != ""){echo "value='".$reportes_direccion["rescatedesktop"]."'";}?>/>

                                                                                                    </div>
                                                                                                </div>	
                                                                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                    <div class="form_info cmsms_checkboxes">
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="aguaPotabledesktop" id="aguaPotabledesktop" value="Agua potable,direccion" <?php if (isset($reportes_direccion["aguaPotabledesktop"]) && $reportes_direccion["aguaPotabledesktop"] == "1"){echo "checked";}?> />
                                                                                                                <label for="aguaPotabledesktop">Agua potable</label>
                                                                                                        </div>
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="extinguidordesktop" id="extinguidordesktop" value="Extinguidor,direccion" <?php if (isset($reportes_direccion["extinguidordesktop"]) && $reportes_direccion["extinguidordesktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="extinguidordesktop">Extinguidor</label>
                                                                                                        </div>
                                                                                                        <div class="form_field_wrap">
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="sisComdesktop" id="sisComdesktop" value="Sistema de Comunicación,direccion"  <?php if (isset($reportes_direccion["sisComdesktop"]) && $reportes_direccion["sisComdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="sisComdesktop">Sistema de Comunicación</label>
                                                                                                        </div>																					

                                                                                                        <input type="text" name="sisComtextdesktop" id="sisComtextdesktop" size="35" placeholder="especificar"  <?php if (isset($reportes_direccion["sisComtextdesktop"]) && $reportes_direccion["sisComtextdesktop"] != ''){echo "value='".$reportes_direccion["sisComtextdesktop"]."'";}?>/>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                    <div class="form_info cmsms_checkboxes">															
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="botiquindesktop" id="botiquindesktop" value="Botiquín de primeros auxilios,direccion"  <?php if (isset($reportes_direccion["botiquindesktop"]) && $reportes_direccion["botiquindesktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="botiquindesktop">Botiquín de primeros auxilios</label>
                                                                                                        </div>
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="smadesktop" id="smadesktop" value="Permiso SMA,direccion"  <?php if (isset($reportes_direccion["smadesktop"]) && $reportes_direccion["smadesktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="smadesktop">Permiso SMA</label>
                                                                                                        </div>	
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="inspecciondesktop" id="inspecciondesktop" value="Inspección de equipo,direccion"  <?php if (isset($reportes_direccion["inspecciondesktop"]) && $reportes_direccion["inspecciondesktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="inspecciondesktop">Inspección de equipo</label>
                                                                                                        </div>
                                                                                                        																	
                                                                                                    </div>
                                                                                                </div>
                     		
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Descripción del trabajo a desarrollar</h3>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                    <div class="form_info cmsms_checkboxes">

                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="podadesktop" id="podadesktop" value="Poda,trabajo" <?php if (isset($reportes_trabajo["podadesktop"]) && $reportes_trabajo["podadesktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="podadesktop">Poda</label>|
                                                                                                        </div>
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="remociondesktop" id="remociondesktop" value="Remoción,trabajo" <?php if (isset($reportes_trabajo["remociondesktop"]) && $reportes_trabajo["remociondesktop"] == "1"){echo "checked";}?> />
                                                                                                                <label for="remociondesktop">Remoción</label>
                                                                                                        </div>
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="manicordajedesktop" id="manicordajedesktop" value="Maniobras de cordaje,trabajo" <?php if (isset($reportes_trabajo["manicordajedesktop"]) && $reportes_trabajo["manicordajedesktop"] == "1"){echo "checked";}?> />
                                                                                                                <label for="manicordajedesktop">Maniobras de cordaje</label>
                                                                                                        </div>																																													
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="ctrlPeatonaldesktop" id="ctrlPeatonaldesktop" value="Control peatonal,trabajo" <?php if (isset($reportes_trabajo["ctrlPeatonaldesktop"]) && $reportes_trabajo["ctrlPeatonaldesktop"] == "1"){echo "checked";}?> />
                                                                                                                <label for="ctrlPeatonaldesktop">Control peatonal</label>
                                                                                                        </div>	
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="ctrlTransitodesktop" id="ctrlTransitodesktop" value="Control de tránsito temporal,trabajo" <?php if (isset($reportes_trabajo["ctrlTransitodesktop"]) && $reportes_trabajo["ctrlTransitodesktop"] == "1"){echo "checked";}?> />
                                                                                                                <label for="ctrlTransitodesktop">Control de tránsito temporal</label>
                                                                                                        </div>																		
                                                                                                    </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                        <div class="form_info cmsms_checkboxes">															
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="caidalibredesktop" id="caidalibredesktop" value="Caída libre,trabajo" <?php if (isset($reportes_trabajo["caidalibredesktop"]) && $reportes_trabajo["caidalibredesktop"] == "1"){echo "checked";}?> />
                                                                                                                    <label for="caidalibredesktop">Caída libre</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="desramedesktop" id="desramedesktop" value="Desrame/ Troceado,trabajo" <?php if (isset($reportes_trabajo["desramedesktop"]) && $reportes_trabajo["desramedesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="desramedesktop">Desrame/ Troceado</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="destoconadodesktop" id="destoconadodesktop" value="Destoconado,trabajo" <?php if (isset($reportes_trabajo["destoconadodesktop"]) && $reportes_trabajo["destoconadodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="destoconadodesktop">Destoconado</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="remocionArbdesktop" id="remocionArbdesktop" value="Remoción de arbustos,trabajo" <?php if (isset($reportes_trabajo["remocionArbdesktop"]) && $reportes_trabajo["remocionArbdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="remocionArbdesktop">Remoción de arbustos</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="astilladodesktop" id="astilladodesktop" value="Astillado/Triturado,trabajo" <?php if (isset($reportes_trabajo["astilladodesktop"]) && $reportes_trabajo["astilladodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="astilladodesktop">Astillado/Triturado</label>
                                                                                                            </div>																		
                                                                                                        </div>
                                                                                                    </div>	
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                                                                        <div class="form_info cmsms_checkboxes">

                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="plagasdesktop" id="plagasdesktop" value="Tratamiento de plagas o suelo,trabajo" <?php if (isset($reportes_trabajo["plagasdesktop"]) && $reportes_trabajo["plagasdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="plagasdesktop">Tratamiento de plagas o suelo</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="dostrepadesktop" id="dostrepadesktop" value="Trepa,trabajo" <?php if (isset($reportes_trabajo["dostrepadesktop"]) && $reportes_trabajo["dostrepadesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="dostrepadesktop">Trepa</label>
                                                                                                            </div>																																													
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="materialCortadodesktop" id="materialCortadodesktop" value="Retiro de material cortado,trabajo" <?php if (isset($reportes_trabajo["materialCortadodesktop"]) && $reportes_trabajo["materialCortadodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="materialCortadodesktop">Retiro de material cortado</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="equipoEspdesktop" id="equipoEspdesktop" value="Equipo especializado,trabajo" <?php if (isset($reportes_trabajo["equipoEspdesktop"]) && $reportes_trabajo["equipoEspdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="equipoEspdesktop">Equipo especializado</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="otrosDescripdesktop" id="otrosDescripdesktop" value="Otros,trabajo" <?php if (isset($reportes_trabajo["otrosDescripdesktop"]) && $reportes_trabajo["otrosDescripdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="otrosDescripdesktop">Otros</label>
                                                                                                            </div>																	
                                                                                                            <input type="text" name="otrosDescriptextdesktop" id="otrosDescriptextdesktop" size="35" placeholder="especificar"  <?php if (isset($reportes_trabajo["otrosDescriptextdesktop"]) && $reportes_trabajo["otrosDescriptextdesktop"] != ''){echo "value='".$reportes_trabajo["otrosDescriptextdesktop"]."'";}?>/>
                                                                                                            </div>
                                                                                                    </div>	
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Peligros específicos del área de trabajo</h3>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                        <div class="form_info cmsms_checkboxes">

                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="arbolContactodesktop" id="arbolContactodesktop" value="Árbol en contacto,peligros"  <?php if (isset($reporte_peligros["arbolContactodesktop"]) && $reporte_peligros["arbolContactodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="arbolContactodesktop">Árbol en contacto</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="dmadesktop" id="dmadesktop" value="Árbol/Rama en DMA,peligros"   <?php if (isset($reporte_peligros["dmadesktop"]) && $reporte_peligros["dmadesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="dmadesktop">Árbol/Rama en DMA</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="defEstructdesktop" id="defEstructdesktop" value="Defecto estructural,peligros"   <?php if (isset($reporte_peligros["defEstructdesktop"]) && $reporte_peligros["defEstructdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="defEstructdesktop">Defecto estructural</label>
                                                                                                            </div>																																													
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="climadesktop" id="climadesktop" value="Clima,peligros"   <?php if (isset($reporte_peligros["climadesktop"]) && $reporte_peligros["climadesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="climadesktop">Clima</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="quimicosdesktop" id="quimicosdesktop" value="Manejo de químicos,peligros"   <?php if (isset($reporte_peligros["quimicosdesktop"]) && $reporte_peligros["quimicosdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="quimicosdesktop">Manejo de químicos</label>
                                                                                                            </div>	
                                                                                                            <div class="form_field_wrap">
                                                                                                                <div class="check_parent">
                                                                                                                        <input type="checkbox" name="electricidaddesktop" id="electricidaddesktop" value="Electricidad,peligros"   <?php if (isset($reporte_peligros["electricidaddesktop"]) && $reporte_peligros["electricidaddesktop"] == "1"){echo "checked";}?>/>
                                                                                                                        <label for="electricidaddesktop">Electricidad</label>
                                                                                                                </div>																					

                                                                                                                <input type="text" name="electricidadfielddesktop" id="electricidadfielddesktop" value="" size="35" placeholder="especificar"   <?php if (isset($reporte_peligros["electricidadfielddesktop"]) && $reporte_peligros["electricidadfielddesktop"] != ""){echo "value='".$reporte_peligros["electricidadfielddesktop"]."'";}?>/>
                                                                                                            </div>																		
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                        <div class="form_info cmsms_checkboxes">	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="arbolSecodesktop" id="arbolSecodesktop" value="Árbol seco,peligros"   <?php if (isset($reporte_peligros["arbolSecodesktop"]) && $reporte_peligros["arbolSecodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="arbolSecodesktop">Árbol seco</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="ramasMuertasdesktop" id="ramasMuertasdesktop" value="Ramas muertas o colgantes,peligros"   <?php if (isset($reporte_peligros["ramasMuertasdesktop"]) && $reporte_peligros["ramasMuertasdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="ramasMuertasdesktop">Ramas muertas o colgantes</label>
                                                                                                            </div>																	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="arbolDescortezadodesktop" id="arbolDescortezadodesktop" value="Árbol descortezado,peligros"   <?php if (isset($reporte_peligros["arbolDescortezadodesktop"]) && $reporte_peligros["arbolDescortezadodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="arbolDescortezadodesktop">Árbol descortezado</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="maderaBajodesktop" id="maderaBajodesktop" value="Madera bajo tensión,peligros"   <?php if (isset($reporte_peligros["maderaBajodesktop"]) && $reporte_peligros["maderaBajodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="maderaBajodesktop">Madera bajo tensión</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="silvestredesktop" id="silvestredesktop" value="Vida silvestre,peligros"   <?php if (isset($reporte_peligros["silvestredesktop"]) && $reporte_peligros["silvestredesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="silvestredesktop">Vida silvestre</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="pudriciondesktop" id="pudriciondesktop" value="Pudrición,peligros"   <?php if (isset($reporte_peligros["pudriciondesktop"]) && $reporte_peligros["pudriciondesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="pudriciondesktop">Pudrición</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="cavidadesdesktop" id="cavidadesdesktop" value="Cavidades,peligros"   <?php if (isset($reporte_peligros["cavidadesdesktop"]) && $reporte_peligros["cavidadesdesktop"] == "1"){echo "checked";}?>/>
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
                                                                                                                    <input type="checkbox" name="bardasdesktop" id="bardasdesktop" value="Cercas o bardas,peligros"  <?php if (isset($reporte_peligros["bardasdesktop"]) && $reporte_peligros["bardasdesktop"] == "1"){echo "checked";}?> />
                                                                                                                    <label for="bardasdesktop">Cercas o bardas</label>
                                                                                                            </div>																																													
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="peatonesdesktop" id="peatonesdesktop" value="Peatones,peligros"  <?php if (isset($reporte_peligros["peatonesdesktop"]) && $reporte_peligros["peatonesdesktop"] == "1"){echo "checked";}?> />
                                                                                                                    <label for="peatonesdesktop">Peatones</label>
                                                                                                            </div>
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="mascotasdesktop" id="mascotasdesktop" value="Perros/Mascotas,peligros"   <?php if (isset($reporte_peligros["mascotasdesktop"]) && $reporte_peligros["mascotasdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                    <label for="mascotasdesktop">Perros/Mascotas</label>
                                                                                                            </div>		
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="jardineriadesktop" id="jardineriadesktop" value="Jardinería,peligros"  <?php if (isset($reporte_peligros["jardineriadesktop"]) && $reporte_peligros["jardineriadesktop"] == "1"){echo "checked";}?> />
                                                                                                                    <label for="jardineriadesktop">Jardinería</label>
                                                                                                            </div>	
                                                                                                            <div class="check_parent">
                                                                                                                    <input type="checkbox" name="estructurasdesktop" id="estructurasdesktop" value="Estructuras,peligros"  <?php if (isset($reporte_peligros["estructurasdesktop"]) && $reporte_peligros["estructurasdesktop"] == "1"){echo "checked";}?> />
                                                                                                                    <label for="estructurasdesktop">Estructuras</label>
                                                                                                            </div>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <div class="check_parent">
                                                                                                                        <input type="checkbox" name="otrosPeligrosdesktop" id="otrosPeligrosdesktop" value="Otro,peligros" <?php if (isset($reporte_peligros["otrosPeligrosdesktop"]) && $reporte_peligros["otrosPeligrosdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                        <label for="otrosPeligrosdesktop">Otro</label>
                                                                                                                </div>																																									
                                                                                                                <input type="text" name="otrospeligrosfielddesktop" id="otrospeligrosfielddesktop" size="35" placeholder="especificar"  <?php if (isset($reporte_peligros["otrospeligrosfielddesktop"]) && $reporte_peligros["otrospeligrosfielddesktop"] != ""){echo "value='".$reporte_peligros["otrospeligrosfielddesktop"]."'";}?> />
                                                                                                            </div>																		
                                                                                                        </div>
                                                                                                    </div>	
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Plan de mitigación de peligros</h3>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                            <div class="form_info cmsms_checkboxes">

                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="equipProtdesktop" id="equipProtdesktop" value="Equipo de protección personal,mitigacion" <?php if (isset($reporte_mitigacion["equipProtdesktop"]) && $reporte_mitigacion["equipProtdesktop"] == "1"){echo "checked";}?> />
                                                                                                                            <label for="equipProtdesktop">Equipo de protección personal</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="rcpdesktop" id="rcpdesktop" value="Primeros auxilios/RCP,mitigacion"  <?php if (isset($reporte_mitigacion["rcpdesktop"]) && $reporte_mitigacion["rcpdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="rcpdesktop">Primeros auxilios/RCP</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="supFuegodesktop" id="supFuegodesktop" value="Plan de supresión de fuego,mitigacion"  <?php if (isset($reporte_mitigacion["supFuegodesktop"]) && $reporte_mitigacion["supFuegodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="supFuegodesktop">Plan de supresión de fuego</label>
                                                                                                                    </div>																																													
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="juntaTrabdesktop" id="juntaTrabdesktop" value="Junta de trabajo,mitigacion"  <?php if (isset($reporte_mitigacion["juntaTrabdesktop"]) && $reporte_mitigacion["juntaTrabdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="juntaTrabdesktop">Junta de trabajo</label>
                                                                                                                    </div>	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="inspArboldesktop" id="inspArboldesktop" value="Inspección de árbol(es),mitigacion"  <?php if (isset($reporte_mitigacion["inspArboldesktop"]) && $reporte_mitigacion["inspArboldesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="inspArboldesktop">Inspección de árbol(es)</label>
                                                                                                                    </div>					
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                            <div class="form_info cmsms_checkboxes">	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="inspEquipodesktop" id="inspEquipodesktop" value="Inspección equipo de protección contra caídas,mitigacion"  <?php if (isset($reporte_mitigacion["inspEquipodesktop"]) && $reporte_mitigacion["inspEquipodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="inspEquipodesktop">Inspección equipo de protección contra caídas</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="inspMotosierrasdesktop" id="inspMotosierrasdesktop" value="Inspección de motosierras y herramientas,mitigacion"  <?php if (isset($reporte_mitigacion["inspMotosierrasdesktop"]) && $reporte_mitigacion["inspMotosierrasdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="inspMotosierrasdesktop">Inspección de motosierras y herramientas</label>
                                                                                                                    </div>																	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="equipoCordajedesktop" id="equipoCordajedesktop" value="Uso de equipo de cordaje,mitigacion"  <?php if (isset($reporte_mitigacion["equipoCordajedesktop"]) && $reporte_mitigacion["equipoCordajedesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="equipoCordajedesktop">Uso de equipo de cordaje</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="acordonamientodesktop" id="acordonamientodesktop" value="Acordonamiento del área,mitigacion"  <?php if (isset($reporte_mitigacion["acordonamientodesktop"]) && $reporte_mitigacion["acordonamientodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="acordonamientodesktop">Acordonamiento del área</label>
                                                                                                                    </div>	
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="comunicaciondesktop" id="comunicaciondesktop" value="Comunicación,mitigacion"  <?php if (isset($reporte_mitigacion["comunicaciondesktop"]) && $reporte_mitigacion["comunicaciondesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="comunicaciondesktop">Comunicación</label>
                                                                                                                    </div>

                                                                                                            </div>																		
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                                                                            <div class="form_info cmsms_checkboxes">
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="supSitiodesktop" id="supSitiodesktop" value="Supervisión en sitio,mitigacion"  <?php if (isset($reporte_mitigacion["supSitiodesktop"]) && $reporte_mitigacion["supSitiodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="supSitiodesktop">Supervisión en sitio</label>
                                                                                                                    </div>																																													
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="caidadesktop" id="caidadesktop" value="Zona de caída,mitigacion"  <?php if (isset($reporte_mitigacion["caidadesktop"]) && $reporte_mitigacion["caidadesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="caidadesktop">Zona de caída</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="prevClimadesktop" id="prevClimadesktop" value="Prevención climática,mitigacion"  <?php if (isset($reporte_mitigacion["prevClimadesktop"]) && $reporte_mitigacion["prevClimadesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="prevClimadesktop">Prevención climática</label>
                                                                                                                    </div>		
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="dañoExisdesktop" id="dañoExisdesktop" value="Daño existente (documentar),mitigacion"  <?php if (isset($reporte_mitigacion["dañoExisdesktop"]) && $reporte_mitigacion["dañoExisdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="dañoExisdesktop">Daño existente (documentar)</label>
                                                                                                                    </div>	
                                                                                                                    <div class="form_field_wrap">
                                                                                                                        <div class="check_parent">
                                                                                                                                <input type="checkbox" name="otrosPlandesktop" id="otrosPlandesktop" value="Otro,mitigacion"  <?php if (isset($reporte_mitigacion["otrosPlandesktop"]) && $reporte_mitigacion["otrosPlandesktop"] == "1"){echo "checked";}?>/>
                                                                                                                                <label for="otrosPlandesktop">Otro</label>
                                                                                                                        </div>																																									
                                                                                                                        <input type="text" name="otrosplanfielddesktop" id="otrosplanfielddesktop" value="" size="35" placeholder="especificar"  <?php if (isset($reporte_mitigacion["otrosplanfielddesktop"]) && $reporte_mitigacion["otrosplanfielddesktop"] != ""){echo "value='".$reporte_mitigacion["otrosplanfielddesktop"]."'";}?>/>
                                                                                                                    </div>																		
                                                                                                            </div>
                                                                                                    </div>	
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <div id="cmsms_divider_5550b989a761d" class="cmsms_divider solid"></div>
                                                                                                    <h3 id="cmsms_heading_5550b989a76d7" class="cmsms_heading">Equipo de Protección Personal</h3>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                            <div class="form_info cmsms_checkboxes">

                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="cascodesktop" id="cascodesktop" value="Casco,proteccion"  <?php if (isset($reporte_proteccion["cascodesktop"]) && $reporte_proteccion["cascodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="cascodesktop">Casco</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="gafasdesktop" id="gafasdesktop" value="Gafas de seguridad,proteccion"  <?php if (isset($reporte_proteccion["gafasdesktop"]) && $reporte_proteccion["gafasdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="gafasdesktop">Gafas de seguridad</label>
                                                                                                                    </div>
                                                                                                                    <div class="check_parent">
                                                                                                                            <input type="checkbox" name="chalecodesktop" id="chalecodesktop" value="Chaleco/camiseta reflejante,proteccion"  <?php if (isset($reporte_proteccion["chalecodesktop"]) && $reporte_proteccion["chalecodesktop"] == "1"){echo "checked";}?>/>
                                                                                                                            <label for="chalecodesktop">Chaleco/camiseta reflejante</label>
                                                                                                                    </div>																																																		
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                   
                                                                                                        <div class="form_info cmsms_checkboxes">	
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="auditivadesktop" id="auditivadesktop" value="Protección auditiva,proteccion"  <?php if (isset($reporte_proteccion["auditivadesktop"]) && $reporte_proteccion["auditivadesktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="auditivadesktop">Protección auditiva</label>
                                                                                                        </div>
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="mascaradesktop" id="mascaradesktop" value="Máscara/Protección facial,proteccion"  <?php if (isset($reporte_proteccion["mascaradesktop"]) && $reporte_proteccion["mascaradesktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="mascaradesktop">Máscara/Protección facial</label>
                                                                                                        </div>
                                                                                                        <div class="check_parent">
                                                                                                                <input type="checkbox" name="botasdesktop" id="botasdesktop" value="Botas de trabajo,proteccion"  <?php if (isset($reporte_proteccion["botasdesktop"]) && $reporte_proteccion["botasdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                <label for="botasdesktop">Botas de trabajo</label>
                                                                                                        </div>																																												
                                                                                                    </div>																		
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third">                                                                                                                                 
                                                                                                        <div class="form_info cmsms_checkboxes">
                                                                                                                <div class="check_parent">
                                                                                                                        <input type="checkbox" name="chaparrerasdesktop" id="chaparrerasdesktop" value="Chaparreras,proteccion"  <?php if (isset($reporte_proteccion["chaparrerasdesktop"]) && $reporte_proteccion["chaparrerasdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                        <label for="chaparrerasdesktop">Chaparreras</label>
                                                                                                                </div>																																													
                                                                                                                <div class="check_parent">
                                                                                                                        <input type="checkbox" name="guantesdesktop" id="guantesdesktop" value="Guantes,proteccion"  <?php if (isset($reporte_proteccion["guantesdesktop"]) && $reporte_proteccion["guantesdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                        <label for="guantesdesktop">Guantes</label>
                                                                                                                </div>
                                                                                                                <div class="form_field_wrap">
                                                                                                                <div class="check_parent">
                                                                                                                        <input type="checkbox" name="otrosEquiposdesktop" id="otrosEquiposdesktop" value="Otro,proteccion"  <?php if (isset($reporte_proteccion["otrosEquiposdesktop"]) && $reporte_proteccion["otrosEquiposdesktop"] == "1"){echo "checked";}?>/>
                                                                                                                        <label for="otrosEquiposdesktop">Otro</label>
                                                                                                                </div>																																									
                                                                                                                <input type="text" name="otrosequiposfielddesktop" id="otrosequiposfielddesktop" value="" size="35" placeholder="especificar"  <?php if (isset($reporte_proteccion["otrosequiposfielddesktop"]) && $reporte_proteccion["otrosequiposfielddesktop"] != ""){echo "value='".$reporte_proteccion["otrosequiposfielddesktop"]."'";}?>/>
                                                                                                                </div>																		
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_third"></div>
                                                                                                    <div class="form_info cmsms_input one_third"></div>
                                                                                                    <div class="form_info cmsms_input one_third">  
                                                                                                    
                                                                                                    </div>
                                                                                                    <!--    <input type="submit" id="contact_form_2_formsend" class="cmsms_button" value="Enviar informaciòn"/>
                                                                                                    </div-->
                                                                                                    <!--fin hoja dos-->
                                                                                                    </div>
                                                                                                </div>                                                
                                                                                                <!--fin hoja dos-->
                                                                                                <!--===================FRIMAS==================-->
                                                                                                <div id="cmsms_tab_555469b2e631b" class="cmsms_tab">
                                                                                                    <div class="cmsms_tab_inner">
                                                                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                        <div class="form_field_wrap">
                                                                                                            <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                            <input type="text" name="nombre1desktop" id="nombre1desktop" size="35" placeholder="Nombre" <?php if(isset($firmas[0]->nombre) && $firmas[0]->nombre != ""){echo "value='".$firmas[0]->nombre."'";}?>>
                                                                                                            <div class="form_field_wrap">
                                                                                                                <input type="text" name="firma1desktop" id="firma1desktop" <?php if(isset($firmas[0]->firma) && $firmas[0]->firma != ""){echo "value='".$firmas[0]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                            <br>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                            <input type="text" name="nombre2desktop" id="nombre2desktop" <?php if(isset($firmas[1]->nombre) && $firmas[1]->nombre != ""){echo "value='".$firmas[1]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                            <div class="form_field_wrap">
                                                                                                                <input type="text" name="firma2desktop" id="firma2desktop" <?php if(isset($firmas[1]->firma) && $firmas[1]->firma != ""){echo "value='".$firmas[1]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                            <br>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                            <input type="text" name="nombre3desktop" id="nombre3desktop" <?php if(isset($firmas[2]->nombre) && $firmas[2]->nombre != ""){echo "value='".$firmas[2]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                            <div class="form_field_wrap">
                                                                                                                <input type="text" name="firma3desktop" id="firma3desktop" <?php if(isset($firmas[2]->firma) && $firmas[2]->firma != ""){echo "value='".$firmas[2]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                            <br>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                            <input type="text" name="nombre4desktop" id="nombre4desktop" <?php if(isset($firmas[3]->nombre) && $firmas[3]->nombre != ""){echo "value='".$firmas[3]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                            <div class="form_field_wrap">
                                                                                                                <input type="text" name="firma4desktop" id="firma4desktop" <?php if(isset($firmas[3]->firma) && $firmas[3]->firma != ""){echo "value='".$firmas[3]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form_info cmsms_input one_half">                                                                                                                                   
                                                                                                        <div class="form_field_wrap">
                                                                                                            <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                            <input type="text" name="nombre5desktop" id="nombre5desktop" <?php if(isset($firmas[4]->nombre) && $firmas[4]->nombre != ""){echo "value='".$firmas[4]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                            <div class="form_field_wrap">
                                                                                                                <input type="text" name="firma5desktop" id="firma5desktop" <?php if(isset($firmas[4]->firma) && $firmas[4]->firma != ""){echo "value='".$firmas[4]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                            <br>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                            <input type="text" name="nombre6desktop" id="nombre6desktop" <?php if(isset($firmas[5]->nombre) && $firmas[5]->nombre != ""){echo "value='".$firmas[5]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                            <div class="form_field_wrap">
                                                                                                                <input type="text" name="firma6desktop" id="firma6desktop" <?php if(isset($firmas[5]->firma) && $firmas[5]->firma != ""){echo "value='".$firmas[5]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                            <br>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                            <input type="text" name="nombre7desktop" id="nombre7desktop" <?php if(isset($firmas[6]->nombre) && $firmas[6]->nombre != ""){echo "value='".$firmas[6]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                            <div class="form_field_wrap">
                                                                                                                <input type="text" name="firma7desktop" id="firma7desktop" <?php if(isset($firmas[6]->firma) && $firmas[6]->firma != ""){echo "value='".$firmas[6]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                            <br>
                                                                                                        <div class="form_field_wrap">
                                                                                                            <!--label for="cmsms_your_phone_number_is">Otro</label-->
                                                                                                            <input type="text" name="nombre8desktop" id="nombre8desktop" <?php if(isset($firmas[7]->nombre) && $firmas[7]->nombre != ""){echo "value='".$firmas[7]->nombre."'";}?> size="35" placeholder="Nombre">
                                                                                                            <div class="form_field_wrap">
                                                                                                                <input type="text" name="firma8desktop" id="firma8desktop" <?php if(isset($firmas[7]->firma) && $firmas[7]->firma != ""){echo "value='".$firmas[7]->firma."'";}?> size="35" placeholder="Firma electrónica">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                        <div class="cl"></div>
                                                                                                        <div class="loading"></div>

                                                                                                        <!-- Here you need to set the path to the sendmail file -->
                                                                                                        <div class="form_info submit_wrap" style="text-align: center;">
                                                                                                            <input type="submit" id="contact_form_2_formsend" class="cmsms_button" value="Actualizar informaciòn"/>
                                                                                                        </div>
                                                                                                        <div class="cl"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--===================fin FRIMAS==================-->

                                                                                                </div>
                                                                                                </div>
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
                        if(confirm("¿Deseas actualizar reporte?")){
                        jQuery.ajax({
                           url: "<?=base_url()?>supervisor/updateReporte",
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
                        if(confirm("¿Deseas actualizar reporte?")){
                        jQuery.ajax({
                           url: "<?=base_url()?>supervisor/updateReporte",
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
