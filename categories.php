<?php require_once 'inc/inc.config.php';?>
<?php 
require 'admin/classes/Catproduct.php';
require 'admin/classes/utils.php';
require 'admin/classes/pagination.php';
session_start();

(!empty($_GET['idcat'])) ? $idcat = $_GET['idcat'] : $idcat = null;
(!empty($_GET['idrub'])) ? $idrub = $_GET['idrub'] : $idrub = null;	


(!empty($_GET['id_color'])) ? $id_color = $_GET['id_color'] : $id_color = null;


try {
   //Affichage categorie + rubriques 
   if (empty($id_color)){
    
		$catproduct = new Catproduct();
		$total = $catproduct->productNumberGet($idcat,$idrub,1);
		//$result = $contact->contactGet(null, $offset, $count);
		
		$epp = 33; // nombre d'entrées à afficher par page (entries per page)
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
		$result = $catproduct->productGet(null, $start, $epp, $idcat, $idrub,1);
		//print_r($result);
		
		
		//Recup des categories
		$catproduct->catproduitViewIterative(null);
		$resultCat = $catproduct->tabView;
		//print_r($resultCat);
		
		if (!empty($idcat)) {
			$result2 = $catproduct->catproductGet($idcat);
			$libCategorie = $result2[0]['label'];
		} else {
			$libCategorie ='Tous les produits';
		}
		
		$resultRub = $catproduct->getRubriques();
		$libRubrique ='';
		if (!empty($resultRub)) {
			foreach ($resultRub as $value) {
				if ($idrub == $value['id']) {
					$libRubrique = $value['label'];
				}
			}
		}		
		$catproduct = null;
		
	//affichage des couleur vétements	
   } else {
       
       $catproduct = new Catproduct();
       $total = $catproduct->colorProductNumberGet($id_color,1);
       //$result = $contact->contactGet(null, $offset, $count);
       
       $epp = 6; // nombre d'entrées à afficher par page (entries per page)
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
       $result = $catproduct->colorProductGet($start, $epp, $id_color,1);
       //print_r($result);
   }
		
} catch (Exception $e) {
	echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
	$catproduct = null;
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
    <?php  if (empty($id_color)):?>
	<a href="./">Accueil</a> > <a href="categories.php">Produits</a> > <?php echo  $libCategorie ?> > <?php echo  $libRubrique ?>
	<?php else:?>
	<a href="./">Accueil</a> > <a href="categories.php">Produits</a> > Votre article en fonction de votre tenue
	<?php endif;?>
</div>			
				<!-- Products list -->
				<div class="row">
				<?php  if (empty($id_color)):?>
					<div class="large-3 medium-3 small-12 columns menu-categories">
						<ul>
							<a href="categories.php">Afficher tous les produits</a>
						</ul>		
						<ul>
							<?php 
							if (!empty($resultCat)) {
								$j=0;
								foreach ($resultCat as $value) { 
									$decalage = "";
									if ($value['level'] > 1){
										for ($i=0; $i<($value['level'] * 2); $i++) {
											$decalage .= "&nbsp;";
										}
									}	
								$j++;
								($idcat == $value['id']) ? $activ = 'class="active"' : $activ = '';
								?>
									<?php if ($value['level']==0) { ?>
										
										<?php if ($j>1) { ?>
										</ul>
									</li>
										<?php } ?>
									<li <?php echo $activ ?>>
									<a href="categories.php?idcat=<?php echo $value['id'] ?>"><?php echo $decalage.$value['label']?></a>
										<ul>
									<?php } ?>
											<?php if ($value['level']!=0) { ?>
											<li <?php echo $activ ?>><a href="categories.php?idcat=<?php echo $value['id'] ?>"><?php echo $decalage.$value['label']?></a></li>
											<?php } ?>
										
								<?php } ?>
										</ul>
									</li>
							<?php } ?>
						</ul>
						<br>
						<ul>
							<?php 
							if (!empty($resultRub)) {
								$j=0;
								foreach ($resultRub as $value) { 
								$j++;
								($idrub == $value['id']) ? $activ = 'class="active"' : $activ = '';
								?>
										
										<?php if ($j>1) { ?>
										</ul>
									</li>
										<?php } ?>
									<li <?php echo $activ ?>>
									<a href="categories.php?idcat=<?php echo $idcat?>&idrub=<?php echo $value['id'] ?>"><?php echo $value['label']?></a>
										<ul>
										
								<?php } ?>
										</ul>
									</li>
							<?php } ?>
						</ul>
					</div>
					<?php else:?>
					<?php 
					for ($i = 1; $i < 9; $i++) {
					    if ($i==$id_color){
					        $classcolor[$i] = 'colordessus' ;
					    } else {
					        $classcolor[$i] = '' ;
					    }
					   
					}
					?>
					<div class="large-3 medium-3 small-12 columns products-list">
						<div class="content bijou">
							<img src="img/mannequin.png" alt="" />
							<h4>Ma robe...</h4>
							<p>mon bijou</p>
							<span class="color <?php echo $classcolor[2]?>" style="background-color:#000;" onclick="location.href='categories.php?id_color=2'"></span>
							<span class="color <?php echo $classcolor[8]?>" style="background-color:#818181;" onclick="location.href='categories.php?id_color=8'"></span>
							<span class="color <?php echo $classcolor[1]?>" style="background-color:#fff;" onclick="location.href='categories.php?id_color=1'"></span>
							<span class="color <?php echo $classcolor[5]?>" style="background-color:#cdcabf;" onclick="location.href='categories.php?id_color=5'"></span>
							<span class="color <?php echo $classcolor[3]?>" style="background-color:#079dbd;" onclick="location.href='categories.php?id_color=3'"></span>
							<span class="color <?php echo $classcolor[4]?>" style="background-color:#7dc60b;" onclick="location.href='categories.php?id_color=4'"></span>
							<span class="color <?php echo $classcolor[6]?>" style="background-color:#f5226d;" onclick="location.href='categories.php?id_color=6'"></span>
							<span class="color <?php echo $classcolor[7]?>" style="background-color:#eab916;" onclick="location.href='categories.php?id_color=7'"></span>
							<button >Trouver mon bijou</button>
						</div>
					</div>
					<?php endif;?>
					
					
					<div class="large-9 medium-9 small-12 columns">
						<div class="row products-list">
							<?php 
							if (!empty($result)) {
								foreach ($result as $value) { 
								?>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="/photos/products<?php echo $value['image1'] ?>" class="fancybox">
										<span>
											<img src="img/couronne.png" alt="" class="couronne" />
											<img src="/photos/products/thumbs<?php echo $value['image1'] ?>" alt="" class="img" />
										</span>
										<h4><?php echo $value['label'] ?></h4>
										<p><?php echo substr($value['accroche'], 0,100).'...' ?></p>
										<span class="prix"><?php echo number_format($value['prix'], 2, ',', ' '); ?> <?php echo $value['libprix']?><br></span>
									</a>
									<button onclick="location.href='produit.php?id=<?php echo $value['id'] ?>&idcat=<?php echo $idcat ?>'">En savoir +</button>
								</div>
							</div>
							<?php } ?>
						<?php } else { ?>
						      <br><br><br>
							<h4>Nous n'avons pas d'articles correspondant à votre recherche.</h4>
						<?php } ?>			
						</div>
						<div class="row pagination">
							<div class="large-12 columns">
							 <?php  if (empty($id_color)):?>
								<?php echo paginate('categories.php?idcat='.$idcat, '&p=', $nbPages, $current); ?>
							<?php else:?>
							     <?php echo paginate('categories.php?id_color='.$id_color, '&p=', $nbPages, $current); ?>
							<?php endif;?>	
							</div>
						</div>
					</div>
				</div>
				<!-- End Products list -->
				
<?php include('inc/footer.php'); ?>
<script>
		$('.header .content ul li:nth-child(2)').addClass('active');
	</script>
	</body>
</html>
