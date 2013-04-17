<?php include('include/top.php'); ?>


	
			</div>

			<div data-role="content">

				<h2>Upcoming Events</h2>
				
				<!-- @TODO this section -->
				 <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                    <legend>Filter by:</legend>                
                    <select >
						<option value="NY">New York</option>
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>                       
                    <select name="select-adults" id="select-adults">
                    	<option>All Events</option>
                        <option value="1">Foundation Events</option>
                        <option value="2">Team Fox Events</option>
                        <option value="2">PD Community Events</option>
                        <!-- etc. -->
                    </select>
                </fieldset>
				</div>
				<!--
				<p class="key"><img src="../../images/key-foundation.gif" width="9" height="14" border="0" alt="" /> Foundation &#160; <img src="../../images/key-team.gif" width="9" height="14" border="0" alt="" /> Team Fox &#160; <img src="../../images/key-community.gif" width="9" height="14" border="0" alt="" /> Parkinson's Community</p>
				-->
				<hr/>

		<ul data-role="listview" class="eventFeed" data-icon="false">
			<li>
				<a data-transition="slide" href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1001824">
					<div class="eventItem">
						<div class="calendarDate">
							<div class="calendarIcon">
							<!--	<img src="../images/event-date-bg-team.gif" /> -->
								<div class="calendarIconText">
									Mar<br/>
									<span>12</span>
								</div>
							</div>
						</div>
						<div class="eventText">
							<div class="eventTitle">
								Delaware Pancakes for Parkinson's Disease
							</div>
							<div class="eventLocation">
								Hamilton, NY
							</div>
						</div>
					</div>
				</a>
			</li>

			<li>
				<a data-transition="slide" href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1001824">
					<div class="eventItem">
						<div class="calendarDate">
							<div class="calendarIcon">
								<div class="calendarIconText">
									Mar<br/>
									<span>19</span>
								</div>
							</div>
						</div>
						<div class="eventText">						
							<div class="eventTitle">
								New York City Marathon
							</div>
							<div class="eventLocation">
								New York, NY
							</div>
						</div>	
					</div>
				</a>
			</li>
			<li>
				<a data-transition="slide" href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1001824">
					<div class="eventItem">
						<div class="calendarDate">
							<div class="calendarIcon">
								<div class="calendarIconText">
									Mar<br/>
									<span>28</span>
								</div>
							</div>
						</div>
						<div class="eventText">
							<div class="eventTitle">
								Tips for Parkinson's
							</div>
							<div class="eventLocation">
								Saratoga Springs, NY
							</div>
						</div>	
					</div>
				</a>
			</li>			<li>
				<a data-transition="slide" href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1001824">
					<div class="eventItem">
						<div class="calendarDate">
							<div class="calendarIcon">
								<div class="calendarIconText">
									Apr<br/>
									<span>3</span>
								</div>
							</div>
						</div>
						<div class="eventText">
							<div class="eventTitle">
								WereGoingBack.com - 2015!
							</div>
							<div class="eventLocation">
								New York, NY
							</div>
						</div>	
					</div>
				</a>
			</li>
		</ul>		

