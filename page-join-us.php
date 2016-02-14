<?php 
/**
 	* Template Name: Join-Us	 Page
*/
get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-12" id="Sprint_Join">
			<div class="container">
				<div class="row">
					<div class="col-md-4 Join_Info">
						<img src="http://theocrl.x10host.com/wp-content/uploads/2015/11/sprintCup.png" alt="Sprint Cup Series Logo">
						<h3>Sprint Cup Series – Thursday Nights</h3>
						<button class="btn active" href="#">Active Series</button>
						<p>Series Details:</p>
						<ul>
							<li>Completely unique schedule, roughly 17 to 18 races in length.</li>
							<li>Race lengths are similar to the lengths used in the NASCAR iRacing  Series.</li>
							<li>League’s Premier Series – Only the best of the best compete in this series.</li>
							<li>New drivers are eligible to race in this series, however, only after being approved by a league admin during opening practice (Wednesday nights).</li>
						</ul>
					</div>
					<div class="col-md-8">
						<p class="placeholder">Series Photo's?	or Series Past Champs? or Something?</p>					
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12" id="Xinfity_Join">
			<div class="container">
				<div class="row">
					<div class="col-md-4 Join_Info">
						<img src="https://static.wixstatic.com/media/e39ef0_bd625ae41d34401cbd10a8050179bf58.png/v1/fill/w_238,h_128,al_c,usm_0.66_1.00_0.01/e39ef0_bd625ae41d34401cbd10a8050179bf58.png" alt="Xfintiy Series Logo">
						<h3>Xfinity Series – Tuesday Nights</h3>
						<button class="btn inactive" href="#">Inactive Series</button>
						<p>Series Details:</p>
						<ul>
							<li>Completely unique schedule, roughly 17 to 18 races in length.</li>
							<li>Race lengths are similar to the lengths used in the NASCAR iRacing  Series.</li>
							<li>League’s Premier Series – Only the best of the best compete in this series.</li>
							<li>New drivers are eligible to race in this series, however, only after being approved by a league admin during opening practice (Wednesday nights).</li>
						</ul>
					</div>
					<div class="col-md-8">
						<p class="placeholder">Series Photo's?	or Series Past Champs? or Something?</p>					
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12" id="Trucks_Join">
			<div class="container">
				<div class="row">
					<div class="col-md-4 Join_Info">
						<img src="https://static.wixstatic.com/media/e39ef0_21205e571cf948e3902473fcd1c557c7.png/v1/fill/w_238,h_140,al_c,lg_1/e39ef0_21205e571cf948e3902473fcd1c557c7.png" alt="Truck Series Logo">
						<h3>CM Landscaping Truck Series - Tuesday Nights</h3>
						<button class="btn active" href="#">Active Series</button>
						<p>Series Details:</p>
						<ul>
							<li>Completely unique schedule, roughly 17 to 18 races in length.</li>
							<li>Race lengths are similar to the lengths used in the NASCAR iRacing  Series.</li>
							<li>League’s Premier Series – Only the best of the best compete in this series.</li>
							<li>New drivers are eligible to race in this series, however, only after being approved by a league admin during opening practice (Wednesday nights).</li>
						</ul>
					</div>
					<div class="col-md-8">
						<p class="placeholder">Series Photo's?	or Series Past Champs? or Something?</p>					
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
<?php get_footer(); ?>