<footer>
	<div class="round">
	</div>
	<div class="footer-container" style="text-align: center;">
		<p class="titleFooter">Le groupe Cocktail Cocktail au service des vos événements</p>
		<br />
		<div class="footer-logo">
			<img src="/<?php echo __image_directory__; ?>/metstendances.png" alt="Logo Mets Tendances" />
		</div>
		<div class="footer-logo with-border">
			<img src="/<?php echo __image_directory__; ?>/metstendances_4_45.png" alt="Logo Cocktail Cocktail" />
		</div>
		<div class="footer-logo">
			<img src="/<?php echo __image_directory__; ?>/metstendances_4_43.png" alt="Logo les terrasses de Courbevoie" />
		</div>
		<br />
		<br />
		<br />

		<p style="font-size: 12px;letter-spacing:2px;">7 BOULEVARD ARISTIDE BRIAND - 92 400 COURBEVOIE</p>
		<p class="mentions"><a href="/mentions-legales.html">Mentions légales</a></p>
	</div>
</footer>

<!-- Required script -->
<script type="text/javascript" src="/<?php echo __js_directory__; ?>/Module/jquery-1.10.min.js"></script>
<script type="text/javascript" src="/<?php echo __js_directory__; ?>/Module/jquery-ui-1.10.custom.min.js"></script>
<script type="text/javascript" src="/<?php echo __js_directory__; ?>/_built.js"></script>

<?php
if (isset($this->Sections['scripts']))
	$this->render($this->Sections['scripts']);
?>