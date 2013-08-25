<?php $theme = "sambal"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>Sambal - documentation</title>
		<meta charset="utf-8" />
		<meta name="author" content="" />
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="viewport" content="width=device-width">
		<meta property="og:image" content=""/>
		<meta property="og:title" content="" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" />
		<link rel="author" type="text/plain" href="/humans.txt" />
		<link rel="stylesheet" href="/themes/<?php print $theme ?>/styles/all.css" />
		<script type="text/javascript">document.documentElement.className += " js";</script>
		<!--[if lt IE 9]>
			<script src="/themes/<?php print $theme ?>/components/polyfill/html5shiv.min.js" type="text/javascript"></script>
			<script src="/themes/<?php print $theme ?>/components/polyfill/respond.min.js" type="text/javascript"></script>
		<![endif]-->
		<script src="/themes/<?php print $theme ?>/components/config.js" type="text/javascript"></script>
		<script src="/themes/<?php print $theme ?>/components/ljs/l.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var themeName = "<?php print $theme ?>";
			ljs.addAliases(jlsConfig);
		</script>
		<script src="/themes/<?php print $theme ?>/scripts/all.js" type="text/javascript"></script>
	</head>
	<body>
		<header class="MainHeader">
			<div>
				<section id="navigation"><nav class="MainNav" role="navigation">
					<ul><!--
						<?php foreach (["composition-ultra" => "Composition (Ultra)", "composition-grid" => "Composition (Same)", "various" => "Various element"] as $key => $value): ?>
						--><li><a href="#<?php print $key ?>"><?php print $value ?></a></li><!--
						<?php endforeach; ?>
					--></ul>
				</nav></section>
			</div>
		</header>
		<section class="MainContent">
			<?php include "pages/elements.php" ?>
		</section>
	</body>
</html>
