		<footer>
      	<section>
      		<img src="<?php echo get_template_directory_uri() ?>/images/WSU_white_left.png" alt="Western Sydney University" />
                  <div>
                              <!-- Begin MailChimp Signup Form -->
                              
                              <form action="//uws.us11.list-manage.com/subscribe/post?u=b6a07cf7fb5a609de48c04c60&amp;id=4c17b21603" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                              <input type="email" placeholder="Enter Email Address *" name="EMAIL" class="subEmail" id="mce-EMAIL">
                              <input id="submit" type="submit" name="submit" class="submit" value="SUBSCRIBE" />
                                    <div id="mce-responses" class="clear">
                                          <div class="response" id="mce-error-response" style="display:none"></div>
                                          <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                          <input type="text" name="b_b6a07cf7fb5a609de48c04c60_4c17b21603" tabindex="-1" value="">
                                    </div>
                                    </div>
                              </form>
                              <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                              <!--End mc_embed_signup-->                      
                  </div>

      		<div id="social">
      			<a class="facebook_footer" href="https://www.facebook.com/westsydusolarcarproject" title="Facebook"><img src="<?php echo get_template_directory_uri() ?>/images/facebook.png" alt="Facebook" /> </a>
      			<a class="linkedin_footer" href="https://www.linkedin.com/company/uws-solar-car-project" title="LinkedIn"><img src="<?php echo get_template_directory_uri() ?>/images/linkedin.png" alt="LinkedIn" /> </a>
      			<a class="instagram_footer"href="http://instagram.com/westsydusolarcar" title="Instagram"><img src="<?php echo get_template_directory_uri() ?>/images/instagram.png" alt="Instagram" /> </a>
      			<a class="twitter_footer" href="https://twitter.com/WestSydSolarCar" title="Twitter"><img src="<?php echo get_template_directory_uri() ?>/images/twitter.png" alt="Twitter" /> </a>
      			<a class="youtube_footer"href="https://www.youtube.com/channel/UCYsLuiDrqBru3A6V5OLZRBw" title="Youtube"><img src="<?php echo get_template_directory_uri() ?>/images/youtube.png" alt="Youtube" /> </a>
      		</div>
      		<div id="sitemap">
      			<ul>
      				<li><a href="<?php echo home_url('/','http'); ?>">HOME</a></li>|
      				<li><a href="<?php echo get_page_link(get_page_by_title(team)->ID ); ?>">TEAM</a></li>|
      				<li><a href="<?php echo get_page_link(get_page_by_title(car)->ID ); ?>">CAR</a></li>|
      				<li><a href="<?php echo get_page_link(get_page_by_title(partners)->ID ); ?>">PARTNERS</a></li>|
       				<li><a href="<?php echo get_page_link(get_page_by_title(blog)->ID ); ?>">NEWS</a></li>|
      				<li><a href="<?php echo get_page_link(get_page_by_title(contactus)->ID ); ?>">CONTACT US</a></li> 
      			</ul>
      			&#9400; Western Sydney University Solar Car Project 2016 | All Rights Reserved
      		</div>
      	</section>
      </footer>
		
	
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      <?php wp_footer(); ?>
   </body>
</html>