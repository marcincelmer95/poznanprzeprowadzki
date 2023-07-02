<?php
	include 'header.php';
?>
	<div class="main-orange-bar">
		<!-- <img style="margin: 0; padding: 0px 0px 0px 20px;" height="16px" src="img/Contact_icon_white.png" alt="White contact icon poznań przeprowadzki contact icon, poznan removals contact icon" name="poznań przeprowadzki contact icon"> -->
		<h1 class="lang" key="contact">Kontakt</h1>
	</div>
	<main>
		<div class="contact-container">
			
			<!-- <div class="contact-info-container">			
				<img src="img/Superman.png" alt="">
				<p class="contact-info-container-tel">tel. +48 732 739 751</p>
				<a href="index.php"><p class="contact-info-container-url">www.poznanprzeprowadzki.pl</p></a>
			</div> -->

			<!-- <div class="contact-map-container">
				<p class="lang" key="we-are-here" style="margin: 0 auto; font-size: 16px; font-family: Open Sans; color: #ff4800; margin-bottom: 6px;">Tu jesteśmy</p>
				<div id="contact-map" class="contact-map"></div>
			</div>

			<script>
				function initMap() {
					var location = {lat:52.407840, lng:16.927220};
					var map = new google.maps.Map(document.getElementById('contact-map'),{zoom: 14, center: location}); 

					var marker = new google.maps.Marker({position: location, map: map})
				}
			</script>

			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYj85kcZZdpC0XGDsDNut9jkQc5Ha_Mzk&callback=initMap"
  			type="text/javascript"></script> -->

			<div class="contact-form-container">


<div class="status">
<?php
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$topic = $_POST['topic'];
		$message = $_POST['message'];

		$to = "hubertnowicki5@wp.pl";

		$subject = "Tu ".$name.". Wiadomość do poznanprzeprowadzki.pl";
		$headers = "From: ".$visitor_email;
		$txt = "\nNowa wiadomość od: ".$name."\n\n\nTemat:\n".$topic."\n\n\nWiadomość:\n".$message;  

		$secretKey = "6Ld1dsEZAAAAAL3AjYvy5oAxEqCAcX7Okj2CrmJj";
		$responseKey = $_POST['g-recaptcha-response'];
		$UserIP = $_SERVER['REMOTE_ADDR'];
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

		$response = file_get_contents($url);
		$response = json_decode($response);

		if ($response->success) {
			mail($to, $subject, $txt, $headers);
			echo '<p id="message-successfull" class="lang" key="message-succesfull">Wiadomość została wysłana</p>';
		}
		else {
			echo '<p id="message-fail" class="lang" key="message-fail">Nieprawidłowe Captcha, proszę spróbować ponownie</p>';
		}
	}
?>
</div>


				<div class="contact-form">
					<form class="contact-form-form" action="contact.php" method="POST">
						<h1 class="lang" key="contact-form" style="margin: 0; font-size: 22px; font-family: Open Sans; color: #ff4800; margin-bottom: 10px; padding-bottom: 4px; font-weight: 100; width: 100%; text-align: center;">Formularz kontaktowy</h1>

						<label class="lang" key="contact-form-name" for="name">Imię</label>
						<input id="name" class="contact-form-content" type="text" name="name" required>
						
						<label class="lang" key="contact-form-email" for="email">E-mail</label>
						<input id="email" class="contact-form-content" type="email" name="email" required>
						
						<label class="lang" key="contact-form-topic" for="topic">Temat</label>
						<input id="topic" class="contact-form-content" type="text" name="topic" required>
						
						<label class="lang" key="contact-form-text" for="message">Dodatkowe informacje</label>
						<textarea id="message" name="message" style="line-height:16px; font-size: 14px; font-family: calibri;" class="contact-form-content" cols="" rows="10"></textarea>

						<div class="g-recaptcha" data-theme="light" data-sitekey="6Ld1dsEZAAAAAFh1uol0aI3mmFqAqxXiAB20lKXv" data-size="normal" ></div>
						
						<button class="contact-form-content-submit" name="submit" type="submit"><p class="lang" key="contact-form-send" style="margin: 0; padding: 0;">Wyślij</p><img id ="Contact_icon_white" src="img/Contact_icon_white.png" alt="White contact icon"></button>	
					</form>

					<div class="contact-form-callnow" style="display: flex; align-items: center; justify-content: center; margin: 0; padding: 0;">
						<p class="lang" key="callnow" id="contact-form-callnow" style="font-family: Open Sans; margin: 0; padding: 14px 0px 4px 0px;">Zadzwoń teraz i umów przeprowadzkę!</p>
					</div>
					<div style="display: flex; align-items: center; justify-content: center; margin: 0; padding: 0;">
						<a style="margin: 0; padding: 0;" href="tel:+48732739751"><img src="img/Phone_icon_orange.png" alt="Phone icon" style="height: 28px; padding-right: 10px"></a>
						<a style="margin: 0; padding: 0;" href="tel:+48732739751"><p style="font-family: Open Sans; margin: 0; padding: 4px 0px 10px 0px; font-size: 20px;">732 739 751</p></a>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php
	include 'footer.php';
?>	