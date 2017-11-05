<?php get_header('author'); ?>
<body>
    <header>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <img id='SI-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOLogo.png' />
            <img id='SI-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png' />
        </a>
    </header>
    <main>
        <div id='SI-MainAuthor'>
            <div id='SI-AuthorImage'><?php echo get_avatar( get_the_author_meta( 'ID' ), 256 ); ?></div>
            <h1 id='SI-AuthorName'><?php the_author(); ?></h1>
            <h2 id='SI-AuthorTitle'><?php the_author_meta( title ); ?> | <a href='https://twitter.com/<?php the_author_meta( twitter ); ?>'>@<?php the_author_meta( twitter ); ?></a></h2>
            <p id='SI-AuthorText'><?php echo the_author_meta('description'); ?></p>
        </div>
        <div id='SI-AuthorRecentArticles'>
            <!--Secondary Regular Posts-->
            <div id='SI-MainPosts'>
                <?php $args = array(
                   'author'        =>  $current_user->ID,
                   'post_type' => 'post',
                   'posts_per_page' => 9,
                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                   ); ?>
                <?php query_posts($args); ?>
                <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

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
            <div id='SI-PostNav'><?php numeric_posts_nav(); ?></div>
        </div>
    </main>
    <footer>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <img id='SI-FooterLogo' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png'/></a>
        <div id='SI-FooterSocialIcons'>
            <a href="http://twitter.com/superindieio" onclick="ga('send', 'event', 'Social Follow', 'Twitter Follow', 'Twitter', '1');" target='_blank'>
            <img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image-follow' /></a>

            <a href="http://facebook.com/superindieio" onclick="ga('send', 'event', 'Social Follow', 'Facebook Follow', 'Facebook', '1');" target='_blank'>
            <img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image-follow' /></a>

            <a href="https://tumblr.superindie.io" onclick="ga('send', 'event', 'Social Follow', 'Tumblr Follow', 'Tumblr', '1');" target='_blank'>
            <img src='<?php echo get_template_directory_uri(); ?>/social-icons/tumblr.svg' class='social-image-follow' /></a>

            <a href="https://www.youtube.com/channel/UC0hq2bUJYw7NN12pf_7HDCw" onclick="ga('send', 'event', 'Social Follow', 'Youtube Follow', 'Youtube', '1');" target='_blank'>
            <img src='<?php echo get_template_directory_uri(); ?>/social-icons/youtube.svg' class='social-image-follow' /></a>
        </div>
        
        <div id='SI-FooterInfo'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>about-us'>About Us</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>contact-us'>Contact Us</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy'>Privacy Policy</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>?s=search'>Search</a>
        </div>
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