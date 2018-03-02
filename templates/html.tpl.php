<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="keywords" content="lfglobaltrade, Global Leaders By Trade"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Open Graph data -->
    <meta property="og:title" content="Global Leaders By Trade" />
    <meta property="og:site_name" content="lfglobaltrade | LFGT"/>
    <meta property="og:url" content="http://lfglobaltrade.com/" /> <!-- Update to final URL after migration -->
    <meta property="og:description" content="LFGT Description" />
    <meta property="fb:app_id" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image"  content="" />

    <!-- Twitter Card data! -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@lfglobaltrade">
    <meta name="twitter:title" content="Global Leaders By Trade">
    <meta name="twitter:description" content="LFGT Description">
    <meta name="twitter:creator" content="@lfglobaltrade">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <!-- <meta name="twitter:image" content="http://agentsofchangesummit.com/sites/all/themes/agents_of_change/images/1200x628.png"> -->

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="lfglobaltrade | LFGT">
    <meta itemprop="description" content="LFGT Description">
    <!-- <meta itemprop="image" content="http://aocsummit.org/sites/all/themes/agents_of_change/images/1200x628.png"> -->
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <?php print $scripts; ?>
  
    <!-- Facebook Pixel Code -->
      <!-- <script>
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','//connect.facebook.net/en_US/fbevents.js');

      fbq('init', '1655272954754605');
      fbq('track', 'PageView');
      function registerNowClick() {
      fbq('track', 'CompleteRegistration');
      };
      function registerStartClick() {
      fbq('track', 'Purchase');
      };
      function stayConnected() {
      fbq('track', 'AddToWishlist');
      }
      </script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1655272954754605&ev=PageView&noscript=1"
      /></noscript> -->

    <!-- End Facebook Pixel Code -->

    <!-- Twitter Pixel Code -->

    <!-- End Twitter Pixel Code -->

    <!-- Google Analytics -->

     <!--End Google Analytics -->
</head>

<?php

$pageString = drupal_get_path_alias(current_path());
drupal_strip_dangerous_protocols($pageString);
$htmlpaths1 = explode("/", $pageString);
$xssStop = array("script", "php", "<", ">", "'", '"', ";", ")", "(");
$htmlpaths = str_replace($xssStop, "", $htmlpaths1);

if (count($htmlpaths) === 1) {
    $aliasClass = $htmlpaths[0] . '-page';
    check_plain($aliasClass);
} elseif (count($htmlpaths) > 1) {
    $lastClass = end($htmlpaths);
    check_plain($lastClass);
    $lastClass =  $lastClass . '-page';
    reset($htmlpaths);
    array_pop($htmlpaths);
    foreach ($htmlpaths as &$categoryClass) {
        check_plain($categoryClass);
        $categoryClass = $categoryClass . '-category';
        //$catItems = array($categoryClass);
    }
    $aliasClass =  $categoryClass . ' ' . $lastClass;
}
?>


<body class="<?php print $classes; ?> <?php print $aliasClass; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

  <!-- <a href="https://plus.google.com/105511582714369828390" rel="publisher"></a> -->

  <?php
  /*
   * BEGIN ANDY G STUFF
   */
  ?>
  <style type="text/css">
	.speakers-page div.image{
		position:relative;
	}
	.speakers-page div.image .bio-button{
		display:none;
		position: absolute;
		bottom: 10px;
		left: 96px;
	}
	.speakers-page div.image:hover .bio-button{
		display:block;
	}
	  .popover-content{
		  font-size:14px;
		  color:#000;
	  }

  </style>

  <script>
(function($) {
  $(document).ready(function() {
    $('[data-toggle=popover]').popover();



  });
})(jQuery);
  </script>
  <!-- Place directly after body tag on every page -->

  <!-- FB App ID -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '',
        xfbml      : true,
        version    : 'v2.4'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>
  
	<!-- Sticky Footer -->
	<script type="text/javascript">
	(function($){
		function positionRegistration() {

      var windowWidth = $(window).width();

			// height of the document (total height)
			var d = $(document).height();
		
			// height of the window (visible page)
			var w = $(window).height();
		
			// scroll level
			var s = $(this).scrollTop();


			// bottom bound - or the width of your 'big footer'
      var bottomBound = $('footer').outerHeight();


			// are we beneath the bottom bound?
			if(windowWidth > 992 && d - (w + s) < bottomBound) {
				// if yes, start scrolling our own way, which is the
				// bottom bound minus where we are in the page
				$('#fixed').css({
					bottom: bottomBound - (d - (w + s))
				});
			} else {
				// if we're beneath the bottom bound, then anchor ourselves
				// to the bottom of the page in traditional footer style
				$('#fixed').css({
					bottom: 0
		    	});
			}
		};
		$('.panel').on('show.bs.collapse', function () {
			setTimeout(positionRegistration, 50);
		});
		$('.panel').on('shown.bs.collapse', function () {
			positionRegistration();
		});
		$('.panel').on('hide.bs.collapse', function () {
			setTimeout(positionRegistration, 50);
		});
		$('.panel').on('hidden.bs.collapse', function () {
			positionRegistration();
		});
		$(window).scroll(function(event) {
			positionRegistration();
		});
	})(jQuery);
	</script>
	<!-- End Sticky Footer -->
</body>
</html>