<!--	<a href="">
	<table cellspacing="0" class="cal-item">
	<tr>
	<td class="event-date team">Mar<br/>
	<span>12</span></td>
	<td class="cal-link"> WereGoingBack.com - 2015!</td>
	<td class="cal-info"><strong>Burbank, California<br/> United States</strong><br />
	</td>
	</tr>
	</table>
	</a>
		<p class="h-divider-thick" style="margin-bottom:0;">&nbsp;</p>
	<a href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1001474">
	<table cellspacing="0" class="cal-item">
	<tr>
	<td class="event-date team">Mar<br/>
	<span>16</span></td>
	<td class="cal-link"> Western Masters Art Show &amp; Sale Quick Finish</td>
	<td class="cal-info"><strong>Great Falls, Montana<br/> United States</strong><br />
	14:30 - 16:30</td>
	</tr>
	</table>
	</a>
		<p class="h-divider-thick" style="margin-bottom:0;">&nbsp;</p>
	<a href="http://www2.michaeljfox.org/site/TR?fr_id=1300&pg=personal&px=1092636">
	<table cellspacing="0" class="cal-item">
	<tr>
	<td class="event-date team">Mar<br/>
	<span>16</span></td>
	<td class="cal-link"> Believe It.......Moving Forward For Parkinsons</td>
	<td class="cal-info"><strong>Wethersfield, Connecticut<br/> United States</strong><br />
	18:30 - 23:00</td>
	</tr>
	</table>
	</a>
		<p class="h-divider-thick" style="margin-bottom:0;">&nbsp;</p>


				<ul data-role="listview" class="blogFeed" data-icon="false">
					<li><a data-transition="slide" href="blog-detail.php">

						<p>
							<img class="blogImage" src="http://mjff.rfinteractive.com/files/blog/babyFox2.jpg"  />
						</p>

						<h4 class="bold">FOX FOTO FRIDAY: Our Youngest Team Fox Young Professional!</h4>

						<p >
							February 01, 2013
						</p>
						<p>
							Meet Eitan, the youngest Team Fox Young Professional of NYC! Eitan is the son of Loren and Shira Berger who have been active Team Fox members since 2007.

						</p>
						</a>
					</li>
					<li><a data-transition="slide" href="blog-detail.php">
						<p>
							<img class="blogImage" src="http://mjff.rfinteractive.com/files/blog/BOROStudzinskiFamily.jpg"  />
						</p>

						<h4 class="bold">A Varsity Hockey Team Takes a Slapshot Against Parkinson's</h4>

						<p class="sm gray6">
							January 29, 2013
						</p>

						<p>
							The Springboro hockey team is turning their hockey game into a fundraiser and awareness builder for Parkinson's disease, in honor of "hockey dad" and hockey board president, Dave Studzinski.
						</p>

						</a>
					</li>
					<li>
						<a data-transition="slide" href="blog-detail.php">
						<p>
							<img class="blogImage" src="http://mjff.rfinteractive.com/files/blog/Capitol-Building.jpg"  />
						</p>

						<h4 class="bold">Debi Brooks Heads to Capitol Hill to Advocate for Research Collaboration on Behalf of PD Patients</h4>

						<p class="sm gray6">
							January 29, 2013
						</p>

						<p>
							Co-Founder  Debi Brooks will take part in "The Blueprint of Medical Research: How New Medicines Gets from the Lab to the Patient" Congressional Briefing in Washington, D.C. on February 6, 2013.
						</p>
						</a>
					</li>
					<li>
						<a data-transition="slide" href="blog-detail.php">
						<p>
							<img class="blogImage" src="http://mjff.rfinteractive.com/files/blog/davidweiner.jpg"  />
						</p>

						<h4 class="bold">Three Questions for a Researcher with Dave Weiner, MD, Chief Medical Officer at Proteostasis Therapeutics</h4>

						<p class="sm gray6">
							January 29, 2013
						</p>

						<p>
							MJFF Scientific Advisory Board member Dave Weiner holds a unique perspective into the world of Parkinson's disease drug development:
						</p>
						</a>
					</li>
					<li>
						<a data-transition="slide" href="blog-detail.php">
						<p>
							<img class="blogImage" src="http://mjff.rfinteractive.com/files/blog/Carey-Christensen.jpg"  />
						</p>

						<h4 class="bold">Michael J. Fox: Hollywood Icon, One of Us</h4>

						<p class="sm gray6">
							January 28, 2013
						</p>

						<p>
							Guest blogger Carey Christensen is inspired by Michael J. Fox's many roles &mdash; actor, celebrity/icon, Parkinson's patient and advocate/activist.
						</p>
						</a>
					</li>
					<li>
						<a href="#comingsoon2" class="loadMorePosts" data-rel="popup" data-transition="slidedown" data-position-to="window" data-role="button" data-iconpos="bottom" data-theme="b" data-icon="arrow-d">Load More Posts</a>
					</li>
				</ul>

				<ul style="margin-top:2em; margin-bottom:2em;" data-role="listview" class="ui-li-icon" data-inset="true" data-divider-theme="b" id="popularBlogTopics">
					<li data-role="list-divider" >
						Popular Topics
					</li>
					<li>
						<a href="#comingsoon"  data-rel="popup" data-transition="slidedown" data-position-to="window" data-iconpos="right" data-icon="arrow-r" >Breaking Research Updates</a>
					</li>
					<li>
						<a href="#comingsoon"  data-rel="popup" data-transition="slidedown" data-position-to="window" data-iconpos="right" data-icon="arrow-r" >Fox Trial Finder</a>
					</li>
					<li>
						<a href="#comingsoon"  data-rel="popup" data-transition="slidedown" data-position-to="window" data-iconpos="right" data-icon="arrow-r" >Living With Parkinson's</a>
					</li>
					<li>
						<a href="#comingsoon"  data-rel="popup" data-transition="slidedown" data-position-to="window" data-iconpos="right" data-icon="arrow-r" >Michael J. Fox</a>
					</li>


					<li>
						<a href="#comingsoon"  data-rel="popup" data-transition="slidedown" data-position-to="window" data-iconpos="right" data-icon="arrow-r" >Team Fox</a>
					</li>

				</ul>	-->			
			

<?php include('include/bottom.php'); ?>
