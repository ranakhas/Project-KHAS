<?php

// DO NOT REMOVE THIS LINE!
include 'conf/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Register Your Account - <?=$mofh['title'];?></title>
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/fopen-sans.css" rel="stylesheet">
    <link href="css/raleway-webfont.css" rel="stylesheet">
    <link href="css/lato.css" rel="stylesheet">
    <link href="css/idangerous.swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="img/favicon.ico" rel="shortcut icon">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<div class="mofh-main-header">
		<div class="container no-padding-sm">
			<div class="row">
				<div class="col-sm-6 no-padding">
					<div class="soc-icons">
						<a href="<?=$mofh['fb'];?>"><i class="fa fa-facebook"></i></a>
						<a href="<?=$mofh['twitter'];?>"><i class="fa fa-twitter"></i></a>
                                                <a href="<?=$mofh['rss'];?>"><i class="fa fa-rss"></i></a>
						<a href="<?=$mofh['forum_url'];?>"><i class="fa fa-comments"></i></a>
					</div>
				</div>
				<div class="col-sm-6 no-padding-right">
					<section class="header-info">
						<h6>
							<a href="register.php"><i class="fa"><img src="img/icon-2.png" alt="icon"></i> Sign Up</a>
                                                        <a class="popup-with-form" href="#signin"><i class="fa"><img height="17" src="img/icon-11.png" width="12" alt="icon"></i>Login</a>
							<a href="<?=$mofh['forum_url'];?>"><i class="fa fa-location-arrow"></i> Support</a>
							<a href="mailto:<?=$mofh['email'];?>"><i class="fa fa-envelope"></i><?=$mofh['email'];?></a>
						</h6>						
					</section>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6">
				<!-- form itself -->
		<form action="<?=$mofh['cpanel'];?>/login.php" method="post" role="form" id="signin" name="login" class="mfp-hide white-popup-block login-form">
		<div class="input-group form-float">
<span class="input-group-addon">
<i class="material-icons">person</i>
</span>
<div class="form-line">
<input name="uname" id="mod_login_username" type="text" class="form-control" alt="username" size="10" class="form-control" placeholder="Username" required>
</div>
</div>
<div class="input-group">
<span class="input-group-addon">
<i class="material-icons">lock</i>
</span>
<div class="form-line">
<input type="password" id="mod_login_password" name="passwd" class="form-control" size="10" alt="password" placeholder="Password" required>
</div>
</div>
<div class="form-group">
<tr><th>Language<td><select  class="form-control" size="1" name="language">
<option value="English" selected="selected">English</option> 
<option>Afrikaans</option>
<option>Albanian</option>
<option>Amharic</option>
<option>Arabic</option>
<option>Armenian</option>
<option>Azeerbaijani</option>
<option>Basque</option>
<option>Belarusian</option>
<option>Bengali</option>
<option>Bosnian</option>
<option>Bulgarian</option>
<option>Burmese</option>
<option>Catalan</option>
<option>Cebuano</option>
<option>Chichewa</option>
<option>Chinese_simplified</option>
<option>Chinese_traditional</option>
<option>Corsican</option>
<option>Croatian</option>
<option>Czech</option>
<option>Danish</option>
<option>Dutch</option>
<option>English</option>
<option>Esperanto</option>
<option>Estonian</option>
<option>Farsi</option>
<option>Filipino</option>
<option>Finnish</option>
<option>French</option>
<option>Frisian</option>
<option>Galician</option>
<option>Georgian</option>
<option>German</option>
<option>Greek</option>
<option>Gujarati</option>
<option>Haitian Creole</option>
<option>Hausa</option>
<option>Hawaiian</option>
<option>Hebrew</option>
<option>Hindi</option>
<option>Hmong</option>
<option>Hungarian</option>
<option>Icelandic</option>
<option>Igbo</option>
<option>Indonesian</option>
<option>Irish</option>
<option>Italian</option>
<option>Japanese</option>
<option>Javanese</option>
<option>Kannada</option>
<option>Kazakh</option>
<option>Khmer</option>
<option>Korean</option>
<option>Kurdish</option>
<option>Kyrgyz</option>
<option>Lao</option>
<option>Latin</option>
<option>Latvian</option>
<option>Lithuanian</option>
<option>Luxembourgish</option>
<option>Macedonian</option>
<option>Malagasy</option>
<option>Malay</option>
<option>Malayalam</option>
<option>Maltese</option>
<option>Maori</option>
<option>Marathi</option>
<option>Mongolian</option>
<option>Nepali</option>
<option>Norwegian</option>
<option>Pashto</option>
<option>Persian</option>
<option>Polish</option>
<option>Portuguese</option>
<option>Punjabi</option>
<option>Romanian</option>
<option>Russian</option>
<option>Samoan</option>
<option>Scots Gaelic</option>
<option>Serbian</option>
<option>Sesotho</option>
<option>Shona</option>
<option>Sindhi</option>
<option>Sinhala</option>
<option>Slovak</option>
<option>Slovenian</option>
<option>Somali</option>
<option>Spanish</option>
<option>Sundanese</option>
<option>Swahili</option>
<option>Swedish</option>
<option>Tajik</option>
<option>Tamil</option>
<option>Telugu</option>
<option>Thai</option>
<option>Turkish</option>
<option>Ukrainian</option>
<option>Urdu</option>
<option>Uzbek</option>
<option>Vietnamese</option>
<option>Welsh</option>
<option>Xhosa</option>
<option>Yiddish</option>
<option>Yoruba</option>
<option>Zulu</option>
</select>
</td></tr>
</div>	
<div class="row">
<div class="col-xs-12">
<button class="btn btn-block bg-red waves-effect">SIGN IN</button>
</div>
</div>
<div class="row m-t-15 m-b--20">
<div class="col-xs-6">
<a href="signup.php">Register Now!</a>
</div>  
<div class="col-xs-6 align-right">
<a href="<?=$mofh['cpanel'];?>/lostpassword.php">Forgot Password?</a>
</div>
</div>
<script src="material.js"></script>
                        </form>
			</div>
		</div>
	</div>
	
