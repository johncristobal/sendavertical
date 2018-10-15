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



                                                                                                <div class="cl"></div>
                                                                                                <div class="loading"></div>
                                                                                                
                                                                                                <!-- Here you need to set the path to the sendmail file -->
                                                                                                <div class="form_info submit_wrap">
                                                                                                    <input type="submit" id="contact_form_2_formsend" class="cmsms_button" value="Actualizar informaciòn"/>
                                                                                                </div>
                                                                                                <div class="cl"></div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                    
                                                                                    <!--ESCRITORIO-->
                                                                                    <form id="formDesktop">
                                                                                        <div class="cmsms_contact_form desktop">
                                                                                            <input type="hidden" name="tipo" id="tipo" value="desktop">
                                                                                            <input type="hidden" name="idreporte" id="idreporte" value="<?= $reportes[0]->id; ?>">
                                                                                            <div class="cmsms-form-builder">
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



                                                                                                <div class="cl"></div>
                                                                                                <div class="loading"></div>
                                                                                                <div class="form_info submit_wrap">
                                                                                                    <input type="submit" id="contact_form_2_formsend" class="cmsms_button" value="Actualizar informaciòn">
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
