<!DOCTYPE html>
<html>
	<head>


        <?php 

                 // DEBUG ONLY
        include('./includes/ChromePhp.php');
        ChromePhp::log('hello world');


        $title = "Tell us";
    
        include_once("./includes/head.php");

        ?>  
     
	
	</head>
	   
   <body id="top" data-spy="scroll" data-target=".header" data-offset="80">
	  

		<!--HEADER-->

	<?php include_once("./includes/nav-bar.php") ?>
	

		<!--/HEADER-->
	
		
		<!--LINE UP-->        
        <section class="text-center section-padding" id="responsive">
			<div class="container wow animated fadeInLeft bottom-spacing">
				<div class="row">
					<div class="col-md-8 align-center wow animated fadeInLeft">
						<h1 class="arrow">Tell us about the person you are geeked about! </h1><hr>
					</div>
				</div>
			</div>
			
			<div class="container-schedule container wow animated fadeInDown animated" data-wow-duration="1s" data-wow-delay="1s">
				<div id="tabs-ui" class="tabs">

					<div class="content">


						
					</div><!-- /content -->
				</div><!-- /tabs -->
			</div>
        </section>
		

					<!--SUBSCRIBE-->	
                    <section class="subscribe section-padding text-center ">
			<div class="subscribe-overlay"></div>
			<div class="container wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
				<!-- <h1>Login</h1> -->
				<form action="insert.php" name="login_form" method="POST" class="center-block align-center col-lg-5 col-md-5 col-sm-10 col-xs-10">
					<div class="input-group col-lg-12 align-center">
                      <input type="text" class="form-control email-add" name="name" placeholder="Name">
					  <input type="text" class="form-control email-add" name="img" placeholder="Image URL">
					  <input type="text" class="form-control email-add" name="bio" placeholder="Bio">
					  <input type="text" class="form-control email-add" name="fun" placeholder="Fun Fact">
					  <input type="text" class="form-control email-add" name="other" placeholder="Other info">
					  <button name="submit_button" type="submit" class="btn btn-default notify-button"><i class="fa fa-paper-plane"></i><span>Send</span></button>
					</div>
				</form>
			</div>
        </section>



        
<?php include_once("./includes/footer.php")?>
		<!-- SCHEDULE TABS  -->
        <script type="text/javascript" src="assets/js/modernizr.js" ></script>
        <script type="text/javascript" src="assets/js/cbpFWTabs.js" ></script>		
        
                		<!-- INITIALIZATION  -->
		<script type="text/javascript" src="assets/js/init_<?php echo $title?>.js"></script>
        
        
<script>
//TODO: remove if not implementation is found
// window.addEventListener("load", function(){

//     for(let i=1; i<6; i++){
//         document.getElementById(i).onclick = function(){  console.log(`Clicked ${i}`);

//         window.location.href=`scheduler.php?uid=${i}`;


//     }

// };
// });

</script>
	</div>	
		
    </body>
</html>