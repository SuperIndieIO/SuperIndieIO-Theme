<?php /*
Template Name: Video Template
Template Post Type: post
*/
get_header('post');
?>
<body>
    <!--Header logo for SuperIndieIO-->
    <header>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <img id='SI-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOLogo.png' />
            <img id='SI-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png' />
        </a>
    </header>
<span itemscope itemtype="http://schema.org/Article">
    <main>
        
        <!--Wordpress loop code-->
        <?php $post = get_the_ID(); ?>   
        <?php $primary = $post; ?>
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-full' ); ?>
        <?php $meta = get_post_meta( $post, 'Video', TRUE ); ?>
        
        <!--Article post-->
        <div id='SI-Post'>
            <!--Video Embed-->
            <div class='embed-container'>
             <?php echo $meta; ?>
            </div>
        </div>
        
        <!--Article content-->
        <div id='SI-PostBody'>
            <h1 id='SI-PostHeadline' itemprop='headline'><?php echo get_the_title(); ?></h1>
            <h2 id='SI-PostSubHeadline'><?php echo(get_the_excerpt()); ?></h2>
            <div id='SI-PostAuthor' itemprop='author'><a href='<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>'><?php the_author(); ?></a> | <a href='https://www.twitter.com/<?php the_author_meta( twitter ); ?>'>@<?php the_author_meta( twitter ); ?></a> <div id='SI-PostDate' itemprop='datePublished'><?php the_time("M j, Y"); ?></div></div>
            <div id='SI-PostBodyText' itemprop='articleBody'><?php the_content(); ?></div>
            
            <!--Social media sharing link-->
            <div id='SI-PostSocialMedia'>
            <a href="http://twitter.com/share" onclick="ga('send', 'event', 'Social Share', 'Twitter Share', 'Twitter', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image' /></a>
    
            <a href='https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>' onclick="ga('send', 'event', 'Social Share', 'Facebook Share', 'Facebook', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image'/></a>
    
            <a href='https://plus.google.com/share?url=<?php the_permalink(); ?>' onclick="ga('send', 'event', 'Social Share', 'Google Plus Share', 'Google', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/google_plus.svg' class='social-image'/></a>

            <a href='http://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_the_permalink(); ?>' onclick="ga('send', 'event', 'Social Share', 'Tumblr Share', 'Tumblr', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/tumblr.svg' class='social-image'/></a>

            <a href='http://www.reddit.com/submit?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>' onclick="ga('send', 'event', 'Social Share', 'Reddit Share', 'Reddit', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/reddit.svg' class='social-image'/></a>
            </div>
            
            <!--Category related articles-->
            <div id='SI-RelatedCategory'>
                <?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post), 'numberposts' => 3, 'post__not_in' => array($post), 'category__not_in' => 'featured' ) ); ?>
                <?php if( $related ) foreach( $related as $post ) {?>
                <?php $post = get_the_ID(); ?>
                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-small' ); ?>
                    <a href='<?php echo get_the_permalink(); ?>'>
                        <div class='SI-PostSmall img-background' style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.65) 100%), url("<?php echo $thumb[0] ?>");'><h3 class='SI-PostSmallText'><?php echo get_the_title(); ?></h3></div></a>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
        <aside>
        <!--Advertising-->
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
        <!--Tag related articles-->
        <div class='SI-Sidebar'>
            <?php wp_reset_query(); ?>
        <?php //for use in the loop, list 5 post titles related to first tag on current post
            $backup = $post;  // backup the current object
            $tags = wp_get_post_tags($post->ID);
            $tagIDs = array();
            if ($tags) {
                $tagcount = count($tags);
                for ($i = 0; $i < $tagcount; $i++) {
                    $tagIDs[$i] = $tags[$i]->term_id;
                }
                $args=array(
                    'tag__in' => $tagIDs,
                    'post__not_in' => array($post->ID),
                    'showposts'=>2,
                    'caller_get_posts'=>1
                );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'sidebar-image' ); ?>
            <a href='<?php echo get_the_permalink(); ?>'>
                <div class='SI-SidebarSection img-background' style='background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.65) 100%), url("<?php echo $thumb[0] ?>");'><h3 class='SI-PostSmallText'><?php echo get_the_title(); ?></h3></div></a>
             <?php endwhile;
                } else { ?><!--Put Something Here-->
            <?php }
            }
            $post = $backup;  // copy it back
            wp_reset_query(); // to use the original query again
            ?>
        </div>
        </aside>
    </main>
    <footer>
        <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <img id='SI-FooterLogo' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png'/>
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
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/twitter.svg' class='social-image-follow' /></a>
                
                <a href="http://facebook.com/superindieio" onclick="ga('send', 'event', 'Social Follow', 'Facebook Follow', 'Facebook', '1');" target='_blank'>
                <img src='<?php echo get_template_directory_uri(); ?>/social-icons/facebook.svg' class='social-image-follow' /></a>
                
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
</span>
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
        
        <!-- Quantcast Tag -->
        <script type="text/javascript">
			var _qevents = _qevents || [];

			(function() {
			var elem = document.createElement('script');
			elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
			elem.async = true;
			elem.type = "text/javascript";
			var scpt = document.getElementsByTagName('script')[0];
			scpt.parentNode.insertBefore(elem, scpt);
			})();

			_qevents.push({
			qacct:"p-f8xH8YBmV66Ap"
			});
		</script>

		<noscript>
		<div style="display:none;">
			<img src="//pixel.quantserve.com/pixel/p-f8xH8YBmV66Ap.gif" border="0" height="1" width="1" alt="Quantcast"/>
		</div>
		</noscript>
		<!-- End Quantcast tag -->
        
        <!--Load JQuery from CDN-->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
        <script>
        //Load Google Analytics Page Scrolling Events on Window Load
        $( document ).ready(function() {          
            //Content and Page Read Variables
            //Turns true when the viewport reaches the end of the content or document
            var ReadStart = false;
            var ContentRead = false;
            var PageRead = false;

            //Determing the amount of time the user spent reading and scrolling through the article
            var ReadTime = 0;
            var StartReadTime = 0;
            var FinishReadTime = 0;

            //Check the page title
            var PageTitle = document.title;
            ga('send', 'event', 'Reading', 'Article Load', PageTitle, 0, true);

            console.log(PageTitle);

            setInterval(function(FinishedReading)
            {
                //Set Page Variables
                var WindowBottom = $( window ).height() + $( window ).scrollTop(); //Check the height of the window and the distance to top beyond viewport
                var DocumentBottom = $( document ).height(); // Check the total height of the document
                var ContentBottom = $('#SI-PostBody').offset().top + $('#SI-PostBody').innerHeight(); //Check the distance to the top of the document from the content and the height of the content

                if( $( window ).scrollTop() > 0 && !ReadStart)
                {
                    StartReadTime = ReadTime;
                    ReadStart = true;
                    console.log('Started Reading at '+StartReadTime+' Seconds');
                    ga('send', 'event', 'Reading', 'Time Before Reading', PageTitle, StartReadTime);
                }

                //Check if the Window Has Reached the Bottom of the Content
                if( WindowBottom >= ContentBottom && !ContentRead)
                {
                    FinishReadTime = ReadTime - StartReadTime;
                    console.log('Finshed Reading Content. Total Time Spent Reading Content: '+FinishReadTime+' Seconds');
                    ga('send', 'event', 'Reading', 'Article Read', PageTitle, 0, true);
                    ga('send', 'event', 'Reading', 'Time Read', PageTitle, FinishReadTime, true);
                    ContentRead = true;
                }

                //Check if the window has Reached the Bottom of the Page
                if( WindowBottom >= DocumentBottom && !PageRead)
                {
                    console.log('Finished Reading Page');
                    ga('send', 'event', 'Reading', 'Page Read', PageTitle, 0, true);
                    PageRead = true;
                }

            }, 100);
        
            //Count the time read until page is comepletely read
            setInterval(function(AddTime)
            {
                if( !ContentRead || !PageRead)
                {
                    ReadTime += 1;
                    console.log('Total Time Spend Reading '+ReadTime);
                }
            }, 1000);

        });
        </script>
        <script src='<?php echo get_template_directory_uri(); ?>/js/advertising.js'></script>
        <script>
        //SuperIndiePublishing
        $( document ).ready(function() {
            if($.ads == undefined) {
                console.log("Ads are disabled");
                var dimensionValue = 'true';
                console.log('Ad Blocking is '+dimensionValue);
                ga('set', 'dimension1', dimensionValue);
            }
            else {
                console.log('Ads are enabled');
                var dimensionValue = 'false';
                console.log('Ad Blocking is '+dimensionValue);
                ga('set', 'dimension1', dimensionValue);
            }
        }); 
        </script>
    </span>
</body>