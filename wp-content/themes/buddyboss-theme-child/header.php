<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BuddyBoss_Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

        <?php wp_body_open(); ?>

		<?php if (!is_singular('llms_my_certificate')):
		 
			do_action( THEME_HOOK_PREFIX . 'before_page' ); 
	
		endif; ?>

		<div id="page" class="site">

			<?php do_action( THEME_HOOK_PREFIX . 'before_header' ); ?>

			<header id="masthead" class="<?php echo apply_filters( 'buddyboss_site_header_class', 'site-header site-header--bb' ); ?>">
				<?php do_action( THEME_HOOK_PREFIX . 'header' ); ?>
				
			</header>
				

			<?php do_action( THEME_HOOK_PREFIX . 'after_header' ); ?>

			<?php do_action( THEME_HOOK_PREFIX . 'before_content' ); ?>

			<div id="content" class="site-content">
			<?php if(!is_front_page()){?>
					<div class="appWrapper_allpages">
							<div class="mobile-header-icon"> 
									<div class="innerWrap">
										<?php
											if (class_exists( 'WooCommerce' ) ) :
												$wtabShow = 'tab-show';
											else:
												$wtabShow ='';
											endif;

											if (class_exists( 'BuddyPress' ) ) :
												$BtabShow = 'tab-show';
											else:
												$BtabShow ='';
											endif;

											// if (class_exists( 'page-id-96' ) ) :
											// 	$tabShow = 'tab-show';
											// else:
											// 	$tabShow ='';
											// endif;

										?>
										<div class="item" id="shop_cart"><a href="<?php echo home_url('shop');?>" class="<?php //echo $wtabShow; ?>" menu-active="#show-cartmenu" ><img src="/wp-content/uploads/2022/10/head-nav-icon-01.svg" alt="" /> </a></div>
										<div class="item" id="myludis_social"><a href="<?php echo home_url();?>" class="<?php //echo $BtabShow; ?>" menu-active="#show-socialmenu" data-active="swt-cart"><img src="/wp-content/uploads/2022/10/head-nav-icon-02.svg" alt="" /> </a></div>
										<div class="item" id="myludis_lab"><a href="<?php echo home_url('lab');?>"  menu-active="#show-labmenu"><img src="/wp-content/uploads/2022/10/head-nav-icon-03.svg" alt="" /> </a></div>
									</div>
							</div>
					</div>
			<?php } ?>	

				<?php do_action( THEME_HOOK_PREFIX . 'begin_content' ); ?>

				<div class="container">
					<div class="<?php echo apply_filters( 'buddyboss_site_content_grid_class', 'bb-grid site-content-grid' ); ?>">