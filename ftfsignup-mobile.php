<?php include('include/top.php'); ?>
<!--
				<h1 style="overflow:visible;">Fox Trial Finder</h1>
				<a href="blog-detail.php" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
	-->		</div>

			<div data-role="content">

				<p class="mobileTagline">
					Every clinical trial needs volunteers. Fox Trial Finder knows which trials need you.
				</p>
				<form id="ftfSignup" action="formthankyou.php" target="_blank" method="POST">

					<div data-role="fieldcontain">
						<fieldset data-role="controlgroup">
							<legend>
								Volunteer Status
							</legend>
							<input type="radio" name="pd_status" id="pd_status_1" value="has_pd"  />
							<label for="pd_status_1">I have Parkinson's Disease</label>

							<input type="radio" name="pd_status" id="pd_status_2" value="is_control"  />
							<label for="pd_status_2">I do not have Parkinson's but want to help</label>

						</fieldset>
					</div>

					<div data-role="fieldcontain">

						<fieldset data-role="controlgroup">
							<legend>
								Email Address
							</legend>

							<input type="email" class="required" name="volunteer_email" id="email" required="required" />
						</fieldset>
					</div>

					<div data-role="fieldcontain">

						<fieldset data-role="controlgroup">
							<legend>
								E-Newsletter Signup
							</legend>
							<input type="checkbox" name="wants_newsletter" id="wants_newsletter" value="yes" checked="checked"/>
							<label for="wants_newsletter">I would like to receive research updates from Michaeljfox.org</label>
						</fieldset>
					</div>

					<input type="hidden" name="ambassador_referral" value="Lily Capelletti" />
					<input type="submit" value="Submit" data-theme="b"/>
				</form>
				
<?php include('include/bottom.php'); ?>
