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
                <amp-img src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png'  alt="SuperIndieIO Logo" height="30" width="300" class='header-logo'></amp-img>
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

            <?php echo $this->get( 'post_amp_content' ); // amphtml content; no kses ?>
            
            <!--Adsense BTF Unit-->
            <amp-ad
                layout="responsive"
                width=320
                height=50
                type="adsense"
                data-ad-client="ca-pub-8642963533812241"
                data-ad-slot="2100478335">
            </amp-ad>
            
            <!--Social media sharing link-->
                <div id='SI-PostSocialMedia'>
                <a href="http://twitter.com/share" onclick="ga('send', 'event', 'Social Share', 'Twitter Share', 'Twitter', '1');" target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image' /></a>

                <a href='https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>' onclick="ga('send', 'event', 'Social Share', 'Facebook Share', 'Facebook', '1');" target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image'/></a>

                <a href='https://plus.google.com/share?url=<?php the_permalink(); ?>' onclick="ga('send', 'event', 'Social Share', 'Google Plus Share', 'Google', '1');" target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/google_plus.svg' class='social-image'/></a>

                <a href='http://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_the_permalink(); ?>' onclick="ga('send', 'event', 'Social Share', 'Tumblr Share', 'Tumblr', '1');" target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/tumblr.svg' class='social-image'/></a>

                <a href='http://www.reddit.com/submit?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>' onclick="ga('send', 'event', 'Social Share', 'Reddit Share', 'Reddit', '1');" target='_blank'>
                    <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/reddit.svg' class='social-image'/></a>
                </div>
        </div>
    </main>
    <footer>
	<span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
		<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
			<amp-img id='SI-FooterLogo' alt="SuperIndieIO Logo" height="30" width="300" src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png'/>
			<meta itemprop="url" content='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png'/>
			<meta itemprop="width" content="300">
      		<meta itemprop="height" content="30">
		</div>
        <meta itemprop="name" content="SuperIndieIO"/>
		<meta itemprop='url' content='https://superindie.io'/>
        </a>
    </span>
        <div id='SI-FooterSocialIcons'>
                <a href="http://twitter.com/superindieio" onclick="ga('send', 'event', 'Social Follow', 'Twitter Follow', 'Twitter', '1');" target='_blank'>
                <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image-follow' /></a>
                
                <a href="http://facebook.com/superindieio" onclick="ga('send', 'event', 'Social Follow', 'Facebook Follow', 'Facebook', '1');" target='_blank'>
                <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image-follow' /></a>
                
                <a href="https://www.youtube.com/channel/UC0hq2bUJYw7NN12pf_7HDCw" onclick="ga('send', 'event', 'Social Follow', 'Youtube Follow', 'Youtube', '1');" target='_blank'>
                <amp-img src='<?php echo get_template_directory_uri(); ?>/social-icons/youtube.svg' class='social-image-follow' /></a>
            </div>
        
        <div id='SI-FooterInfo'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>about-us'>About Us</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>contact-us'>Contact Us</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy'>Privacy Policy</a>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>?s=search'>Search</a>
        </div>
    </footer>
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
</body>
</html>