<?php 
require 'admin/classes/Catproduct.php';
require 'admin/classes/utils.php';
session_start();
$catproduct = new Catproduct();

try {
		$total = $catproduct->productNumberGet($categ,$rub);
		//$result = $contact->contactGet(null, $offset, $count);
		
		$epp = 15; // nombre d'entrées à afficher par page (entries per page)
		$nbPages = ceil($total/$epp); // calcul du nombre de pages $nbPages (on arrondit à l'entier supérieur avec la fonction ceil())
		 
		// Récupération du numéro de la page courante depuis l'URL avec la méthode GET
		// S'il s'agit d'un nombre on traite, sinon on garde la valeur par défaut : 1
		$current = 1;
		if (isset($_GET['p']) && is_numeric($_GET['p'])) {
			$page = intval($_GET['p']);
			if ($page >= 1 && $page <= $nbPages) {
				// cas normal
				$current=$page;
			} else if ($page < 1) {
				// cas où le numéro de page est inférieure 1 : on affecte 1 à la page courante
				$current=1;
			} else {
				//cas où le numéro de page est supérieur au nombre total de pages : on affecte le numéro de la dernière page à la page courante
				$current = $nbPages;
			}
		}
		
		// $start est la valeur de départ du LIMIT dans notre requête SQL (dépend de la page courante)
		$start = ($current * $epp - $epp);
		
		// Récupération des données à afficher pour la page courante
		$result = $catproduct->productGet(null, $start, $epp, $categ, $rub);
	
} catch (Exception $e) {
	echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
	$goldbook = null;
	exit();
}
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Les Secrets de Louise - Bijoux &amp; accessoires</title>
<?php include('inc/meta.php'); ?>
	</head>
	<body class="categories">
	
<?php include('inc/header.php'); ?>
<div class="row breadcrumb">
	<a href="./">Accueil</a> > <a href="./">Collier</a> >  Produits 
</div>			
				<!-- Products list -->
				<div class="row">
					<div class="large-3 medium-3 small-12 columns menu-categories">
						<ul>
							<li class="active">
								<a href="#">Collier</a>
								<ul>
									<li><a href="#">Or</a></li>
									<li><a href="#">Argent</a></li>
									<li class="active"><a href="#">Fantaisie</a></li>
									<li><a href="#">Tous les produits</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Bague</a>
								<ul>
									<li><a href="#">Or</a></li>
									<li><a href="#">Argent</a></li>
									<li><a href="#">Fantaisie</a></li>
									<li><a href="#">Tous les produits</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Bracelet</a>
								<ul>
									<li><a href="#">Or</a></li>
									<li><a href="#">Argent</a></li>
									<li><a href="#">Fantaisie</a></li>
									<li><a href="#">Tous les produits</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Chaussures</a>
								<ul>
									<li><a href="#">Plates</a></li>
									<li><a href="#">À tallon</a></li>
									<li><a href="#">Aiguilles</a></li>
									<li><a href="#">Tous les produits</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Maroquinerie</a>
								<ul>
									<li><a href="#">Sacs</a></li>
									<li><a href="#">Besaces</a></li>
									<li><a href="#">Porte-feuille</a></li>
									<li><a href="#">Tous les produits</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="large-9 medium-9 small-12 columns">
						<div class="row products-list">
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="produit.php">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="img/img-bijoux.jpg" alt="" class="img" />
										</span>
										<h4>Nom du produit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ligula consectetur porttitor imperdiet...</p>
										<span class="prix">30,15 € TTC</span>
									</a>
									<button onclick="location.href='panier.php'">Ajouter au panier</button>
								</div>
							</div>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="produit.php">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="img/img-bijoux.jpg" alt="" class="img" />
										</span>
										<h4>Nom du produit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ligula consectetur porttitor imperdiet...</p>
										<span class="prix">30,15 € TTC</span>
									</a>
									<button>Ajouter au panier</button>
								</div>
							</div>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="produit.php">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="img/img-bijoux.jpg" alt="" class="img" />
										</span>
										<h4>Nom du produit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ligula consectetur porttitor imperdiet...</p>
										<span class="prix">30,15 € TTC</span>
									</a>
									<button>Ajouter au panier</button>
								</div>
							</div>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="produit.php">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="img/img-bijoux.jpg" alt="" class="img" />
										</span>
										<h4>Nom du produit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ligula consectetur porttitor imperdiet...</p>
										<span class="prix">30,15 € TTC</span>
									</a>
									<button>Ajouter au panier</button>
								</div>
							</div>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="produit.php">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="img/img-bijoux.jpg" alt="" class="img" />
										</span>
										<h4>Nom du produit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ligula consectetur porttitor imperdiet...</p>
										<span class="prix">30,15 € TTC</span>
									</a>
									<button>Ajouter au panier</button>
								</div>
							</div>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="produit.php">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="img/img-bijoux.jpg" alt="" class="img" />
										</span>
										<h4>Nom du produit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ligula consectetur porttitor imperdiet...</p>
										<span class="prix">30,15 € TTC</span>
									</a>
									<button>Ajouter au panier</button>
								</div>
							</div>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="produit.php">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="img/img-bijoux.jpg" alt="" class="img" />
										</span>
										<h4>Nom du produit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ligula consectetur porttitor imperdiet...</p>
										<span class="prix">30,15 € TTC</span>
									</a>
									<button>Ajouter au panier</button>
								</div>
							</div>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="produit.php">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="img/img-bijoux.jpg" alt="" class="img" />
										</span>
										<h4>Nom du produit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ligula consectetur porttitor imperdiet...</p>
										<span class="prix">30,15 € TTC</span>
									</a>
									<button>Ajouter au panier</button>
								</div>
							</div>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="produit.php">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="img/img-bijoux.jpg" alt="" class="img" />
										</span>
										<h4>Nom du produit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin feugiat ligula consectetur porttitor imperdiet...</p>
										<span class="prix">30,15 € TTC</span>
									</a>
									<button>Ajouter au panier</button>
								</div>
							</div>
						</div>
						<div class="row pagination">
							<div class="large-12 columns">
								<a href="#"><</a> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">></a>
							</div>
						</div>
					</div>
				</div>
				<!-- End Products list -->
				
<?php include('inc/footer.php'); ?>
	</body>
</html>
