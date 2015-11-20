	<?
	// ---- Liste des rubriques disponibles ------- //
	if ( 1 == 1 ) {
		$__rubrique = new Catproduct();
		$liste_rubrique = $__rubrique->getRubriques();
	}
	// -------------------------------------------- //
	?>
	
				<!-- Footer -->
				<div class="row footer fullwidth">
					<div class="row">
						<div class="large-5 medium-5 columns">
							<div>
								<?
								if ( !empty( $liste_rubrique ) ) {
									foreach( $liste_rubrique as $_rubrique ) {
										if ( $_rubrique[ "id" ] != 1 )
											echo "<a href='categories.php?idrub=" . $_rubrique[ "id" ]  . "'>" . $_rubrique[ "label" ]  . "</a>\n";
									}
								}
								?>
							</div>
							<div class="contacts">
								<a href="categories.php">Votre boutique</a>
								<a href="actualites.php">Actualités</a>
								<a href="livre-d-or.php">Livre d'or</a>
								<a href="contact.php">Contact</a>
							</div>
						</div>
						<div class="large-2 medium-2 columns">
							<p></p>
						</div>
						<div class="large-5 medium-5 columns">
							<h1>Les secrets de Louise</h1>
							<p>Bijoux &amp; Accessoires</p>
						</div>
						<div class="large-12 columns mentions">
							© les secrets de Louise <a href="mentions.php">mentions légales</a> <a href="http://www.iconeo.fr" target="_blank">création iconeo</a>
						</div>
					</div>
				</div>		
				<!-- End Footer -->
				
			</div>
		</div>
        <!-- Scripts -->
		<script src="../js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
		<!-- End Scripts -->