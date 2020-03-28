<title>Salle événementiel et restaurant - Les Terrasses de Courbevoie</title>
<meta name="Description" content="">
<meta property="og:title" content="Salle événementiel et restaurant - Les Terrasses de Courbevoie" />
<meta property="og:description" content="" />

<?php
// inclure ci-dessus les balises à inclure dans la balise <head> du layout
$this->endSection('head');
?>
<?php
// inclure ci-dessous les balises à inclure à la fin de votre DOM
$this->beginSection();

$activeCategory = $this->Model->_categories[0]->getId();

?>
<script>
	$(document).ready(function(){
		$('.menu-meals > div').hide();
		$('.category-<?php echo $activeCategory; ?>').show();

		$('ul.menu-categories li').click(function(){
			var id = $(this).attr('data-id');
			$('li.active').removeClass('active');
			$(this).addClass('active');

			$('.menu-meals > div').hide()
			$('.category-' + id).show();

		});
	});
</script>
<?php
$this->endSection('scripts');
$this->beginSection();

// START CONTENT
// Intégrer ci-dessous la vue
?>
<div class="page" style="height:100%;margin-top:70px;">
	<?php
	if (isset($this->Model->_message) && !empty($this->Model->_message)) {
		$message = $this->Model->_message;
		?>
		<p class="tooltip <?php echo strpos($message, "problème") == false ? "tooltip-success" : "tooltip-error"; ?>">
			<?php echo $message; ?>
		</p>
	<?php
	}
	?>
	<div id="carousel-strat" class="strat">
		<div class="carousel-center-element">
			<img src="/<?php echo __image_directory__; ?>/terrasse.png" class="logo-presentation" />
			<h1>Salle évenementielle et restaurant à Courbevoie</h1>
		</div>
	</div>

	<div id="presentation-strat" class="strat">
		<div class="round"></div>
		<div class="strat-container">
			<div class="presentation-image">
				<div class="presentation-decoration">
					<img src="/<?php echo __image_directory__; ?>/terrasses_5bis_17.png" alt="image de la salle d'événement" />

				</div>
			</div>
			<div class="presentation-container">
				<h2 class="section-title">Présentation</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis nec tortor non blandit.
					Suspendisse pellentesque maximus justo aliquet congue. Morbi et sapien quis lectus vestibulum faucibus.
					Phasellus metus risus, pretium imperdiet dolor in, porttitor ultricies lacus. Etiam mollis libero ligula, at pulvinar urna ultricies id.
					Nulla condimentum posuere finibus. Sed leo dui, pulvinar fermentum felis non, porttitor malesuada arcu</p>

				<p class="more"><a href="/qui-sommes-nous.html">> En savoir +</a></p>

			</div>
		</div>
	</div>

	<div id="place-strat" class="strat">
		<div class="band">
			<div class="linea"></div>
			<h2 class="section-title">Privatisation : la salle</h2>
			<br />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis nec tortor non blandit.
				Suspendisse pellentesque maximus justo aliquet congue. Morbi et sapien quis lectus vestibulum faucibus.
				Phasellus metus risus, pretium imperdiet dolor in, porttitor ultricies lacus. Etiam mollis libero ligula, at pulvinar urna ultricies id.</p>
			<br />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis nec tortor non blandit.
				Suspendisse pellentesque maximus justo aliquet congue. Morbi et sapien quis lectus vestibulum faucibus.
				Phasellus metus risus, pretium imperdiet dolor in, porttitor ultricies lacus. Etiam mollis libero ligula, at pulvinar urna ultricies id.</p>

			<br />
			<p class="button"><a href="#form-strat">Louer la salle</a></p>
		</div>
	</div>

	<div id="menu-strat" class="strat">
		<div class="linea" style="margin-bottom: 0%;"></div>
		<div class="strat-container" style="padding-top: 2%;">

			<h2 class="section-title" style="text-align:center;">Le restaurant : le menu</h2>

			<ul class="menu-categories">
				<?php
				$cpt = 0;
				foreach($this->Model->_categories as $category) { ?>
				<li class="<?php echo $cpt == 0 ? "active" : ""; ?>" data-id="<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></li>
				<?php 
					$cpt++;
				} ?>
			</ul>
			<div class="menu-meals">
				<?php 
					$cpt = 1;
					foreach($this->Model->_meals as $meal) { 
				?>
					<div class="meal-<?php echo $cpt % 2 == 0 ? "right" : "left"; ?> category-<?php echo $meal->getId_Category(); ?>"><?php echo $meal->getDescription(); ?></div>
				<?php
						$cpt++; 
					} 
			?>
			</div>

			<br />
			<br />

			<p class="button" style="text-align:center;"><a href="#form-strat">Réserver une table</a></p>
		</div>
	</div>

	<div id="form-strat" class="strat">
		<div class="strat-container" style="position: relative;">
			<div class="form-decoration">
				<img src="/<?php echo __image_directory__; ?>/terrasses_5bis_23.png" alt="" class="first-img"/>
				<img src="/<?php echo __image_directory__; ?>/terrasses_5bis_27.png" alt="" class="second-img"/>
			</div>
			<div class="linea" style="margin-bottom: 2%;"></div>
			<h2 class="section-title" style="text-align:center;">Réservation</h2>

			<form action="" method="post">
				<div class="left-column fix-size">
					<div class="civility">
						<input type="radio" name="isCompany" id="isCompany3" value="0" /><label for="isCompany3">Mme</label>
						<input type="radio" name="isCompany" id="isCompany2" value="0" /><label for="isCompany2">M</label>
						<input type="radio" name="isCompany" id="isCompany1" value="1" checked="true" /><label for="isCompany1">Entreprise</label>
					</div>
					<input type="text" name="companyName" id="companyName" placeholder="Nom de l'entreprise" />
					<input type="text" name="companySiret" id="companySiret" placeholder="Numéro de siret" />
					<input type="text" name="firstname" id="firstname" placeholder="Prénom" />
					<input type="text" name="lastname" id="lastname" placeholder="Nom" />
					<input type="text" name="phoneNumber" id="phoneNumber" placeholder="Téléphone" required />
					<input type="email" name="email" id="email" placeholder="E-mail" required />
				</div><div class="right-column fix-size">
					<textarea name="message" id="message" cols="6" placeholder="Message"></textarea>
				</div>
				<br />
				<br />
				<p style="text-align: center;">Je vous contact pour une date en particulier...</p>
				<br />
				<div class="left-column">
					<input type="text" name="eventDate" id="eventDate" placeholder="Date de la réservation" />
				</div><div class="right-column">
					<input type="number" name="people" id="people" placeholder="Nombre de personne" />
				</div>

				<br />
				<br />
				<div style="text-align:center">
					<input type="submit" class="button" value="Envoyer la demande">
				</div>
			</form>
		</div>
	</div>

	<div id="group-strat" class="strat">
		<div class="strat-container">
			<div class="linea" style="margin-bottom: 2%;"></div>
			<h2 class="section-title" style="text-align:center;">Nos autres activités</h2>

			<div>
				<div class="card cocktailcocktail">
					<div class="card-img">
						<img src="/<?php echo __image_directory__; ?>/terrasses_5bis_31.png" alt="Illustration de cocktail cocktail" />
					</div><div class="card-text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis nec tortor non blandit.
							Suspendisse pellentesque maximus justo aliquet congue. Morbi et sapien quis lectus vestibulum faucibus.
							Phasellus metus risus, pretium imperdiet dolor in, porttitor ultricies lacus. Etiam mollis libero ligula, at pulvinar urna ultricies id.</p>

						<p class="more"><a href="/qui-sommes-nous.html">> En savoir +</a></p>
					</div>
				</div>
				<div style="clear:both"></div>
				<br/>
				<br/>
				<div class="card metstendances">
					<div class="card-text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis nec tortor non blandit.
							Suspendisse pellentesque maximus justo aliquet congue. Morbi et sapien quis lectus vestibulum faucibus.
							Phasellus metus risus, pretium imperdiet dolor in, porttitor ultricies lacus. Etiam mollis libero ligula, at pulvinar urna ultricies id.</p>

						<p class="more"><a href="/qui-sommes-nous.html">> En savoir +</a></p>
					</div><div class="card-img">
						<img src="/<?php echo __image_directory__; ?>/terrasses_5bis_35.png" alt="Illustration de Mets-Tendances" />
					</div>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<?php
	include(__partial_directory__ . "/footer.php");
	?>
</div>