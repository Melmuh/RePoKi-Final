<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Repoki
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>RePoKi - Regionale Produkte aus Kiel</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<img src="http://localhost/repoki/wp-content/themes/repoki/assets/img/header-image-min.jpg" alt="" class="img-header">
<header> <?php get_template_part( 'template-parts/header/header', 'image' ); ?>

<div class="container-fluid">
    <div class="container">
        <h3>
            <nav class="fill">
            <?php wp_nav_menu( array(
            'container_id' => 'navigation',
            'theme_location'  => 'primary'
             
            ) ); ?>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            </nav>
        
        </h3>
        
    </div>   
</div>

</header>
<div class="site-content-contain">
		<div id="content" class="site-content">

    
    
        
