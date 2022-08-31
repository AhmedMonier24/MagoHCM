<!DOCTYPE html>
<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Ads: 971607416 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-971607416"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-971607416');
</script>

<!-- Event snippet for Page view conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-971607416/guCRCIKSyuwBEPiaps8D'});
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TXQ758S');</script>
<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '889860855089308');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=889860855089308&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Linkedin Pixel Code -->
<script type="text/javascript">
_linkedin_partner_id = "3012513";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3012513&fmt=gif" />
</noscript>
<!-- End Linkedin Pixel Code -->

<!-- Snap Pixel Code -->
<script type='text/javascript'>
(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', 'a47bd044-e48f-4e1c-bca8-d07a70f1a4a7', {
'user_email': '_INSERT_USER_EMAIL_'
});

snaptr('track', 'PAGE_VIEW');

</script>
<!-- End Snap Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151009134-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151009134-1');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mago hcm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assest/css/style.css">
    <style >
        .service-another-page
        {
            text-decoration: none !important;
            color:var(--gray-color)
        }
        
        .service-another-page:hover
        {
            color: var(--secondary-color)
        }
        body
        {
            background-color:#f5f5f5;
        }
        #Contact
        {
            border-radius:1%;
        }
        .contact-us{
  padding-top: 100px;
}
        .contact-form{
            border-radius:1%;

        }

        </style>

    <!--<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f522c6a7-e1c5-47f6-862f-5f6743c9c72d";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>-->
  <script>
		const openSwal_error = (message) => {
			Swal.fire(
				'ERROR!',
				`${message}!`,
				'error'
			)
		}

		const openSwal_success = (message) => {
			window.location.href = "./thanks.html";						
		}
	</script>
</head>
<body onScroll="scrollFunction()">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXQ758S"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<?php 
		if(isset($_POST['sendmail'])) {
			$PathName = "/home1/aonesof1/public_html/outsourcing";
			require 'credential.php';
			require "{$PathName}/PHPMailer/src/PHPMailer.php";
			require "{$PathName}/PHPMailer/src/SMTP.php";
			require "{$PathName}/PHPMailer/src/Exception.php";
		  
			$mail = new PHPMailer\PHPMailer\PHPMailer();
			$mail->IsSMTP(); 
			
			$mail->CharSet = 'UTF-8';       
            $mail->Encoding     = "base64";

			$mail->Host = 'mail.a1softech.com';  
			$mail->SMTPAuth = false;    
			$mail->Username = EMAIL;                 			  
			$mail->Password = PASS;                           	  
			$mail->SMTPSecure = 'tls';                           
			$mail->Port = 26;                                    

			$mail->setFrom(EMAIL, $_POST['name']);
			$mail->addAddress('info@a1softech.com');     

		
			$mail->isHTML(true);         
			$mail->Subject = "New Inquiry";
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
			    debug_to_console_success('Message has been sent .. Our team Will contact you shortelly');
			    header("Location: ./index.html");
                exit;
			}
		}
	 ?>
        <nav class=" navbar navbar-expand-lg navbar-light bg-white fixed-top">

<div class="container">
      <a class="navbar-brand" href="index.html"><img src="assest/image/LOGO.png" alt="" class="imagesize"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Pricinig</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Modules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>

        </ul>
      </div>
</div>
</nav>
<section>
        <!-- <div id="#first"> -->
<div class="container contact-us">
    <div class="row py-5">
    <div class="col-lg-6 text-center  bg-white p-5 py-5" id="Contact" data-aos="fade-right">
            <h1 class="title" >CONTACT US</h1>
            <p class="p-contact">+20 109 411 7701</p>
            <p class="p-contact">Info@a1softech.com</p>
            <img class="img" src="Assest/image/contactus.svg"></img>
            <div class="socialicons" style="width: 100%; padding-top:10px;">
            <a href="https://www.facebook.com/A1softech" target="_blank">
            <img class="Simg" src="Assest/image/facebook.svg"></img></a>
            <a href="https://www.instagram.com/a1softech/" target="_blank">
            <img class="Simg" src="Assest/image/insta.svg"></img></a>
            <a href="https://www.linkedin.com/company/a1softech" target="_blank">
            <img class="Simg" src="Assest/image/linkedin.svg"></img>
            </a>
    </div>
    </div>
    <div class="col-lg-6 contact-form bg-mago2 p-5 py-5" data-aos="fade-left">
                                    <!--<div >-->
                								<form role="form" method="post" enctype="multipart/form-data">
                                                    
                            							<input required type="text"  class="form-control  text-white" id="name" name="name" placeholder="Name*" style="margin-bottom: 0.6rem;margin-top: 0.8rem;"><br>
                            							
                            							<input required type="text" placeholder="Country*" class="form-control" name="country" style="margin-bottom: 0.6rem;margin-top: 0.5rem;"><br>
                            							
                            							<input required type="text" placeholder="Company*" class="form-control" name="company" style="margin-bottom: 0.6rem;margin-top: 0.5rem;"><br>
                            						
                            							<input required type="email" placeholder="E-Mail*" class="form-control" name="email" style="margin-bottom: 0.6rem;margin-top: 0.5rem;"><br>
                            							
                            							<input required type="text" placeholder="Phone Number*" class="form-control" name="phone" style="margin-bottom: 0.6rem;margin-top: 0.5rem;"><br>
                            					
                            							
                            							<textarea required type="textarea" id="message" class="form-control" name="message"  style="margin-bottom: 0.6rem;margin-top: 0.5rem;width: 100%;height: 120px;"
                            							placeholder="Message*"></textarea>
                            								<br><br>
                            						
                            							<button type="submit" name="sendmail" class="btn btn-primary" style="background : rgba(69,104,220, 1);color : #fff !important;">Send</button>
                            						
                        						</form>
    						            
                                    <!--</div>-->
                            </div>
                        </div>
                        
            
        </div> 
        </div>
    </div>
    </div>
    </div>
