<title>404 - Cette page n'existe pas ou plus...</title>
<?php
	// inclure ci-dessus les balises à inclure dans la balise <head> du layout
	$this->endSection('head');
?>
<?php
	// inclure ci-dessous les balises à inclure à la fin de votre DOM
	$this->beginSection();
?>
<?php
	$this->endSection('scripts');
	$this->beginSection();
	// START CONTENT
	// Intégrer ci-dessous la vue
?>
<div class="ErrorPage">
		<h1 class="title">Cette page n'existe pas</h1>

		<p class="title">404</p>
</div>