<!-- 
	*******************
      NAV MENU    
	****************** 
	-->


	<div class="mofh-menu-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 no-padding">
					<a href="index.php"><img height ="75" src="<?=$mofh['logo'];?>" width="175" alt="logo" class="logo-menu"></a>
				</div>
				<div class="col-sm-9 col-lg-7 col-lg-offset-2 no-padding">
					<nav class="mofh-nav-menu">
						<button class="menu-toggle">
				    		<span class="icon"></span>
				    		<span class="icon"></span>
				    		<span class="icon"></span>
				    	</button>
					    <ul class="main-menu">
					        <li class="menu-item active menu-item-has-children">
					        	<a href="/">Home</a>
				        	</li>
					        <li class="menu-item menu-item-has-children"><a href="freehosting.php">Free Hosting</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="hosting.php">Premium Hosting</a>
                                                <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children"><a href="hosting.php">VPS Plans</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="hosting.php">Cloud Hosting</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="servers.php">Dedicated Server</a></li></ul></li>
					        <li class="menu-item menu-item-has-children"><a href="blog.php">Blog</a></li>
					        <li class="menu-item menu-item-has-children"><a href="<?=$mofh['forum_url'];?>">Forum</a></li>
					    </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
		<!-- 
	*******************
		TOP BANNER
	****************** 
	-->

	<div class="mofh-top-header overlay img-bg">
		<img src="img/top-banner.jpg" alt="banner" class="hidden">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="wrapper">
						<div class="heading">Register</div>
						<div class="subheding">
							<a href="index.html" class="link">home</a><span class="round"></span>
							<a href="register.html" class="link active">Register</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- 
	*******************
      REGISTER  
	*******************
	-->


	<div class="mofh-register">
		<div class="container no-padding-sm">
			<div class="row">	
						<form action="<?=$mofh['cpanel'];?>/login.php" method="post" role="form" class="mofh-comments-form">
		<div class="title-form">login to your account</div>
						<div class="subtitle">If you already have an account please login.</div>
		<div class="input-group form-float">
