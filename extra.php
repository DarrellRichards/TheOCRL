<div id="mainImage"><!--Open Main Banner-->
	<div id="mainBannerImage">
		<img src="<?php echo the_field('banner_image'); ?>" alt="">
	</div>
	<div id="mainBannerText">
		<div class="container">
			<?php echo the_field('banner_text') ?>
        	<a href="<?php echo the_field('banner_race_results'); ?>">RACE RESULTS</a>
		</div>
	</div>
</div><!--Close Main Banner-->
<div id="homeBarUnderHead">
	<div class="container">
		<div class="row">
	    	<div class="col-md-5" id="homeBarUnderHeadLeft">
	        	<h3>CELEBRATING OUR TENTH YEAR</h3>
	            <h2>ONE OF THE LONGEST RUNNING LEAGUES</h2>
	            <p>UpperEdge has a rich history, one that we are very proud of.</p>
	        </div>
	        
	        <div class="col-md-7">
	        	<h3>A RICH HISTORY LIKE NO OTHER.</h3>
	            <h4>Tradition runs deep, and no other online sim racing league has a better sense of tradition than UpperEdge Racing. Over the last eight years, UpperEdge has established itself as one of the premiere racing leagues.</h4>
	        </div>
    	</div>
	</div>
</div>

<div id="homeTitleBar">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<section id="inTheNews">
				<div id="inTheNewsHome">
		        	<h3>IN THE NEWS:</h3>
		            <p><a href="/news">[ MORE NEWS ]</a></p>
            	</div>
            <div id="newsHomeSection">
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
            	<div class="newsBackColored">
                	<h3><?php the_title(); ?></h3>
                    <p><a href="<?php the_permalink(); ?>">MORE</a></p>
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
        </section>
		</div>
		<div class="col-md-4">
			<div id="nextEventHome">
	        	<h3>NEXT EVENT:</h3>
	            <p><a href="includes/3_Wide_Schedule.pdf" target="blank">[ FULL SCHEDULE ]</a></p>
            </div>
			<div id="nextEventBox">
				<ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="seriesChangeButton"><a href="#scs" aria-controls="scs" role="tab" data-toggle="tab">SCS</a></li>
				    <li role="presentation" class="seriesChangeButton"><a href="#cmlt" aria-controls="cmlt" role="tab" data-toggle="tab">CMLT</a></li>
				</ul>
				<div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="scs">
				    	<h2><?php echo the_field('sprint_cup_event'); ?></h2>
				    	<h3><?php echo the_field('sp_event_name'); ?></h3>
			            <img src="<?php echo the_field('sp_track_info'); ?>" alt="Next Race logo" id="nextEventLogo">
			            <p id="nextDate"><?php echo the_field('sp_event_date'); ?></p>
			            <p id="nextQualifying"><?php echo the_field('sp_qualifying'); ?></p>
			            <p id="nextGreen"><?php echo the_field('sp_green_flag'); ?></p>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="cmlt">
				    	<h2><?php echo the_field('cmlt_event'); ?></h2>
				    	<h3><?php echo the_field('cmlt_event_name'); ?></h3>
			            <img src="<?php echo the_field('cmlt_track_info'); ?>" alt="Next Race logo" id="nextEventLogo">
			            <p id="nextDate"><?php echo the_field('cmlt_event_date'); ?></p>
			            <p id="nextQualifying"><?php echo the_field('cmlt_qualifying'); ?></p>
			            <p id="nextGreen"><?php echo the_field('cmlt_green_flag'); ?></p>
				    </div>
				  </div>
	        </div>
		</div>
	</div>
</div>

<div class="lightGreyFullWidth">
    <section class="row" id="serviceCon"><!--open services container-->
	    <h2 class="hide">Services</h2>
	    <div class="small-12 medium-4 large-4 columns services">
	        <img src="https://web.archive.org/web/20160113022924/http://upperedgeracing.com/images/home_icon_RaceCenter.svg" alt="Race Center Live" class="icon">
	        <h2>RaceCenter LIVE</h2>
	        <h3>The Best Way to Watch</h3>
	        <p>With the all new RaceCenter LIVE you can watch UpperEdge events in style! With a built in stream and much more it has never been easier for fans to get involved.</p>
	        <a href="race-view.html">[ LAUNCH ]</a>
	    </div>
	    
	    <div class="small-12 medium-4 large-4 columns services">
	        <img src="https://web.archive.org/web/20160113022925/http://upperedgeracing.com/images/home_icon_partnership.svg" alt="Partnership" class="icon">
	        <h2>Partnership Information</h2>
	        <h3>Get Involved With UpperEdge</h3>
	        <p>Sponsorship packages, advertsing opportunities and pricing. Everything you need to know how easy it is get involved all in one easy to navigate location. Contact us today for even more info!</p>
	        <a href="partnership.html">[ LAUNCH ]</a>
	    </div>
	    
	    <div class="small-12 medium-4 large-4 columns services">
	        <img src="https://web.archive.org/web/20160113022925/http://upperedgeracing.com/images/home_icon_series.svg" alt="Series" class="icon">
	        <h2>Series Information</h2>
	        <h3>Learn About Each of Our Series</h3>
	        <p>UpperEdge races 3 top of the line series including the CMC Sportsman Series, The RoadLife Truck Series and the Thompson Photography Super Late Model Tour!</p>
	        <a href="seriesinfo.html">[ LAUNCH ]</a>
	    </div>
	</section><!--close services container-->
</div>

















<div id="homeNewsList">
	            <h1>LATEST MEDIA</h1>
	            <h2><a href="news-penalties-jan21.html">UpperEdge Hands Out Severe Penalties Following inTOXIKated Gaming 200</a></h2>
	        	<h2><a href="results_trucks_race2.html">#RiseOfTheJDRMY 135 Sets New Record for Most Trucks in a Race With 33</a></h2>
	            <h2><a href="results_sportsman_race1.html">Complete Results From the First Sportsman Series Points Race</a></h2>
	            <h2><a href="results_sportsman_race1.html">RoadLife 250 sets new UpperEdge Attendance Record With 35 Drivers</a></h2>
	            <h2><a href="news-2016a-schedules.html">2016a UpperEdge Official Racing Series Schedules Released</a></h2>
            </div>



                    	<div id="homeNewsList">
	            <h1 class="scs_title">SCS</h1>
	            	<div class="sprint_cup">
	            		<h3><?php echo the_field('sprint_cup_event'); ?></h3>
						<h4><?php echo the_field('sp_event_name'); ?></h4>
			            <p id="nextDate"><?php echo the_field('sp_event_date'); ?></p>
			            <p id="nextQualifying"><?php echo the_field('sp_qualifying'); ?></p>
			            <p id="nextGreen"><?php echo the_field('sp_green_flag'); ?></p>
	            	</div>
	            		
            	<h1 class="cmlt_title">CMLT</h1>
            		<div class="sprint_cup">
            			<h3><?php echo the_field('cmlt_event'); ?></h3>
				    	<h4><?php echo the_field('cmlt_event_name'); ?></h4>
				    	<p id="nextDate"><?php echo the_field('cmlt_event_date'); ?></p>
			            <p id="nextQualifying"><?php echo the_field('cmlt_qualifying'); ?></p>
			            <p id="nextGreen"><?php echo the_field('cmlt_green_flag'); ?></p>
            		</div>
            </div>