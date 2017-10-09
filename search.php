<?php get_header('search'); ?>
<body>
    <header>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <img id='SI-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOLogo.png' />
            <img id='SI-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png' />
        </a>
    </header>
    <main>
        
        <span id='SI-SearchBar'>
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div>
                <label class="screen-reader-text" for="s"></label>
                <input type="submit" id="searchsubmit" value="Search" />
                <input type="text" value="" name="s" id="s" />
                </div>
            </form>
        </span>
        <!--Secondary Regular Posts-->
        <div id='SI-MainPosts'>
            <?php wp_reset_query(); ?>
            <?php global $wp_query, $paged; $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $query = new WP_Query( ); ?>
            <?php if ( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query>the_post(); ?>

            <?php $post = get_the_ID(); ?>   
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-small' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
            <div class='SI-PostSmall img-background' style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0.25) 50%, rgba(0, 0, 0, 1) 100%), url("<?php echo $thumb[0] ?>'>
                <div class='SI-PostSmallText'>
                    <h2 class='SI-PostSmallHeadline'><?php echo get_the_title(); ?></h2>    
                    <h3 class='SI-PostSmallSubHeadline'><?php echo(get_the_excerpt()); ?></h3>
                </div>
            </div>
            </a>
            <?php endwhile ?>
            <?php endif ?>
            
        </div>
        <div id='SI-PostNav'>
            	<?php numeric_posts_nav(); ?>
            </div>
    </main>
    <footer>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'><img id='SI-FooterLogo' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png'/></a>
        <div id='SI-FooterInfo'><a href='<?php echo esc_url( home_url( '/' ) ); ?>about-us'>About Us</a><a href='<?php echo esc_url( home_url( '/' ) ); ?>contact-us'>Contact Us</a><a href='<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy'>Privacy Policy</a><a href='<?php echo esc_url( home_url( '/' ) ); ?>?s=search'>Search</a></div>
    </footer>
    <span>
        <!--Google Analytics-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-78236714-1', 'auto');
          ga('send', 'pageview');

        </script>
    </span>
</body>