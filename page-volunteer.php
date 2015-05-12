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
		
	<section class="volunteer-form">
		<div class="container">
			<div class="volunteer-message" id="volunteer-message">
				<p>If you would like to volunteer with CPFF, please complete the following form.</p>
			</div> <!-- /.volunteer-message -->
			
			<form name="volunteer" id="volunteer" onsubmit="myFunction()" action="https://docs.google.com/forms/d/1MrwCVrg1AHzGoH5bCTibXbb8CojcHoGh3GesvtqOLnI/formResponse" method="POST" target="_blank" >
				
				<div class= "volunteer-name">
					<div class="volunteer-question first-name" role="listitem">
						<label for="entry_946048547">First Name</label>
						<input type="text" name="entry.946048547" value="" class="volunteer-field" id="entry_946048547" dir="auto" aria-label="First Name  " aria-required="true" required="" title="">
					</div>

					<div class="volunteer-question last-name" role="listitem">
						<label for="entry_813629623">Last Name</label>
						<input type="text" name="entry.813629623" value="" class="volunteer-field" id="entry_813629623" dir="auto" aria-label="Last Name  " aria-required="true" required="" title="">
					</div>
				</div> <!-- /.volunteer-name -->

				<div class="volunteer-communication">
					<div class="volunteer-question e-mail" role="listitem">
						<label for="entry_204895764">E-mail</label>
						<input type="email" name="entry.204895764" value="" class="volunteer-field" id="entry_204895764" dir="auto" aria-label="E-mail  " aria-required="true" required="" title="">
					</div>

					<div class="volunteer-question phone" role="listitem">
						<label for="entry_1377993044">Phone Number</label>
						<input type="tel" name="entry.1377993044" value="" class="volunteer-field" id="entry_1377993044" dir="auto" aria-label="Phone Number  " aria-required="true" required="" title="">
					</div>
				</div> <!-- /.volunteer-communication -->
				
				<div class="volunteer-multichoice">
					<div class="volunteer-question" role="listitem">
						<label for="entry_1622962235">Please indicate whether you would be willing to help with postering the neighbourhood.</label>
						<ul class="volunteer-radio" role="radiogroup" aria-label="Please indicate whether you would be willing to help with postering the neighbourhood.  ">
							<li class="volunteer-button">
								<label>
									<input type="radio" name="entry.270594084" value="Yes" id="group_270594084_1" role="radio" aria-label="Yes" required="" aria-required="true">
									<span class="volunteer-button-label">Yes</span>
								</label>
							</li>
							<li class="volunteer-button" >
								<label>
									<input type="radio" name="entry.270594084" value="No" id="group_270594084_2" role="radio" class="volunteer-button" aria-label="No" required="" aria-required="true">
									<span class="volunteer-button-label">No</span>
								</label>
							</li>
						</ul>
					</div>
				</div> <!-- /.volunteer-multichoice -->

				<div class="volunteer-multichoice">
					<div class="volunteer-question" role="listitem">
						<label for="entry_1138767840">Please indicate whether you would like to be a volunteer photographer for CPFF. <div class="sub-heading">You will need to use your own DSLR camera and would commit to sending the photos to CPFF within 3 days of the screening.</div></label>
						<ul class="volunteer-radio" role="radiogroup" aria-label="Please indicate whether you would like to be a volunteer photographer for CPFF.  ">
							<li class="volunteer-button">
								<label>
									<input type="radio" name="entry.1967354088" value="Yes" id="group_1967354088_1" role="radio" aria-label="Yes" required="" aria-required="true">
									<span class="volunteer-button-label">Yes</span>
								</label>
							</li>
							<li class="volunteer-button" >
								<label>
									<input type="radio" name="entry.1967354088" value="No" id="group_1967354088_2" role="radio" class="volunteer-button" aria-label="No" required="" aria-required="true">
									<span class="volunteer-button-label">No</span>
								</label>
							</li>
						</ul>
					</div>
				</div> <!-- /.volunteer-multichoice -->

				<div class="volunteer-skill">
					<div class="volunteer-question" role="listitem">
						<label for="entry_1698928937">Do you want to volunteer your skills or time for a specific role or project?</label>
						<input type="text" name="entry.1698928937" value="" class="volunteer-field" id="entry_1698928937" dir="auto" aria-label="Do you want to volunteer your skills or time for a specific role or project?  " title="">
					</div>
				</div> <!-- /.volunteer-skill -->
				
				<div class="volunteer-buttons">
					<button type="submit" name="Submit" value="Submit" class="volunteer-submit" id="volunteer-submit">Submit</button>

					<button type="reset" name="Reset" value="Reset" class="volunteer-reset" id="volunteer-reset">Reset</button>
				</div> <!-- /.volunteer-buttons -->
			</form>
			<h3 id="volunteer-thank">Thank you for your Support!</h3>
			<p class="newsletter">Sign up for the festival newsletter <a href="../contact/#newsletter-signup">here</a> so you won't miss a thing!</p>
		</div> <!-- /.container -->
	</section> <!-- /.volunteer-form -->
</main> <!-- /.clearfix -->
<!-- website main content - end -->

<!-- website footer - start -->
<?php get_footer(); ?>
<!-- website footer - end