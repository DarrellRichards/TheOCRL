<?php get_header(); ?>
<section id="bottomNavBar">
	<div class="container">
		<h2 class="hide">Bottom Nav Bar</h2>
    	<div class="row">
        	<div class="col-md-4">
            	<p><a href="<?php echo the_field('breaking_news_url'); ?>"><?php echo the_field('breaking_news'); ?></a></p>
            </div>
        </div>
	</div>
</section>

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
				<div id="inTheNewsHome">
		        	<h3>IN THE NEWS:</h3>
		            <p><a href="/news">[ MORE NEWS ]</a></p>
            	</div>
			</div>
			<div class="col-md-4">
				<div id="nextEventHome">
	        	<h3>NEXT EVENT:</h3>
	            <p><a href="includes/3_Wide_Schedule.pdf" target="blank">[ FULL SCHEDULE ]</a></p>
            </div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<section id="inTheNews">
        	<h2 class="hide">In the News</h2>
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

<?php get_footer(); ?>