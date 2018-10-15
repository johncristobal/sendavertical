<header id="header">
        <div class="header_mid" data-height="95">
                <div class="header_mid_outer">
                        <div class="header_mid_inner">
                                <div class="logo_wrap">
                                        <a href="<?php echo base_url()?>" title="Eco Nature" class="logo">
                                            <img src="<?php echo base_url()?>img/logosendasinblanco.png" alt="Eco Nature"/>
                                                <img class="logo_retina" src="<?php echo base_url()?>img/logosendasinblanco.png" alt="Eco Nature" width="179" height="44"/>
                                        </a>
                                </div>
                                <div class="resp_nav_wrap">
                                        <div class="resp_nav_wrap_inner">
                                                <div class="resp_nav_content">
                                                        <a class="responsive_nav cmsms-icon-menu-2" href="javascript:void(0);"></a>
                                                </div>
                                        </div>
                                </div>

<!-- _________________________ Start Navigation _________________________ -->
                                <nav role="navigation">
                                        <div class="menu-main-container">
                                                <ul id="navigation" class="navigation">
                                                        <li>
                                                                <a href="<?=base_url()?>admin">
                                                                        <span class="nav_bg_clr"></span>
                                                                        <span><?=$this->session->userdata('nombre')?></span>
                                                                </a>																											
                                                        <li>
                                                            <a href="<?php echo base_url()?>admin/cerrarSesion">
                                                                        <span class="nav_bg_clr"></span>
                                                                        <span>Cerrar Sesión</span>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </div>
                                        <div class="cl"></div>
                                </nav>
<!-- _________________________ Finish Navigation _________________________ -->
                        </div>
                </div>
        </div>
</header>