<?php
/*
 * @package WordPress
 * @subpackage Tuto_Wordpress_Finalclap
 *
 * En-tête, commun à tous les templates
**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<!-- WP_HEAD -->
	<?php wp_head(); ?>
	<!-- END WP_HEAD -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
</head>

<body <?php body_class('wordpress'); ?>>

<div id="header">
	<div id="title"><?php bloginfo('title'); ?></div>
	<div id="description"><?php bloginfo('description'); ?></div>
	
	<div id="menu" role="navigation">
		<a href="<?php bloginfo('siteurl'); ?>">Accueil</a>
		<a href="<?php bloginfo('siteurl'); ?>/wp-admin/">Administration</a>
	</div>
</div>

<div class="wrap"><!-- WRAP -->
<div id="content" role="main"><!-- CONTENT -->