<!DOCTYPE html>
<html>
	<head>


        <?php 
        $today = "monday";
        $spotAvailable = 0;
        $title = "Home";

        include("./includes/connect.inc.php");


        //DEBUG ONLY
        // include('./includes/ChromePhp.php');
        // ChromePhp::log('hello world');

        $query = "SELECT * FROM ITEMS";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("cannot processed select query");
        }
        // $row = mysqli_fetch_assoc($result);

        include_once("./includes/head.php");

        ?>      

       
	
	</head>
	   
   <body id="top" data-offset="80">
	  

		<!--HEADER-->

        <?php include_once("./includes/nav-bar.php") ?>

		<!--/HEADER-->
		

		

				
		<!--HOME-->		
		<section id="sec_1" class="autoheight">
		
		<!--SLIDER-->
		<div id="slides">
			<div class="slides-container">
			  <img src="assets/img/slider/1.jpg" alt="Cinelli">
			  <img src="assets/img/slider/2.jpg" alt="Surly">
			  <img src="assets/img/slider/3.jpg" alt="Cinelli">
			  
			</div>
			<nav class="slides-navigation">
			  <a href="#" class="next  fa fa-2x fa-chevron-right"></a>
			  <a href="#" class="prev  fa fa-2x fa-chevron-left"></a>
			</nav>
		</div>
		<!--/SLIDER-->
		
			<div class="home-bg"></div>
			<div class="col-lg-12 landing-text-pos align-center">
				<h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">Let's all geek out!</h1>
				<hr id="title_hr"/>
				<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">So who are you geeked about?</p>
				<a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s" data-scroll href="#intro">Let us know!</a>
			</div>
		</section>
		<!--/HOME-->
		


        <!--SPEAKERS-->
        <section class="team text-center section-padding" id="team">
			<div class="container">
				<div class="row">
				  <div class="col-lg-8 wow animated fadeInUp align-center" data-wow-duration="1s" data-wow-delay="1s">
					<h1 class="arrow">Here's who we are geeked about!</h1><hr>
					
				  </div>
				</div>
				<div class="row">
					<div class="speakers-wrap">
						<div id="portfolioSlider">
							<ul class="slides">
								<li>

<?php


foreach($result as $row){
	
				
	echo('<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"> ');
	echo('<div class="overlay-effect effects clearfix">');
	echo('<div class="img">');
	echo('<img src="'. $row["img"].'" alt="Image">');
	echo('<div class="overlay">');
	echo('<button class="md-trigger expand" data-modal="modal-'. $row["item_code"].'"><i class="fa fa-search"></i><br>View More</button>');
	echo('</div></div></div>');
	echo ('<h2>'. $row["name"].'</h2>');
	echo('</div>');
		
	}
	
	?>


								</li>
							</ul>
						</div>
					</div>
				</div> <!--Row Ends Here-->
			</div>



			<?php


foreach($result as $row){
	
				
	echo('<div class="md-modal md-effect-9" id="modal-'. $row["item_code"].'">
	<div class="md-content">
		<div class="folio">
			
		<div class="imgSm">
				<img src="'. $row["img"].'" alt="Image"> </div>
			<div class="sp-name"><strong>'. $row["name"].'</strong><br/></div>
			<div class="sp-dsc">
			'. $row["bio"].' </br> Fun fact: '. $row["fun"].'
			</div>
			<div class="sp-social">
				<ul>
					<li><a href="'. $row["other"].'" class="social-btn"><i class="fa fa-link"></i></a></li>
				</ul>
			</div>
			<button class="md-close"><i class="fa fa-times"></i></button>
		</div>
	</div>
</div> 
<div class="md-overlay"></div>');

		
	}
	
	?>


			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-1">
				<div class="md-content">
					<div class="folio">
						<div class="avatar1"></div>
						<div class="sp-name"><strong>Parents</strong><br/></div>
						<div class="sp-dsc">
						Parents have important roles in the success of the College and help ensure students make the most of their College experience.
							<blockquote>
							<p>Whether supporting students on campus during Family Weekend, volunteering time or student internships, or financially supporting College programming, parents and families contribute to College students’ intellectual development and academic achievement. </p>
							</blockquote>
						Annual events celebrate and mark the progress students make throughout their College education, and they are as much for parents, family, and friends as they are for our students.
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->
			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-2">
				<div class="md-content">
					<div class="folio">
						<div class="avatar2"></div>
						<div class="sp-name"><strong>Research</strong><br/></div>
						<div class="sp-dsc">
						A record high in annual research expenditures at the Mendota University led to innovative research and scholarship endeavors that address emerging problems, spur new technologies and drive the economy. 
							<blockquote>
							<p>Mendota U is a leading university because of its unmatched commitment to research and discovery.</p>
							</blockquote>
						With expenditures in excess of $1 billion, research is central to Menodta U’s mission and permeates all 19 schools and colleges. Mendota U is a strong advocate of promoting collaboration and interdisciplinary research initiatives that involve faculty and students from across campus.
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->
			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-3">
				<div class="md-content">
					<div class="folio">
						<div class="avatar3"></div>
						<div class="sp-name"><strong>Awards</strong><br/></div>
						<div class="sp-dsc">
						Mendota University is proud of all our creative, innovative, and talented faculty. 
							<blockquote>
							<p>Six Mendota University professors are to receive a Presidential Early Career Award for Scientists and Engineers, according to an announcement on July 2, 2019.</p>
							</blockquote>
						Mendota University has earned a STARS Gold rating in recognition of its sustainability achievements from the Association for the Advancement of Sustainability in Higher Education (AASHE).
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->

        </section>
		<!--/SPEAKER-->

        
<?php include_once("./includes/footer.php")?>

	<!-- LANDINGPAGE SLIDER  -->
    <script type="text/javascript" src="./assets/js/hammer.min.js"></script>	
		<script type="text/javascript" src="./assets/js/jquery.superslides.js"></script>

        		<!-- INITIALIZATION  -->
		<script type="text/javascript" src="assets/js/init_<?php echo $title?>.js"></script>

	</div>	
		
    </body>
</html>