<?php session_start(); ?>

<body>
	<!-- header-top -->
	<div class="header-top">
		<!-- container -->
		<div class="container">
			<div class="social w3-agileitsicons"> 
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a class="twt" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
					<li><a class="drbl" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a></li>
					<li><a class="be" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i> </a></li>
				</ul>  
			</div>
			<div class="w3layouts-details">
				<ul>
					<li><a href="mailto:@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@legal_aid.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+88) 015 123 46789</li>
					<li><a href="<?php echo $path; ?>logout.php"><span  aria-hidden="true"></span>logout</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //header-top -->