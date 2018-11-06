<?php

// DO NOT REMOVE THIS LINE!
include 'conf/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terms of Services - <?=$mofh['title'];?></title>
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
	<link href="style-login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
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

    <div class="login-box">
      <div class="card">
        <div class="body">
          <div class="msg">Terms of Service</div>
          <h4>1. ACCEPTANCE OF TERMS</h4>
          <p><?=$mofh['title'];?> welcomes you.</p>
          <p><?=$mofh['title'];?> provides its service to you subject to the following Terms of Service ("TOS"), which may be updated
            by us from time to time without notice to you. You can review the most current version of the TOS at any time
            at: <a href="https://localhost/terms.php">https://localhost/terms</a>. In addition, when
            using particular <?=$mofh['title'];?>            owned or operated services, you and <?=$mofh['title'];?> shall be subject to any posted guidelines or rules applicable
            to such services, which may be posted from time to time. All such guidelines or rules (including but not limited
            to our Spam Policy) are hereby incorporated by reference into the TOS. <?=$mofh['title'];?> may also offer other
            services that are governed by different Terms of Service.
          </p>
          <h4>2. DESCRIPTION OF SERVICE</h4>
          <p><?=$mofh['title'];?> provides users with access to a rich collection of resources, including various communications
            tools, forums, shopping services, search services, personalized content and branded programming through its
            network of properties which may be accessed through any various medium or device now known or hereafter
            developed (the "Service"). You also understand and agree that the Service may include advertisements and that
            these advertisements are necessary for <?=$mofh['title'];?> or it's Partners to provide the Service. You also understand
            and agree that the Service may include certain communications from <?=$mofh['title'];?> or it's Partners, such as
            service announcements, administrative messages and the <?=$mofh['title'];?> Newsletter, and that these communications
            are considered part of <?=$mofh['title'];?> membership and you will not be able to opt out of receiving them. Unless
            explicitly stated otherwise, any new features that augment or enhance the current Service, including the release
            of new <?=$mofh['title'];?> properties, shall be subject to the TOS. You understand and agree that the Service is
            provided "AS-IS" and that <?=$mofh['title'];?> assumes no responsibility for the timeliness, deletion, mis-delivery or
            failure to store any user communications or personalization settings. You are responsible for obtaining access
            to the Service, and that access may involve third-party fees (such as Internet service provider or airtime
            charges). You are responsible for those fees, including those fees associated with the display or delivery of
            advertisements. In addition, you must provide and are responsible for all equipment necessary to access the
            Service.
          </p>
          <h4>3. YOUR REGISTRATION OBLIGATIONS</h4>
          <p>In consideration of your use of the Service, you represent that you are of legal age to form a binding contract
            and are not a person barred from receiving services under the laws of the United States or other applicable
            jurisdiction. You also agree to:
          </p>
          <p>(a) provide true, accurate, current and complete information about yourself as prompted by the Service's
            registration form (the "Registration Data") and
          </p>
          <p>(b) maintain and promptly update the Registration Data to keep it true, accurate, current and complete. If you
            provide any information that is untrue, inaccurate, not current or incomplete, or <?=$mofh['title'];?> has reasonable
            grounds to suspect that such information is untrue, inaccurate, not current or incomplete, <?=$mofh['title'];?> has the
            right to suspend or terminate your account and refuse any and all current or future use of the Service (or any
            portion thereof).
          </p>
          <p><?=$mofh['title'];?> is concerned about the safety and privacy of all its users, particularly children. Please remember
            that the Service is designed to appeal to a broad audience. Accordingly, as the legal guardian, it is your
            responsibility to determine whether any of the Service areas and/or Content (as defined in Section 6 below) are
            appropriate for your child.
          </p>
          <h4>4. <?=$mofh['title'];?> PRIVACY POLICY</h4>
          <p>Registration Data and certain other information about you is subject to our Privacy Policy. For more information,
            see our full privacy policy at <a href="https://localhost/privacy.php">https://localhost/privacy</a> , You
            understand that
            through your use of the Service you consent to the collection and use (as set forth in the Privacy Policy) of
            this information, including the transfer of this information to the United States and/or other countries for
            storage, processing and use by <?=$mofh['title'];?> and its affiliates.
          </p>
          <h4>5. MEMBER ACCOUNT, PASSWORD AND SECURITY</h4>
          <p>You will receive a password and account designation upon completing the Service's registration process. You are
            responsible for maintaining the confidentiality of the password and account and are fully responsible for all
            activities that occur under your password or account. You agree to
          </p>
          <ul>
            <li>
              immediately notify <?=$mofh['title'];?> of any unauthorized use of your password or account or any other breach of security, and
            </li>
            <li>
              ensure that you exit from your account at the end of each session. <?=$mofh['title'];?> cannot and will not be liable
              for any loss or damage arising from your failure to comply with this Section 5.
            </li>
          </ul>
          <h4>6. MEMBER CONDUCT</h4>
          <p>You understand that all information, data, text, software, music, sound, photographs, graphics, video, messages,
            tags, or other materials ("Content"), whether publicly posted or privately transmitted, are the sole
            responsibility of the person from whom such Content originated. This means that you, and not <?=$mofh['title'];?>, are
            entirely responsible for all Content that you upload, post, email, transmit or otherwise make available via the
            Service. <?=$mofh['title'];?> does not control the Content posted via the Service and, as such, does not guarantee the
            accuracy, integrity or quality of such Content. You understand that by using the Service, you may be exposed to
            Content that is offensive, pornographic, indecent or objectionable. Under no circumstances will <?=$mofh['title'];?> be
            liable in any way for any Content, including, but not limited to, any errors or omissions in any Content, or any
            loss or damage of any kind incurred as a result of the use of any Content posted, emailed, transmitted or
            otherwise made available via the Service.
          </p>
          <h5>You agree to not use the Service to:</h5>
          <ol>
            <li> upload, post, email, transmit or otherwise make available any Content that is unlawful, harmful,
              threatening, abusive, harassing, tortious, defamatory, vulgar, obscene, libelous, invasive of another's
              privacy, hateful, or racially, ethnically or otherwise objectionable;
            </li>
            <li> harm minors in any way;</li>
            <li> impersonate any person or entity, including, but not limited to, a <?=$mofh['title'];?> official, forum leader,
              guide or host, or falsely state or otherwise misrepresent your affiliation with a person or entity;
            </li>
            <li> forge headers or otherwise manipulate identifiers in order to disguise the origin of any Content
              transmitted through the Service;
            </li>
            <li> upload, post, email, transmit or otherwise make available any Content that you do not have a right to make
              available under any law or under contractual or fiduciary relationships (such as inside information,
              proprietary and confidential information learned or disclosed as part of employment relationships or under
              nondisclosure agreements);
            </li>
            <li> upload, post, email, transmit or otherwise make available any Content that infringes any patent, trademark,
              trade secret, copyright or other proprietary rights ("Rights") of any party; This includes linking to or
              redirecting to any content or copyright files hosted on a 3rd party resource / servers.
            </li>
            <li> upload, post, email, transmit or otherwise make available any unsolicited or unauthorized advertising,
              promotional materials, "junk mail," "spam," "chain letters," "pyramid schemes," or any other form of
              solicitation, except in those areas (such as shopping) that are designated for such purpose (please read our
              complete Spam Policy);
            </li>
            <li> upload, post, email, transmit or otherwise make available any material that contains software viruses or
              any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any
              computer software or hardware or telecommunications equipment;
            </li>
            <li> upload, post, email, transmit or otherwise make available any material that is of broadcast / streaming
              types.
            </li>
            <li> upload, post, email, transmit or otherwise make available any material that is of keylogging / proxy
              service / irc / shell(s) if any type / file hosting / file sharing types.
            </li>
            <li>upload, post, email, transmit or otherwise make available any material on free hosting accounts that is of
              pornographic nature.
            </li>
            <li> interfere with or disrupt the Service or servers or networks connected to the Service, or disobey any
              requirements, procedures, policies or regulations of networks connected to the Service;
            </li>
            <li> intentionally or unintentionally violate any applicable local, state, national or international law,
              including, but not limited to, regulations promulgated by the U.S. Securities and Exchange Commission, any
              rules of any national or other securities exchange, including, without limitation, the New York Stock
              Exchange, the American Stock Exchange or the NASDAQ, and any regulations having the force of law;
            </li>
            <li> provide material support or resources (or to conceal or disguise the nature, location, source, or ownership
              of material support or resources) to any organization(s) designated by the United States government as a
              foreign terrorist organization pursuant to section 219 of the Immigration and Nationality Act;
            </li>
            <li>"stalk" or otherwise harass another; and/or</li>
            <li> upload, post, email, transmit or otherwise material for the purposes of file distribution, relay, or
              streaming reasons.
            </li>
            <li> collect or store personal data about other users in connection with the prohibited conduct and activities
              set forth in paragraphs 1 through 15 above.
            </li>
          </ol>
          <h4>7. USE OF COPYRIGHT MATERIAL AND PROOF OF OWNERSHIP OF CONTENT</h4>
          <p>Sites must not contain Warez, copyright or other illegal material including links or redirects to copyright
            material hosted on 3rd party websites / resources. The onus is on you the customer to prove that you own the
            rights to publish material, not for <?=$mofh['title'];?> to prove that you do not. <?=$mofh['title'];?> does not allow the
            propagation or distribution of copyright material, files or warez under any circumstances.
          </p>
          <h4>8. ACCEPTABLE SERVER RESOURCE USE</h4>
          <p>Sites must not use excessive amounts of server resources. These include bandwidth, processor utilization and / or
            disk space. Please see the 'High Resource Use Policy' in the General Terms and Conditions.
          </p>
          <h4>9. BACKUPS / REQUESTING DATA BACKUP</h4>
          <p>It is the client / account holders responsibility to maintain and keep backups of website and MySQL data. We do
            not provide data restores from our archives / restoring a website or database to an earlier version. We also do
            not provide free backups / archives of customers own current data. We reserve the right to charge a fee of 14.99
            USD if we are requested to create a backup on a customers behalf. We may choose to waive this fee under
            circumstances of our choosing.
          </p>
          <h4>10. SCRIPT USAGE TERMS</h4>
          <p>Scripts on the site must be designed to produce web-based content, and not to use the server as an application
            server. Using the server to generate large volumes of email from a database is an example of activity that is
            not allowed. Scripts should not attempt to manipulate the timeouts on servers. These are set at the present
            values to ensure the reliability of the server. Sites that reset these do so because they are resource
            intensive, and adversely affect server performance and are therefore not allowed. Scripts that are designed to
            provide proxy services, anonymous or otherwise, are not allowed.
          </p>
          <p>The primary purpose of any script must be to produce a web page. Scripts that send a single email based upon user
            entered information, or update a database are acceptable. Scripts that send bulk email or perform processor
            intensive database processes are not allowed. All outgoing mail is monitored and filtered and must be sent to or
            from a <?=$mofh['title'];?>-hosted domain.
          </p>
          <p>Sites must not contain scripts that attempt to access privileged server resources, or other sites on the same
            server
          </p>
          <p>
            Examples of not allowed script and website types include (but are not limited to):
          </p>
          <ul>
            <li>Pornographic/adult content</li>
            <li>Proxy scripts</li>
            <li>Chat scripts</li>
            <li>Bitcoin / cryptocurrency faucet sites</li>
            <li>File sharing / file storage scripts</li>
            <li>Autolike scripts</li>
            <li>Hacking scripts / PHP shell scripts</li>
            <li>Phishing</li>
            <li>Mass mail scripts</li>
            <li>Website scraping/crawling/downloading scripts</li>
            <li>Torrents</li>
            <li>Warez</li>
            <li>Cracked/pirated content of any kind</li>
          </ul>
          <h4>11. USAGE OF DISK SPACE TERMS</h4>
          <p><?=$mofh['title'];?> offers large web space and bandwidth with hosting accounts. By this, we mean space for legitimate
            web site content and bandwidth for visitors to view it. All files on a domain must be part of the active website
            and linked to the site. Sites should not contain any backups, downloads, or other non-web based content. We will
            treat all password protected archive (e.g. zip and rar) files as unacceptable. Multimedia content such as audio
            and video is acceptable provided it is streamed to the user, links to HTTP download of this content is not
            acceptable.
          </p>
          <p>Archives of movie files, audio files, zips, rars or any large volumes of files used for downloading / sharing is
            not allowed.
          </p>
          <h4>12. RIGHT TO SUSPEND / TERMINATE HOSTING SERVICES</h4>
          <p>We reserve the right to suspend or terminate any hosting services if a website/hosting service consumes excessive
            server resources or effects other websites / hosting services on a shared or clustered hosting server. Excessive
            resource usage can constitute any form of server usage calculated and determined at the discretion of
            <?=$mofh['title'];?>. <?=$mofh['title'];?> reserves the right to suspend service at any time without prior notice if or when the
            health or normal running / performance of a service is effected / degraded by a website or hosting service.
          </p>
          <p>You acknowledge that <?=$mofh['title'];?> may or may not pre-screen Content, but that <?=$mofh['title'];?> and its designees
            shall have the right (but not the obligation) in their sole discretion to pre-screen, refuse, or remove any
            Content that is available via the Service. Without limiting the foregoing, <?=$mofh['title'];?> and its designees shall
            have the right to remove any Content that violates the TOS or is otherwise objectionable. You agree that you
            must evaluate, and bear all risks associated with, the use of any Content, including any reliance on the
            accuracy, completeness, or usefulness of such Content. In this regard, you acknowledge that you may not rely on
            any Content created by <?=$mofh['title'];?> or submitted to <?=$mofh['title'];?>, including without limitation information in
            <?=$mofh['title'];?> Message Boards and in all other parts of the Service.
          </p>
          <p>You acknowledge, consent and agree that <?=$mofh['title'];?> may access, preserve and disclose your account information
            and Content if required to do so by law or in a good faith belief that such access preservation or disclosure is
            reasonably necessary to:
          </p>
          <ul>
            <li>comply with legal process;</li>
            <li>enforce the TOS;</li>
            <li>respond to claims that any Content violates the rights of third parties;</li>
            <li>respond to your requests for customer service; or </li>
            <li>protect the rights, property or personal safety of <?=$mofh['title'];?>, its users and the public.</li>
          </ul>
          <p>You understand that the technical processing and transmission of the Service, including your Content, may
            involve
          </p>
          <ul>
            <li>transmissions over various networks; and</li>
            <li>changes to conform and adapt to technical requirements of connecting networks or devices.</li>
          </ul>
          <p>You understand that the Service and software embodied within the Service may include security components that
            permit digital materials to be protected, and that use of these materials is subject to usage rules set by
            <?=$mofh['title'];?> and/or content providers who provide content to the Service. You may not attempt to override or
            circumvent any of the usage rules embedded into the Service. Any unauthorized reproduction, publication, further
            distribution or public exhibition of the materials provided on the Service, in whole or in part, is strictly
            prohibited.
          </p>
          <h4>13. INTERSTATE NATURE OF COMMUNICATIONS ON <?=$mofh['title'];?> NETWORK</h4>
          <p>When you register with <?=$mofh['title'];?>, you acknowledge that in using <?=$mofh['title'];?> services to send electronic
            communications (including but not limited to email, uploading photos and files and other Internet activities),
            you will be causing communications to be sent through <?=$mofh['title'];?>'s computer networks, portions of which are
            located in California, Ohio, UK, and other locations in the United States and portions of which are located
            abroad. As a result, and also as a result of <?=$mofh['title'];?>'s network architecture and business practices and the
            nature of electronic communications, even communications that seem to be intrastate in nature can result in the
            transmission of interstate communications regardless of where you are physically located at the time of
            transmission. Accordingly, by agreeing to this Terms of Service, you acknowledge that use of the service results
            in interstate data transmissions.
          </p>
          <h4>14. SPECIAL ADMONITIONS FOR INTERNATIONAL USE</h4>
          <p>Recognizing the global nature of the Internet, you agree to comply with all local rules regarding online conduct
            and acceptable Content. Specifically, you agree to comply with all applicable laws regarding the transmission of
            technical data exported from the United States or the country in which you reside.
          </p>
          <h4>15. CONTENT SUBMITTED OR MADE AVAILABLE FOR INCLUSION ON THE SERVICE</h4>
          <p><?=$mofh['title'];?> does not claim ownership of Content you submit or make available for inclusion on the Service.
            However, with respect to Content you submit or make available for inclusion on publicly accessible areas of the
            Service, you grant <?=$mofh['title'];?> the following worldwide, royalty-free and non-exclusive license(s), as
            applicable:
          </p>
          <ul>
            <li> With respect to Content you submit or make available for inclusion on publicly accessible areas of
              <?=$mofh['title'];?> Servers, the license to use, distribute, reproduce, modify, adapt, publicly perform and
              publicly display such Content on the Service solely for the purposes of providing and promoting the
              <?=$mofh['title'];?> Service to which such Content was submitted or made available. This license exists only for as
              long as you elect to continue to include such Content on the Service and will terminate at the time you
              remove or <?=$mofh['title'];?> removes such Content from the Service.
            </li>
            <li> With respect to photos, graphics, audio or video you submit or make available for inclusion on publicly
              accessible areas of the Service other than <?=$mofh['title'];?> Servers, the license to use, distribute, reproduce,
              modify, adapt, publicly perform and publicly display such Content on the Service solely for the purpose for
              which such Content was submitted or made available. This license exists only for as long as you elect to
              continue to include such Content on the Service and will terminate at the time you remove or <?=$mofh['title'];?>              removes such Content from the Service.
            </li>
            <li> With respect to Content other than photos, graphics, audio or video you submit or make available for
              inclusion on publicly accessible areas of the Service other than <?=$mofh['title'];?> Servers, the perpetual,
              irrevocable and fully sublicensable license to use, distribute, reproduce, modify, adapt, publish,
              translate, publicly perform and publicly display such Content (in whole or in part) and to incorporate such
              Content into other works in any format or medium now known or later developed.
            </li>
          </ul>
          <p>"Publicly accessible" areas of the Service are those areas of the <?=$mofh['title'];?> network of properties that are
            intended by <?=$mofh['title'];?> to be available to the general public. By way of example, publicly accessible areas of
            the Service would include <?=$mofh['title'];?> Message Boards and all areas that are open to both members and visitors.
            However, publicly accessible areas of the Service would not include portions of <?=$mofh['title'];?> Servers that are
            limited to members, <?=$mofh['title'];?> services intended for private communication such as <?=$mofh['title'];?> Mail or, or
            areas off of the <?=$mofh['title'];?> network of properties such as portions of World Wide Web sites that are accessible
            via hypertext or other links but are not hosted or served by <?=$mofh['title'];?>.
          </p>
          <h4>15. CONTRIBUTIONS TO <?=$mofh['title'];?></h4>
          <p>By submitting ideas, suggestions, documents, and/or proposals ("Contributions") to <?=$mofh['title'];?> through its
            forum, or contact forums, you acknowledge and agree that:
          </p>
          <ul>
            <li>your Contributions do not contain confidential or proprietary information;</li>
            <li><?=$mofh['title'];?> is not under any obligation of confidentiality, express or implied, with respect to the
              Contributions;
            </li>
            <li><?=$mofh['title'];?> shall be entitled to use or disclose (or choose not to use or disclose) such Contributions for
              any purpose, in any way, in any media worldwide;
            </li>
            <li><?=$mofh['title'];?> may have something similar to the Contributions already under consideration or in
              development;
            </li>
            <li>your Contributions automatically become the property of <?=$mofh['title'];?> without any obligation of <?=$mofh['title'];?>              to you; and
            </li>
            <li>you are not entitled to any compensation or reimbursement of any kind from <?=$mofh['title'];?> under any
              circumstances.
            </li>
          </ul>
          <h4>16. INDEMNITY</h4>
          <p>You agree to indemnify and hold <?=$mofh['title'];?> and its subsidiaries, affiliates, officers, agents, employees,
            partners and licensors harmless from any claim or demand, including reasonable attorneys' fees, made by any
            third party due to or arising out of Content you submit, post, transmit or otherwise make available through the
            Service, your use of the Service, your connection to the Service, your violation of the TOS, or your violation
            of any rights of another.
          </p>
          <h4>17. NO RESALE OF SERVICE</h4>
          <p>You agree not to reproduce, duplicate, copy, sell, trade, resell or exploit for any commercial purposes, any
            portion of the Service (including your <?=$mofh['title'];?> ID), use of the Service, or access to the Service, unless
            you are a member of the <?=$mofh['title'];?> Reseller Service, utilising the reselling platform to resell to end
            users.
          </p>
          <h4>18. GENERAL PRACTICES REGARDING USE AND STORAGE</h4>
          <p>You acknowledge that <?=$mofh['title'];?> may establish general practices and limits concerning use of the Service,
            including without limitation the maximum number of days that idle hosting accounts, message board postings or
            other uploaded Content will be retained by the Service, the maximum number of email messages that may be sent
            from or received by an account on the Service, the maximum size of any email message that may be sent from or
            received by an account on the Service, the maximum disk space that will be allotted on <?=$mofh['title'];?>'s servers on
            your behalf, and the maximum number of times (and the maximum duration for which) you may access the Service in
            a given period of time. You agree that <?=$mofh['title'];?> has no responsibility or liability for the deletion or
            failure to store any messages and other communications or other Content maintained or transmitted by the
            Service. You acknowledge that <?=$mofh['title'];?> reserves the right to log off accounts that are inactive for an
            extended period of time. You further acknowledge that <?=$mofh['title'];?> reserves the right to modify these general
            practices and limits from time to time.
          </p>
          <h4>19. MODIFICATIONS TO SERVICE</h4>
          <p><?=$mofh['title'];?> reserves the right at any time and from time to time to modify or discontinue, temporarily or
            permanently, the Service (or any part thereof) with or without notice. You agree that <?=$mofh['title'];?> shall not be
            liable to you or to any third party for any modification, suspension or discontinuance of the Service.
          </p>
          <p>
            Certain services provided by <?=$mofh['title'];?> are resold. Thus, certain equipment, routing, software, and programming used by <?=$mofh['title'];?> are not directly owned or written by <?=$mofh['title'];?>. <?=$mofh['title'];?> shall not be responsible for any changes in services provided by a 3rd party provider, also will not be held liable for any damage or loss which may arise from service disruption provided by a 3rd party provider. <?=$mofh['title'];?> will show highest interest to make sure that that services provided by a 3rd party are running smoothly and correctly, and will contact the 3rd party provider when changes or fixes are needed, however the time needed for any fix or alteration will not be decided by <?=$mofh['title'];?> and <?=$mofh['title'];?> will not be held liable for any fixes or alterations to be performed on a product provided by a 3rd party in a definite time frame.
          </p>
          <h4>20. TERMINATION</h4>
          <p>You agree that <?=$mofh['title'];?> may, under certain circumstances and without prior notice, immediately terminate your
            <?=$mofh['title'];?> account, any associated email address, and access to the Service. Cause for such termination shall
            include, but not be limited to,
          </p>
          <ul>
            <li>breaches or violations of the TOS or other incorporated agreements or guidelines,</li>
            <li>requests by law enforcement or other government agencies,</li>
            <li>a request by you (self-initiated account deletions),</li>
            <li>discontinuance or material modification to the Service (or any part thereof),</li>
            <li>unexpected technical or security issues or problems,</li>
            <li>extended periods of inactivity,</li>
            <li>engagement by you in fraudulent or illegal activities, and/or</li>
            <li>nonpayment of any fees owed by you in connection with the Services.</li>
          </ul>
          <p>Termination of your <?=$mofh['title'];?> account includes</p>
          <ul>
            <li>removal of access to all offerings within the Service, including but not limited to Hosting accounts, Email
              Services, SQL databases,
            </li>
            <li>deletion of your password and all related information, files and content associated with or inside your
              account (or any part thereof), and
            </li>
            <li>barring of further use of the Service. Further, you agree that all terminations for cause shall be made in
              <?=$mofh['title'];?>'s sole discretion and that <?=$mofh['title'];?> shall not be liable to you or any third party for any
              termination of your account, any associated email address, or access to the Service.
            </li>
          </ul>
          <h4>21. DEALINGS WITH ADVERTISERS</h4>
          <p>Your correspondence or business dealings with, or participation in promotions of, advertisers found on or through
            the Service, including payment and delivery of related goods or services, and any other terms, conditions,
            warranties or representations associated with such dealings, are solely between you and such advertiser. You
            agree that <?=$mofh['title'];?> shall not be responsible or liable for any loss or damage of any sort incurred as the
            result of any such dealings or as the result of the presence of such advertisers on the Service.
          </p>
          <h4>22. LINKS</h4>
          <p>The Service may provide, or third parties may provide, links to other World Wide Web sites or resources. Because
            <?=$mofh['title'];?> has no control over such sites and resources, you acknowledge and agree that <?=$mofh['title'];?> is not
            responsible for the availability of such external sites or resources, and does not endorse and is not
            responsible or liable for any Content, advertising, products or other materials on or available from such sites
            or resources. You further acknowledge and agree that <?=$mofh['title'];?> shall not be responsible or liable, directly
            or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance
            on any such Content, goods or services available on or through any such site or resource.
          </p>
          <h4>23. MAXIMUM FREE HOSTING ACCOUNTS PER PERSON</h4>
          <p>Three free hosting accounts are allowed per person. Registering more than three accounts is considered abuse and
            will result in all accounts being terminated without notice.
          </p>
          <h4>24. <?=$mofh['title'];?>'S PROPRIETARY RIGHTS</h4>
          <p>You acknowledge and agree that the Service and any necessary software used in connection with the Service
            ("Software") contain proprietary and confidential information that is protected by applicable intellectual
            property and other laws. You further acknowledge and agree that Content contained in sponsor advertisements or
            information presented to you through the Service or by advertisers is protected by copyrights, trademarks,
            service marks, patents or other proprietary rights and laws. Except as expressly authorized by <?=$mofh['title'];?> or
            advertisers, you agree not to modify, rent, lease, loan, sell, distribute or create derivative works based on
            the Service or the Software, in whole or in part.
          </p>
          <h4>25. USE OF ADVERT BLOCKERS</h4>
          <p><?=$mofh['title'];?> may use adverts to subsidize the costs of running the service. The use of advert blockers, or the
            process of recommending advert blockers whilst using the service is forbidden. Violation will result in
            termination.
          </p>
          <h4>26. DISCLAIMER OF WARRANTIES</h4>
          <p>YOU EXPRESSLY UNDERSTAND AND AGREE THAT:</p>
          <p>1. YOUR USE OF THE SERVICE IS AT YOUR SOLE RISK. THE SERVICE IS PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS.
            <?=$mofh['title'];?> AND ITS SUBSIDIARIES, AFFILIATES, OFFICERS, EMPLOYEES, AGENTS, PARTNERS AND LICENSORS EXPRESSLY
            DISCLAIM ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO THE IMPLIED
            WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT.
          </p>
          <p>2. <?=$mofh['title'];?> AND ITS SUBSIDIARIES, AFFILIATES, OFFICERS, EMPLOYEES, AGENTS, PARTNERS AND LICENSORS MAKE NO
            WARRANTY THAT (i) THE SERVICE WILL MEET YOUR REQUIREMENTS; (ii) THE SERVICE WILL BE UNINTERRUPTED, TIMELY,
            SECURE OR ERROR-FREE; (iii) THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SERVICE WILL BE ACCURATE OR
            RELIABLE; (iv) THE QUALITY OF ANY PRODUCTS, SERVICES, INFORMATION OR OTHER MATERIAL PURCHASED OR OBTAINED BY YOU
            THROUGH THE SERVICE WILL MEET YOUR EXPECTATIONS; AND (v) ANY ERRORS IN THE SOFTWARE WILL BE CORRECTED.
          </p>
          <p>3. ANY MATERIAL DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SERVICE IS ACCESSED AT YOUR OWN
            DISCRETION AND RISK, AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA
            THAT RESULTS FROM THE DOWNLOAD OF ANY SUCH MATERIAL.
          </p>
          <p>4. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM <?=$mofh['title'];?> OR THROUGH OR FROM THE
            SERVICE SHALL CREATE ANY WARRANTY NOT EXPRESSLY STATED IN THE TOS.
          </p>
          <p>5. A SMALL PERCENTAGE OF USERS MAY EXPERIENCE EPILEPTIC SEIZURES WHEN EXPOSED TO CERTAIN LIGHT PATTERNS OR
            BACKGROUNDS ON A COMPUTER SCREEN OR WHILE USING THE SERVICE. CERTAIN CONDITIONS MAY INDUCE PREVIOUSLY UNDETECTED
            EPILEPTIC SYMPTOMS EVEN IN USERS WHO HAVE NO HISTORY OF PRIOR SEIZURES OR EPILEPSY. IF YOU, OR ANYONE IN YOUR
            FAMILY, HAVE AN EPILEPTIC CONDITION, CONSULT YOUR PHYSICIAN PRIOR TO USING THE SERVICE. IMMEDIATELY DISCONTINUE
            USE OF THE SERVICE AND CONSULT YOUR PHYSICIAN IF YOU EXPERIENCE ANY OF THE FOLLOWING SYMPTOMS WHILE USING THE
            SERVICE: DIZZINESS, ALTERED VISION, EYE OR MUSCLE TWITCHES, LOSS OF AWARENESS, DISORIENTATION, ANY INVOLUNTARY
            MOVEMENT, OR CONVULSIONS.
          </p>
          <h4>26. LIMITATION OF LIABILITY</h4>
          <p>YOU EXPRESSLY UNDERSTAND AND AGREE THAT <?=$mofh['title'];?> AND ITS SUBSIDIARIES, AFFILIATES, OFFICERS, EMPLOYEES,
            AGENTS, PARTNERS AND LICENSORS SHALL NOT BE LIABLE TO YOU FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
            CONSEQUENTIAL OR EXEMPLARY DAMAGES, INCLUDING, BUT NOT LIMITED TO, DAMAGES FOR LOSS OF PROFITS, GOODWILL, USE,
            DATA OR OTHER INTANGIBLE LOSSES (EVEN IF <?=$mofh['title'];?> HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES),
            RESULTING FROM: (i) THE USE OR THE INABILITY TO USE THE SERVICE; (ii) THE COST OF PROCUREMENT OF SUBSTITUTE
            GOODS AND SERVICES RESULTING FROM ANY GOODS, DATA, INFORMATION OR SERVICES PURCHASED OR OBTAINED OR MESSAGES
            RECEIVED OR TRANSACTIONS ENTERED INTO THROUGH OR FROM THE SERVICE; (iii) UNAUTHORIZED ACCESS TO OR ALTERATION OF
            YOUR TRANSMISSIONS OR DATA; (iv) STATEMENTS OR CONDUCT OF ANY THIRD PARTY ON THE SERVICE; OR (v) ANY OTHER
            MATTER RELATING TO THE SERVICE.
          </p>
          <h4>28. EXCLUSIONS AND LIMITATIONS</h4>
          <p>SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF CERTAIN WARRANTIES OR THE LIMITATION OR EXCLUSION OF LIABILITY
            FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES. ACCORDINGLY, SOME OF THE ABOVE LIMITATIONS OF SECTIONS 19 AND 20 MAY
            NOT APPLY TO YOU.
          </p>
          <h4>29. SPECIAL ADMONITION FOR SERVICES RELATING TO FINANCIAL MATTERS</h4>
          <p>If you intend to create or join any service, receive or request any news, messages, alerts or other information
            from the Service concerning companies, stock quotes, investments or securities, please read the above Sections
            24 and 26 again. They go doubly for you. In addition, for this type of information particularly, the phrase "Let
            the investor beware" is apt. The Service is provided for informational purposes only, and no Content included in
            the Service is intended for trading or investing purposes. <?=$mofh['title'];?> and its licensors shall not be
            responsible or liable for the accuracy, usefulness or availability of any information transmitted or made
            available via the Service, and shall not be responsible or liable for any trading or investment decisions based
            on such information.
          </p>
          <h4>30. NO THIRD-PARTY BENEFICIARIES</h4>
          <p>You agree that, except as otherwise expressly provided in this TOS, there shall be no third-party beneficiaries
            to this agreement.
          </p>
          <h4>31. NOTICE</h4>
          <p><?=$mofh['title'];?> may provide you with notices, including those regarding changes to the TOS, by email, regular mail
            or postings on the Service.
          </p>
          <h4>32. TRADEMARK INFORMATION</h4>
          <p>The <?=$mofh['title'];?>, <?=$mofh['title'];?> logo, trademarks and service marks and other <?=$mofh['title'];?> logos and product and
            service names are trademarks of <?=$mofh['title'];?> (the "<?=$mofh['title'];?> Marks"). Without <?=$mofh['title'];?>'s prior
            permission, you agree not to display or use in any manner the <?=$mofh['title'];?> Marks.
          </p>
          <h4>33. NOTICE AND PROCEDURE FOR MAKING CLAIMS OF COPYRIGHT OR INTELLECTUAL PROPERTY INFRINGEMENT</h4>
          <p><?=$mofh['title'];?> respects the intellectual property of others, and we ask our users to do the same. <?=$mofh['title'];?> may,
            in appropriate circumstances and at its discretion, disable and/or terminate the accounts of users who may be
            repeat infringers. If you believe that your work has been copied in a way that constitutes copyright
            infringement, or your intellectual property rights have been otherwise violated, please provide <?=$mofh['title'];?>'s
            Copyright Agent the following information:
          </p>
          <ul>
            <li>an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright
              or other intellectual property interest;
            </li>
            <li>a description of the copyrighted work or other intellectual property that you claim has been infringed;</li>
            <li>a description of where the material that you claim is infringing is located on the site;</li>
            <li>your address, telephone number, and email address;</li>
            <li>a statement by you that you have a good faith belief that the disputed use is not authorized by the
              copyright owner, its agent, or the law;
            </li>
            <li>a statement by you, made under penalty of perjury, that the above information in your Notice is accurate and
              that you are the copyright or intellectual property owner or authorized to act on the copyright or
              intellectual property owner's behalf.
            </li>
          </ul>
          <h4>34. GENERAL INFORMATION</h4>
          <h5>Entire Agreement.</h5>
          <p>The TOS constitutes the entire agreement between you and <?=$mofh['title'];?> and governs your use of the Service,
            superseding any prior agreements between you and <?=$mofh['title'];?> with respect to the Service. You also may be
            subject to additional terms and conditions that may apply when you use or purchase certain other <?=$mofh['title'];?>            services, affiliate services, third-party content or third-party software.
          </p>
          <h5>Waiver and Severability of Terms.</h5>
          <p>The failure of <?=$mofh['title'];?> to exercise or enforce any right or provision of the TOS shall not constitute a
            waiver of such right or provision. If any provision of the TOS is found by a court of competent jurisdiction to
            be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties'
            intentions as reflected in the provision, and the other provisions of the TOS remain in full force and
            effect.
          </p>
          <h5>No Right of Survivorship and Non-Transferability.</h5>
          <p>You agree that your <?=$mofh['title'];?> account is non-transferable and any rights to your <?=$mofh['title'];?> ID or contents
            within your account terminate upon your death. Upon receipt of a copy of a death certificate, your account may
            be terminated and all contents therein permanently deleted.
          </p>
          <h5>Statute of Limitations.</h5>
          <p>You agree that regardless of any statute or law to the contrary, any claim or cause of action arising out of or
            related to use of the Service or the TOS must be filed within one (1) year after such claim or cause of action
            arose or be forever barred.
          </p>
          <p>The section titles in the TOS are for convenience only and have no legal or contractual effect.</p>
          <h4>35. VIOLATIONS</h4>
          <p>Please report any violations of the TOS to <?=$mofh['email'];?>.</p>
          <div class="m-t-25 m-b--5 align-center">
            <a href="signup.php">Ready to SignUp? Click here!</a>
          </div>
        </div>
        <script src="material.js"></script>
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