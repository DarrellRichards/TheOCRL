<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="list-blog" id="page_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h2 class="headline"><?php the_title(); ?></h2>
					<div class="content blog-content">
						<p class="home_date">
							<i class="fa fa-calendar"></i>  <?php the_time("j M 'y") ?>
							<i class="fa fa-user"></i> <?php the_author(); ?>
							<i class="fa fa-tags"></i> <?php echo get_the_tag_list(' ',',',''); ?></p>
						<hr>
						<?php the_content(); ?>
						<hr>
					</div>
				</div>
				<div class="col-md-5">
					<div class="content">
						<aside class="sidebar">
							<h4>Sidebar Coming Soon!</h4>
						</aside>
					</div>
				</div>
			</div>		
<?php endwhile; ?>
			<?php previous_post_link(); ?> 
			<?php next_post_link(); ?>
		</div>
	</section>
<?php else: ?>
	<p>Seems like this post has been changed or deleted. Sorrrrry!!! :/</p>
	<a href="/">Help Let Me Out!</a>
<?php endif; ?>
<?php get_footer(); ?>