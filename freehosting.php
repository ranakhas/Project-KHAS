﻿<?php

// DO NOT REMOVE THIS LINE!
include 'conf/config.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Free Web Hosting - <?=$mofh['title'];?></title>
    <meta name="description" content="">
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
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
	

<div class="heading-section text-center small-text">
						What We Offer for Free
					</div>
<table class="table">

			<tr>

				<td>Monthly Bandwidth</td>

				<td align="center"><span>Unlimited</span></td>

			</tr>

			<tr>

				<td>Web Disk Space</td>

				<td align="center"><span>Unlimited</span></td>

			</tr>

			<tr>

				<td>Price</td>

				<td align="center"><span>Free for Lifetime</span></td>

			</tr>

			<tr>

				<td>Addon Domains</td>

				<td align="center">Unlimited</td>

			</tr>

			<tr>

				<td>Parked Domains</td>

				<td align="center">Unlimited</td>

			</tr>

			<tr>

				<td>Sub Domains</td>

				<td align="center">Unlimited</td>

			</tr>

			<tr>

				<td>PHP Sendmail</td>

				<td align="center">Unlimited</td>

			</tr>

			<tr>

				<td>MySQL Databases</td>

				<td align="center">Unlimited</td>

			</tr>

			<tr>

				<td>FTP Accounts</td>

				<td align="center">Unlimited</td>

			</tr>

			<tr>

				<td>Free Domain</td>

				<td align="center">yourdomain.<?=$mofh['domain'];?></td>

			</tr>

			<tr>

				<td>SiteBuilder</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Site Statistics</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Automatic Softaculous Script Installer</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Custom Error Pages</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Cron Jobs</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>PHP Flags Manager</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Online Browser File Manager</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>IP Address Deny</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>100 MB Max File Size</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Custom CNAME Records</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Unmetered MySQL space</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td><h4>SCRIPTING FEATURES</h4></td>

				<td align="center"></td>

			</tr>

			<tr>

				<td>PHP</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>MySQL</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>PhpMyAdmin</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>	</tr>

			<tr>
				<td>Custom CRON Jobs</td>
				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>
			</tr>
			<tr>
				<td>Full .htaccess Control</td>
				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

                                <td><h4>EMAIL FEATURES</h4></td>

                                <td align="center"></td>

                        </tr>

                        <tr>

                                <td>Webmail</td>

                                <td align="center"><div class="check"><img src="img/check-2.png"></div></td>

                        </tr>

                        <tr>

                                <td>Email Accounts (you@yourdomain.com)</td>

                                <td align="center"><div class="check"><img src="img/check-2.png"></div></td>

                        </tr>

                        <tr>

                                <td>Email Forwarders</td>

                                <td align="center"><div class="check"><img src="img/check-2.png"></div></td>

                        </tr>

                        <tr>

                                <td>MX Record Entry</td>

                                <td align="center"><div class="check"><img src="img/check-2.png"></div></td>

                        </tr>

                        <tr>

                                <td>SPF Records</td>

                                <td align="center"><div class="check"><img src="img/check-2.png"></div></td>

                        </tr>



				<td><h4>ECOMMERCE FEATURES</h4></td>

				<td align="center"></td>

			</tr>

			<tr>

				<td>PHP cart scripts install ability</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Password Protected Folders</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Bandwidth</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td><h4>SECURITY</h4></td>

				<td align="center"></td>

			</tr>

                        <tr>

                                <td>Automatic Self Signed SSL (https://)</td>

                                <td align="center"><div class="check"><img src="img/check-2.png"></div></td>

                        </tr>

                        <tr>

                                <td>Install your own SSL certificate</td>

                                <td align="center"><div class="check"><img src="img/check-2.png"></div></td>

                        </tr>

                        <tr>

                                <td>1-Click Cloudflare Enabler</td>

                                <td align="center"><div class="check"><img src="img/check-2.png"></div></td>

                        </tr>





			<tr>

				<td>24/7 Monitoring</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Firewall Protection</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>UPS Power Back-up/Back-up</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Generator</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>			

			<tr>

				<td>Hotlink Protection</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td><h4>OUR TECHNOLOGY</h4></td>

				<td align="center"></td>

			</tr>

			<tr>

				<td>Cisco Powered Network</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Linux Clustered Server Network</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Intel Processors</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

			<tr>

				<td>Apache Web Servers</td>

				<td align="center"><div class="check"><img src="img/check-2.png"></div></td>

			</tr>

		</table>
<div class="heading-section text-center small-text"><a href="register.php" class="mofh-btn">Book Your Free Hosting Now</a></div><br />
<div class="mofh-h-services">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="wrap-service">
						<i class="flaticon-two"></i>
						<div class="heading">Unlimited disk space</div>
						<div class="text-info">
							At KHAS Web Hosting we provide Unlimited Disk Space to our every user for <strong>Free</strong>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="wrap-service">
						<i><img src="img/icon-7.png" alt="icon"></i>
						<div class="heading">Unlimite bandwidth</div>
						<div class="text-info">
							At KHAS Web Hosting we provide Unlimited Bandwidth to our every user for <strong>Free</strong>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 clear-sm">
					<div class="wrap-service">
						<img src="img/icon-8.png" alt="icon" class="icon-phone">
						<div class="heading">27/7  customer support</div>
						<div class="text-info">
							We are here to answer with all the difficulties you may encounter with any of our products.
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 clear-md">
					<div class="wrap-service">
						<i class="flaticon-tool"></i>
						<div class="heading">high speed</div>
						<div class="text-info">
							Our hosting was independently tested and found to be the fastest free hosting in the world.

						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="wrap-service">
						<i class="flaticon-shield"></i>
						<div class="heading">site protections</div>
						<div class="text-info">
							Site protection is our first responsibility, for which we have implements lots protections layers, so your data will be secure with us!
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="wrap-service">
						<img src="img/icon-12.png" alt="icon" class="icon-db">
						<div class="heading">99.9% Uptime</div>
						<div class="text-info">
							Uptime is our main priority, which is why we can proudly say we offer 99.9% uptime.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br /><div class="heading-section text-center small-text"><a href="register.php" class="mofh-btn">Book Your Free Hosting Now</a></div><br />
<div class="mofh-faq light">
		<div class="container no-padding-sm">
			<div class="row">
				<div class="col-sm-12">
					<div class="heading-section text-center small-text">
						F.A.Q's
					</div>
					<h3 class="section-subheading text-center small-text">
						Frequently Asked Questions Before Registration 
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="mofh-accordion faq light">
				        <div class="panel-wrap">
				            <h3 class="panel-title">
				            	<span class="square" style="height: 86px; padding-top: 23px;">q</span>
				            	<i class="fa fa-plus"></i>
				            	<i class="fa fa-minus"></i>
				            	IS YOUR HOSTING REALLY FREE?
				            </h3>
				            <div class="panel-collapse" style="display: none;">
				                <div class="wrapper-collapse">
				                	<div class="info">
				                		<ul class="list">
				                			<li>Yes, you can host your website without having to pay. Ever.</li>
				                		</ul>
				                	</div>
				                </div>
				            </div>
				        </div>
				        <div class="panel-wrap">
				            <h3 class="panel-title">
				            	<span class="square" style="height: 86px; padding-top: 23px;">q</span>
				            	<i class="fa fa-plus"></i>
				            	<i class="fa fa-minus"></i>
				            	DO I GET A FREE SUBDOMAIN?
				            </h3>
				            <div class="panel-collapse" style="">
				                <div class="wrapper-collapse">
				                	<div class="info">
				                		<ul class="list">
				                			<li>You can get a free subdomain like yourname.suza.ga or yourname.rana.fun for free!</li>
				                		</ul>
				                	</div>
				                </div>
				            </div>
				        </div>
				        <div class="panel-wrap">
				            <h3 class="panel-title">
				            	<span class="square" style="height: 86px; padding-top: 23px;">q</span>
				            	<i class="fa fa-plus"></i>
				            	<i class="fa fa-minus"></i>
				            	WHY DO YOU PROVIDE FREE HOSTING?
				            </h3>
				            <div class="panel-collapse" style="">
				                <div class="wrapper-collapse">
				                	<div class="info">
				                		<ul class="list">
				                			<li>KHAS Web Hosting provides free hosting, because we believe everyone should have the opportunity to build a presence online. Regardless of who you are, where you are and what your budget is, we believe you should be able to have a website.</li>
				                		</ul>
				                	</div>
				                </div>
				            </div>
				        </div>
				        <div class="panel-wrap">
				            <h3 class="panel-title">
				            	<span class="square" style="height: 86px; padding-top: 23px;">q</span>
				            	<i class="fa fa-plus"></i>
				            	<i class="fa fa-minus"></i>
				            	DO YOU ALLOW ADULT SITES?
				            </h3>
				            <div class="panel-collapse" style="">
				                <div class="wrapper-collapse">
				                	<div class="info">
				                		<ul class="list">
				                			<li>No, We do not allow Adult Sites here.</li>
				                		</ul>
				                	</div>
				                </div>
				            </div>
				        </div>
				        <div class="panel-wrap">
				            <h3 class="panel-title">
				            	<span class="square" style="height: 86px; padding-top: 23px;">q</span>
				            	<i class="fa fa-plus"></i>
				            	<i class="fa fa-minus"></i>
				            	I'VE FOUND SOME SITES CONATINING COPYRIGHT WHERE TO REPORT?
				            </h3>
				            <div class="panel-collapse" style="">
				                <div class="wrapper-collapse">
				                	<div class="info">
				                		<ul class="list">
				                			<li>Give us a mail with details at support@everykhas.xyz we will take action within a day.</li>
				                		</ul>
				                	</div>
				                </div>
				            </div>
				        </div>

					</div>
				</div>	
			</div>
		</div>
	</div>
<div class="heading-section text-center small-text"><a href="register.php" class="mofh-btn">Book Your Free Hosting Now</a></div><br />

<!-- 
	*******************
		FOOTER
	****************** 
	-->

	<footer class="mofh-footer">
        <div class="container no-padding-sm">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <a href="/register.php"><img src="img/logo-light.png" alt="logo"></a>
                    <div class="footer-info"> 
                        KHAS Web Hosting is a web hosting provider, providing you with the best free hosting anyone can offer, and with premium options too, for advanced website owners.
                    </div>

                    <p class="contact"><a href="mailto:support@everykhas.xyz"><i class="flaticon-letter"></i>support@everykhas.xyz</a></p> 
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
                        <li class="menu-item"><a href="//forum.everykhas.xyz">Forums</a></li>                                
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 text-xs-center text-sm-center">
                    <div class="heading">Follow us</div>
                    <div class="soc-icons">
                    <a href="//fb.me/everykhas"><i class="fa fa-facebook"></i>Facebook</a>
	            <a href="//twitter.com/superfullmaza"><i class="fa fa-twitter"></i>Twitter</a>
                    <a href="//everykhas.xyz"><i class="fa fa-rss"></i>Blog</a>
		    <a href="https://forum.everykhas.xyz"><i class="fa fa-comments"></i>Forums</a>
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
                                <div class="copyrigh">Copyright 2018 KHAS Web Hosting - Free &amp; Unlimited Web Hosting</div>
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
    <script src="js/scripts.js"></script>
  </body>
</html>