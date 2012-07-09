<?php print $doctype; ?>
<?php
$html_attributes = "lang=\"{$language->language}\"";
?>
  <!--[if IE 7 ]><html <?php print $html_attributes; ?> class="no-js ie7"><![endif]-->
  <!--[if IE 8 ]><html <?php print $html_attributes; ?> class="no-js ie8"><![endif]-->
  <!--[if IE 9 ]><html <?php print $html_attributes; ?> class="no-js ie9"><![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--><html <?php print $html_attributes; ?> class="no-js"><!--<![endif]-->
<head>
  <?php print $head; ?>
  <!--[if IE ]>
    <?php // Always force latest IE rendering engine (even in intranet) & Chrome Frame  ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <![endif]-->

  <?php // Mobile viewport optimized: j.mp/bplateviewport  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php // Prevent blocking  ?>
  <!--[if IE 6]><![endif]-->

  <title><?php print $head_title; ?></title>

  <?php print $styles; ?>
  <?php print $html5shim; ?>
  <?php print $scripts; ?>
    <!--[if lte IE 6]><style type="text/css" media="all">@import "<?php drupal_get_path('theme', 'brutus_core'); ?>/css/ie/ie6.css"</style><![endif]-->
    <!--[if IE 7]><style type="text/css" media="all">@import "<?php print drupal_get_path('theme', 'brutus_core'); ?>/css/ie/ie7.css"</style><![endif]-->
    <!--[if IE 8]><style type="text/css" media="all">@import "<?php drupal_get_path('theme', 'brutus_core'); ?>/css/ie/ie8.css"</style><![endif]-->
    <!--[if IE 9]><style type="text/css" media="all">@import "<?php drupal_get_path('theme', 'brutus_core'); ?>/css/ie/ie9.css"</style><![endif]-->
</head>

  <body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?>">
    <div id="skip"><a href="#content"><?php print t('Skip to Content'); ?></a> <a href="#navigation"><?php print t('Skip to Navigation'); ?></a></div>  
    
    <!-- HEADER TOP -->
    <?php if ($header_top): ?>
	    <div id="header-top">
	    		<div id="header-top-wrapper">
		    		<div id="header-top-inner">
		    			<?php print $header_top; ?>
		    		</div><!-- /header-inner -->
		    	</div><!-- /header-top-wapper -->
	    </div><!-- /header-top (full screen) -->
    <?php endif; ?>
    
    <div id="page">

    <!-- HEADER -->

    <div id="header">

      <div id="logo-title">
	
       <?php if (!empty($logo)): ?>
        <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
          </a>
        <?php endif; ?>

        <div id="name-and-slogan">
          <?php if (!empty($site_name)): ?>
            <h1 id="site-name">
              <a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
          <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /name-and-slogan -->

      </div> <!-- /logo-title -->

      <?php if ($header): ?>
        <div id="header-region">
          <?php print $header; ?>
        </div>
      <?php endif; ?>

      <?php print $search_box; ?>

    </div> <!-- /header -->

    <?php if (!empty($primary_links) || !empty($secondary_links)): ?>
      <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
        <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
        <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
      </div> <!-- /navigation -->
    <?php endif; ?>
    <?php print $highlighted; ?>
    <?php print $breadcrumb; ?>

    <!-- MAIN -->

    <div id="main" class="clearfix">
    
      <div id="content">
        <div id="content-inner" class="inner column center">

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

          <?php if ($title || $mission || $messages || $help || $tabs): ?>
            <div id="content-header">


              <?php if ($title): ?>
                <h2 class="title"><?php print $title; ?></h2>
              <?php endif; ?>

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?> 

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <?php print $node_col_left; ?>
            <?php print $content; ?>
            <?php print $node_col_right; ?>
          </div> <!-- /#content-area -->

          <?php print $feed_icons; ?>

          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>

          </div>
        </div> <!-- /content-inner /content -->

        <?php if ($sidebar_first): ?>
          <div id="sidebar-first" class="column sidebar first">
            <div id="sidebar-first-inner" class="inner">
              <?php print $sidebar_first; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-first -->

        <?php if ($sidebar_second): ?>
          <div id="sidebar-second" class="column sidebar second last">
            <div id="sidebar-second-inner" class="inner">
              <?php print $sidebar_second; ?>
            </div>
          </div>
        <?php endif; ?> <!-- /sidebar-second -->

      </div> <!-- /main -->

      <!-- FOOTER -->

      <?php if(!empty($footer_message) || !empty($footer)): ?>
        <div id="footer">
          <?php print $footer_message; ?>
          <?php print $footer; ?>
        </div> <!-- /footer -->
      <?php endif; ?>

    </div> <!-- /page -->
          
      <!-- FOOTER BOTTOM -->
    <?php if ($footer_bottom): ?>
	    <div id="footer-bottom">
	    		<div id="footer-bottom-wrapper">
		    		<div id="footer-bottom-inner">
		    			<?php print $footer_bottom; ?>
		    		</div><!-- /footer-bottom-inner -->
		    	</div><!-- /footer-bottom-wapper -->
	    </div><!-- /footer-bottom (full screen) -->
    <?php endif; ?>
    <?php print $closure; ?>
  </body>
</html>
