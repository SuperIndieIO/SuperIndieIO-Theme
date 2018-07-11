<?php ?>
<!DOCTYPE html>
<!--

  ____  _   _ ____  _____ ____  ___ _   _ ____ ___ _____   ___ ___  
 / ___|| | | |  _ \| ____|  _ \|_ _| \ | |  _ \_ _| ____| |_ _/ _ \ 
 \___ \| | | | |_) |  _| | |_) || ||  \| | | | | ||  _|    | | | | |
  ___) | |_| |  __/| |___|  _ < | || |\  | |_| | || |___ _ | | |_| |
 |____/ \___/|_|   |_____|_| \_\___|_| \_|____/___|_____(_)___\___/                                                                  

-->
<head>
    
    <!--Styles-->
    <link rel="stylesheet"  type="text/css" href='<?php echo get_template_directory_uri(); ?>/style-post.css'/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel='canonical' href='<?php echo get_the_permalink(); ?>' />
    <link rel='amphtml' href='<?php echo get_the_permalink(); ?>/amp/' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <meta name='viewport' content='initial-scale=1'/>   
    <meta name='theme-color' content='#00796B' />
    
    <!--Meta Info-->
    <?php the_post(); ?><!--Gather Post Excerpt Information for Meta Tags-->  
    <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-large' ); ?>
    <title><?php echo get_the_title(); ?> | SuperIndieIO</title>
    <meta name='description' content='<?php echo(get_the_excerpt()); ?>'>
	 <meta name='section' content='<?php $catList = ''; foreach((get_the_category()) as $cat) { $catID = get_cat_ID( $cat->cat_name ); if(!empty($catList)) { $catList .= ', '; } $catList .= $cat->cat_name; } echo $catList; ?>'>
    <meta name='keywords' content='<?php $my_tags = get_the_tags(); if ( $my_tags ) { foreach ( $my_tags as $tag ) { $tag_names[] = $tag->name; } echo implode( ', ', $tag_names ); }?>'>
    <meta name='language' content='english'>
    
    <!--Facebook Meta Info-->
	<meta property='og:type' content='article'/>
	<meta property='og:title' content='<?php echo get_the_title(); ?>'/>
	<meta property='og:url' content='<?php echo get_the_permalink(); ?>'/>
	<meta property='og:image' content='<?php echo $thumb[0] ?>'/>
	<meta property='og:description' content='<?php get_the_excerpt(); ?>'/>

    <!--Twitter Meta Info-->
	<meta name='twitter:card' content='summary_large_image'>
	<meta name='twitter:url' content='<?php echo get_the_permalink(); ?>'>
	<meta name='twitter:title' content='<?php echo get_the_title(); ?>'>
	<meta name='twitter:image' content='<?php echo $thumb[0] ?>'>
	<meta name='twitter:description' content='<?php echo strip_tags(get_the_excerpt($post->ID)); ?>'>
    
    <!--Adsense Code-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	<!--Schema.org JSON Markup-->
	<script type="application/ld+json">
	{
	  "@context" : "http://schema.org",
	  "@type" : "Article",
	  "headline" : "<?php echo get_the_title(); ?>",
	  "description" : "<?php echo(get_the_excerpt()); ?>",
	  "author" : {
		"@type" : "Person",
		"name" : "<?php echo get_the_author_meta( 'user_nicename' ); ?>",
		"sameas" : "https://twitter.com/<?php the_author_meta( twitter ); ?>"
		},
	  "datePublished" : "<?php the_time("c"); ?>",
	  "dateModified" : "<?php the_modified_time("c"); ?>",
	  "image" : {
	  	"url" : "<?php echo $thumb[0] ?>",
	  	"width" : "1296",
		"height" : "720"
	  },
	  "articleSection" : "<?php echo $catList; ?>",
	  "keywords" : "<?php echo implode( ', ', $tag_names ); ?>",
	  "url" : "<?php echo get_the_permalink(); ?>",
	  "mainEntityOfPage" : {
         "@type": "WebPage",
         "@id": "<?php echo get_the_permalink(); ?>"
      	},
	  "publisher" : {
	  	"@type" : "Organization",
    	"name" : "SuperIndieIO",
		"url" : "https://superindie.io",
		"logo" : {
            "@type": "ImageObject",
            "name": "SuperIndieIO Logo",
            "width": "600",
            "height": "60",
            "url": "<?php echo get_template_directory_uri(); ?>/img/SuperIndieIOLogo.png"
        	},
		"sameas" : [
			"https://twitter.com/SuperIndieIO",
			"https://facebook.com/SuperIndieIO",
			"https://superindieio.tumblr.com"
  			]
		}
	}
	</script>
</head>