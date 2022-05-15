<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="triangle.css"/>
	<title>Taqs</title>
</head>
<body>

<div id="container" style="position:absolute; height: 100%; overflow-y:hidden;">

	<div id="output" class="container" style="position:absolute; z-index: -1; height: 100%;" ></div>

		<div class="header">
			<div class="baslik">
				TAQS
			</div>
			<div class="altbaslik">
				Truth and Quality Standarts
			</div>
		</div>


		<div class="navbar">
			
			<a href="#" class="navbar_href">
				<div class="navbar_item">
					Home
				</div>
			</a>

			<a href="faq.php" class="navbar_href">
				<div class="navbar_item">
					API
				</div>
			</a>

			<a href="api.php" class="navbar_href">
				<div class="navbar_item">
					FAQ
				</div>
			</a>
		</div>

	
		<div class="body">

			<div class="text_panel">
				<div class="text_header">
					Gerçek ve Kalite Standartı
				</div>
				<div class="text_content">
				Bazı sosyal sorunları ortadan kaldırmaya yönelik bir çözüm önerisi planlıyoruz. Evrensel kalite ve güvenilirlik standardı oluşması için bir sistem geliştirme üzerinde yoğunlaşıyoruz.
				</div>
			</div>

			<div class="text_panel">
				<div class="text_header">
					Case Study Ekibi
				</div>
				<div class="text_content">
					Emirhan Ülker <br><br> Erdoğan Çayır <br><br> Rafet Can Tosun <br><br> Yunus Emre Aktaş
				</div>
			</div>
				
			
		</div>
</div>

	<div id="controls" class="controls" style="display: none;"></div>
	
	<script src="triangle.js"></script>
</body>
</html>