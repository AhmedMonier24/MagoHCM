<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A1SOFTECH - Contact Us</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500&display=swap" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
    <link rel = "stylesheet" type = "text/css" href = "StyleC.css"/>
     
     
    <link rel="shortcut icon" type="image/icon" href="../favicon.ico"/>
    <link href="indexButton.css" rel="stylesheet">
    <!-- Fonts -->

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
			height: 120vh;
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
			    height : 100vh !important;
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
<body onscroll="scrollFunction()">
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
			$mail->Body    = "<div> <b>Name</b> : {$_POST['name']} <br/>  <b>Country</b> : {$_POST['country']} <br/> <b>Phone number</b> : {$_POST['phone']} <br/> 
			<b>Email</b> : {$_POST['email']} <br/> <b>Company</b> : {$_POST['company']} <br/> <b>Message</b> : {$_POST['message']} </div>";

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
			    header("Location: ./index.php");
                exit;
			}
		}
	 ?>
    <div class="container">
        <header>
            <div class="logoContainer">
                <img class="logo" src="/Assets/images/A1Logo.svg">
            </div>
            <div class="navigation">
                    <a href="#Contact">CONTACT US</a>
                    <a href="#A1">WHO ARE WE</a>
                    <a href="#products">OUR PRODUCTS</a>
                    <a href="#services">OUR SERVICES</a>
                    <a href="#clients">OUR CLIENTS</a>
                    <a href="#careers">CAREERS</a>
                    <a href="#support">OUR SUPPORT</a>
            </div>
          
        </header>
 
        <div class="who" id="Contact">
            <div class="left" data-aos="fade-right" data-aos-duration="3000">
                <img class="img" src="/Assets/images/contactus.svg"></img>
            </div>
              <div class="right" data-aos="fade-left">
                            <div class="description">
                                    <div>
                                        <div class="sectionHeader">
                                            <h2 class="numbering">01</h2>
                                            <h1 class="title">CONTACT US</h1>
                                            <div class="line"></div>
                                        </div>
                                        <div class="row">
                								<form role="form" method="post" enctype="multipart/form-data">
                                                    <div class="col-md-12">
                            							<input required type="name" class="form-control" id="name" name="name" placeholder="Enter your name*" style="margin-bottom: 0.6rem;margin-top: 0.1rem;"><br>
                            							
                            							<input required type="text" placeholder="Enter your country*" class="form-control" name="country" style="margin-bottom: 0.6rem;margin-top: 0.1rem;"><br>
                            							
                            							<input required type="text" placeholder="Enter your company*" class="form-control" name="company" style="margin-bottom: 0.6rem;margin-top: 0.1rem;"><br>
                            							
                            						</div>
                            						<div class="col-md-12">
                            							<input required type="text" placeholder="Enter your E-Mail*" class="form-control" name="email" style="margin-bottom: 0.6rem;margin-top: 0.1rem;"><br>
                            							
                            							<input required type="text" placeholder="Enter your phone number*" class="form-control" name="phone" style="margin-bottom: 0.6rem;margin-top: 0.1rem;"><br>
                            						</div>
                            						<div class="col-md-12" align="left">
                            							
                            							<textarea required type="textarea" id="message" class="form-control" name="message"  style="margin-bottom: 0.6rem;margin-top: 0.1rem;width: 100%;height: 82px;"
                            							placeholder="Enter your message*"></textarea>
                            								<br><br>
                            							<button type="reset"  class="mu-primary-btn" style="background: red !important; color : #fff !important;">Reset</button>
                            							<button type="submit" name="sendmail" class="mu-primary-btn" style="background : rgba(69,104,220, 1);color : #fff !important;">Send</button>
                            						</div>
                        						</form>
    						            </div>
                                    </div>
                            </div>
                        </div>
            
        </div> 
        <div class="who" id="A1">
            
                    <div class="left" data-aos="fade-right" data-aos-duration="3000">
                            <img class="img" src="/Assets/images/US.svg"></img>
                        </div>
                        <div class="right" data-aos="fade-left">
                            <div class="description">
                                    <div>
                                        <div class="sectionHeader">
                                            <h2 class="numbering">02</h2>
                                            <h1 class="title">WHO WE ARE</h1>
                                            <div class="line"></div>
                                            <h2 class="subtitle">A1SOFTECH | 5 YEARS EXPERIENCE</h2>
                                        </div>
                                    <p>A1Softech is a leading, highly innovative software firm, systems integrator and 
                                            technology provider, established since 2013 to provide leading edge intelligent 
                                            technical solutions and consulting services to businesses,  organizations and 
                                            government in  order to allow the efficient and effective secure access and 
                                            communication with various heterogeneous in formation resources and services, any 
                                            time and anywhere”, We believe that our job is  to listen, research and understand 
                                            the requirements unique to each individual business. In  fact, it  is  the long-term 
                                            relationships with our clients that has served as a solid foundation for our company.
                                        </p>
                                    </div>
                            </div>
                        </div>
        </div>
           <div class="goals">
               <div class="subDivision"></div>
                <div class="items">
                        <div class="item" data-aos="zoom-out-down">
                            <img src="/Assets/images/mission.png" style="filter: none;" alt="mission">
                            <h2 class="subtitle" style="margin: 20px 0;">MISSION</h2>
                            <p class="text">Provide distinguished software services in the global markets by constant innovation in technology, Illuminating the surroundings by sharing our knowledge and adopting an integral approach towards work thus creating a congenial and nurturing environment that will enable us to increase our revenues constantly increasing the assets for all our stakeholders.</p>
                        </div>
                        <div class="item" data-aos="zoom-out-down">
                                <img src="/Assets/images/vision.png"  style="filter: none;" alt="vision">
                                <h2 class="subtitle" style="margin: 20px 0;">VISION</h2>
                                <p class="text">To develop in a constant manner and grow as a major IT service provider to become a leading performer, in providing quality web, mobile and professional, flexible and integrated process reflects in what we do. We always guide our customers to success. We have the ability to accelerate and quickly share the great work or products of your organization or business.</p>
                        </div>
                </div>
                <!-- <div class="division"></div> -->
            </div>
            
            <div class="products" id="products">
                <div class="itemContainer">
                        <div class="sec">
                                <h2 class="numbering center">03</h2>
                                <h1 class="title center">OUR PRODUCTS</h1>
                                <div class="line center"></div>
                        </div>
                        <div class="items wrap">
                            <div class="item product" id="cms" data-aos="fade-down-right">
                                <img class="icon" src="/Assets/images/products/contract.svg"/>
                                <h2>- A1 CMS -</h2>
                                <p>Contract Managment System</p>
                            </div>
                            <div class="item product" id="pm" data-aos="zoom-in">
                                    <img class="icon"  src="/Assets/images/products/managment.svg"/>
                                    <h2>- A1 PM -</h2>
                                    <p>Project Managment Solution</p>
                            </div>
                            <div class="item product" id="dms" data-aos="zoom-in">
                                    <img class="icon"  src="/Assets/images/services/web.svg"/>
                                    <h2>- A1 DMS -</h2>
                                    <p>Document Relationship Management </p>
                            </div>
                            <div class="item product" id="wf" data-aos="fade-left">
                                    <img class="icon"  src="/Assets/images/products/workflow.svg"/>
                                    <h2>- Workflow -</h2>
                                    <p>Workflow Managment Solution</p>
                            </div>
                            <div class="item product" id="clm"  data-aos="fade-right">
                                    <img class="icon" src="/Assets/images/products/marketing.svg"/>
                                    <h2>- A1 CLM -</h2>
                                    <p>Closed Loop Marketing Solution</p>
                            </div>
                            <div class="item product" id="emt" data-aos="zoom-in">
                                    <img  class="icon" src="/Assets/images/products/event.svg"/>
                                    <h2>- A1 EMT -</h2>
                                    <p>Event Management Tool Solution</p>
                            </div>
                            <div class="item product" id="lms" data-aos="zoom-in">
                                    <img class="icon" src="/Assets/images/products/leadership.svg"/>
                                    <h2>- A1 LMS -</h2>
                                    <p>Leadership Managment System</p>
                            </div>
                            <div class="item product" id="hr" data-aos="fade-up-left">
                                    <img class="icon" src="/Assets/images/products/hr.svg" />
                                    <h2>- A1 HR -</h2>
                                    <p>Human Resources Solution</p>
                            </div>
                        </div>
                </div>
        </div>
        
        <div class="section">
            <div class="parallex">
                <p data-aos="zoom-in-down">We see our customers as invited guests to a party, and we are the hosts. It’s our job every day to make every important aspect of the customer experience a little bit better.

                </p>
            </div>
          
        </div>
      <div class="services" id="services">
                <div class="itemContainer">
                        <div class="sec">
                                <h2 class="numbering center">04</h2> 
                                <h1 class="title center">OUR SERVICES</h1>
                                <div class="line center"></div>
                        </div>
                        <div class="items wrap">
                            <div class="service" id="web" data-aos="fade-down-right">
                                <img src="/Assets/images/services/web.svg"/>
                                <h2 >Web Application development</h2>
                                <p>A1softech is an experienced software development firm providing offshore and onsite software development services.</p>
                            </div>
                            <div class="service" id="test" data-aos="zoom-in">
                                    <img src="/Assets/images/services/testing.svg"/>
                                    <h2>Software Testing</h2>
                                    <p>We offer different types of software testing services from test case design to test report generation. </p>
                            </div>
                            <div class="service"  id="ai" data-aos="zoom-in">
                                    <img src="/Assets/images/services/ai.svg"/>
                                    <h2>AI Applications</h2>
                                    <p>Enhance your future application with artificial intelligence features, such as image-processing, speech recognition. </p>
                            </div>
                            <div class="service"  id="iot" data-aos="fade-left">
                                    <img src="/Assets/images/services/iot.svg"/>
                                    <h2>IOT Applications</h2>
                                    <p>Leverage processing of streaming data and immediate response delivery .</p>
                            </div>
                            <div class="service"  id="app" data-aos="fade-right">
                                    <img src="/Assets/images/services/mobile.svg"/>
                                    <h2>Mobile Application development</h2>
                                    <p>The application can be totally standalone running in a single machine or internet connected application.</p>
                            </div>
                            <div class="service"  id="out" data-aos="zoom-in">
                                    <img src="/Assets/images/services/outsourcing.svg"/>
                                    <h2>Outsourcing Services</h2>
                                    <p>It reduces the risk, time and capital invested in the recruitment and employment processes.</p>
                            </div>
                            <div class="service" id="tech" data-aos="zoom-in">
                                    <img src="/Assets/images/services/consultancy.svg"/>
                                    <h2>Technology Consultancy</h2>
                                    <p>A1softech provides high-end and mission critical enterprise solutions meeting all your requirements to achieve your ultimate business goal.</p>
                            </div>
                            <div class="service" id="mark" data-aos="fade-up-left">
                                    <img src="/Assets/images/services/Digital.svg" style="width: 27px;"/>
                                    <h2>Digital Marketing</h2>
                                    <p>Digital marketing encompasses all marketing efforts that use an electronic device or the internet.</p>
                            </div>
                        </div>
                </div>
            </div>
      
        <div class="clients" id="clients">
                <div class="sectionHeader masking">
                        <h2 class="numbering center">05</h2>
                        <h1 class="title">OUR CLIENTS</h1>
                </div>
                <div class="verticaLine"></div>
                <div class="imagesArray"></div>
        </div>
        <div class="careers" id="careers">
                <div class="left" data-aos="fade-right" data-aos-duration="3000">
                        <img class="img" src="/Assets/images/interview.svg"></img>
                    </div>
                    <div class="right"  data-aos="fade-left">
                        <div class="description">
                                <div>
                                    <div class="sectionHeader">
                                        <h2 class="numbering">06</h2>
                                        <h1 class="title">JOIN A1SOFTECH !</h1>
                                        <div class="line"></div>
                                        <h2 class="subtitle">Have a Passion to Excel and a Desire to grow?</h2>
                                    </div>
                                <p>Evolutionary, Passionate, Meaningful and Friendly- the very core values of A1softech define the work culture and life in the organization. We hold our people first and that is how we have come so far in so less time. </p>
                                <h2 class="subtitle">JOB VACANCIES</h2>
                                <div>
                                    <p id="job-vacancy"></p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="support" id="support">
            <div class="support-image">
                <img src="/Assets/images/contact.jpg" />
            </div>
            <div>
                    <div class="sectionHeader" data-aos="zoom-out-up">
                            <h2 class="numbering center">07</h2>
                            <h1 class="title center">OUR SUPPORT</h1>
                            <div class="line center"></div>
                            <h2 class="subtitle center">ALWAYS KEEN ABOUT OUR PARTNERS</h2>
                            <p>
                               A1softech are always keen about their partners so when people call our call center, our reps don’t have scripts, and they don’t try to up-sell. They are just judged on whether they go above and beyond for the customer and really deliver a kind of personal service and emotional connection with our customers
                            </p>
                            <h2 class="subtitle center">“PEOPLE EXPECT GOOD SERVICE BUT FEW ARE WILLING TO GIVE IT”</h2>
                        </div>
                      
            </div>
        </div>
        <div class="branches" id="branches" >
                <div class="sectionHeader">
                        <h2 class="numbering center">08</h2>
                        <h1 class="title center">OUR BRANCHES</h1>
                        <div class="line center"></div>
                </div>
                <div class="Maps">
                    <div class="location">
                    <div class="Map">
                            <!-- <iframe width="500" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=31.22597694396973%2C29.949803212352993%2C31.321763992309574%2C29.99218457641096&amp;layer=transportmap&amp;marker=29.970996154175417%2C31.27387046813965"></iframe> -->
                            <img style="width: 500px; height: 200px; overflow: hidden;" src="/Assets/images/locations/a1softechMasr.PNG" />
                            <a style="position: absolute; align-self: flex-end; padding: 6px;"  href="https://www.google.com/maps/place/A1Softech/@29.9731919,31.2777641,17z/data=!3m1!4b1!4m5!3m4!1s0x145838669d6db5b1:0xf6bf10bce3baab9e!8m2!3d29.9731873!4d31.2799528">View Larger Map</a>
                    </div>
                            <div>Egypt Address :Maadi,Cairo, Egypt</div>
                            <div>Mobile: +201094117701</div>

                    </div>
                    <div class="location">
                    <div class="Map">
                            <!-- <iframe width="500" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=4.505617618560792%2C51.30035813923029%2C4.511604309082032%2C51.302269900399054&amp;layer=transportmap&amp;marker=51.30131402976782%2C4.508610963821411"></iframe> -->
                            <img style="width: 500px; height: 200px; overflow: hidden;" src="/Assets/images/locations/a1softechBelgium.PNG" />
                            <a style="position: absolute; align-self: flex-end; padding: 6px;" href="https://www.google.com/maps/place/Heislag,+2930+Brasschaat,+Belgium/@51.3012331,4.5063707,17z/data=!3m1!4b1!4m5!3m4!1s0x47c407b53c8e47fb:0x38cc4aaba120c31b!8m2!3d51.3012298!4d4.5085594">View Larger Map</a>
                    </div>
                            <div>Egypt Address :Maadi,Cairo, Egypt</div>
                            <div>Mobile: +201094117701</div>
                        
                </div>
        </div>
        <footer >
            <div class="footer-categories">
            <div >
                <div class="footer-header">OUR VALUES</div>
                <div class="value">
                    <div class="veticaLine"></div>
                    <div class="value">
                        <div><b>Creativity</b></div>
                        <div>Cutting Edge Technology</div>
                        <div><b>Innovation</b></div>
                        <div>Customer Satisfaction</div>
                    </div>
                    <div class="veticaLine"></div>
                </div>
            </div>
            <div>
                <div class="footer-header">CONTACT US</div>
                <div class="list">
                        <div class="links">
                            <!-- <i class="fab fa-facebook-square" href="https://www.linkedin.com/company/a1softech/"></i>
                            <i class="fab fa-linkedin-in"  href="https://www.linkedin.com/company/a1softech/"></i> -->
                            <a href="https://www.facebook.com/A1softech"><img src="/Assets/images/social/facebook.svg" style="width: 15px;filter: invert(0.3);"/></a>
                            <a href="https://www.linkedin.com/company/a1softech/"><img src="/Assets/images/social/linkedin.svg" style="width: 15px;filter: invert(0.3);"/></a>
                        </div>
                        <div>01094117701</div>
                        <div>a1softech.com</div>
                </div>
            </div>
            <div>
                <div class="footer-header">JUMP LINKS</div>
                <div class="footer-links">
                        <a href="#products" class="fas fa-chevron-right">OUR PRODUCTS</a>
                        <a href="#services" class="fas fa-user">OUR SERVICES</a>
                        <a href="#clients" class="fas fa-chevron-right">OUR CLIENTS</a>
                        <a href="#support" class="fas fa-chevron-right">OUR SUPPORT</a>
                        <a href="#careers" class="fas fa-chevron-right">OUR CAREERS</a>
                </div>
            </div>
            </div>
            <div class="copyrights">
                    © Copyright 2017 - 2019 | A1softech Company | All Rights  Reserved | Powered by A1Softech
            </div>
        </footer>
    </div>
    <div id="modal">
        <div id="modalBox">
                
        </div>
    </div>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
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