<?php
/**
 * Created by PhpStorm.
 * User: Jonats
 * Date: 1/03/2017
 * Time: 11:18 PM
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <header class="row">
        <div class="col-md-12">
            <h1><?php echo get_bloginfo('name'); ?></h1>
        </div>
    </header>
    <div class="row">
    <?php if ( has_nav_menu( 'top' ) ) : ?>
    <div class="row">
        <?php // get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
    </div><!-- .navigation-top -->
    <?php endif; ?>
