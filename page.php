<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<p>Content Here</p>
		</div>
		<div class="col-md-6">
			<p>Content Here</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?> 

<?php get_footer(); ?>