<!--Nav-->
<div class="nav fixed-top">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        <div class="nav-title">
                <a href="/" id="logo-title">
                    <?php bloginfo('name'); ?>
                </a>
        </div>
    </div>

    <div class="nav-btn">
        <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>

    <div class="nav-links">
    <?php
        $primaryMenu = array(
            'theme_location'  => 'primary',
            'menu'            => '',
            'container'       => '',
            'container_class' => false,
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => 'primary-menu',
            'echo'            => false,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'depth'           => 0,
            'walker'          => ''
        );
        echo strip_tags( wp_nav_menu( $primaryMenu ), '<a>' );
    ?>
    </div>
</div>
<!--End Nav-->