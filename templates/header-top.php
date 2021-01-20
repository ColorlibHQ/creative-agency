    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <?php echo creativeagency_theme_logo( 'navbar-brand' );?>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <?php
                                    if(has_nav_menu('primary-menu')) {
                                        wp_nav_menu(array(
                                            'menu'            => 'primary-menu',
                                            'theme_location'  => 'primary-menu',
                                            'menu_id'         => 'navigation',
                                            'container_class' => false,
                                            'container_id'    => false,
                                            'menu_class'      => false,
                                            'depth'           => 3,
                                            'walker'          => new creativeagency_bootstrap_navwalker()
                                        ));
                                    }
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <?php
                            if ( !empty( creativeagency_opt('creativeagency_header_btn_text') )) { 
                                $header_btn_text = creativeagency_opt('creativeagency_header_btn_text');
                                $header_btn_url  = creativeagency_opt('creativeagency_header_btn_url');
                                ?>
                                <div class="log_chat_area d-flex align-items-center">
                                    <a href="<?php echo esc_url( $header_btn_url )?>" target="_black" class="say_hi"><?php echo esc_html( $header_btn_text )?></a>
                                </div>
                                <?php
                            }    
                            ?>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->