<span class="input-group-addon">
<i class="material-icons">person</i>
</span>
<div class="form-line">
<input name="uname" id="mod_login_username" type="text" class="form-control" alt="username" size="10" class="form-control" placeholder="Username" required>
</div>
</div>
<div class="input-group">
<span class="input-group-addon">
<i class="material-icons">lock</i>
</span>
<div class="form-line">
<input type="password" id="mod_login_password" name="passwd" class="form-control" size="10" alt="password" placeholder="Password" required>
</div>
</div>
<div class="form-group">
<tr><th>Language<td><select  class="form-control" size="1" name="language">
<option value="English" selected="selected">English</option> 
<option>Afrikaans</option>
<option>Albanian</option>
<option>Amharic</option>
<option>Arabic</option>
<option>Armenian</option>
<option>Azeerbaijani</option>
<option>Basque</option>
<option>Belarusian</option>
<option>Bengali</option>
<option>Bosnian</option>
<option>Bulgarian</option>
<option>Burmese</option>
<option>Catalan</option>
<option>Cebuano</option>
<option>Chichewa</option>
<option>Chinese_simplified</option>
<option>Chinese_traditional</option>
<option>Corsican</option>
<option>Croatian</option>
<option>Czech</option>
<option>Danish</option>
<option>Dutch</option>
<option>English</option>
<option>Esperanto</option>
<option>Estonian</option>
<option>Farsi</option>
<option>Filipino</option>
<option>Finnish</option>
<option>French</option>
<option>Frisian</option>
<option>Galician</option>
<option>Georgian</option>
<option>German</option>
<option>Greek</option>
<option>Gujarati</option>
<option>Haitian Creole</option>
<option>Hausa</option>
<option>Hawaiian</option>
<option>Hebrew</option>
<option>Hindi</option>
<option>Hmong</option>
<option>Hungarian</option>
<option>Icelandic</option>
<option>Igbo</option>
<option>Indonesian</option>
<option>Irish</option>
<option>Italian</option>
<option>Japanese</option>
<option>Javanese</option>
<option>Kannada</option>
<option>Kazakh</option>
<option>Khmer</option>
<option>Korean</option>
<option>Kurdish</option>
<option>Kyrgyz</option>
<option>Lao</option>
<option>Latin</option>
<option>Latvian</option>
<option>Lithuanian</option>
<option>Luxembourgish</option>
<option>Macedonian</option>
<option>Malagasy</option>
<option>Malay</option>
<option>Malayalam</option>
<option>Maltese</option>
<option>Maori</option>
<option>Marathi</option>
<option>Mongolian</option>
<option>Nepali</option>
<option>Norwegian</option>
<option>Pashto</option>
<option>Persian</option>
<option>Polish</option>
<option>Portuguese</option>
<option>Punjabi</option>
<option>Romanian</option>
<option>Russian</option>
<option>Samoan</option>
<option>Scots Gaelic</option>
<option>Serbian</option>
<option>Sesotho</option>
<option>Shona</option>
<option>Sindhi</option>
<option>Sinhala</option>
<option>Slovak</option>
<option>Slovenian</option>
<option>Somali</option>
<option>Spanish</option>
<option>Sundanese</option>
<option>Swahili</option>
<option>Swedish</option>
<option>Tajik</option>
<option>Tamil</option>
<option>Telugu</option>
<option>Thai</option>
<option>Turkish</option>
<option>Ukrainian</option>
<option>Urdu</option>
<option>Uzbek</option>
<option>Vietnamese</option>
<option>Welsh</option>
<option>Xhosa</option>
<option>Yiddish</option>
<option>Yoruba</option>
<option>Zulu</option>
</select>
</td></tr>
</div>	
<div class="row">
<div class="col-xs-12">
<button class="btn btn-block bg-red waves-effect">SIGN IN</button>
</div>
</div>
<div class="row m-t-15 m-b--20">
<div class="col-xs-6">
<a href="#">Register Now!</a>
</div>  
<div class="col-xs-6 align-right">
<a href="<?=$mofh['cpanel'];?>/lostpassword.php">Forgot Password?</a>
</div>
</div>
<script src="material.js"></script>
                        </form>
		
				</div>
				<div class="col-md-6">
                                                  
<form role="form" class="mofh-comments-form" method="post" action="<?=$mofh['submit_def'];?>/register2.php">
                      <div class="title-form">Register with <?=$mofh['title'];?></div>
						<div class="subtitle">Sign Up by Fill your below Form and get you Free Hosting Now</div>
