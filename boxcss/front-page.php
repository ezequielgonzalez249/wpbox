<?php get_header(); ?>
<?php require get_template_directory() . '/template-parts/nav.php'; ?>

<?php require get_template_directory() . '/template-parts/slideshow/slide1.php'; ?>

<div class="block-full h-full box-border text-center" style="height: 969px;">
    <div class="block">
        <h1>Call to action 100%</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt tenetur at quos, earum nisi dolor officia error fugiat, 
            quibusdam qui saepe odio veritatis voluptatibus vero necessitatibus cupiditate dignissimos totam alias?</p>
        <a href="#iconzone" class="bt dark-border">
            <span class="lnr lnr-arrow-down"></span>
        </a>
    </div>
</div>

<!--Icon Zone-->
<div class="block text-center margin-top margin-bottom" id="iconzone">
    <div class="grid grid col-3 med-col-3 lt-col-1">
        <div class="box-border">
            <span class="lnr lnr-magic-wand title-2"></span>
            <h3 class="uppercase title-5 margin-top">Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="bt dark-border">View more</a>
        </div>
        <div class="box-border">
            <span class="lnr lnr-film-play title-2"></span>
            <h3 class="uppercase title-5 margin-top">Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="bt dark-border">View more</a>
        </div>
        <div class="box-border">
            <span class="lnr lnr-store title-2"></span>
            <h3 class="uppercase title-5 margin-top">Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="bt dark-border">View more</a>
        </div>
    </div>
</div>
<!--End Icon Zone-->

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

<!--Call to Action-->
<div class="block text-center">
    <div class="box-border margin-top margin-bottom">
        <h1>Hello Text</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt tenetur at quos, earum nisi dolor officia error fugiat, 
            quibusdam qui saepe odio veritatis voluptatibus vero necessitatibus cupiditate dignissimos totam alias?</p>
        <div class="bt info">Enter Login</div>
    </div>
</div>
<!--End Call to Action-->


<?php get_footer(); ?>