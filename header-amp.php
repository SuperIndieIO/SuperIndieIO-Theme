<?php ?>
<!DOCTYPE html>
<!--

  ____  _   _ ____  _____ ____  ___ _   _ ____ ___ _____   ___ ___  
 / ___|| | | |  _ \| ____|  _ \|_ _| \ | |  _ \_ _| ____| |_ _/ _ \ 
 \___ \| | | | |_) |  _| | |_) || ||  \| | | | | ||  _|    | | | | |
  ___) | |_| |  __/| |___|  _ < | || |\  | |_| | || |___ _ | | |_| |
 |____/ \___/|_|   |_____|_| \_\___|_| \_|____/___|_____(_)___\___/                                                                  

-->
<html amp lang="en">
<head>
    
    <!--AMP Information-->
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-font" src="https://cdn.ampproject.org/v0/amp-font-0.1.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>

    <!--Styles-->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"> 
    <meta name='theme-color' content='#00796B' />
    <link rel="canonical" href='<?php echo get_the_permalink(); ?>'>
    
    <style amp-custom>
        /* any custom style goes here */
        body {
            background-color: #E0F2F1;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Roboto';
        }
        p, a {
            font-family: 'Open Sans', sans-serif;
        }
        a {
            height: 0;
            text-decoration: none;
            color: #484848;
        }
        #SI-AMPHeader > img {
            margin: 8px auto;
            background-color: #00796B;
        }
        #SI-AMPHeader-IMG {
            margin: 8px 8px 3px 8px;
        }
        #SI-PostBody {
            margin: 0 16px;
        }
        #SI-PostHeadline {
            margin: 16px 0;
            color: #484848;
            font-weight: 900;
        }
        #SI-PostSubHeadline {
            margin: 8px 0;
            color: #757575;
            font-size: 20px;
            font-weight: 700;
            font-style: italic;
        }
        #SI-PostAuthor {
            margin: 16px 0;
            padding: 6px 0;
            border-top: #757575 1px solid;
            border-bottom: #757575 1px solid;
            font-weight: 600;
        }
        #SI-PostAuthor > a {
            color: #484848;
            text-decoration: none;
            }
        #SI-PostDate {
            margin: 0;
            color: #484848;
            float: right;
        }
        #SI-BodyText {
            color: #484848;
            font-weight: 400;
        }
        #SI-PostSocialMedia {
            display: inline-block;
            padding: 8px 0 1px 0;
            margin: 0 0 16px 0;
            width: 100%;
            border-top: #484848 1px solid;
            border-bottom: #484848 1px solid;
            text-align: center;
            }
        .SI-RelatedCategoryIMG {
            border-radius: 4px;
        }
        .SI-RelatedCategoryText {
            margin: 8px 0 16px 0;
            color: #757575;
            font-size: 20px;
            font-weight: 700;
            
        }
        /*Footer IDs */
        #SI-FooterLogo {
            display: block;
            margin: 8px auto;
            }
        #SI-FooterInfo {
            display: table;
            margin: 8px auto;
            }
        #SI-FooterInfo > a {
            display: inline-table;
            margin: 0 8px;
            color: #484848;
            text-decoration: none;
            font-family: 'Open Sans', sans-serif;
            }
        #SI-FooterSocialIcons {
            display: inline-block;
            padding: 8px 0 1px 0;
            width: 100%;
            text-align: center;
            }
        .header-logo {
            margin: 16px auto;
            display: block;
        }
        .featured-image {
            margin: 0 8px;
            border-radius: 4px;
        }
        /*Social Media Classes*/
        .social-image {
            display: inline-block;
            width: 32px;
            height: 32px;
            margin: 0 6px;
            }
        .social-image-follow {
            display: inline-block;
            width: 24px;
            height: 24px;
            margin: 0 6px;
            border-radius: 50%;
            }

    </style>
    
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
</head>