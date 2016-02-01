<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<title><?php bloginfo('title'); ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href='<?php bloginfo('template_directory'); ?>/css/main.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
 	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,100' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Play:700' rel='stylesheet' type='text/css'>
  <?php wp_head(); ?>
</head>
<body>

<nav id="top-bar">
	<div class="container">
		<?php wp_nav_menu( array('menu' => 'Top Menu' )); ?>
	</div>
</nav>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="https://static.wixstatic.com/media/e39ef0_2b1d26ab85c242e3bf7c20a9ab82f24e.png/v1/fill/w_398,h_52,al_c,usm_0.50_1.20_0.00/e39ef0_2b1d26ab85c242e3bf7c20a9ab82f24e.png" alt=""></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php 
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
    ?>
    </div>
  </div>
</nav> <!-- end main-nav -->

<section id="breaking_news">
  <div class="container">
    <h2 class="hide">Bottom Nav Bar</h2>
      <div class="row">
          <div class="col-md-4">
              <p><a href="<?php echo the_field('breaking_news_url', 'option'); ?>"><?php echo the_field('breaking_news', 'option'); ?></a></p>
          </div>
      </div>
  </div>
</section> <!-- end breaking news -->

<div class="sticky-container">
  <ul class="sticky">
    <li> 
      <img width="32" height="32" title="" alt="" src="http://www.iconarchive.com/download/i98450/dakirby309/simply-styled/TeamSpeak.ico" />
      <div id="ts3viewer_994184" style="width:; background-color:;"> </div>
      <script type="text/javascript" src="https://static.tsviewer.com/short_expire/js/ts3viewer_loader.js"></script>
      <script type="text/javascript">
      <!--
      var ts3v_url_1 = "https://www.tsviewer.com/ts3viewer.php?ID=994184&text=ffffff&text_size=12&text_family=1&js=1&text_s_color=ffffff&text_s_weight=bold&text_s_style=normal&text_s_variant=normal&text_s_decoration=none&text_s_color_h=22e000&text_s_weight_h=normal&text_s_style_h=italic&text_s_variant_h=normal&text_s_decoration_h=none&text_i_color=ffffff&text_i_weight=normal&text_i_style=normal&text_i_variant=normal&text_i_decoration=none&text_i_color_h=22e000&text_i_weight_h=normal&text_i_style_h=normal&text_i_variant_h=normal&text_i_decoration_h=none&text_c_color=ffffff&text_c_weight=normal&text_c_style=normal&text_c_variant=normal&text_c_decoration=none&text_c_color_h=22e000&text_c_weight_h=normal&text_c_style_h=normal&text_c_variant_h=normal&text_c_decoration_h=none&text_u_color=22e000&text_u_weight=normal&text_u_style=italic&text_u_variant=normal&text_u_decoration=none&text_u_color_h=ffffff&text_u_weight_h=normal&text_u_style_h=italic&text_u_variant_h=normal&text_u_decoration_h=none";
      ts3v_display.init(ts3v_url_1, 994184, 100);
      -->
      </script>
    </li>

    <li> 
      <img width="32" height="32" title="" alt="" src="http://www.unh.edu/health-services/sites/unh.edu.health-services/files/media/images/SocialIcons/Facebook.png" />
      <p>Facebook Info!</p>
    </li>

</ul>

</div>
