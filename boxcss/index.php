<?php get_header(); ?>
<?php require get_template_directory() . '/template-parts/nav.php'; ?>
<!--Archive blog-->
<div class="block">
    <div class="grid col-3 med-col-3 lt-col-1">
        <!-- Start the Loop. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="box-border">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-border', 'title' => 'Feature image']); ?>
                <?php the_content(); ?>
                <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                <a href="<?php the_permalink() ?>" class="bt dark-border">View More</a>
            </div>
        <?php endwhile; else : ?>
        </div>
</div>
<div class="block">
         <div class="grid col-1 med-col-1 lt-col-1">
            <div class="box-border">
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            </div>
        </div>
<?php endif; ?>
</div>

<!--End archive blog-->
<?php get_footer(); ?>