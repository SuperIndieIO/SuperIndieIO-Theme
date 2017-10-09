<?php get_header('amp'); ?>
<body>
    <!--Wordpress loop code-->
        <?php the_post(); ?>
        <?php $post = get_the_ID(); ?>
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-amp' ); ?>
        <?php $alt_text = get_post_meta($post->ID, '_wp_attachment_image_alt', true); ?>
    <!--Header logo for SuperIndieIO-->
    <header>
        <!--Header Image-->
        <div id='SI-AMPHeader'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
                <amp-img src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieSmallLong.png'  alt="SuperIndieIO Logo" height="30" width="300" class='header-logo'></amp-img>
            </a>
        </div>
        <!--Article Image-->
        <amp-img src='<?php echo $thumb[0] ?>' width="16" height="9" layout="responsive" class='featured-image'></amp-img>
    </header>
    <main>  
        
        <!--Article content-->
        <div id='SI-PostBody'>
            <h1 id='SI-PostHeadline' itemprop='headline'><?php echo get_the_title(); ?></h1>
            <h2 id='SI-PostSubHeadline'><?php echo(get_the_excerpt()); ?></h2>
            <div id='SI-PostAuthor' itemprop='author'><a href='<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>'><?php the_author(); ?></a> | <a href='https://www.twitter.com/<?php the_author_meta( twitter ); ?>'>@<?php the_author_meta( twitter ); ?></a> <p id='SI-PostDate' itemprop='datePublished'><?php the_time("M j, Y"); ?></p></div>
            
            <!--Adsense ATF Unit-->
            <amp-ad layout="responsive" width=320 height=50 type="adsense" data-ad-client="ca-pub-8642963533812241" data-ad-slot="4371418453">
            </amp-ad>
            
            <!--Article Text-->
            <div id='SI-PostBodyText'><?php the_content(); ?></div>
            
            <!--Adsense BTF Unit-->
            <amp-ad
                layout="responsive"
                width=320
                height=50
                type="adsense"
                data-ad-client="ca-pub-8642963533812241"
                data-ad-slot="2100478335">
            </amp-ad>
            
            <!--Analytics-->
            <amp-analytics type="googleanalytics">
            <script type="application/json">
            {
              "vars": {
                "account": "UA-78236714-1"
              },
              "triggers": {
                "trackPageview": {
                  "on": "visible",
                  "request": "pageview"
                }
              }
            }
            </script>
        </amp-analytics>
            
            <!--Category Related Articles-->
            <div id='SI-RelatedCategory'>
                <?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post), 'numberposts' => 3, 'post__not_in' => array($post), 'category__not_in' => 'featured' ) ); ?>
                <?php if( $related ) foreach( $related as $post ) {?>
                <?php $post = get_the_ID(); ?>
                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-medium' ); ?>
                    <a href='<?php echo get_the_permalink(); ?>'>
                        <amp-img class='SI-RelatedCategoryIMG' src='<?php echo $thumb[0] ?>' height='2' width='7' layout='responsive'></amp-img><h3 class='SI-RelatedCategoryText'><?php echo get_the_title(); ?></h3></a>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </main>
</body>
</html>