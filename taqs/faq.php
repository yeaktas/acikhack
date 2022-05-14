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
			
			<a href="index.php" class="navbar_href">
				<div class="navbar_item">
					Home
				</div>
			</a>

			<a href="#" class="navbar_href">
				<div class="navbar_item">
					FAQ
				</div>
			</a>

			<a href="api.php" class="navbar_href">
				<div class="navbar_item">
					API
				</div>
			</a>
		</div>

	
		<div class="body_faq">

			<div class="text_panel_faq">
				<div class="text_header">
					Neden Block Chain
				</div>
				<div class="text_content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas odit consequatur quidem quod quae deserunt harum voluptas odio animi dolores illum, inventore nobis eaque magni corporis. Dolores consectetur laborum iure.
				</div>
			</div>

			<div class="text_panel_faq">
				<div class="text_header">
					Misyonumuz
				</div>
				<div class="text_content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas odit consequatur quidem quod quae deserunt harum voluptas odio animi dolores illum, <br><br> inventore nobis eaque magni corporis. Dolores consectetur laborum iure. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, quae doloremque voluptatum deleniti soluta magnam quibusdam deserunt nisi natus. Pariatur architecto saepe numquam omnis officia eveniet soluta rerum maiores iusto?
				</div>
			</div>
				
			
		</div>
</div>

	<div id="controls" class="controls" style="display: none;"></div>
	
	<script src="triangle.js"></script>
</body>
</html>