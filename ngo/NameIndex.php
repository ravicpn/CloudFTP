<?php
define('ROOT_PATH', __DIR__);
require_once(ROOT_PATH . "/libraries/Language.php");
$lang = new Language();
$lang->load("language");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title><?php echo $lang->line("language.nameindextitle")?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/uisearch/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/uisearch/component.css" />
		<link rel="stylesheet" type="text/css" href="../css/menucss/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/menucss/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/menucss/icons.css" />
		<link rel="stylesheet" type="text/css" href="../css/menucss/style3.css" />
		<link rel="stylesheet" type="text/css" href="../css/NameIndex_style.css" />
		<link rel="stylesheet" type="text/css" href="../css/unsemantic-grid-responsive.css" />
		<script src="../js/uisearch/modernizr.custom.js"></script>
		<script src="../js/menujs/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="column">
				<div id="sb-search" class="sb-search">
					<form>
						<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"></span>
					</form>
				</div>
			</div>
		</div>
		<div class="grid-container">
			<div id="indexTable"></div>
			<div id="resultList"></div>
			<div id="ngoResult"></div>
		</div>

		<nav id="bt-menu" class="bt-menu">
			<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
			<ul>
					<li>
						<a href="home.php" class="bt-icon icon-user-outline"><?php echo $lang->line("language.home")?></a>
					</li>
					<li>
						<a href="timeLine.php" class="bt-icon icon-sun"><?php echo $lang->line("language.timeline")?></a>
					</li>
					<li>
						<a href="NameIndex.php" class="bt-icon icon-windows"><?php echo $lang->line("language.index")?></a>
					</li>
					<li>
						<a href="showMap.php" class="bt-icon icon-bubble"><?php echo $lang->line("language.map")?></a>
					</li>
					<li>
						<a href="siteMap.php" class="bt-icon icon-star"><?php echo $lang->line("language.sitemap")?></a>
					</li>
					<li>
						<a href="contact.php" class="bt-icon icon-speaker"><?php echo $lang->line("language.contact")?></a>
					</li>
					<li>
						<a href="nameindex.php?lang=zh-TW" class="bt-icon icon-bubble">中文(繁體)</a>
					</li>
					<li>
						<a href="nameindex.php?lang=en-US" class="bt-icon icon-bubble">Eng(US)</a>
					</li>
				</ul>
		</nav>
		</div>

		<script src="../js/uisearch/classie.js"></script>
		<script src="../js/uisearch/uisearch.js"></script>
		<script src="../js/menujs/classie.js"></script>
		<script src="../js/menujs/borderMenu.js"></script>
		<!--<script type="text/javascript" src="../js/jquery.ui.map.full.min.js"></script>-->
		<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
		<script src="createIndex.js"></script>
		<script>
			new UISearch(document.getElementById('sb-search'));
		</script>
	</body>
</html>