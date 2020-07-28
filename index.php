<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" type="text/css" href="">
<!--PHP DATABASE-->
  	<?php include 'db/db.php'; ?>
</head>
<body>
	<header class="header">
				<nav class="navbar">
			  <div class="brand">
                <!--<a href="#"> <span style="font-family: 'Kiona-Regular';">Snap</span> Stock</a><br>-->
                <a href="#"> <span style="font-family: 'Kiona-Regular';font-size: 15px;"><i class="fa fa-camera-retro"></i></span> <span style="font-size: 15px;"> Stock</span></a><br>
			  	<a class="social-top" href="https://www.instagram.com/walker._.12"><i class="fab fa-instagram"></i></a>
              </div>

              <input type="checkbox" id="check">
					<label for="check" class="checkbtn">
						<i class="bar fas fa-bars"></i>
						<i class="cross fas fa-times"></i>
					</label>
<!--slidebar-->		<ul>
						<li><a href="html/about.html">ABOUT</a></li>
						<li><a href="html/blog.html">BLOG</a></li>
						<li><a href="html/contact.html">CONTACT</a></li>
						<li><a href="html/signup.html">SIGN UP</a></li>
					</ul>
				</nav>
			</header>
<!--MAIN-->
<main role="main" class="flex-shrink-0 container-fluid">
<section class="container-fluid" id="aboutus">
	<div class="container abt">
				<h1>CONTACT</h1>
	</div>
	<div class="container cont">
		<form action="userinfo.php" method="post" class="contact-form">
			<div class="div" data-validate="Name is required">
				    <input class="input fname" type="text" name="name" placeholder="Full Name*">
					<span class="shadow-input1"></span>
			</div>
			
			<div class="div">
				    <input class="input phone" type="text" name="phone" placeholder="Phone Number(optional)">
				    <span class="shadow-input1"></span>
			</div>
			<div class="div" data-validate="Valid email is required: ex@abc.xyz">
				    <input class="input email" type="text" name="email" placeholder="Email Address*">
				    <span class="shadow-input1"></span>
			</div>
			<div class="div" data-validate="Message is required">
					<textarea class="input message-box" name="msg" placeholder="Write your request"></textarea>
					<span class="shadow-input1"></span>
			</div>

				<div class="form-btn">
					<button class="btn">
						<span>
							Send Email<i class="fas fa-paper-plane"></i>
						</span>
					</button>
				</div>
		</form>
	</div>
	<div class="container contactid">
		<h1 class="contme">CONTACT-ME</h1>
        <h4 class="gtouch">get in touch with Snap Stock</h4><br>

        <ul>
      <li><a id="f" href="https://www.facebook.com/profile.php?id=100011971261574" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
      <li><a id="tw"  href="https://www.twitter.com/thisisme_mukul" target="_blank"><i class="fab fa-twitter"></i></a></li>

      <li><a id="ig" href="https://www.instagram.com/walker._.12" target="_blank"><i class="fab fa-instagram"></i></a></li>
      <li><a id="li"  href="https://www.linkedin.com/in/thisisme-mukulsaini" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

        </ul><br>
        <h2 class="sit">Stay in touch<br>I'm Social</h2>
	</div>

	
</section>

</main>


<!--FOOTER-->
<footer class="footer mt-auto py-3 foot">
  <div class="container">
  	   <div class="brand">
                <a href="../index.html"> <span style="font-family: 'Kiona-Regular';font-size: 15px;"><i class="fa fa-camera-retro"></i></span> <span style="font-size: 15px;"> Stock</span></a><br>
        </div><br>
  	<ul>
      <li><a id="f" href="https://www.facebook.com/profile.php?id=100011971261574" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
      <li><a id="tw"  href="https://www.twitter.com/thisisme_mukul" target="_blank"><i class="fab fa-twitter"></i></a></li>

      <li><a id="ig" href="https://www.instagram.com/walker._.12" target="_blank"><i class="fab fa-instagram"></i></a></li>
      <li><a id="li"  href="https://www.linkedin.com/in/thisisme-mukulsaini" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

    </ul>
    <p id="copy">Copyright &copy; <script>document.write(new Date().getFullYear())</script>  SNAP STOCK Inc. All rights reserved<br>Created by <a id="thisisme" href="https://www.instagram.com/walker._.12" target="_blank" > THIS IS ME </a>
    </p>
  </div>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
