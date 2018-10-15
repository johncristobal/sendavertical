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
			<link rel='stylesheet' href='<?= base_url()?>css/ie.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='<?= base_url()?>css/econature_fonts.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='<?= base_url()?>css/econature_colors_primary.css' type='text/css' media='screen' />
			<link rel='stylesheet' href='<?= base_url()?>css/econature_colors_secondary.css' type='text/css' media='screen' />
		<![endif]-->
		<link rel='stylesheet' href='<?= base_url()?>css/econature.css' />
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oxygen%3A300%2C400%2C700&#038;ver=4.2.1' type='text/css' media='all' />

		<script type='text/javascript' src='<?= base_url()?>js/jquery.js'></script>
		<script type='text/javascript' src='<?= base_url()?>js/jquery-migrate.min.js'></script>
		
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
			
			#cmsms_row_554c88a07207b .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_554c88a07207b .cmsms_row_outer_parent { 
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
                        .post.cmsms_default_type {
                            padding-top: 70px;
                            padding-right: 0px; 
                        }
		</style>
                <script>
                    function borrar(id){
                        
                       if(confirm('¿Deseas eliminar blog?')){
                           jQuery.ajax({
                                url:'<?= base_url()?>admin/deleteblog',
                                data:{id:id},
                                type:'POST',
                                success: function(data){
                                    //alert('bb');
                                    window.location.href = "<?= base_url() ?>admin/blog";
                                }
                            });
                       }
                    }
                    </script>
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
					<div class="headline cmsms_color_scheme_default">
						<div class="headline_outer">
							<div class="headline_color"></div>
							<div class="headline_inner align_left">
								<div class="headline_aligner"></div><div class="headline_text"><h1 class="entry-title">Lista de blogs</h1></div>
							</div>
						</div>
					</div>
					<div class="cmsms_breadcrumbs">
						<div class="cmsms_breadcrumbs_inner align_right">
							<span>Estas aqui: </span>
							<a href="index.html" class="cms_home">Home</a>
							<span class="breadcrumbs_sep"> / </span>
							<a href="blog.html" class="cms_home">Blogs</a>
							<!--span class="breadcrumbs_sep"> / </span>
							<span>Standard</span-->
						</div>
					</div>
					<div class="middle_inner">
						<div class="content_wrap r_sidebar">
						<!--_________________________ Start Content _________________________ -->
                                                    <div class="content entry" role="main">
                                                            <div id="cmsms_row_554c88a07207b" class="cmsms_row cmsms_color_scheme_default">
                                                                    <div class="cmsms_row_outer_parent">
                                                                            <div class="cmsms_row_outer">
                                                                                    <div class="cmsms_row_inner">
                                                                                            <div class="cmsms_row_margin">
                                                                                                    <div class="cmsms_column one_first">
                                                                                                            <div class="cmsms_wrap_blog entry-summary" id="blog_554c88a072294" data-meta="date,categories,author,comments,likes,more">
                                                                                                                    <div class="blog standard">
                                                                                                                    <!--_________________________ Start Standard Article _________________________ -->
                                                                                                                            <?php
                                                                                                                                if ($blogs == 0)
                                                                                                                                {
                                                                                                                            ?>
                                                                                                                                <article class="cmsms_default_type post">
                                                                                                                                    <div class="cmsms_post_cont">
                                                                                                                                            <header class="cmsms_post_header entry-header">
                                                                                                                                                    <h3 class="cmsms_post_title entry-title cmsms_valid_title">
                                                                                                                                                            <a href="open-post.html">No hay blogs guardados...</a>
                                                                                                                                                    </h3>
                                                                                                                                            </header>
                                                                                                                                    </div>
                                                                                                                                </article>
                                                                                                                            <?php
                                                                                                                                } else {
                                                                                                                                    foreach($blogs as $value){
                                                                                                                                
                                                                                                                            ?>
                                                                                                                            <article class="cmsms_default_type post"> 
                                                                                                                                    <div class="cmsms_post_info entry-meta">
                                                                                                                                            <!--span class="cmsms_post_format_img cmsms-icon-desktop-3"></span-->
                                                                                                                                            <abbr class="published cmsms_post_date" title="Fecha">
                                                                                                                                                    <span class="cmsms_day_mon">19/09</span>
                                                                                                                                                    <span class="cmsms_year">2018</span>
                                                                                                                                            </abbr>
                                                                                                                                    </div>
                                                                                                                                    <div class="cmsms_post_cont">
                                                                                                                                            <figure>
                                                                                                                                                    <a href="#" title="" class="cmsms_img_link preloader">
                                                                                                                                                            <img width="820" height="490" src="<?php echo base_url() ?>img/blogs/<?= $value->id ?>/foto0.png" class="full-width" alt="<?= $value->titulo; ?>" title="<?= $value->titulo; ?>" />
                                                                                                                                                    </a>
                                                                                                                                            </figure>
                                                                                                                                            <header class="cmsms_post_header entry-header">
                                                                                                                                                    <h3 class="cmsms_post_title entry-title cmsms_valid_title">
                                                                                                                                                        <a href="<?php echo base_url()?>admin/wblog/<?= $value->id; ?>"><?= $value->titulo; ?></a>
                                                                                                                                                    </h3>
                                                                                                                                            </header>
                                                                                                                                            <div class="cmsms_post_cont_info entry-meta">
                                                                                                                                                    <span class="cmsms_post_user_name">Por <a href="#" title="" class="vcard author"><span class="fn" rel="author"><?= $value->nombre; ?></span></a></span><span class="cmsms_post_category">en <a href="open-post.html" rel="category tag"><?= $value->descripcion ?></a></span>
                                                                                                                                            </div>
                                                                                                                                            <div class="cmsms_post_content entry-content"></div>
                                                                                                                                            <footer class="cmsms_post_footer entry-meta">
                                                                                                                                                    <div class="cmsms_post_meta_info">
                                                                                                                                                            <!--a href="#" onclick="return false;" id="cmsmsLike-172" class="cmsmsLike active cmsms-icon-heart-7"><span>1</span></a><a class="cmsms_post_comments cmsms-icon-comment-6" href="#" title="Comment on The Ozone Layer">1</a-->
                                                                                                                                                    </div>
                                                                                                                                                    <a class="button cmsms_post_read_more" href="<?php echo base_url()?>admin/wblog/<?= $value->id; ?>">Ver mas...</a>
                                                                                                                                                    <a class="button cmsms_post_read_more" id="delete" onclick="borrar(<?= $value->id; ?>);">Eliminar...</a>
                                                                                                                                            </footer>
                                                                                                                                    </div>
                                                                                                                            </article>
                                                                                                                            <?php 
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            ?>
                                                                                                                    </div>
                                                                                                                    <div class="cmsms_wrap_more_posts"></div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="cl"></div>
							</div>
							<!-- _________________________ Finish Content _________________________ -->
							<!-- _________________________ Start Sidebar _________________________ -->
							<div class="sidebar" role="complementary">
								<!--aside id="search-2" class="widget widget_search">
									<div class="search_bar_wrap">
										<form method="get">
											<p>
												<input name="s" placeholder="enter keywords" value="" type="text" />
												<button type="submit" class="cmsms-icon-search-7"></button>
											</p>
										</form>
									</div>
								</aside>
								<aside id="custom-flickr-2" class="widget widget_custom_flickr_entries">
									<div id="flickr">
										<h3 class="widgettitle">Flickr</h3>
										<div class="wrap">
											<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=64867600@N03"></script>
										</div>
										<div class="cl"></div>
										<a href="http://www.flickr.com/photos/64867600@N03" class="more_button" target="_blank">
											<span>More flickr images</span>
										</a>
									</div>
								</aside-->
								<aside id="cmsms_paypal" class="widget widget_custom_paypal_donations">
									<div class="cmsms_paypal_donations_widget">
										<h3 class="widgettitle">Nuevo blog</h3>
										<!--p>Donec fringilla, erat et semper eleifend, justo quam sodales a vehicula ipsum libero eget mi. Integer condimentum, nibh aliquet.</p-->
										<a href="<?= base_url() ?>admin/blognuevo" class="button">Inicia un nuevo blog</a>
									</div>
								</aside>		
								<!--aside id="recent-posts-2" class="widget widget_recent_entries">
									<h3 class="widgettitle">Recent Posts</h3>
									<ul>
										<li><a href="open-post.html">The Ozone Layer</a></li>
										<li><a href="open-post.html">Spring Melody</a></li>
										<li><a href="open-post.html">Save Tropic Forests</a></li>
										<li><a href="open-post.html">Keep Calm &#038; Save Nature</a></li>
										<li><a href="open-post.html">Bear Population</a></li>
									</ul>
								</aside-->
							</div>
						<!-- _________________________ Finish Sidebar _________________________ -->
						</div>
					</div>
				</section>
<!-- _________________________ Finish Middle _________________________ -->
<!-- _________________________ Start Bottom _________________________ -->
				
<!-- _________________________ Finish Bottom _________________________ -->
				<a href="javascript:void(0);" id="slide_top" class="cmsms-icon-up-open-mini"></a>
			</div>
<!-- _________________________ Finish Main _________________________ -->
<!-- _________________________ Start Footer _________________________ -->
			<?php $this->load->view('nowosc') ?>
<!-- _________________________ Finish Footer _________________________ -->
		</div>
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
		<script type='text/javascript' src='<?= base_url()?>js/jquery.script.js'></script>
		<script type='text/javascript' src='<?= base_url()?>js/jquery.tweet.min.js'></script>
	</body>
</html>