<div class="input-group">
<span class="input-group-addon">
<i class="material-icons">person</i>
</span>
<div class="form-line">
<input class="form-control" type="text" name="username" value="" minlength="4" placeholder="your-name.<?=$mofh['domain'];?>" maxlength="16" onkeyup="return ismaxlength(this)" required>
</div>
</div>
<div class="input-group">
<span class="input-group-addon">
<i class="material-icons">lock</i>
</span>
<div class="form-line">
<input type="password" class="form-control" name="password" minlength="8" placeholder="Password" required>
</div>
</div>
<div class="input-group">
<span class="input-group-addon">
<i class="material-icons">email</i>
</span>
<div class="form-line">
<input type="email" class="form-control" name="email" placeholder="Email Address" size="30" value="" required>
</div>
</div>
    <div class="form-group">
				<tr><th>Site Category<td><select  class="form-control" size="1" name="website_category">
				<option>Personal</option>
				<option>Business</option>
				<option>Hobby</option>
				<option>Forum</option>
				<option>Adult</option>
				<option>Dating</option>
				<option>Software / Download</option>
				</select>
				</td></tr>
	</div>		
			<div class="form-group">
				<tr><th>Site Language<td>
				<select  class="form-control" size="1" name="website_language">
				<option>English</option>
				<option>Non-English</option>
				</select>
				</td></tr>
			</div>
           <span class="input-group-addon">
           <i class="material-icons">lock</i>
           </span>
            <div class="form-line">
				<input type="hidden" name="id" value="<?=$mofh['id'];?>">
				<tr><th><td><div ><img width="320px" height="90px" src="<?=$mofh['submit_def'];?>/image.php?id=<?=$mofh['id'];?>"></div><td>
				<tr><th>Enter Captcha<td><input class="form-control text-align: center;" type="text" name="number" size="30"><td>
                    </td>
                    </tr>
                    </td>
			</div><br>
<div class="form-group">
<input type="checkbox" name="terms_of_service" id="terms" class="filled-in chk-col-pink" required >
<label for="terms">I've read and agree to the <a href="terms.php">terms of service</a> and <a href="privacy.php">privacy policies</a>.</label>
</div>
<button class="btn btn-block btn-lg bg-<?=$mofh['color'];?> waves-effect">SIGN UP</button>
<div class="m-t-25 m-b--5 align-center">
<a href="login.php">Registered User? Click here to Login!</a>
</div>
</form>
    </form>
				</div>
			</div>
		</div>
	</div>

	<!-- 
	*******************
		FOOTER
	****************** 
	-->

	<footer class="mofh-footer">
        <div class="container no-padding-sm">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="/register.php"><img src="<?=$mofh['logo'];?>" alt="logo"></a>
                    <div class="footer-info"> 
                        <?=$mofh['title'];?> is a web hosting provider, providing you with the best free hosting anyone can offer, and with premium options too, for advanced website owners.
                    </div>

                    <p class="contact"><a href="mailto:<?=$mofh['email'];?>"><i class="flaticon-letter"></i><?=$mofh['email'];?></a></p> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="heading">Explore More</div>
                    <ul class="footer-menu classic">
                        <li class="menu-item"><a href="/">Home</a> </li>                             
                        <li class="menu-item"><a href="about.php">About Us</a> </li>
                        <li class="menu-item"><a href="freehosting.php">Free Hosting</a></li>
                        <li class="menu-item"><a href="hosting.php">Premium Hosting</a></li>
                        <li class="menu-item"><a href="vps.php">VPS Plans</a></li>
                        <li class="menu-item"><a href="hosting.php">Shared Hosting</a></li>
                        <li class="menu-item"><a href="cloud.php">Cloud VPS Slider</a></li>
                        <li class="menu-item"><a href="servers.php">Dedicated Servers</a></li>
                        <li class="menu-item"><a href="contact.php">Contact Us</a></li>
                        <li class="menu-item"><a href="team.php">Our team</a></li>
                        <li class="menu-item"><a href="faq.php">FAQ</a></li>
                        <li class="menu-item"><a href="<?=$mofh['forum_url'];?>">Forums</a></li>                       
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 text-xs-center text-sm-center">
                    <div class="heading">Follow us</div>
                    <div class="soc-icons">
                    <a href="<?=$mofh['fb'];?>"><i class="fa fa-facebook"></i>Facebook</a>
	            <a href="<?=$mofh['twitter'];?>"><i class="fa fa-twitter"></i>Twitter</a>
                    <a href="<?=$mofh['rss'];?>"><i class="fa fa-rss"></i>Blog</a>
		    <a href="<?=$mofh['forum_url'];?>"><i class="fa fa-comments"></i>Forums</a>
					</div>                  
                </div>
            </div>          
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 no-padding-sm">
                    <div class="footer-bottom">
                    <div class="container no-padding-sm">
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 text-center text-lg-left">
                                <div class="copyrigh">Copyright 2018 <?=$mofh['title'];?> - Free &amp; Unlimited Web Hosting</div>
                            </div>
                            <div class="col-lg-6 col-xs-12">
                                <ul class="footer-menu">
                                    <li class="menu-item"><a href="terms.php">Terms of Service</a></li>
                                    <li class="menu-item"><a href="privacy.php">Privacy Policy</a></li>
                                    <li class="menu-item"><a href="login.php">Login</a></li>                             
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>







    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/jquery.viewportchecker.min.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scripts.js"></script>  </body>
</html>
