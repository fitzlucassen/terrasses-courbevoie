<title>Salle de réception près de Paris « Les Terrasses de Courbeboie »</title>
<meta name="Description" content="Les Terrasses de Courbevoie » est une salle de réception pour événements d’entreprise, séminaires et cocktails près de Paris. Louer et privatiser une salle pour événements privés proche du quartier d’affaire de la Défense.">
<meta property="og:title" content="Salle de réception près de Paris « Les Terrasses de Courbeboie »" />
<meta property="og:description" content="Les Terrasses de Courbevoie » est une salle de réception pour événements d’entreprise, séminaires et cocktails près de Paris. Louer et privatiser une salle pour événements privés proche du quartier d’affaire de la Défense." />

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
			<h1>Une salle de réception privatisable<br/>proche de Paris et de la Défense</h1>
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
				<p>
					La location d’une salle événementielle est l’une des 3 composantes
					essentielles d’une réception réussie. Un excellent traiteur et une organisation
					d’événement impeccable exigent une adresse inédite pour que la magie
					opère !<br/><br/>
					Cet espace consacré à vos cocktails, diners de gala, soirées d’entreprise,
					buffets et déjeuners, ce sont « Les Terrasses de Courbevoie ». Plus de 400m²
					d’espace privatisable, où la clarté s’invite à travers les immenses baies vitrées
					et une vaste terrasse ensoleillée, n’attendent que vos convives !<br/><br/>
					Vous souhaitiez louer et privatiser une salle pour organiser un événement
					d’entreprise ou une réception privée proche du quartier d’affaire de la
					Défense et de Paris ? Avec son caractère atypique et ses espaces modulables,
					la salle « Les Terrasses de Courbevoie » va surprendre vos invités !
				</p>

				<p class="more"><a href="/qui-sommes-nous.html">> En savoir +</a></p>

			</div>
		</div>
	</div>

	<div id="place-strat" class="strat">
		<div class="band">
			<div class="linea"></div>
			<h2 class="section-title">Une salle événementielle haut de gamme à Courbevoie</h2>
			<br />
			<br />
			<p>
				Privatiser « Les Terrasses de Courbevoie », c’est dénicher un lieu exclusif qui valide tous les critères
				de sélection pour vos événements de moyenne et grande envergure.<br/>
				Au fil des saisons, « Les Terrasses de Courbevoie » vibre au rythme des soirées grand public et de prestigieux événements
				privés ou professionnels.
			</p>

			<br />
			<br />
			<p class="button"><a href="#form-strat">Louer la salle</a></p>
		</div>
	</div>

	<div id="event-strat" class="strat">
		<div class="strat-container" style="position: relative;">
			<div class="linea"></div>	
			<h2 class="section-title" style="text-align:center;">Les évènements à venir</h2>

			<div class="event-container">
				<div class="event-card">
					<h4 class="event-title">Mercredi<br/>22<br/>avril 2020<br/>20h30</h4><p class="event-desc"><i>Zazie</i></p>
				</div><div class="event-card">
					<h4 class="event-title">Samedi<br/>31<br/>octobre 2020<br/>20h30</h4><p class="event-desc"><i>Serge Lama</i></p>
				</div><div class="event-card">
					<h4 class="event-title">Samedi<br/>19<br/>décembre 2020<br/>20h30</h4><p class="event-desc"><i>Michael Gregorio</i></p>
				</div>
			</div>
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
			<h2 class="section-title" style="text-align:center;margin-bottom:2%;">Réservation</h2>

			<p style="text-align:center;">
				Organiser un repas d’affaires, une soirée d’entreprise ou une réception privée est une excellente
				occasion pour véhiculer des valeurs, transmettre des émotions et marquer les esprits.<br/>
				Louer et privatiser Les Terrasses, c’est offrir ce pur moment de plaisir gourmand dans un cadre inédit !
			</p>
			<br/>
			<br/>
			<p style="text-align:center;">Besoin d’en savoir davantage ? Remplissez le formulaire ci-dessous, nous sommes à votre disposition.</p>
			
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
				<p style="text-align: center;">Avez-vous un projet événementiel en vue ?</p>
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
						<p>
							Qu’attendez-vous d’un bon traiteur ? Une
							gastronomie aussi exquise que créative ?
							Laissez la brigade de Cocktail Cocktail ravir
							gourmands et gourmets.<br/>
							Traiteur à proximité de Paris et de la Défense,
							depuis 1996, la maison régale sa clientèle de
							petits déjeuners appétissants, de cocktails
							étonnants, de savoureux plateaux-repas et de
							délicieux buffets chauds ou froids.
						</p>

						<p class="more"><a href="/qui-sommes-nous.html">> En savoir +</a></p>
					</div>
				</div>
				<div style="clear:both"></div>
				<br/>
				<br/>
				<div class="card metstendances">
					<div class="card-text">
						<p>
							Vous organisez un événement d’entreprise ou
							une réception privée ?<br/>
							Laissez-nous vous suggérer le florilège de
							services sur-mesure de Mets Tendances.<br/>
							La marque du groupe Cocktail Cocktail, Mets
							Tendances, est entièrement dédiée à
							l’organisation de réceptions et d’événements
							haut de gamme…
						</p>

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