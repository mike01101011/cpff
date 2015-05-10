<!-- website header - start -->
<?php get_header(); ?>
<!-- website header - end -->


<!-- website navigation - start -->
<?php include("navigation.php"); ?>
<!-- website navigation - end -->


<!-- carousel - start -->
<? include("carousel.php"); ?>
<!-- carousel - end -->


<!-- website main content - start -->
<main class="clearfix">
		
		
		<!-- page title - start -->
		<h2><?php the_title(); ?></h2>
		<!-- page title - end -->

	<section class="connect">
		<div class="container">
			<div class="contact_details">
				<div class="social_sponsorship">
					<div class="social">
						<ul>
							<li><a href="mailto:christiepitsff@gmail.com?Subject=Contact Us" target="_blank"><i class="fa fa-envelope-o"></i> <strong>christiepitsff@gmail.com</strong></a></li>
							<li><a href="https://www.facebook.com/ChristiePitsFilmFestival" target="_blank"><i class="fa fa-facebook-official"></i> <strong>ChristiePitsFilmFestival</strong></a></li>
							<li><a href="https://twitter.com/christiepitsff" target="_blank"><i class="fa fa-twitter"></i> <strong>@ChristiePitsFF</strong></a></li>
							<li><a href="https://instagram.com/christiepitsff/" target="_blank"><i class="fa fa-instagram"></i> <strong>@christiepitsff</strong></a></li>
						</ul>
						<p><strong>#CPFF15</strong> to join the conversation.</p>
					</div> <!-- /.social -->
					
					<div class="sponsorship">
						<p>Click <a href="" target="">here</a> to request a sponsorship package.</p>
					</div> <!-- /.sponsorship -->
				</div> <!-- /.social_sponsorship -->
				
				<div class="newsletter_survey">
					<div id="newsletter-signup" class="mailchimp">
						<p>Subscribe to our newsletter to receive the latest updates on the festival:</p>
						<form action="http://ChristiePitsff.us8.list-manage.com/subscribe/post?u=2fd55791aca0c18a860f69cf1&amp;id=85e67364da" method="post" id="newsletter-form" name="mc-embedded-subscribe-form" target="_blank" onsubmit="newsletter()">
							<div class="news-question" role="listitem">
								<label for="FNAME">First Name:</label>
								<input type="text" value="" name="FNAME" class="" id="mce" dir="auto" aria-label="First Name" aria-required="true" required="" title="">
							</div> <!-- /.news-first -->
							
							<div class="news-question" role="listitem">
								<label for="LNAME">Last Name:</label>
								<input type="text" value="" name="LNAME" class="" id="mce" dir="auto" aria-label="Last Name" aria-required="true" required="" title="">
							</div> <!-- /.news-last -->

							<div class="news-question" role="listitem">
								<label for="EMAIL">E-mail:</label>
								<input type="email" value="" name="EMAIL" class="required email form-control" id="mce" dir="auto" aria-label="E-mail" aria-required="true" required="" title="">
							</div> <!-- /.news-email -->

							<div class="news-submit" role="listitem">
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<input type="hidden" name="b_2fd55791aca0c18a860f69cf1_85e67364da" value="">
								<button type="submit" name="subscribe" id="mailchimp-subscribe">subscribe</button>
							</div> <!-- /.news-submit -->
						</form>
						<h3 id="newsletter-thank">Be sure to check your inbox!!!</h3>
					</div><!-- /.mailchimp -->
					
					<div class="survey">
						<p>Click <a href="https://www.surveymonkey.com/s/8D8V85Z" target="_blank">here</a> to give us your feedback</p>
					</div> <!-- /.survey -->
				</div> <!-- /.newsletter_survey -->
			</div> <!-- /.contact_details -->
			
			<div id="cpff_map" class="screenings">
				<div class='embed-container'>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2886.219979504996!2d-79.41932647221373!3d43.66439460164457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b348b9fc8fff1%3A0x70a99ed8ba8aaf44!2sChristie+Pits+Park!5e0!3m2!1sen!2sca!4v1430713979383" frameborder="0" style="border:0"></iframe>
				</div>
				<p>All screenings are at <strong>Christie Pits Park</strong> after sunset, unless otherwise noted.</p>
			</div> <!-- /.screenings -->


		</div> <!-- .container -->
	</section> <!-- /.connect -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->


<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end