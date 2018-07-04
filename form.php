<!doctype html>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Potrzebujesz strony dla swojej firmy? Możemy ci w tym pomóc! Otsu to profesjonalne tworzenie stron internetowych." />
		<meta name="keywords" content="otsu, webmaster, strona, tworzenie, design, webdesign" />
		<link rel="manifest" href="site.webmanifest">
		<title>Otsu Webdesign</title>
		<link rel="canonical" href="https://otsu.pl/dziekujemy"/>
		<link rel="apple-touch-icon" href="icon.png">
        <link rel="stylesheet" href="css/main.css" type="text/css">
		<link rel="stylesheet" href="css/style.css"  type="text/css"/>
		<link rel="stylesheet" href="css/nav.css"  type="text/css"/>
		<link rel="stylesheet" href="css/aos.css"  type="text/css"/>
		<link rel="stylesheet "href="https://fonts.googleapis.com/css?family=Lato|Roboto" type="text/css">
	</head>
	<body>
	
		<!-- Nawigacja -->
		<noscript>
			<div style="width:100%; position:fixed; top:0; color:red; z-index: 13;">
				Twoja przeglądarka ma wyłączony Javascript! Strona nie będzie wyświetlana w pełni poprawnie.
			</div>
		</noscript>
		<nav>
			<div id="nav">
				<a href='/'><div id="logo"></div></a>
				<div id="outerburger">
					<div id="hamburger" class="menu icon"></div>
				</div>
				<div id="menu">
					<ul>
						<li><a href='/'>Główna</a></li>
						<li><a href='o-nas'>O nas</a></li>
						<li><a href='cennik'>Cennik</a></li>
						<li><a href='kontakt'>Kontakt</a></li>
						<li><a href='FAQ'>FAQ</a></li>
					</ul>
				</div>
				<noscript>
					<div id="nojs-menu">
						<ul>
							<li><a href='/'>Główna</a></li>
							<li><a href='o-nas'>O nas</a></li>
							<li><a href='cennik'>Cennik</a></li>
							<li><a href='kontakt'>Kontakt</a></li>
							<li><a href='FAQ'>FAQ</a></li>
						</ul>
					</div>
				</noscript>
			</div>
		</nav>

        <!-- Content -->
        <div style='margin-top: 100px; text-align: center;'>
        <h1>Dziękujemy za wypełnienie formularza!</h1>
        <a href='zamow'><h2>Placeholderowy przycisk powrotu do formularza</h2></a>

        <?php
            $email = $_POST['email'];
            echo "Test php. E-mail podany w formularzu to $email";
        ?>

        </div>
		<footer>
			<div id="footer">Otsu&trade; Webdesign Maciej Witkowski i Radosław Kamiński - Wszelkie prawa zastrzeżone &copy;</div>
		</footer>
		<!-- Skrypty -->
		<script src="js/nav.js"></script>
        <script src="js/plugins.js"></script>
        <script>
		
			window.onload = function()
			{
				activeNav();
			}
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
		<script src="https://www.google-analytics.com/analytics.js" async defer></script>
	</body>
</html>