<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151009134-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151009134-1');
</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>A1SOFTECH - OUTSOURCING</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="../favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Line icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
	<link rel = "stylesheet" type = "text/css" href = "Style.css"/>
	<link href="index.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Montserrat for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 
	<link  rel="stylesheet" href="assets/fontawesome/css/all.min.css"/>

	<script src="assets/fontawesome/js/all.min.js"></script>
 
	  <style>

		/* width */
		::-webkit-scrollbar {
		width: 10px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		background: #f1f1f1;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
		background: #888;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		background: #555;
		}

		.mu-featured-slider-single
		{
			height: 80vh;
			width: 100vw;
		}

		.mu-featured-slider-single img 
		{
			height: 100%;
			width: 100%;
		}

		#mu-counter
		{
			background-image: url(assets/images/bg.jpg);
		}

		.mu-featured-slider-single::before, #mu-counter:before, .mu-filter-item-content, .mu-simplefilter li:hover, .mu-simplefilter li.active, .mu-team-content-single:hover
		{
			background: #4568DC;
			background: rgba(69,104,220, 0.8);
		}

		@media only screen and (max-width : 812px)
		{
		    *
		    {
		        padding : 0px;
		        margin : 0px;
		        overflow : hidden !important;
		    }
		    html 
		    {
		        overflow : scroll !important;
		    }
		    body 
		    {
		        width : 100vw !important;
		        overflow-x : hidden !important;
		        overflow-y : scroll !important;
		    }
			#mu-featured-slider
			{
				height: 50vh;
			}
			
			#mu-featured-slider .row, #mu-featured-slider .row div,  #mu-featured-slider .row div div , #mu-featured-slider .row div div img
			{
				height: 100% !important;
			}
			#navabar-brand-img
			{
				width: 50px;
			}
			#mu-featured-slider
			{
			    width : 100vw !important;
			    overflow : hidden !important;
			    height : 80vh !important;
			}
			#navabar-brand-img
			{
			    width : 40px !important;
			}
			#navbar-brand
			{
			    overflow : hidden !important;
			}
			.row 
			{
			    margin : 0px !important;
			    width : 100vw !important;
			}
			#mu-about .container .row .col-md-12
			{
			    padding-right : 0px !important;
			    padding-left : 0px !important;
			}
			.navbar-default .navbar-toggle
			{
			    border-color : transparent !important;
			}
			.col-md-12
			{
			    padding : 0px !important;
			}
			.container 
			{
			    padding : 0px !important;
			}
			.navbar-brand
			{
			    margin-left : 30px !important;
			}
			h1
			{
			    font-size : 26px !important;
			}
			.mu-primary-btn
			{
			    width : 50% !important;
			}
			.mu-featured-slider-single h1, .mu-featured-slider-single p 
			{
			    padding-left : 1.5rem;
			    padding-right : 1.5rem;
			}
			.mu-service-header p 
			{
			    padding-left : 1.5rem;
			    padding-right : 1.5rem;
			}
		}
	  </style>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script>
		const openSwal_error = (message) => {
			Swal.fire(
				'ERROR!',
				`${message}!`,
				'error'
			)
		}

		const openSwal_success = (message) => {
			window.location.href = "/outsourcing/thanks.html";						
		}
	</script>

  </head>
  <body>
  <?php 
		if(isset($_POST['sendmail'])) {
			$PathName = "/home1/aonesof1/public_html/outsourcing";
			require 'credential.php';
			require "{$PathName}/PHPMailer/src/PHPMailer.php";
			require "{$PathName}/PHPMailer/src/SMTP.php";
			require "{$PathName}/PHPMailer/src/Exception.php";
		  
			$mail = new PHPMailer\PHPMailer\PHPMailer();
			$mail->IsSMTP(); 

			$mail->Host = 'mail.a1softech.com';  
			$mail->SMTPAuth = false;    
			$mail->Username = EMAIL;                 			  
			$mail->Password = PASS;                           	  
			$mail->SMTPSecure = 'tls';                           
			$mail->Port = 26;                                    

			$mail->setFrom(EMAIL, $_POST['name']);
			$mail->addAddress('info@a1softech.com');     

		
			$mail->isHTML(true);         
			$mail->Subject = "Outsourcing";
			$mail->Body    = "<div> <b>Name</b> : {$_POST['name']} <br/> <b>Phone number</b> : {$_POST['phone']} <br/> <b>Message</b> : {$_POST['message']} </div>";

			$mail->AltBody = $_POST['message'];

			function debug_to_console_success($data) {
				$output = $data;
				if (is_array($output))
					$output = implode(',', $output);
			
				echo "<script>openSwal_success('". $output . "');</script>";
			}

			function debug_to_console_error($data) {
				$output = $data;
				if (is_array($output))
					$output = implode(',', $output);
			
				echo "<script>openSwal_error('". $output . "');</script>";
			}
			
			if(!$mail->send()) {
				debug_to_console_error('Message could not be sent.');
				debug_to_console_error('Mailer Error: ' . $mail->ErrorInfo);

			} else {
			    debug_to_console_success('Message has been sent');
			}
		}
	 ?>
	 
	  <!-- Start Header -->
	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

		      <!-- Text Logo -->
		      <a class="navbar-brand" href="#">
				  <img id="navabar-brand-img" src="assets/images/whiteLogo.svg" width="60px"/>
			  </a>

		      <!-- Image Logo -->
		      <!-- <a class="navbar-brand" href="#"><img src="assets/images/logo.png"></a> -->


		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav mu-menu navbar-right">
			        <li><a href="#mu-featured-slider">ABOUT</a></li>
			        <li><a href="#mu-service">VISION</a></li>
			        <li><a href="#mu-counter">OUTSOURCING</a></li>
		            <li><a href="#mu-contact">CONTACT</a></li>
		      	</ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Featured Slider -->

	<section id="mu-featured-slider">
		<div class="row">
			<div class="col-md-12">
				<div class="mu-featured-slide">

					<!-- Start Single slide -->
					<div class="mu-featured-slider-single" >
						<img src="assets/images/slider-img-2.jpg" height="100%">
						<div class="mu-featured-slider-content">
							<h1 style="font-size: 42px;">WE BUILD WORLD-CLASS TEAMS</h1>
							<p>
								A1softech is Belgium/Egyptian offshoring company working in the software development sector, supplying our clients with professional IT resources. The company has been in business since 2013 and provides excellent services within offshoring software development. The headquarters are in Belgium and the Offshore Development Center is located in Maadi, Cairo. 
							</p>
							
							<button onClick="document.location.href='./Contact.php'" class="mu-primary-btn" style="background: white !important;
							color : #222 !important;">CONTACT US</button>
						</div>
					</div>
					<!-- End Single slide -->
				</div>
			</div>			
		</div>
	</section>
	
	<!-- Start Featured Slider -->
	


	<section id="mu-service">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-service-area">
						<div class="mu-about-header">
														<h2 class="mu-heading-title" style="color: #222 !important;">THE VALUE OF  
															<span>
																OUR CLIENTS
															</span>
														</h2>
														<span class="mu-header-dot" style="color: white !important;background-color: white !important;"></span>
														<p style="color: #222 !important;font-size: 1.8rem !important;padding : 5rem">
														    Outsourcing, the driving force behind the decision to outsource is the power it gives your company to focus on its core competencies: delivering quality products or services. Outsourcing allows your company to redirect its focus to revenue-driven processes instead of behind-the-scenes administrative functions by opening up the doors for your company to access top-level professionals in its non-core areas. Thus, your company reaps the benefits of state-of-the-art technology and industry-defined best practices, and can stay up-to-date on compliance and legal issues, all without sacrificing the expertise and efficiency of your company’s services.
															Outsourcing has been a valuable strategic management tool for decades. In today’s highly competitive and ever-widening global marketplace, outsourcing can give your company an “edge” over organizations who fall into the economic trap of “Jack-of-all-trades, master of none”. Realistically, expertise is limited to a particular field; it is highly unusual to find an individual – or even a group – that can be self-sufficient and competitive in each area. In other words, it is virtually impossible to hire in-house “experts” in every field necessary to run a company. Outsourcing, however, allows your company to utilize the experts while maintaining focus in its primary (product or service) field. This, in turn, creates more flexibility and opportunity for your company to move forward: in an economy rich with mergers, divestitures, and new business launches, outsourcing can help your company stay “nimble” to better manage business change.
														</p>
						</div>
					</div>
				</div>
		</div>
	</section>
		<!-- End Service -->
		

		<!-- Start Counter -->
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<section id="mu-about">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
												<div class="mu-about-area">
												    
												    	<div class="mu-service-header">
							<h2 class="mu-heading-title" style="text-transform: uppercase;color : white !important">OUR MISSION </h2>
							<p style="font-size: 2rem !important;color : white !important">We supply Middle east and European customers with highly motivated and skillful resources delivering high quality work at a competitive price.</p>
						</div>

						<div class="mu-service-header" style="margin-top: 12rem;margin-bottom: 10rem;color : white !important">
							<h2 class="mu-heading-title" style="text-transform: uppercase;color : white !important">OUR VISION</h2>
							<p style="font-size: 2rem !important;color : white !important">To be the preferred European and Middle East Offshoring and onsite partner within IT and engineering disciplines..</p>
						</div>
						
												
													
												</div>
											</div>
										</div>
									</div>
								</section>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->


		
	<section id="mu-service">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-service-area">
						<div class="mu-service-header">
							<h2 class="mu-heading-title" style="text-transform: uppercase;">We outsource the following<span> technologies </span></h2>
							<span class="mu-header-dot"></span>							
						</div>

						<!-- Start Service Content -->
						<div class="mu-service-content">
							<div class="row">

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">		
										<span class="mu-service-icon-box">
											<i class="fab fa-microsoft"></i>
										</span>
										<h4>Backend Asp.net and dotnet core</h4>
									</div>
								</div>
								<!-- / Service Single Content -->

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">	
										<span class="mu-service-icon-box">
											<i class="fab fa-microsoft"></i>
										</span>
										<h4>Full Stack Asp.net and dotnet core</h4>
									</div>
								</div>
								<!-- / Service Single Content -->

				

								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
										<span class="mu-service-icon-box">
											<i class="fab fa-angular"></i>
										</span>
										<h4>Angular Frontend Developer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
										  <span class="mu-service-icon-box">
											<i class="fab fa-react"></i>
										</span>
										<h4>React Frontend Developer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
		

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">			
										 <span class="mu-service-icon-box">
											<i class="fa fa-database"></i>
										</span>
										<h4>Share Point Developer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->


								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">		
									<span class="mu-service-icon-box">
											<i class="fa fa-database"></i>
										</span>
										<h4>MS SQL Server DB</h4>
									</div>
								</div>
								<!-- / Service Single Content -->

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">	
									<span class="mu-service-icon-box">
											<i class="fa fa-database"></i>
										</span>
										<h4>Oracle DB</h4>
									</div>
								</div>
								<!-- / Service Single Content -->

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">	
									<span class="mu-service-icon-box">
											<i class="fa fa-database"></i>
										</span>
										<h4>Mongo DB</h4>
									</div>
								</div>
								<!-- / Service Single Content -->

							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
										<div class="mu-service-content-single">		
										
											<span class="mu-service-icon-box">
											<i class="fab fa-java"></i>
										</span>
											<h4>Java Developer</h4>
										</div>
									</div>
									<!-- / Service Single Content -->
									<!-- Service Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-service-content-single">	
											<span class="mu-service-icon-box">
											<i class="fab fa-php"></i>
										</span>
											<h4>PHP Developer </h4>
										</div>
									</div>
									<!-- / Service Single Content -->
	

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">		
										<span class="mu-service-icon-box">
											<i class="fab fa-python"></i>
										</span>
										<h4>Python Developer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
										
											<span class="mu-service-icon-box">
											<i class="fab fa-node"></i>
										</span>
										<h4>NodeJS developer </h4>
									</div>
								</div>
								<!-- / Service Single Content -->

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fab fa-wordpress"></i>
										</span>
										<h4>WordPress Developer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fab fa-magento"></i>
										</span>
										<h4>Magento Developer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fa fa-code"></i>
										</span>
										<h4>UI Developer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
										
											<span class="mu-service-icon-box">
											<i class="fa fa-pen-nib"></i>
										</span>
										<h4>UX Designer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
						

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fab fa-android"></i>
										</span>
										<h4>Android developer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
															
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fab fa-apple"></i>
										</span>
										<h4>Apple iOS Developer </h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fab fa-microsoft"></i>
										</span>
										<h4>Xamarin Developer</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fab fa-google"></i>
										</span>
										<h4>Flutter developer </h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fa fa-brain"></i>
										</span>
										<h4>Scrum Master</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fa fa-truck"></i>
										</span>
										<h4>Delivery manager </h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							

								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fa fa-sitemap"></i>
										</span>
										<h4>Solution architect </h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fa fa-chart-pie"></i>
										</span>
										<h4>Business analyst </h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fa fa-user-shield"></i>
										</span>
										<h4>DevOps engineer </h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fa fa-users"></i>
										</span>
										<h4>Technical Team Leader</h4>
									</div>
								</div>
								<!-- / Service Single Content -->

												
								<!-- Service Single Content -->
								<div class="col-md-3 col-sm-6">
									<div class="mu-service-content-single">
											<span class="mu-service-icon-box">
											<i class="fa fa-vial"></i>
										</span>
										<h4>Software quality control (Tester)</h4>
									</div>
								</div>
								<!-- / Service Single Content -->
							
							
							</div>
						</div>
						<!-- End Service Content -->

					</div>
				</div>
			</div>
		</div>
