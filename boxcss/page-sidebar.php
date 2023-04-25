<?php
/* Template Name: Page Sidebar */
get_header(); ?>
<?php require get_template_directory() . '/template-parts/nav.php'; ?>
<div class="block">
    <div class="grid col-3">
        <div class="box-border span-2 med-span-3">
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
        <div class="box-border span-1 med-span-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>