<?php 
/**
 	* Template Name: Champions Page
*/
get_header(); ?>
<div id="championsBanner">
	<dic class="container">
		<div class="row">
	    	<div class="col-md-12">
	        	<!-- <img src="http://www.upperedgeracing.com/images/champions_title.png" alt="champions" id="champsheader"> -->
	        </div>
	    </div>
	</dic>
</div> <!-- end championsBanner -->

<div id="championsSprintCup">
	<div class="container">
    	<div class="row">
            <?php if( have_rows('scs_series_champs') ): while ( have_rows('scs_series_champs') ) : the_row(); ?>
            	<div class="col-md-2">
                	<img src="<?php echo the_sub_field('sprint_cup_series_champion'); ?>" alt="">
                </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, We need to update are champs!' ); ?></p>
            <?php endif; ?>
        </div>	
	</div>
</div> <!-- end SprintCupChamps -->
<div id="championsxfs">
	<div class="container">
    	<div class="row">
        	<?php if( have_rows('xfs_series_champs') ): while ( have_rows('xfs_series_champs') ) : the_row(); ?>
                <div class="col-md-2">
                    <img src="<?php echo the_sub_field('xfinity_series_champion'); ?>" alt="">
                </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, We need to update are champs!' ); ?></p>
            <?php endif; ?>
        </div>	
	</div>
</div> <!-- end XfintiySeriesChamps -->
<div id="championscmlts">
	<div class="container">
    	<div class="row">
        	<?php if( have_rows('cmlts_series_champs') ): while ( have_rows('cmlts_series_champs') ) : the_row(); ?>
                <div class="col-md-2">
                    <img src="<?php echo the_sub_field('cmlts_series_champion'); ?>" alt="">
                </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, We need to update are champs!' ); ?></p>
            <?php endif; ?>
        </div>	
	</div>
</div> <!-- end CMLandscapingChamps -->
<?php get_footer(); ?>