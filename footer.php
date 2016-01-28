<div id="mainFooterBar">
    	<footer id="mainFooter">
    		<div class="container">
    			<div class="row">
	            	<div class="col-md-12">
	            		<img src="<?php echo the_field('footer_logo', 'option'	); ?>" id="footerLogo">
	                </div>
	                
	                <nav class="col-md-12" id="footerNav">
	                <h2 class="hide">Footer Navigation</h2>
	                	<ul>
	                    	<li><a href="/about-us">About Us</a></li>
	                        <li><a href="official-sponsors.html">Our Partners</a></li>
	                        <li><a href="official-sponsors.html">Contact Us</a></li>
	                        <li><a href="official-sponsors.html">Like Us on Facebook</a></li>
	                        <li><a href="official-sponsors.html">Donate or Pay Fees</a></li>
	                    </ul>
	                </nav>
           		</div>
            
	        	<div class="row">
		        	<div class="col-md-12" id="footerLegal"><!--Open Legal-->
		            	<p><?php echo the_field('footer_copyright', 'option'	); ?></p>
		                <p><?php echo the_field('footer_all_rights', 'option'	); ?></p>
		            </div><!--Close Legal-->
	            </div>
    		</div>
    	</footer>
    </div>


	
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
</body>
</html>