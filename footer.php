<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
                </div><!-- row -->
			</div><!--.site-content-->			
		</div><!--.container page-container-->
		
    <!-- wordpress aside -->

        <!-- partners -->
        <aside class="partners">
          <!-- Aside Start -->
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <ul class="list-unstyled list-inline text-center">
                    <li><?php partnerUrl('http://dc.mypowersupply.com/','power_supply-final.png'); ?></li>
                    <li><?php partnerUrl('http://www.thejacksonclinics.com/services/health/crossfit-program','jackson_clinics-final.png'); ?></li>
                    <li><?php partnerUrl('https://www.customfitmeals.com/order-meals','meal-final.png'); ?></li>
                    <li><?php partnerUrl('http://www.kxphotos.com', 'Kx-final.png') ?></li>
                    <li><?php partnerUrl('http://www.theboxpass.com', 'box_pass-final2.png') ?></li>
                  </ul>
                </div>
              </div>
            </div>      
          <!-- Aside Start end -->
        </aside>
        <!-- partners end -->
    <!-- wordpress aside end -->

		<!--wordpress footer-->

        <!-- new from pix %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
        <footer id="footer"> 
          <!-- Footer Top Start -->
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <section class="col-lg-3 col-md-3 hidden-sm hidden-xs footer-one">
                    <h3>Upcoming Events</h3>
                    <?php dynamic_sidebar('footer-left'); ?>
                </section>
                <section class="col-lg-3 col-md-3 hidden-sm hidden-xs footer-two">
                    <?php get_template_part('sidebar','community'); ?>
                </section>
                <section class="col-lg-3 col-md-3 col-xs-12 col-sm-12 footer-three">
                  <h3>Contact Us</h3>
                  <ul class="contact-us">
                    <li> <i class="fa fa-map-marker"></i>
                      <p>
                        <strong class="contact-pad">Address:</strong>
                        <br>4144 S Four Mile Run Dr<br> 
                        Arlington, VA 22206
                      </p>
                    </li>
                    <li> <i class="fa fa-phone"></i>
                      <p><strong>Phone:</strong> 703-362-8195</p>
                    </li>
                    <li> <i class="fa fa-envelope"></i>
                      <p><strong>Email:</strong><a href="mailto:info@crossfitadaptation.com">info@crossfitadaptation.com</a></p>
                    </li>
                  </ul>
                </section>
                <section class="col-lg-3 col-md-3 hidden-sm hidden-xs footer-four">
                    <h3>CFA Community</h3>
                    <ul class="community">
                      <li><a href="http://journal.crossfit.com/start.tpl?version=CFJ-graphic123x63" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource"><img src="http://journal.crossfit.com/templates/images/graphic-125x63.jpg" width="125px" height="63px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource"></a></li>
                      <li><a href="http://www.crossfitfallschurch.com/"><img src="<?php echo get_bloginfo('template_directory').'/img/cffc.png' ?>"></a></li>
                    </ul>
                    <?php dynamic_sidebar('footer-right'); ?> 
                </section>
              </div>
            </div>
          </div>
          <!-- Footer Top End --> 
          <!-- Footer Bottom Start -->
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                    © Copyright <?php echo date('F Y') ?> by <a style="cursor: pointer;">CFA</a>. All Rights Reserved.
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 ">
                  <ul class="social social-icons-footer-bottom">
                    <li class="facebook"><a href="https://www.facebook.com/pages/CrossFit-Adaptation/115019278525818" data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/cfadaptation" data-toggle="tooltip" title="" style="cursor: pointer;" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="rss"><a href="http://www.crossfitadaptation.com/wod/feed/" data-toggle="tooltip" title="wod feed" style="cursor: pointer;" data-original-title="Rss"><i class="fa fa-rss"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Footer Bottom End --> 
        </footer>
        <!-- end from pix %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
		<?php wp_footer(); ?> 
	</body>
</html>