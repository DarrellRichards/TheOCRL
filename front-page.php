<?php get_header(); ?>
<div id="homeMainBanner">
    <div class="container">
    	<div class="row" id="homeNewsSection">
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
		        	<!-- <iframe width="100%" height="100%" src="http://theocrl.info/recent.php" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$d8732.1.$comp-ihihy9ut.1.$comp-ih8id5pn2.0.0"></iframe>
		        --> </div>
	        </div>
	    </div> 
    </div>
</div> <!-- end homepage main banner -->
<div id="latestNews">
	<div class="container">
		<div class="row">
        	
            <div class="col-md-2" id="nextEventTitles">	
            	<h5>LATEST</h5>
                <h6>HEADLINES</h6>
                <h4><a href="/news" class="view_more">View All</a></h4>
            </div>
           <div class="col-md-10">	
           		<div class="row">
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
					<div class="col-md-3 latest_post">
						<div class="title_news">
		            		<p><?php the_title(); ?></p>
		            		<a href="<?php the_permalink(); ?>">Read More</a>
		            	</div>
					</div>
					<?php
						}
						} else {	
						}
						wp_reset_postdata();
					?>
           		</div>
            </div>
        </div>
	</div>            
</div> <!-- end latest news -->
<div class="lastest_races clearfix">
  <div class="container">
  	<div class="row">
  		<div class="col-md-7">
  			<div class="race_recap">
  				<?php the_field('latest_race_video'); ?>
  			</div>
  		</div>
  		<div class="col-md-5">
  			<div class="latest_race_info">
  				<h4>2015 WINTER SERIES RACE RECAP & CONTINGENCY AWARDS</h4>
  				<div class="row">
  					<div class="col-md-6">
  						<p>Race Winner</p>
  						<p class="styled"><?php the_field('latest_race_winner'); ?></p>
  						<p>Coors' Light Pole</p>
  						<p class="styled"><?php the_field('latest_race_polesitter'); ?></p>
  						<p>3M Lap Leader</p>
  						<p class="styled"><?php the_field('latest_lap_leader'); ?></p>
  						<p>Fastest Lap</p>
  						<p class="styled"><?php the_field('latest_fast_lap'); ?></p>
  					</div>
  					<div class="col-md-6" id="race_bottom">
  						<p>Race Duration</p>
  						<p class="styled"><?php the_field('latest_race_duration'); ?></p>
  						<p>Race Leaders/Lead Changes</p>
  						<p class="styled"><?php the_field('latest_race_leaders'); ?></p>
  						<p># of Cautions</p>
  						<p class="styled"><?php the_field('race_cautions'); ?></p>
  						<button href="<?php the_field('latest_race_results'); ?>" target="_blank" class="RaceResults">See Race Results</button>
  					</div>
				</div>
  			</div>
  		</div>
  	</div>
  </div> 	
</div> <!-- end latest races information -->
<div id="driver_resources">
	<div class="container">
		<div class="row">
	    	<div class="col-md-12">
	        	<h1><a href="/about">DRIVER RESOURCES</a></h1>
	        </div>
    	</div>
	</div>
</div> <!-- end driver resources -->
<?php get_footer(); ?>