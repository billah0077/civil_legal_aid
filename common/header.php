	<!-- header -->
	<div class="header">
		<!-- container -->
		<div class="container">
			<div class="header-bottom">
				<div class="w3ls-logo">
					<h1><a href="<?php echo $path; ?>">Civil Legal <span>Aid</span></a></h1>
				</div>
				<div class="header-top-right">
					<li>
								<div>
                                <h5><?php if(isset($_SESSION['username'])){echo "Welcome ". $_SESSION['username'];} ?></h5>
                                <span><?php if(isset($_SESSION['user_type'])){echo $_SESSION['user_type'];} ?></span>
                            </div>
					</li>

					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search" required=""> 
						<input type="submit" value="">
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="container">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						

						<ul class="nav navbar-nav">
						<?php
	                        //echo '<pre>';
	                        //print_r($_SESSION);exit;
	                         if(isset($_SESSION['user_type'])){
	                            if($_SESSION['user_type'] == 'user'){
	                                include 'header_menu_user.php';                 
	                            }
	                            if($_SESSION['user_type'] == 'lawyer'){
	                                include 'header_menu_lawyer.php';                          
	                            }
	                            if($_SESSION['user_type'] == 'admin'){
	                                include 'header_menu_lawyer.php';                          
	                            }    

	                            }else {
	                         }    
                        ?>

						</ul>


						<div class="clearfix"> </div>
					</div>	
				</nav>	
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //header -->