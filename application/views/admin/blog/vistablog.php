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
		
		<title> Blog | Senda Vertical</title>
		
		<link rel='stylesheet' href='<?= base_url()?>LayerSlider/css/layerslider.css' type='text/css' media='all' />
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
		<script type="text/javascript">
                    jQuery.noConflict();
                    jQuery(document).ready(function( $ ){
                        $('#saveBlog').click(function(e){ 
                            e.preventDefault();
                            //var formData = new FormData(jQuery("#formdatos")[0]);

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
                        });
                    });
                
                </script>
                    
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
			
			#cmsms_row_554b576c54360 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_554b576c54360 .cmsms_row_outer_parent { 
				padding-bottom: 50px; 
			}
			
			#cmsms_paypal .button{
				color: rgba(255, 255, 255, 1);
				border-color: rgba(88, 207, 144, 1);
				background-color: rgba(88, 207, 144, 1);
				font-size: 12px;
			}
			
			#cmsms_paypal .button:hover {
				color: rgba(151, 156, 164, 1);
				border-color: rgba(229, 232, 236, 1);
				background-color: rgba(255, 255, 255, 1);
			}
                        .content_wrap:before {
                            width: 0px;
                        }
                        #cmsms_row_1 .cmsms_row_outer_parent {
                            padding-bottom: 0px;
                        }

                        #cmsms_row_1 .cmsms_row_outer_parent {
                            padding-top: 0px;
                        }
                        #cmsms_row_1 .cmsms_row_inner.cmsms_row_fullwidth {
                            padding-right: 0%;
                        }

                        #cmsms_row_1 .cmsms_row_inner.cmsms_row_fullwidth {
                            padding-left: 0%;
                        }
		</style>
		<script type='text/javascript' src='<?= base_url()?>LayerSlider/js/layerslider.kreaturamedia.jquery.js'></script>
		<script type='text/javascript' src='<?= base_url()?>LayerSlider/js/greensock.js'></script>
		<script type='text/javascript' src='<?= base_url()?>LayerSlider/js/layerslider.transitions.js'></script>
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
							<span>Estas aquí: </span>
							<a href="index.html" class="cms_home">Home</a>
							<span class="breadcrumbs_sep"> / </span>
							<a href="#" class="cms_home">Blog</a>
							<span class="breadcrumbs_sep"> / </span>
							<span><?= $categoria ?></span>
						</div>
					</div>
					<div class="middle_inner">
						<div class="content_wrap r_sidebar">
						<!--_________________________ Start Content _________________________ -->
							<div class="" role="main">
								<div class="blog opened-article">
							<!--_________________________ Start Standard Article _________________________ -->
									<article class="post format-standard hentry">
										<header class="cmsms_post_header entry-header">
											<!--span class="cmsms_post_format_img cmsms-icon-desktop-3"></span-->
                                                                                        <br><br>
											<h1 class="cmsms_post_title entry-title"><?= $titulo; ?></h1>
										</header>
                                                                            <div id="cmsms_row_1" class="cmsms_row cmsms_color_scheme_default">
                                                                                <div class="cmsms_row_outer_parent">
                                                                                    <div class="cmsms_row_outer">
                                                                                            <div class="cmsms_row_inner cmsms_row_fullwidth">
                                                                                                    <div class="cmsms_row_margin">
                                                                                                            <div class="cmsms_column one_first">
                                                                                                                    <div class="cmsms_slider">
                                                                                                                            <script type="text/javascript">var lsjQuery = jQuery;</script>
                                                                                                                            <script type="text/javascript"> 
                                                                                                                                    lsjQuery(document).ready(function() { 
                                                                                                                                            if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } 
                                                                                                                                            else { lsjQuery("#layerslider_1").layerSlider({
                                                                                                                                                    navStartStop: false, 
                                                                                                                                                    navButtons: false, 
                                                                                                                                                    skinsPath: '../LayerSlider/assets/skins/'
                                                                                                                                            })} 
                                                                                                                                    }); 
                                                                                                                            </script>

                                                                                                                            <div id="layerslider_1" class="ls-wp-container" style="width:1920px;height:670px;margin:0 auto;">
                                                                                                                                <?php
                                                                                                                                    foreach($imagenes as $value) 
                                                                                                                                    {                                                                                                                                        
                                                                                                                                ?>
                                                                                                                                    <div class="ls-slide" data-ls="slidedelay:2500; transition2d: all;">
                                                                                                                                        <img src="<?= base_url()."img/blogs/".$id."/".$value ?>" data-src="<?= base_url()."img/blogs/".$id."/".$value ?>" class="ls-bg" alt="bg-blur" />
                                                                                                                                        <!--img class="ls-l" style="top:0px;left:0px;white-space: nowrap;" data-ls="offsetxin:0;delayin:400;offsetxout:0;durationout:1000;parallaxlevel:1;" src="../LayerSlider/img/blank.gif" data-src="<?= base_url()."img/bannerstemp/".$value ?>" alt="">
                                                                                                                                            <p class="ls-l" style="top:210px;left:573px;font-weight:300;font-family:open sans;font-size:54px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1300;delayin:400;offsetxout:0;">The Creation of</p>
                                                                                                                                            <p class="ls-l" style="top:280px;left:567px;font-weight:300;font-family:open sans;font-size:90px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:800;offsetxout:0;durationout:0;">a Thousand Forests</p>
                                                                                                                                            <p class="ls-l" style="top:402px;left:1089px;font-weight:300;font-family:open sans;font-size:40px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1200;offsetxout:0;">is in one acorn</p>
                                                                                                                                            <img class="ls-l" style="top:278px;left:1354px;font-weight:300;font-family:open sans;font-size:40px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1200;rotatein:90;rotatexin:180;rotateyin:180;offsetxout:0;" src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/leaf.png" alt=""-->
                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                    
                                                                                                                                <!--div class="ls-slide" data-ls="slidedelay:3500; transition2d: all;">
                                                                                                                                            <img src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/bg-blur.jpg" class="ls-bg" alt="bg-blur" />
                                                                                                                                            <img class="ls-l" style="top:0px;left:0px;white-space: nowrap;" data-ls="offsetxin:0;delayin:400;offsetxout:0;durationout:1000;parallaxlevel:1;" src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/bg.jpg" alt="">
                                                                                                                                            <p class="ls-l" style="top:210px;left:573px;font-weight:300;font-family:open sans;font-size:54px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1300;delayin:400;offsetxout:0;">The Creation of</p>
                                                                                                                                            <p class="ls-l" style="top:280px;left:567px;font-weight:300;font-family:open sans;font-size:90px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:800;offsetxout:0;durationout:0;">a Thousand Forests</p>
                                                                                                                                            <p class="ls-l" style="top:402px;left:1089px;font-weight:300;font-family:open sans;font-size:40px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1200;offsetxout:0;">is in one acorn</p>
                                                                                                                                            <img class="ls-l" style="top:278px;left:1354px;font-weight:300;font-family:open sans;font-size:40px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1200;rotatein:90;rotatexin:180;rotateyin:180;offsetxout:0;" src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/leaf.png" alt="">
                                                                                                                                    </div>
                                                                                                                                    <div class="ls-slide" data-ls="slidedelay:3500; transition2d: all;">
                                                                                                                                            <img src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/bg-blur-2.jpg" class="ls-bg" alt="bg-blur-2" />
                                                                                                                                            <img class="ls-l" style="top:0px;left:0px;white-space: nowrap;" data-ls="offsetxin:0;durationin:800;delayin:200;offsetxout:0;durationout:1000;parallaxlevel:1;" src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/bg-2.jpg" alt="">
                                                                                                                                            <p class="ls-l" style="top:195px;left:510px;font-weight:300;font-family:open sans;font-size:180px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;delayin:400;offsetxout:0;durationout:0;">10 000 000</p>
                                                                                                                                            <p class="ls-l" style="top:526px;left:711px;font-weight:500;font-family:open sans;font-size:28px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;offsetxout:0;">Are spilled in the ocean waters annually</p>
                                                                                                                                            <img class="ls-l" style="top:161px;left:934px;font-weight:300;font-family:open sans;font-size:40px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:800;rotatexin:180;rotateyin:180;offsetxout:0;" src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/wave.png" alt="">
                                                                                                                                            <p class="ls-l" style="top:398px;left:838px;font-weight:300;font-family:open sans;font-size:60px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;delayin:600;offsetxout:0;durationout:0;">tons of oil</p>
                                                                                                                                    </div>
                                                                                                                                    <div class="ls-slide" data-ls="slidedelay:3800; transition2d: all;">
                                                                                                                                            <img src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/bg-blur-3.jpg" class="ls-bg" alt="bg-blur-3" />
                                                                                                                                            <img class="ls-l" style="top:0px;left:1px;white-space: nowrap;" data-ls="offsetxin:0;durationin:800;delayin:200;offsetxout:0;durationout:1000;parallaxlevel:1;" src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/bg-3.jpg" alt="">
                                                                                                                                            <p class="ls-l" style="top:125px;left:373px;font-weight:300;font-family:open sans;font-size:240px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:800;delayin:400;offsetxout:0;durationout:0;">Sun</p>
                                                                                                                                            <img class="ls-l" style="top:153px;left:791px;font-weight:300;font-family:open sans;font-size:44px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:-160;offsetyin:250;durationin:1500;delayin:800;rotatein:60;rotatexin:60;rotateyin:60;offsetxout:160;offsetyout:-250;durationout:600;" src="../LayerSlider/img/blank.gif" data-src="../LayerSlider/img/plan.png" alt="">
                                                                                                                                            <p class="ls-l" style="top:407px;left:382px;font-weight:300;font-family:open sans;font-size:36px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:800;offsetxout:0;">Gives us clean energy</p>
                                                                                                                                            <p class="ls-l" style="top:456px;left:381px;font-weight:300;font-family:open sans;font-size:36px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:800;offsetxout:0;">Every day</p>
                                                                                                                                            <p class="ls-l" style="top:508px;left:380px;font-weight:300;font-family:open sans;font-size:36px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:800;offsetxout:0;">100% Free</p>
                                                                                                                                    </div-->
                                                                                                                                <?php } ?>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
										<div class="cmsms_post_content entry-content">
											<div id="cmsms_row_554b576c54360" class="cmsms_row cmsms_color_scheme_default">
												<div class="cmsms_row_outer_parent">
													<div class="cmsms_row_outer">
														<div class="cmsms_row_inner">
															<div class="cmsms_row_margin">
																<div class="cmsms_column one_first">
                                                                                                                                    <br>
																	<div class="cmsms_text">
																		<p>
                                                                                                                                                    <?= $texto ?>
                                                                                                                                                </p>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="cl"></div>
										</div>
										<footer class="cmsms_post_footer entry-meta">
											<div class="cmsms_post_meta_info">
												<abbr class="published cmsms_post_date cmsms-icon-calendar-8" title="<?= $fechashow ?>"><?= $fechashow ?></abbr><!--a href="#" onclick="return false;" id="cmsmsLike-2000" class="cmsmsLike active cmsms-icon-heart-7"><span>1</span></a><a class="cmsms_post_comments cmsms-icon-comment-6" href="#" title="Comment on Bear Population">0</a-->
											</div>
											<div class="cmsms_post_cont_info">
												<span class="cmsms_post_user_name">Por <a href="#" title="" class="vcard author"><span class="fn" rel="author"><?= $autor ?></span></a></span><span class="cmsms_post_category">En <a href="#" rel="category tag"><?= $categoria ?></a>, <a href="#" rel="category tag">Home</a></span>
											</div>
										</footer>
									</article>
							<!--_________________________ Finish Standard Article _________________________ -->
									<!--aside class="post_nav">
										<span class="cmsms_next_post">
											<a href="#" rel="next">Keep Calm &#038; Save Nature</a>
											<span class="cmsms_next_arrow">
												<span></span>
											</span>
										</span>
										<span class="cmsms_prev_post">
											<a href="#" rel="prev">Quote</a>
											<span class="cmsms_prev_arrow">
												<span></span>
											</span>
										</span>
									</aside-->
									<aside class="share_posts">
										<h3 class="share_posts_title">Comparte...</h3>	
										<div class="fl share_posts_item">
											<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
											<script type="text/javascript">
												!function (d, s, id) { 
													var js = undefined, 
														fjs = d.getElementsByTagName(s)[0];
													
													if (d.getElementById(id)) { 
														d.getElementById(id).parentNode.removeChild(d.getElementById(id));
													}
													
													js = d.createElement(s);
													js.id = id;
													js.src = '//platform.twitter.com/widgets.js';
													
													fjs.parentNode.insertBefore(js, fjs);
												} (document, 'script', 'twitter-wjs');
											</script>
										</div>
										<div class="fl share_posts_item">
											<div class="g-plusone" data-size="medium"></div>
											<script type="text/javascript">
												(function () { 
													var po = document.createElement('script'), 
														s = document.getElementsByTagName('script')[0];
													
													po.type = 'text/javascript';
													po.async = true;
													po.src = 'https://apis.google.com/js/plusone.js';
													
													s.parentNode.insertBefore(po, s);
												} )();
											</script>
										</div>
										
										<div class="fl share_posts_item">
											<div class="fb-like" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>
											<script type="text/javascript">
												(function (d, s, id) { 
													var js = undefined, 
														fjs = d.getElementsByTagName(s)[0];
													
													if (d.getElementById(id)) { 
														d.getElementById(id).parentNode.removeChild(d.getElementById(id));
													}
													
													js = d.createElement(s);
													js.id = id;
													js.src = '//connect.facebook.net/en_US/all.js#xfbml=1';
													
													fjs.parentNode.insertBefore(js, fjs);
												} (document, 'script', 'facebook-jssdk'));
											</script>
										</div>
										<div class="cl"></div>
									</aside>
									<aside class="about_author">
										<h3 class="about_author_title">Acerca del autor</h3>
										<div class="about_author_inner">
											<figure class="alignleft">
												<img alt='' src='http://2.gravatar.com/avatar/23463b99b62a72f26ed677cc556c44e8?s=100&#038;d=mm&#038;r=g' srcset='http://2.gravatar.com/avatar/23463b99b62a72f26ed677cc556c44e8?s=200&amp;d=mm&amp;r=g 2x' class='avatar avatar-100 photo' height='100' width='100' />
											</figure>
											<div class="ovh">
												<h2 class="vcard author">
													<span class="fn" rel="author"><?= $autor ?></span>
												</h2>
												<div class="social_wrap">
													<div class="social_wrap_inner">
														<ul>
                                                                                                                    <li><a href="<?= $mailautor ?>" class="cmsms-icon-mail-6" title="Email" target="_blank"></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</aside>
									<aside class="related_posts">
										<h3>Entradas relacionadas</h3>
										<ul>
											<li><a href="#" class="current">Categoria</a></li>
											<!--li><a href="#">Últimos</a></li-->
										</ul>
										<div class="related_posts_content">
											<div class="related_posts_content_tab" style="display:block;">
                                                                                            <?php if(true){ ?>
                                                                                                <div class="one_half">
                                                                                                    <div class="rel_post_content">
                                                                                                            <!--figure class="alignleft">
                                                                                                                    <a href="#" title="Sunflower Time">
                                                                                                                            <img width="100" height="100" src="img/images/Sunflower-Time-thumb.jpg" class="attachment-100x100" alt="Sunflower Time" title="Sunflower Time" style="width:100px; height:100px;" />
                                                                                                                    </a>
                                                                                                            </figure-->
                                                                                                            <h5>
                                                                                                                <a href="#" title="Sunflower Time">No hay entradas relacionadas</a>
                                                                                                            </h5>
                                                                                                    </div>
												</div>
                                                                                            
                                                                                            <?php } else {
                                                                                                    foreach ($array as $value) {
                                                                                             ?>
												<div class="one_half">
													<div class="rel_post_content">
														<figure class="alignleft">
															<a href="#" title="Sunflower Time">
																<img width="100" height="100" src="img/images/Sunflower-Time-thumb.jpg" class="attachment-100x100" alt="Sunflower Time" title="Sunflower Time" style="width:100px; height:100px;" />
															</a>
														</figure>
														<h5>
															<a href="#" title="Sunflower Time">Sunflower Time</a>
														</h5>
													</div>
												</div>
												
                                                                                                <?php 
                                                                                                        }
                                                                                                    }
                                                                                                ?>
											</div>
											<!--div class="related_posts_content_tab">
												<div class="one_half">
													<div class="rel_post_content">
														<figure class="alignleft">
															<a href="#" title="The Ozone Layer">
																<img width="100" height="100" src="img/images/ozon-thumb.jpg" class="attachment-100x100" alt="The Ozone Layer" title="The Ozone Layer" style="width:100px; height:100px;" />
															</a>
														</figure>
														<h5>	
															<a href="#" title="The Ozone Layer">The Ozone Layer</a>
														</h5>
													</div>
												</div>
												<div class="one_half last">
													<div class="rel_post_content">
														<figure class="alignleft">
															<a href="#" title="Spring Melody">
																<img width="100" height="100" src="img/images/leaves-thumb.jpg" class="attachment-100x100" alt="Spring Melody" title="Spring Melody" style="width:100px; height:100px;" />
															</a>
														</figure>
														<h5>
															<a href="#" title="Spring Melody">Spring Melody</a>
														</h5>
													</div>
												</div>
												<div class="cl"></div>
												<div class="one_half">
													<div class="rel_post_content">
														<figure class="alignleft">
															<a href="#" title="Save Tropic Forests">
																<img width="100" height="100" src="img/images/forest-thumb.jpg" class="attachment-100x100" alt="Save Tropic Forests" title="Save Tropic Forests" style="width:100px; height:100px;" />
															</a>
														</figure>
														<h5>
															<a href="#" title="Save Tropic Forests">Save Tropic Forests</a>
														</h5>
													</div>
												</div>
												<div class="one_half last">
													<div class="rel_post_content">
														<figure class="alignleft">
															<a href="#" title="Keep Calm &amp; Save Nature">
																<span class="img_placeholder cmsms-icon-megaphone-3"></span>
															</a>
														</figure>
														<h5>
															<a href="#" title="Keep Calm &amp; Save Nature">Keep Calm &amp; Save Nature</a>
														</h5>
													</div>
												</div>
												<div class="cl"></div>
											</div-->
										</div>
									</aside>
                                                                        <div class="form_info submit_wrap" style="text-align:right; padding-bottom: 20px; ">
                                                                            <a id="backutton" class="cmsms_button" onclick="window.history.back();">
                                                                                    <span>Regresar</span>
                                                                                </a>
                                                                                <!--a id="saveBlog" class="cmsms_button">
                                                                                    <span>Guardar</span>
                                                                                </a-->

                                                                        </div>
									<!--div id="respond" class="comment-respond">
										<h3>Leave a Reply</h3>
										<form action="#" method="post" id="commentform" class="comment-form" novalidate>
											<p class="comment-notes">Your email address will not be published.</p>
											<p class="comment-form-author">
												<input type="text" id="author" name="author" value="" size="30" placeholder="Name (Required)" />
											</p>
											<p class="comment-form-email">
												<input type="text" id="email" name="email" value="" size="30" placeholder="Email (Required)" />
											</p>
											<p class="comment-form-url">
												<input type="text" id="url" name="url" value="" size="30" placeholder="Website" />
											</p>
											<p class="comment-form-comment">
												<textarea name="comment" id="comment" cols="60" rows="10"></textarea>
											</p>						
											<p class="form-submit">
												<input name="submit" type="submit" id="submit" class="submit" value="Submit Comment" /> 
												<input type='hidden' name='comment_post_ID' value='2000' id='comment_post_ID' />
												<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
											</p>
											<p style="display: none;">
												<input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="01f6361215" />
											</p>
											<p style="display: none;">
												<input type="hidden" id="ak_js" name="ak_js" value="51"/>
											</p>					
										</form>
									</div><!-- #respond -->
								</div>
							</div>
						<!-- _________________________ Finish Content _________________________ -->
						<!-- _________________________ Start Sidebar _________________________ -->
						<!-- _________________________ Finish Sidebar _________________________ -->
						</div>
					</div>
				</div>
							<?php $this->load->view('footer');?>
			<!-- _________________________ Finish Middle _________________________ -->
				<a href="javascript:void(0);" id="slide_top" class="cmsms-icon-up-open-mini"></a>
			</div>
		<!-- _________________________ Finish Main _________________________ -->
		<!-- _________________________ Start Footer _________________________ -->
			<!--footer id="footer" class="cmsms_color_scheme_footer cmsms_footer_small">
				<div class="footer_bg">
					<div class="footer_inner">
						<div class="social_wrap">
							<div class="social_wrap_inner">
								<ul>
									<li><a href="#" class="cmsms-icon-twitter-circled" title="Twitter" target="_blank"></a></li>
									<li><a href="#" class="cmsms-icon-facebook-circled" title="Facebook" target="_blank"></a></li>
									<li><a href="#" class="cmsms-icon-gplus-circled" title="Google+" target="_blank"></a></li>
									<li><a href="#" class="cmsms-icon-vimeo-circled" title="Vimeo" target="_blank"></a></li>
									<li><a href="#" class="cmsms-icon-skype-circled" title="Skype" target="_blank"></a></li>
								</ul>
							</div>
						</div>
						<span class="copyright">EcoNature &copy; 2015 | All Rights Reserved</span>
					</div>
				</div>
			</footer-->
                        <?php $this->load->view('nowosc') ?>
		<!-- _________________________ Finish Footer _________________________ -->
		</div>
	
	</body>
</html>