</section>
	<!-- End Service -->


	  
	<div class="clients" id="clients">
			<div class="sectionHeader masking">
					<!-- <h2 class="numbering center">05</h2> -->
					<h1 class="title">OUR CLIENTS</h1>
			</div>
			<div class="verticaLine"></div>
			<div class="imagesArray" ></div>
			<div id="careers" style="height:1px; position:absolute;margin-bottom: 10px;"></div>
			
	</div>
	
	
        <div id="clients-mobile">
                        
                        


        </div>


		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-contact-header">
								<h2 class="mu-heading-title">CONTACT <span>US</span></h2>
								<span class="mu-header-dot"></span>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

									<div class="col-md-8">
											<section id="mu-google-map">
													<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.217039917398!2d31.277764115450143!3d29.973191928889175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145838669d6db5b1%3A0xf6bf10bce3baab9e!2sA1Softech!5e0!3m2!1sen!2seg!4v1575903732704!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
												</section>
									</div>	

									<div class="col-md-4">
										<div class="mu-contact-right">
											<h4>A1Softech</h4>
											
											<address>
												<p><i class="icon-location-pin"></i>93 El-Laselky ST - Maadi,Cairo, Egypt</p>
												<!-- change mail -->
												<p><i class="icon-envelope"></i>info@a1softech.com</p>
												<p><i class="icon-phone"></i>+20 109 411 7701</p>
											</address>
											<button onClick="document.location.href='./Contact.php'" class="mu-primary-btn" style="background : rgba(69,104,220, 1);color : #fff !important;">CONTACT US</button>
										</div>
									</div>	

								</div>
							</div>
							<!-- End Contact Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->


	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
			<div class="container">
				<div class="mu-footer-area">
					<p>&copy; Copyright <a rel="nofollow" href="https://a1softech.com">A1softech.com</a>. All right reserved.</p>
				</div>
			</div>

	</footer>
	<!-- End footer -->

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Contact US</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
				<form role="form" method="post" enctype="multipart/form-data">
					Name : <br>
					<input required type="name" class="form-control" id="name" name="name" placeholder="Enter your name" style="margin-bottom: 0.6rem;margin-top: 0.1rem;"><br>
					Phone number :<br>
					<input required type="text" placeholder="Enter your phone number" class="form-control" name="phone" style="margin-bottom: 0.6rem;margin-top: 0.1rem;"><br>
					Message : <br>
					<textarea required type="textarea" id="message" class="form-control" name="message" size="50" style="margin-bottom: 0.6rem;margin-top: 0.1rem;width: 100%;"
					placeholder="Enter your message"></textarea>
						<br><br>
					<button type="reset"  >Reset</button>
					<button type="submit" name="sendmail" class="btn btn-primary">Send</button>
				</form>
			</div>
			
		</div>
		</div>
	</div>
	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    
	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<script src="./Script.js"></script>
    
  </body>
</html>