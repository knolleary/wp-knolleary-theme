<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
 <style type="text/css" media="screen">
  @import url( <?php bloginfo('stylesheet_url'); ?> );
 </style>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
 <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
 <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 <?php wp_head(); ?>

<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
 
</head>
<body>
<div id="banner"><div class="nav"><ul><li <?php if (is_home()):?>class="current-cat"<?php endif;?>><a href="<?php bloginfo('url'); ?>/">blog</a></li><li <?php if (is_page('projects')):?>class="current-cat"<?php endif;?>><a href="http://knolleary.net/projects">projects</a></li><li <?php if (is_page('about')):?>class="current-cat"<?php endif;?>><a href="http://knolleary.net/about">about</a></li><?php
 if ( is_user_logged_in() ) {
  echo '<li><a href="http://knolleary.net/blog/wp-admin">admin</a></li>';
 } ?></ul><h1><a href="http://knolleary.net/">knolleary</a></h1></div></div>
<div id="header"><h1><a href="http://knolleary.net/">knolleary</a></h1><h2>stuff by nick o'leary</h2>
<div class="nav">
<ul><li <?php if (is_home()):?>class="current-cat"<?php endif;?>><a href="<?php bloginfo('url'); ?>/">blog</a></li><li <?php if (is_page('projects')):?>class="current-cat"<?php endif;?>><a href="http://knolleary.net/projects">projects</a></li><li <?php if (is_page('about')):?>class="current-cat"<?php endif;?>><a href="http://knolleary.net/about">about</a></li><?php
 if ( is_user_logged_in() ) {
  echo '<li><a href="http://knolleary.net/blog/wp-admin">admin</a></li>';
 } ?></ul></div>
<div class="clearfloat"></div>
</div><!-- end header div -->
<div id="content">
<!-- end header -->
