<?php get_header(); ?>
<div id="homeMainBanner">
    <div class="container">
    	<div class="row" id="homeNewsSection"><!--Open homeNewsSection-->
	        <div class="col-md-8">
	        	<div id="homeNewsMainLower">
	            	<img src="<?php echo the_field('banner_image'); ?>" alt="Main Banner Image">
	                <?php echo the_field('banner_text') ?>
	                <ul>
	                	<li><a href="<?php echo the_field('banner_race_results'); ?>"><span>|| </span>RACE RESULTS</a></li>
	                	<li><a href="<?php echo the_field('banner_race_results'); ?>"><span>|| </span>WINTER SERIES STANDINGS</a></li>
	                </ul>
	            </div>
	        </div>

	        <div class="col-md-4">
				<div id="nextEventBox">
					<ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="seriesChangeButton scs_title"><a href="#scs" aria-controls="scs" role="tab" data-toggle="tab"><img src="<?php bloginfo('template_directory'); ?>/images/ocrl.png" alt="" id="eventicon"></a></li>
					    <li role="presentation" class="seriesChangeButton cmlt_title"><a href="#cmlt" aria-controls="cmlt" role="tab" data-toggle="tab"><img src="<?php bloginfo('template_directory'); ?>/images/cmlts.png" alt="" id="eventicon"></a></li>
					</ul>
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="scs">
					    	<h2><?php echo the_field('sprint_cup_event'); ?></h2>
					    	<h3><?php echo the_field('sp_event_name'); ?></h3>
					    	<p id="nextDate"><?php echo the_field('sp_event_date'); ?></p>
				            <img src="<?php echo the_field('sp_track_info'); ?>" alt="Next Race logo" id="nextEventLogo">
				            <p id="racedetails"><a href="#">Race Details</a></p>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="cmlt">
					    	<h2><?php echo the_field('cmlt_event'); ?></h2>
					    	<h3><?php echo the_field('cmlt_event_name'); ?></h3>
					    	<p id="nextDate"><?php echo the_field('cmlt_event_date'); ?></p>
				            <img src="<?php echo the_field('cmlt_track_info'); ?>" alt="Next Race logo" id="nextEventLogo">    
				            <p id="racedetails"><a href="#">Race Details</a></p>
					    </div>
					  </div>
		        </div>
		        <div id="recentposts">
		        	<iframe width="100%" height="100%" src="http://theocrl.info/recent.php" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$d8732.1.$comp-ihihy9ut.1.$comp-ih8id5pn2.0.0"></iframe>
		        </div>
	        </div>
	    </div><!--Close homeNewsSection-->
    </div>
</div>

<div id="latestNews">
	<div class="container">
		<div class="row">
        	
            <div class="col-md-2" id="nextEventTitles">	
            	<h5>LATEST</h5>
                <h6>HEADLINES</h6>
                <h4><a href="/news" class="view_more">View All</a></h4>
            </div>
            <?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 4
					);
					$the_query = new WP_Query( $args );

					// The Loop
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
			?>
	            <div class="col-md-2 nextEventRaces">	
	            	<div class="title_news">
	            		<p><?php the_title(); ?></p>
	            		<a href="<?php the_permalink(); ?>">Read More</a>
	            	</div>
	            </div>
	        <?php
						}
					} else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				?>
        </div>
	</div>            
</div>

<div class="lastest_races clearfix">
  <div id="standings">
   		<img src="<?php bloginfo('template_directory'); ?>/images/ocrl_standings.png" alt="" />
  		<div class="series_upcoming">
  			<h4>Series Information</h4>
  			<p class="p_1">Practice #1: Wednesday Nights at 7:00p ET</p>
  			<p class="p_2">Raceday Practice: Thursday Nights at 8:00p ET</p>
  			<p class="qual">Qualifying: 8:50p ET (10 Minutes)</p>
  		</div>
  		<div class="seasonstandings">
  			<iframe width="100%" height="100%" src="http://www.theocrl.com.usrfiles.com/html/e39ef0_5796ccd4e08c5ce7047b6f643b5f98da.html" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$d8732.1.$comp-ihihy9ut.1.$comp-ihliy5ja.6.$comp-ihlfpzy1.0.0"></iframe>
  		</div>
  		<div class="raceresults">
  			<iframe width="100%" height="100%" src="http://www.theocrl.com.usrfiles.com/html/e39ef0_5796ccd4e08c5ce7047b6f643b5f98da.html" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$d8732.1.$comp-ihihy9ut.1.$comp-ihliy5ja.6.$comp-ihlfpzy1.0.0"></iframe>
  		</div>
  </div> 
  <div id="cmltsstandings">
   		<img src="<?php bloginfo('template_directory'); ?>/images/cmlts_standings.png" alt="" />
  		<div class="series_upcoming">
  			<h4>Series Information</h4>
  			<p class="p_2">Raceday Practice: Tuesday Nights at 7:30p ET</p>
  			<p class="qual">Qualifying: 8:50p ET (10 Minutes)</p>
  		</div>
  		<div class="seasonstandings">
  			<iframe width="100%" height="100%" src="http://www.theocrl.com.usrfiles.com/html/e39ef0_5796ccd4e08c5ce7047b6f643b5f98da.html" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$d8732.1.$comp-ihihy9ut.1.$comp-ihliy5ja.6.$comp-ihlfpzy1.0.0"></iframe>
  		</div>
  		<div class="raceresults">
  			<iframe width="100%" height="100%" src="http://www.theocrl.com.usrfiles.com/html/e39ef0_5796ccd4e08c5ce7047b6f643b5f98da.html" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$d8732.1.$comp-ihihy9ut.1.$comp-ihliy5ja.6.$comp-ihlfpzy1.0.0"></iframe>
  		</div>
  </div> 	
</div>

<div id="driver_resources"><!--Open homeAboutSection-->
	<div class="container">
		<div class="row">
	    	<div class="col-md-12">
	        	<h1><a href="/about">DRIVER RESOURCES</a></h1>
	        </div>
    	</div>
	</div>
</div>
<?php get_footer(); ?>