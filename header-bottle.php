<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chengdu
 */

?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Place favicon.ico in the root directory -->
    <meta name="keywords" content="成都奇航集团官网">
    <meta name="description" content="成都奇航集团官网">
	<?php wp_head(); ?>
  </head>
  <body>
    <!-- 头部 -->
    <div class="header">
      <div class="topbar">
        <div class="searchForm fr">
          <form action="<?php bloginfo('home'); ?>" method="get">
            
            <input type="text" name="s" placeholder="Enter Keywords">
            <input type="submit" value="" class="">
          </form>
        </div>
        <div class="backhome fr">
          <a class="bk_home" href="<?php echo home_url(); ?>"><span class="icon"></span>Business Home</a>
        </div>
      </div>
      <div class="logo_box">
         <?php get_template_part('logo'); ?>
        <div class="nav fr">
			<?php wp_nav_menu(array(
				'theme_location'		=> 'bottle-menu',
				'fallback_cb'			=> 'default_menu',
				'walker'			=> new changdu_menu(),
			)); ?>
        </div>
      </div>
    </div>