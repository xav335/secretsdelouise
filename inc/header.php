<?php 
require_once 'admin/classes/Panier.php';
$panier = new Panier();
try {
    $result2 = $panier->quantiteArticlesPanier(session_id());
    //print_r($result2);
    //
} catch (Exception $e) {
    echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
    $panier = null;
    exit();
}
$panier = null;
?>
<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
			
				<a class="left-off-canvas-toggle" href="#"><img src="img/bt-menu.png" /></a>
				
				<!-- Off Canvas Menu -->
				<aside class="left-off-canvas-menu">
					<!-- whatever you want goes here -->
					<ul>
						<li><a href="#">Collier</a></li>
						<li><a href="#">Bague</a></li>
						<li><a href="#">Bracelet</a></li>
						<li><a href="#">Chaussures</a></li>
						<li><a href="#">Maroquinerie</a></li>
					</ul>
					<ul>
						<li><a href="actualites.php">Actualités</a></li>
						<li><a href="livre-d-or.php">Livre d’or</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</aside>	
		
			    <!-- Header -->
				<div class="row header fullwidth fixed">
					<div class="row content">
						<div class="large-8 medium-8 columns">
							<ul>
								<li><a href="#">Collier</a></li>
								<li><a href="#">Bague</a></li>
								<li><a href="#">Bracelet</a></li>
								<li><a href="#">Chaussures</a></li>
								<li><a href="#">Maroquinerie</a></li>
							</ul>
						</div>
						<div class="large-4 medium-4 content2 columns">
							<ul>
								<li><a href="actualites.php">Actualités</a></li>
								<li><a href="livre-d-or.php">Livre d’or</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Header -->
				
				<!-- Top -->
				<div class="row top">
					<div class="large-8 medium-8 columns">
						<a href="./"><img src="img/logo.jpg" alt="Les Secrets de Louise - Bijoux &amp; accessoires" title="Les Secrets de Louise - Bijoux &amp; accessoires" /></a>
					</div>
					<div class="large-4 medium-4 columns panier hide-for-small">
						<div>
							<h3>Mon panier</h3>
							<p><span><?php echo $result2['quantite']?></span> articles</p>
							<button onclick="location.href='panier.php'">Valider mon panier</button>
						</div>
					</div>
				</div>
				<div class="row show-for-small">
					<div class="columns panier-mobile">
						<div class="row">
							<div class="small-6 columns"><span><?php echo $result2['quantite']?></span> articles dans mon panier</div>
							<div class="small-6 columns"><button onclick="location.href='panier.php'">Valider mon panier</button></div>
						</div>
					</div>
				</div>
				<!-- End Top -->
				
				