<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
                </div><!-- row -->
			</div><!--.site-content-->
			
			
			<footer id="site-footer" role="contentinfo" style="background-color:red;">
				<div id="footer-row" class="row site-footer">
                    yeah -- tim update
					<div class="col-md-6 footer-left">
						<?php 
						if (!dynamic_sidebar('footer-left')) {
							printf(__('Powered by %s', 'bootstrap-basic'), 'WordPress');
							echo ' | ';
							printf(__('Theme: %s', 'bootstrap-basic'), '<a href="http://okvee.net">Bootstrap Basic</a>');
						} 
						?> 
					</div>
					<div class="col-md-6 footer-right text-right">
						<?php dynamic_sidebar('footer-right'); ?> 
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>