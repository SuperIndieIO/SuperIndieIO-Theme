<?php get_header('category'); ?>
<body>
    <header>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <img id='SI-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieLargeLong.png' />
            <img id='SI-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieSmallLong.png' />
        </a>
    </header>
    <main>
        
        <!--Secondary Featured Post-->
        <div id='SI-MainPosts'>
            <?php $c = 0 ?>
            <?php wp_reset_query(); ?>
            <?php global $wp_query, $paged; $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $query = new WP_Query( ); ?>
            <?php if ( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query>the_post(); ?>
            <?php if( $post->ID == $primary ) {continue;} ?>
            <?php if( $post->ID == $secondary ) {continue;} ?>
            <?php $c++ ?>

            <?php $post = get_the_ID(); ?>   
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-small' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
            <div class='SI-PostSmall <?php if ( $c % 2 !== 0 ) {echo 'post-left';} else {echo 'post-right';} ?> img-background' style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.65) 100%), url("<?php echo $thumb[0] ?>'>
                <div class='SI-PostSmallText'>
                    <h2 class='SI-PostSmallHeadline'><?php echo get_the_title(); ?></h2>    
                    <h3 class='SI-PostSmallSubHeadline'><?php echo(get_the_excerpt()); ?></h3>
                </div>
            </div>
            </a>
            <?php endwhile ?>
            <?php endif ?>
            <div id='SI-PostNav'>
            	<?php numeric_posts_nav(); ?>
            </div>
        </div>
        
        
        <aside>
            <h6 class='SI-SidebarSectionTitle'>Featured</h6>
            <div class='SI-Sidebar'>
            <?php wp_reset_query(); ?>
            <?php query_posts('showposts=2&category_name=Featured&offset=2'); ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php $post = get_the_ID(); ?>   
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-small' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
                <div class='SI-SidebarSection img-background' style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.65) 100%), url("<?php echo $thumb[0] ?>");'><h3 class='SI-PostSmallText'><?php echo get_the_title(); ?></h3></div></a>
            <?php endwhile ?>
            </div>
            <div class='SI-SidebarOther'>
            <!-- SuperIndieIO-MidSidebar -->
            <ins class="adsbygoogle"
                 style="display:block;"
                 data-ad-client="ca-pub-8642963533812241"
                 data-ad-slot="9255933616"
                 data-ad-format="rectangle, horizontal"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
            <h6 class='SI-SidebarSectionTitle'>Recent News</h6>
            <div class='SI-Sidebar'>
                <?php wp_reset_query(); ?>
                <?php query_posts('showposts=2&category_name=News'); ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php $post = get_the_ID(); ?>   
                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'sidebar-image' ); ?>
                <a href='<?php echo get_the_permalink(); ?>'>
                    <div class='SI-SidebarSection img-background' style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.65) 100%), url("<?php echo $thumb[0] ?>");'><h3 class='SI-PostSmallText'><?php echo get_the_title(); ?></h3></div></a>
                <?php endwhile ?>
            </div>
<div class='SI-SidebarOther'>
                <!-- SuperIndieIO-BottomSidebar -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-8642963533812241"
                     data-ad-slot="1890457218"
                     data-ad-format="rectangle, horizontal"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </aside>
    </main>
    <?php get_footer('home'); ?>
</body>