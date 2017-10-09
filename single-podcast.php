<?php /*
Template Name: Podcast Template
Template Post Type: post
*/
get_header('post');
?>
<body>
    <!--Header logo for SuperIndieIO-->
    <header>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <img id='SI-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieLargeLong.png' />
            <img id='SI-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieSmallLong.png' />
        </a>
    </header>
    
    
    
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