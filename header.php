<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
<title>
<?php wp_title('|', true, 'right'); ?>
</title>
    
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
<link href='http://fonts.googleapis.com/css?family=Lato:400,900|Lora:400,700|Jura' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="http://localhost/gym/wp-content/themes/new_cfa/img/fav.png" type="image/x-icon" />
    
<!--wordpress head-->

<?php wp_head(); ?>
    


    
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

    <!-- Header Top Bar Start -->
    <header class="top-bar">
      <div class="container center-header-sm clearfix">
          <div class="left-col pull-left hidden-xs">
            <span><i class="fa fa-phone"></i> Call Us: 703-362-8195</span>
            <span><i class="fa fa-envelope"></i> Email: <a href="mailto:info@crossfitadaptation.com">info@crossfitadaptation.com</a></span>
          </div>
          <div class="pull-right">
            <?php wp_nav_menu(array('theme_location' => 'member_menu', 'container' => false, 'menu_class' => 'nav nav-pills center-header-sm', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
          </div>
      </div>
    </header>
    <!-- Header Top Bar End -->       
    <div class="container page-container sticky-wrapper">
        
        <?php do_action('before'); ?>

        <header id="top" role="banner">
                <div class="row">
                    <!-- logo -->
                    <h1 class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                          <img src="<?php echo get_bloginfo('template_directory') ?>/img/logo.png" alt="Crossfit Adaptation">
                        </a>
                    </h1>
                    <!-- nav menu -->
                    <nav class="navbar navbar-default navbar-default-hide navbar-right" role="navigation"> 
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                                <span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-primary-collapse">
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav nav-justified', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
                           
                        </div><!--.navbar-collapse-->
                    </nav>                  
                    <!-- navigation -->
                </div>
        </header>    

        <div id="content" >
            <div class="row">
