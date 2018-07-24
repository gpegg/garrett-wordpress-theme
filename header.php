<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title> 

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
      
      <!-- Setting args for Menus -->
      <?php
        $args = array (
            'menu'          => 'header-menu',
            'menu_class'    => 'navbar-nav',
            'container'     => false
        );
      ?>  
      
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark sticky-top">
      <a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <?php wp_nav_menu( $args ); ?>
            
          <!--<li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>-->
      </div>
    </nav>
    <div class="hero-image">
        <div class="hero-text">
            <h1><a href="<?php echo esc_url( home_url() ) ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </div>