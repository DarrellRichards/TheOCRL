<?php 
/**
 	* Template Name: About Page
*/
get_header(); ?>
<div class="container" id="TopPageTitle">
	<div class="row"><!--Open titleArea-->
		<div class="col-md-12">
	        <h2>{ ABOUT <span>THEOCRL }</span></h2>
	    </div>
	</div>
</div> <!-- end top page title -->

<div class="aboutPageContent">
	<div class="container">
		<div class="row">
	    	<div class="col-md-12 pageTitle">
	        	<h3><?php echo the_field('about_section_title'); ?></h3>
	        </div>
	        <div class="col-md-12">
	        	<div class="AboutPageContent">
	            	<?php echo the_field('about_content'); ?>
	            </div>
	        </div>
	    </div>
	</div>    
</div> <!-- end about page content -->
<div class="container" id="leaguephotos">
	<div class="row">
		<div class="col-md-4">
	        <img data-caption="Start of the 2015a SLM Tour" src="https://static.wixstatic.com/media/e39ef0_c23cdde219a94230b6e95aff333f94bf.jpg/v1/fit/w_1360,h_682,q_90/e39ef0_c23cdde219a94230b6e95aff333f94bf.jpg" alt="About Image" id="aboutimages">
	    </div>
	    <div class="col-md-4">
	    	<img data-caption="Start of the 2015a SLM Tour" src="https://static.wixstatic.com/media/e39ef0_dee76dbed892447c9fea9dedcd202e50.jpg/v1/fit/w_1360,h_680,q_90/e39ef0_dee76dbed892447c9fea9dedcd202e50.jpg
			" alt="About Image" id="aboutimages">
	    </div>
	    <div class="col-md-4">
	    	<img data-caption="Start of the 2015a SLM Tour" src="https://static.wixstatic.com/media/e39ef0_15ed74047ac446b0bf4eb00204a9bbf5.jpg/v1/fit/w_1360,h_680,q_90/e39ef0_15ed74047ac446b0bf4eb00204a9bbf5.jpg
			" alt="About Image" id="aboutimages">
	    </div>
	    <div class="col-md-4">
	    	<img data-caption="Start of the 2015a SLM Tour" src="https://static.wixstatic.com/media/e39ef0_0cc610284d2b44949a5f6f00019a1d39.jpg/v1/fit/w_1280,h_656,q_90/e39ef0_0cc610284d2b44949a5f6f00019a1d39.jpg
			" alt="About Image" id="aboutimages">
	    </div>
	    <div class="col-md-4">
	    	<img data-caption="Start of the 2015a SLM Tour" src="https://static.wixstatic.com/media/e39ef0_b83c45f5bd03465c9841a8140364c257.jpg/v1/fit/w_1360,h_655,q_90/e39ef0_b83c45f5bd03465c9841a8140364c257.jpg
			" alt="About Image" id="aboutimages">
	    </div>
	    <div class="col-md-4">
	    	<img data-caption="Start of the 2015a SLM Tour" src="https://static.wixstatic.com/media/e39ef0_ad18c6d146b64552bf30f84036e17db5.jpg/v1/fit/w_1360,h_681,q_90/e39ef0_ad18c6d146b64552bf30f84036e17db5.jpg
			" alt="About Image" id="aboutimages">
	    </div>
	</div>
</div> <!-- end leaguephotos -->

<div class="LeagueSeries">
	<div class="container">
	    <div class="row">
	    	<div class="col-md-12 pageTitle">
	        	<h3>THREE TOP TIER SERIES</h3>
	        </div>
	        
	        <div class="col-md-4 columns">
	        	<div class="seriesInformation">
	        		<div id="series_info">
	        			<img src="http://static.wixstatic.com/media/e39ef0_eefeca09dcdb4c9d9aa20aac650ca195.png" id="Series_Image"> 
		            	<h5>Series Details:</h5>
		            	<ul>
		            		<li>Completely unique schedule, roughly 17 to 18 races in length.</li>
		            		<li>Race lengths are similar to the lengths used in the NASCAR iRacing  Series.</li>
		            		<li>League's Premier Series - Only the best of the best compete in this series. </li>
		            		<li>New drivers are eligible to race in this series, however, only after being approved by a league admin during opening practice (Wednesday nights).</li>
		            	</ul>
		            	<button href="#">Active Series</button>
	        		</div>
	            </div>
	        </div>
	        <div class="col-md-4 columns">
	        	<div class="seriesInformation">
	        		<div id="series_info">
	        			<img src="http://static.wixstatic.com/media/e39ef0_4ec37a50ff0d4b81bca821753cef572c.png" id="Series_Image"> 
		            	<h5>Series Details:</h5>
		            	<ul>
		            		<li>Completely unique schedule, roughly 17 to 18 races in length.</li>
		            		<li>Weather Settings for this series have not yet been determined.</li>
		            		<li>Race lengths are roughly 50% of the distance that the NASCAR Xfinity Series runs.</li>
		            		<li>Fixed Setup Series provides level fields and a relaxed environment.</li>
		            	</ul>
		            	<button class="inactive" href="#">Inactive Series</button>
	        		</div>
	            </div>
	        </div>
	        <div class="col-md-4 columns">
	        	<div class="seriesInformation">
	        		<div id="series_info">
	        			<img src="http://static.wixstatic.com/media/e39ef0_37cec6f0d84d40e98e7c1077e377d079.png" id="Series_Image"> 
		            	<h5>Series Details:</h5>
		            	<ul>
		            		<li>Completely unique schedule, roughly 17 to 18 races in length.</li>
		            		<li>Weather Settings for this series have not yet been determined.</li>
		            		<li>Race lengths are roughly 50% of the distance that the NASCAR Camping World Turck Series runs.</li>
		            		<li>Fixed Setup Series provides level fields and a relaxed environment.</li>
		            	</ul>
		            	<button href="#">Active Series</button>
	        		</div>
	            </div>
	        </div>
	    </div>
	</div> 
</div> <!-- end league series information -->
<?php get_footer(); ?>