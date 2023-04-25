<?php get_header(); ?>
<?php require get_template_directory() . '/template-parts/nav.php'; ?>
<div class="block margin-top margin-bottom">
    <div class="grid">
        <div class="box-border">
            <?php 
                if ( have_posts() ) { 
                    while ( have_posts() ) {
                        the_post(); 
                        ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                    <?php } 
                } 
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>