</div>

    <!-- footer -->
    <footer id="footer" class="footer-1 bg-mago2 ">
  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1439 132.63"><defs><style>.cls-1{fill:#f5f5f5;}</style></defs><path class="cls-1" d="M7.41,214.88c13.68,6,27.33,12.1,41.05,18,25.66,11.07,51.49,21.67,79,27.34,18.79,3.88,37.56,5.1,56.22-.65,17.25-5.32,30.68-16.56,43-29.09,13.65-13.89,26.52-28.55,40-42.6,9.52-9.92,20.43-18.15,33.32-23.28,15.72-6.24,31.9-5.47,48.14-2.5,27,4.93,52,16.1,77.38,26,26.34,10.25,52.55,20.84,80.53,26a253,253,0,0,0,62.13,3.18c41.31-2.66,79.83-16.47,118.79-28.9,22.59-7.21,45.59-13.31,68.7-18.6,25.72-5.88,51.63-4,77.08,2.46,22,5.62,43.9,11.92,65.84,17.92,32.25,8.82,65,11.35,98.34,8.9,38-2.8,75.29-10.56,112.8-16.8,28.17-4.69,56.42-9,84.75-12.45,16.64-2.05,33.49-2.71,50.27-3.09,44.2-1,87,7.23,128.68,21.4,22.49,7.65,44.72,16.07,67.07,24.13,1.52.56,3.07,1.05,5.59,1.91,0-2.54,0-4.42,0-6.31,0-62.15-.09-8.31-.11-70.47,0-2.14.27-4.29.41-6.44H7.41Z" transform="translate(-7.41 -130.88)"/></svg>
  <div class="main-footer widgets-dark typo-light">
  <div class="container pt-3">
  <div class="row">
  
  <div class="col-sm-12  col-md-3 d-flex align-items-center">
  <div class="no-box">
    <img src="assest/image/LOGOW.png" class="W-100 img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
  </div>
  </div>
  
  <div class="col-sm-12  col-md-3">
  <div class="widget no-box">
  <h4 class="widget-title text-white ">Quick Links<span></span></h4>
  <hr style="background-color: white;width: 25%;">

  <ul class="thumbnail-widget">
  <li>
  <div class="thumb-content"><a href="index.html" class="text-white">Home</a></div>	
  </li>
  <li>
  <div class="thumb-content"><a href="#" class="text-white">About</a></div>	
  </li>
  <li>
  <div class="thumb-content"><a href="#" class="text-white">Contact</a></div>	
  </li>
  <li>
  <div class="thumb-content"><a href="#" class="text-white">Pricing</a></div>	
  </li>
  <li>
  <div class="thumb-content"><a href="#" class="text-white">Modules</a></div>	
  </li>
  <li>      
  </ul>
  </div>
  </div>
 
  <div class="col-sm-12  col-md-3">
  <div class="widget no-box ">
  <h4 class="widget-title  text-white">Egypt Office<span></span></h4>
  <hr style="background-color: white;width: 25%;">
  <div class="color">
  <p ><a href="mailto:info@magohcm.com" target="_blank" title="E-mail" class="text-white"><i class="fas fa-envelope mr-2"></i>info@magohcm.com
  </a></p>
  <p><a href="https://wa.me/01094117701" target="_blank" title="Whatsapp" class="text-white"><i class="fab fa-whatsapp mr-2"></i>+20 109 411 7701</a>
  </p>
  <p ><a href="mailto:info@domain.com" target="_blank" title="E-mail" class="text-white"><i class="fas fa-map mr-2"></i>zahraa elmaadie</a></p>
  </div>
  </div>
  </div> 
  <div class="col-sm-12  col-md-3">
  </div>
  </div> 
  
  </div>
  </div>
  </div>
  <div class="footer-copyright">
  <div class="container">
  <div class="row">
  <div class="col-md-12 text-center pt-3">
  <p >© Copyright 2021 | A1softech Company | All Rights Reserved | Powered by 
    <a class="text-info" target="_blank" href="https://www.a1softech.com/">A1Softech</a>.</p>
  </div>
  </div>
  </div>
  </div>
  </footer> 


    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assest/js/main.js"></script>   
    <script>
      AOS.init();
    </script>
    
    
    <!-- <iframe 
    style="z-index: 10000"
        src="chatbot/chatbot.html"
        id="DialogflowIDForChatbot"
        microphone="true" 
        animation="true"
        color="#1499C5"
        company-name="A1softech"
        company-logo="https://a1softech.com/chatbot/White A1softech logo.svg"
        theme="circle"
        positionY="bottom"
        positionX="right"
        icon-url=""
        language="en-US"
    /> -->
</body>
</html>