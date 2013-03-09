			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
			
					<div class="profile">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/portrait-138.jpg" alt="Claire Ruth">
						<h3>À Propos De Moi</h3>
						<p>Bonjour. Je m’appelle Claire Louise Ruth. J’ai vingt ans. J’habite dans le nord-ouest de l’Angleterre. J’étudie le français et l’anglais à l’université à Warwick. J’aime la musique.</p>
						<a href="">Plus</a>
					</div>

					<!-- <nav role="navigation"> -->
    					<?php// bones_footer_links(); ?>
	                <!-- </nav> -->
	                		
					<a href="http://readtheprintedword.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/bookstack.png" alt="Read the Printed Word"></a>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
				
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
