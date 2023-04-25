<?php
/* Template Name: Canva Empty */
get_header(); ?>
<div class="block-full">
    <?php 
        if ( have_posts() ) { 
            while ( have_posts() ) {
            the_post(); 
    ?>
            <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php } 
    } 
    ?>
</div>