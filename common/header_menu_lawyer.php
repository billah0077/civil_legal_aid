					<li class="home-icon"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
							<li><a href="<?php echo $path; ?>index.php" class="active">Home</a></li>
							<li><a href="<?php echo $path; ?>about.php">About</a></li>
							
							<li><a href="<?php echo $path; ?>job_post/job_post.php">All Job Post</a>
							</li>

							<!-- <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Job Post <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="icons.html">Web Icons</a></li>
								</ul>
							</li> -->
							<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
								<ul class="dropdown-menu">
									
									<li class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown-submenu" role="button" aria-haspopup="true" aria-expanded="false">My Bid List<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="<?php echo $path; ?>lawyer/mybid_list.php">See My Bids</a></li>
										</ul>
									</li>

									<li class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown-submenu" role="button" aria-haspopup="true" aria-expanded="false">Law <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="<?php echo $path; ?>law/law.php">All Law</a></li>
											<li><a href="<?php echo $path; ?>law/insertlaw.php">Add Law</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown-submenu" role="button" aria-haspopup="true" aria-expanded="false">Law Section<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="<?php echo $path; ?>law_section/law_section.php">All Law Section</a></li>
											<li><a href="<?php echo $path; ?>law_section/insert_law_section.php">Add Law Section</a></li>
										</ul>
									</li>
									<li class="dropdown-submenu">
										<li><a href="<?php echo $path; ?>" class="scroll">News</a>
										</li>
										<li><a href="<?php echo $path; ?>contact.php">Contact</a></li>

									</li>      
								</ul>
							</li>	 
							<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Profile <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="<?php echo $path; ?>lawyer/insertlawyer.php">Create Profile</a></li>
									<li><a class="hvr-bounce-to-bottom" href="<?php echo $path; ?>profile_lawyer.php">Update Profile</a></li>
									<li><a class="hvr-bounce-to-bottom" href="<?php echo $path; ?>lawyer/lawyer_profile_show_details.php">Show Details</a></li>
								</ul>
							</li>

							<li class="login w3">
								<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
									<div id="loginBox">      
										<form id="loginForm" action="#" method="post">
											<fieldset id="body">
												<fieldset>
													<label for="email">Email Address</label>
													<input type="text" name="email" id="email" required="">
												</fieldset>
												<fieldset>
													<label for="password">Password</label>
													<input type="password" name="password" id="password" required="">
												</fieldset>
												<input type="submit" id="login" value="Sign in">
												<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
											</fieldset>
											<span><a href="#">Forgot your password?</a></span>
										</form>
									</div>
								</div>
							</li>