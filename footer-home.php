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

<!--Scripts-->
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

    <!-- Quantcast Script Tag -->
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

    <!--Quantcast NoScript tag -->
    <noscript>
    <div style="display:none;">
        <img src="//pixel.quantserve.com/pixel/p-f8xH8YBmV66Ap.gif" border="0" height="1" width="1" alt="Quantcast"/>
    </div>
    </noscript>
    
    <!--Load JQuery from CDN-->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
    
    <!--Advertising Script-->
    <script src='<?php echo get_template_directory_uri(); ?>/js/advertising.js'></script>
    
    <!--Publishing Script-->
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