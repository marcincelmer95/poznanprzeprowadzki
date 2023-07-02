	<footer>
		<div>
			<div class="footer-container">
				<div class="footer-container-logo">
					<a href="index.php"><img src="img/poznanprzeprowadzki_logo3.png" alt="Logo"></a>
				</div>
				<ul class="footer-container-translate">
					<li id="pl" class="translate translate-button"><a href="#"><p>Polski</p></a></li>

					<li><p class="navigation-wall">|</p></li>

					<li id="en" class="translate translate-button"><a href="#"><p>English</p></a></li>

					<li><p class="navigation-wall">|</p></li>

					<li id="de" class="translate translate-button"><a href="#"><p>Deutsche</p></a></li>

					<li><p class="navigation-wall">|</p></li>

					<li id="es" class="translate translate-button"><a href="#"><p>Español</p></a></li>
				</ul>
				<nav class="footer-container-navigation">
					<ul>
						<li><a href="index.php#indexmain"><p class="lang" key="home">Strona główna</p></a></li>

						<li><p class="navigation-wall">|</p></li>

						<li><a href="about.php#indexabout"><p class="lang" key="about">O nas</p></a></li>

						<li><p class="navigation-wall">|</p></li>

						<li><a href="gallery.php#indexgallery"><p class="lang" key="gallery" >Galeria</p></a></li>

						<li><p class="navigation-wall">|</p></li>

						<li><a href="contact.php#indexcontact"><p class="lang" key="contact" >Kontakt</p></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>

	<a id="gotopbtn" onclick="topFunction()"><i class="fas fa-chevron-up"></i></a>

	<script type="text/javascript">
		
    const cookieContainer = document.querySelector(".cookies-info-container");

    const cookieButton = document.querySelector(".cookies-accept-button");

    cookieButton.addEventListener("click", () => {
    	localStorage.setItem("cookieBannerDisplayed", "true")
    	document.getElementById("cookies-info-container").style.display = "none";
    });

    setTimeout( ()=> {
    	if(!localStorage.getItem("cookieBannerDisplayed")) {
    		document.getElementById("cookies-info-container").style.display = "block";
    	}
    	else if(localStorage.getItem("cookieBannerDisplayed")) {
    		document.getElementById("cookies-info-container").style.display = "none";
    	}
    });

    const mybutton = document.getElementById("gotopbtn");

    window.onscroll = function() {
    	scrollFunction();
    }

    function scrollFunction(){
    	if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    		mybutton.style.display = "flex";
    	}
    	else {
    		mybutton.style.display = "none";
    	}
    }

    function topFunction() {
  		document.body.scrollTop = 0; // For Safari
  		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}
	</script>
</body>
</html>	