<?php get_header('post'); ?>
<body>
    <header>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
            <img id='SI-LogoLarge' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOLogo.png' />
            <img id='SI-LogoSmall' src='<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOSmallLogo.png' />
        </a>
    </header>
    <main>
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-large' ); ?>
        
        <div id='SI-Page'>
                <img id='SI-PageImage' src='<?php echo $thumb[0] ?>' />
        
            <h1 id='SI-PageHeadline'><?php echo get_the_title(); ?></h1>

             <div id='SI-PageBodyText'><?php the_content(); ?></div></div>
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

        
    </span>
</body>