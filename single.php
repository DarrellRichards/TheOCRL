<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section id="single_post">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h2 class="headline"><?php the_title(); ?></h2>
					<div class="content blog-content">
						<p class="home_date">
							<?php the_time("M j Y") ?> |
							<?php the_author(); ?>
						</p>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-md-5">
					<div class="content">
						<aside class="sidebar">
							<h4>Widget Area Soon.</h4>
						</aside>
					</div>
				</div>
			</div>		
<?php endwhile; ?>
		</div>
	</section>
<?php else: ?>
	<p>Seems like this post has been changed or deleted. Sorrrrry!!! :/</p>
	<a href="/">Help Let Me Out!</a>
<?php endif; ?>
<?php get_footer(); ?>