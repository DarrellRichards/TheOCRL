<?php get_header(); ?>
<div class="container">
	<div class="row"><!--Open titleArea-->
    	<div class="col-md-12">
        	<div class="mainPageTitleTop">
            	<h2>{ TheOCRL <span>News }</span></h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<div class="col-md-6">
    		<div class="newsContentArea">
            	<h4><?php the_title(); ?></h4>
            	<p class="mute"><?php the_time("F j, Y") ?></p>
            	<p><a href="<?php the_permalink(); ?>">Read The Full Writing</a></p>
            </div>
        </div>
<?php endwhile; ?>
	</div>
</div>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>
<?php get_footer(); ?>