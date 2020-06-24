<?php include 'common/head.php';?>
<?php include 'common/header_top.php';?>
<?php include 'common/header.php';?>
<?php include 'common/banner.php';?>
<?php include 'common/welcome.php';?>


	<!-- slider -->
	<div class="slider">
		<div class="arrival-grids wthree-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="single.html"><img src="images/p1.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/p2.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/p3.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/p4.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/p1.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/p2.jpg" alt=""/>
					 </a>
				 </li>
				</ul>
				<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
		</div>
	</div>
	<!-- //slider -->
	<!-- news -->
	<div class="news" id="news">
		<!-- container -->
		<div class="container">
			<div class="news-info agileits-w3layouts">
				<h3>News &amp; Events</h3>
			</div>
			<div class="news-grids">
				<div class="col-md-6 news-wthreegrid">
					<div class="news-grid-left">
						<div class="col-md-3 date">
							<p>23</p>
							<span>June</span>
						</div>
						<div class="col-md-9 date-info">
							<a href="single.html">Fusce scelerisque sit amet justo vitae</a>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
							<div class="news-button">
								<a href="single.html">More</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="news-grid-left">
						<div class="col-md-3 date">
							<p>09</p>
							<span>May</span>
						</div>
						<div class="col-md-9 date-info">
							<a href="single.html">Fusce scelerisque sit amet justo vitae</a>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
							<div class="news-button">
								<a href="single.html">More</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 news-wthreegrid">
					<div class="news-agileimg">
						<img src="images/6.jpg" alt="" />
					</div> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //news -->
	<!-- news-bottom -->
	<div class="news-bottom">
		<!-- container -->
		<div class="container">
			<div class="news-w3agileitsinfo">
				<h3>Fusce ullamcorper </h3>
				<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet In eget sem consectetur, condimentum velit nec, rhoncus sapien. Cras sit amet ullamcorper dui. Ut euismod lacinia elit sed ullamcorper. Integer mollis neque sed dictum pretium. Integer eget elementum sapien. dolor id egestas. Nulla leo purus, facilisis non cursus ut Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
				<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet In eget sem consectetur, condimentum velit nec, rhoncus sapien. Cras sit amet ullamcorper dui. Ut euismod lacinia elit sed ullamcorper. Integer mollis neque sed dictum pretium. Integer eget elementum sapien. dolor id egestas. Nulla leo purus.</p>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //news-bottom -->

<?php include 'common/footer.php';?>
