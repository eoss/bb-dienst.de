<!DOCTYPE html>
<html>
<head>
	<title>BB Sicherheitsdienst & Reinigungsservice - Kontakt</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Sicherheitsdienst und Reinigungservice Ihrens vertrauens.">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<meta name="keywords" content-type="Sicherheitsdienst Hamburg, Security, Security Hamburg, Reinigung, Reinigungsservice Hamburg, Reinigungsservice, Detektei">
	<meta name="author" content="Emir Balić">
	<link rel="stylesheet" href="css/swiper.css">
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
		function initialize() {
		  var mapProp = {
		    center:new google.maps.LatLng(51.508742,-0.120850),
		    zoom:5,
		    mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp			);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body>
	<div id="container">
		<section id="top">
			<div class="wrapper">
				<div class="search-container cf">
					<div class="address cf">
						<a href="#"><div class="pin-icon"></div></a>
						<p>Speckenreye 16, 22111 Hamburg</p>
						<div class="phone-icon"></div>
						<p>0176 / 255-255-25</p>
					</div>
					<div class="fb">
						<a href="#"><img src="img/mail.png" alt="mail"></a>
						<a href="#"><img src="img/social_icon_facebook.png" alt="fb"></a>
					</div>
					<!-- <div class="search-form">
						<form id="search-form">
							<input type="text" placeholder="Search">
							<button>GO</button>
						</form>
					</div> -->
				</div>
			</div>
		</section>
		<header id="header">
			<div class="wrapper cf">
				<div id="logo-container">
					<a href="index.html"><img src="img/logo5.png" alt="Logo"></a>
				</div>
				<div id="menu" class="cf">
					<ul>
						<li><a href="index.html">Sartseite</a></li>
						<li><a href="#">Unternehmen</a></li>				
						<li><a href="#">Dienstleistungen</a></li>		
						<li><a href="#">Kontakt</a></li>
					</ul>
				</div>
			</div>
		</header>
		<!-- Swiper -->
    	<div class="swiper-container">
    	    <div class="swiper-wrapper">
    	        <div class="swiper-slide">
    	        	<img src="img/slider/1.jpg" alt="Slika 1">
    	        	<div class="text1">
    	        		<h1>BB Sicherheitsdienst</h1>
    	        		<p>Sicherheit ist eines der Grundbedürfnisse jedes Menschen. Wir bieten Schutz und gewährleistet Sicherheit – in allen Lebenslagen.</p>
    	        		<a href="#" class="es-button">Kontakt</a>	
    	        	</div>
    	        </div>
    	        <div class="swiper-slide">
    	        	<img src="img/slider/2.jpg" alt="">
					<div class="text2">
    	        		<h1>Reinigungsservice</h1>
    	        		<p>Weil sauberkeit nicht gleich sauberkeit ist, liefern wir ihnen eine individuelle lösung, damit alles in bester ordnung ist.</p>
    	        		<a href="#" class="es-button">Dienstleistungen</a>	
    	        	</div>
    	        </div>
    	        <div class="swiper-slide">
    	        	<img src="img/slider/3.jpg" alt="">
					<div class="text3">
    	        		<h1>Unser Unternehmen</h1>
    	        		<p>Gemeinsam mit unseren Mitarbeitern produzieren wir für Sie zuverlässigen und wirkungsvollen Schutz. </p>
    	        		<a href="#" class="es-button">Unternehmen</a>	
    	        	</div>
    	        </div>    	       
    	    </div>
    	    <!-- Add Arrows -->
    	    <div class="swiper-button-next"></div>
    	    <div class="swiper-button-prev"></div>
    	</div>
    	<!-- Swiper End-->
    	
    	<section class="body">
    		<div class="wrapper">
    			<h2>Unser Standort</h2>
    				<div id="googleMap" style="width:99.9%; height:550px;"></div>
            	<form method="post" action="mail.php">
            		<h2>Kontaktformular</h2>
                	<label>* Vor- & Nachname / Unternehmen :</label>
                	<input name="name" placeholder="Ihr Vor- & Nachname hier...">

                	<label>* E-mail :</label>
                	<input name="email" type="email" placeholder="Ihre E-mail Hier...">
                	<label>Telefon :</label>
                	<input name="phone" type="phone" placeholder="Ihre Telefonnummer hier...">
                	<label>Nachricht :</label>
                	<textarea name="message" placeholder="Ihre Nachricht hier..."></textarea> 
                	<input  id="submit" name="submit" type="submit" value="Senden">
            	</form>
            </div>		
        </section>
        
		<footer>
			<div class="wrapper cf">
				<ul>
					<li>© 2015 BB Sicherheitsdienst & Reinigungsservice   | </li>
					<li>Powered by <a href="www.mobilegrows.com">MobileGrows</a>   | </li>
					<li>info@bb-dienst.de   | </li>
					<li></li>
				</ul>
			</div>
		</footer>
	</div>

<!-- page1 //////////////////////////////////////////////////////////////////////-->

	<!-- Swiper JS -->
    <script src="js/swiper.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        loop: true,
        autoplay: 4500,
        // autoplayDisableOnInteraction: false,
        effect: 'fade',
        keyboardControl: true,
        setWrapperSize: true,
    });
    </script>
</body>
</html>