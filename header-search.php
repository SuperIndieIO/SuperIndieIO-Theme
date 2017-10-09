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
    <link rel="stylesheet"  type="text/css" href='<?php echo get_template_directory_uri(); ?>/style-home.css'/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <meta name='viewport' content='initial-scale=1'/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <meta name='theme-color' content='#00796B' />
    
    <?php global $paged; ?>
    <!--Meta Info-->
    <title>SuperIndieIO - Page <?php echo $paged; ?> of Search</title>
    <meta name='description' content='Page <?php echo $paged; ?> of Search on SuperIndieIO'>
    <meta name='language' content='english'>
    
    <!--Facebook Meta Info-->
	<meta property='og:title' content='SuperIndieIO Page <?php echo $paged; ?> of Search'/>
	<meta property='og:type' content='website'/>
	<meta property='og:url' content='<?php echo get_the_permalink(); ?>'/>
	<meta property='og:description' content='Page <?php echo $paged; ?> of Search on SuperIndieIO'/>

    <!--Twitter Meta Info-->
	<meta name='twitter:card' content='summary'/>
	<meta name='twitter:url' content='<?php echo get_the_permalink(); ?> of Search'/>
	<meta name='twitter:title' content='SuperIndieIO Page <?php echo $paged; ?>'>
	<meta name='twitter:image' content='Page <?php echo $paged; ?> of Search on SuperIndieIO'>
    
    <!--Adsense Code-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
</head>