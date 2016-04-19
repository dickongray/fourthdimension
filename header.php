<?php wp_head(); ?>
</head>
<body id="page-top" class="index">
<?php if ( is_front_page() ) { ?>
<nav id="mainHeader" class="navbar-fixed-top navigation">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12">
                <div class="nav-back">
                    <div class="container" id="navbar-padding">
                        <div class="navbar-header page-scroll">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="icon-bar top-bar"></span>  <span class="icon-bar middle-bar"></span>  <span class="icon-bar bottom-bar"></span> 
                            </button>
                            <a class="navbar-brand page-scroll" href="#page-top">
                            <img src="<?php bloginfo('template_directory'); ?>/img/4dlogo1.svg" alt="4d logo" class="smlogo img-responsive" title="Home">
                            </a>
                        </div><!-- navbar-header page-scroll -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php 
                        $args = array(
                        'menu'       => 'Main-Menu',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'container'  => '');
                        wp_nav_menu( $args );
                        ?>
                        </div><!-- collapse navbar-collapse" id="bs-example-navbar-collapse-1 -->
                    </div><!-- container" id="navbar-padding -->
                </div><!-- nav-back -->
            </div><!-- col-xs-12 -->
        </div><!-- row clearfix -->
    </div><!-- container-fluid -->
</nav>
  <?php } else { ?>
<nav id="mainHeader" class="navbar-fixed-top navigation">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12">
                    <div class="nav-back">
                        <div class="container" id="navbar-padding">
                            <div class="navbar-header page-scroll">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="icon-bar top-bar"></span>  <span class="icon-bar middle-bar"></span>  <span class="icon-bar bottom-bar"></span> 
                                </button>
                                <a class="navbar-brand page-scroll" href="<?php bloginfo( 'home'); ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/img/4dlogo1.svg" alt="gray elephant logo" class="smlogo img-responsive" title="Home">
                                </a>
                            </div><!-- navbar-header page-scroll -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php 
                        $args = array(
                        'menu'       => 'Main-Menu',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'container'  => '');
                        wp_nav_menu( $args );
                        ?>
                        </div><!-- collapse navbar-collapse" id="bs-example-navbar-collapse-1 -->
                    </div><!-- container" id="navbar-padding -->
                </div><!--nav-back -->
            </div><!-- col-xs-12 -->
        </div><!--  row clearfix-->
    </div><!-- container-fluid -->
</nav>
<?php }?>
