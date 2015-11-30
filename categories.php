<?
	require_once 'inc/inc.config.php';
	require 'admin/classes/Catproduct.php';
	require 'admin/classes/utils.php';
	require 'admin/classes/pagination.php';
	session_start();
	
	$idcat = ( !empty( $_GET[ "idcat" ] ) ) ? $_GET[ "idcat" ] : null;
	$idrub = ( !empty( $_GET[ "idrub" ] ) ) ? $_GET[ "idrub" ] : null;	
	$id_color = ( !empty( $_GET[ "id_color" ] ) ) ? $_GET[ "id_color" ] : null;
	
	// ---- On ne tient pas compte de idrub = 1 ---- //
	if ( $idrub == 1 ) $idrub = null;
	
	try {
		
	   // ---- Affichage categorie + rubriques ---------------------- //
	   if ( empty( $id_color ) ) {
	    
			$catproduct = new Catproduct();
			$total = $catproduct->productNumberGet( $idcat, $idrub, 1 );
			//$result = $contact->contactGet(null, $offset, $count);
			
			$epp = 33; // nombre d'entrées à afficher par page (entries per page)
			$nbPages = ceil($total/$epp); // calcul du nombre de pages $nbPages (on arrondit à l'entier supérieur avec la fonction ceil())
			 
			// Récupération du numéro de la page courante depuis l'URL avec la méthode GET
			// S'il s'agit d'un nombre on traite, sinon on garde la valeur par défaut : 1
			$current = 1;
			if (isset($_GET[ "p" ]) && is_numeric($_GET[ "p" ])) {
				$page = intval($_GET[ "p" ]);
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
				$libCategorie = $result2[0][ "label" ];
			} else {
				$libCategorie ='Tous les produits';
			}
			
			$resultRub = $catproduct->getRubriques();
			$libRubrique ='';
			if (!empty($resultRub)) {
				foreach ($resultRub as $value) {
					if ($idrub == $value[ "id" ]) {
						$libRubrique = $value[ "label" ];
					}
				}
			}		
			$catproduct = null;
			
		//affichage des couleur vétements	
	   } 
	   // ----------------------------------------------------------- //
	   
	    // ---- Affichage par choix de couleur ---------------------- //
	   else {
	       
	       $catproduct = new Catproduct();
	       $total = $catproduct->colorProductNumberGet($id_color,1);
	       //$result = $contact->contactGet(null, $offset, $count);
	       
	       $epp = 33; // nombre d'entrées à afficher par page (entries per page)
	       $nbPages = ceil($total/$epp); // calcul du nombre de pages $nbPages (on arrondit à l'entier supérieur avec la fonction ceil())
	       	
	       // Récupération du numéro de la page courante depuis l'URL avec la méthode GET
	       // S'il s'agit d'un nombre on traite, sinon on garde la valeur par défaut : 1
	       $current = 1;
	       if (isset($_GET[ "p" ]) && is_numeric($_GET[ "p" ])) {
	       $page = intval($_GET[ "p" ]);
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
	   // ----------------------------------------------------------- //
			
	} 
	catch ( Exception $e ) {
		echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
		$catproduct = null;
		exit();
	}
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Les Secrets de Louise - Bijoux &amp; accessoires</title>
		<meta name="description" content="les secrets de louise - bijoux & accessoires " />
	    <meta name="keywords" content="bijoux, bijoux fantaisie, colliers, montres, sacs, bagues, bracelets, boucles d'oreilles, créoles, maroquinerie, portes clés, jonc, ras du coup, sautoirs" />
		<? include( "inc/meta.php" ); ?>
	</head>
	
	<body class="categories">
	
		<? include( "inc/header.php" ); ?>
		
		<div class="row breadcrumb">
		    <?
		    if ( empty( $id_color ) ) {
		    	echo "<a href='/'>Accueil</a> > <a href='categories.php'>Produits</a> > " . $libCategorie . " > " . $libRubrique . "\n";
			}
			else {
				echo "<a href='/'>Accueil</a> > <a href='categories.php'>Produits</a> > Votre article en fonction de votre tenue\n";
			}
			?>
		</div>			
		
		<!-- Products list -->
		<div class="row">
			<?
			// ---- Affichage categorie + rubriques ------------------------------------ //
			if ( empty( $id_color ) ) {
				?>
				<div class="large-3 medium-3 small-12 columns menu-categories">
					<ul>
						<a href="categories.php">Afficher tous les produits</a>
					</ul>
					
					<ul>
						<? 
						// ---- Affichage des catégories de produits ------------------ //
						if ( !empty( $resultCat ) ) {
							$j=0;
							foreach ( $resultCat as $value ) {
								$decalage = "";
								if ( $value[ "level" ] > 1 ) {
									for ( $i = 0; $i < ( $value[ "level" ] * 2 ); $i++ ) {
										$decalage .= "&nbsp;";
									}
								}	
								$j++;
								$activ = ( $idcat == $value[ "id" ] ) ? 'class="active"' : '';
								
								if ( $value[ "level" ] == 0 ) {
									if ( $j > 1 ) {
										echo "		</ul>\n";
										echo "	</li>\n";
									}
									
									echo "	<li " . $activ . ">\n";
									echo "		<a href='categories.php?idcat=" . $value[ "id" ] . "'>" . $decalage . $value[ "label" ] . "</a>\n";
									echo "		<ul>\n";
								}
								
								if ( $value[ "level" ] != 0 ) { 
									echo "	<li " . $activ . "><a href='categories.php?idcat=" . $value[ "id" ] . "'>- " . $decalage . $value[ "label" ] . "</a></li>\n";
								}
							} 
							
							echo "		</ul>\n";
							echo "	</li>\n";
						}
						?>
					</ul>
					<br>
					
					<ul>
						<? 
						// ---- Affichage des rubriques ------------------------------- //
						if ( !empty( $resultRub ) ) {
							$j=0;
							foreach ( $resultRub as $value ) { 
								$j++;
								$activ = ( $idrub == $value[ "id" ] ) ? 'class="active"' : '';
								
								if ( $j > 1 ) {
									echo "		</ul>\n";
									echo "	</li>\n";
								}
								
								echo "	<li " . $activ . ">\n";
								echo "		<a href='categories.php?idcat=" . $idcat . "&idrub=" . $value[ "id" ] . "'>" . $value[ "label" ] . "</a>\n";
								echo "		<ul>\n";
							}
							
							echo "		</ul>\n";
							echo "	</li>\n";
						}
						?>
					</ul>
				</div>
				<?
			}
			// ------------------------------------------------------------------------- //
			
			// ---- Affichage par choix de couleur ------------------------------------- //
			else {
				for ( $i = 1; $i < 9; $i++ ) {
					$classcolor[ $i ] = ( $i == $id_color ) ? 'colordessus' : '' ;
				}
				?>
				<div class="large-3 medium-3 small-12 columns products-list">
					<div class="content bijou">
						<img src="img/mannequin.png" alt="" />
						<h4>Ma robe...</h4>
						<p>mon bijou</p>
						<span class="color <?=$classcolor[2]?>" style="background-color:#000;" onclick="location.href='categories.php?id_color=2'"></span>
						<span class="color <?=$classcolor[8]?>" style="background-color:#818181;" onclick="location.href='categories.php?id_color=8'"></span>
						<span class="color <?=$classcolor[1]?>" style="background-color:#fff;" onclick="location.href='categories.php?id_color=1'"></span>
						<span class="color <?=$classcolor[5]?>" style="background-color:#cdcabf;" onclick="location.href='categories.php?id_color=5'"></span>
						<span class="color <?=$classcolor[3]?>" style="background-color:#079dbd;" onclick="location.href='categories.php?id_color=3'"></span>
						<span class="color <?=$classcolor[4]?>" style="background-color:#7dc60b;" onclick="location.href='categories.php?id_color=4'"></span>
						<span class="color <?=$classcolor[6]?>" style="background-color:#f5226d;" onclick="location.href='categories.php?id_color=6'"></span>
						<span class="color <?=$classcolor[7]?>" style="background-color:#eab916;" onclick="location.href='categories.php?id_color=7'"></span>
						<button >Trouver mon bijou</button>
					</div>
				</div>
				<?
			}
			// ------------------------------------------------------------------------- //
			?>
					
			<div class="large-9 medium-9 small-12 columns">
				<div class="row products-list">
					<? 
					if (!empty($result)) {
						foreach ($result as $value) { 
							?>
							<div class="large-4 medium-4 small-12 columns">
								<div class="content">
									<a href="/photos/products<?=$value[ "image1" ] ?>" class="fancybox">
										<span>
											<img src="img/couronne.png" alt="" class="couronne2" />
											<img src="/photos/products/thumbs<?=$value[ "image1" ] ?>" alt="" class="img" />
										</span>
										<h4><?=$value[ "label" ] ?></h4>
										<p><?=substr($value[ "accroche" ], 0,100).'...' ?></p>
										<span class="prix"><?=number_format($value[ "prix" ], 2, ',', ' '); ?> <?=$value[ "libprix" ]?><br></span>
									</a>
									<button onclick="location.href='produit.php?id=<?=$value[ "id" ] ?>&idcat=<?=$idcat ?>'">En savoir +</button>
								</div>
							</div>
							<?
						}
					} 
					else {
						?>
						<br><br><br>
						<h4>Nous n'avons pas d'articles correspondant à votre recherche.</h4>
						<?
					}
					?>
				</div>
				<div class="row pagination">
					<div class="large-12 columns">
						<?
						if (empty($id_color)) {
							echo paginate('categories.php?idcat='.$idcat.'&idrub='.$idrub, '&p=', $nbPages, $current);
						}
						else {
						echo paginate('categories.php?id_color='.$id_color, '&p=', $nbPages, $current);
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- End Products list -->
				
		<? include( "inc/footer.php" ); ?>
		
		<script>
			$('.header .content ul li:nth-child(2)').addClass('active');
		</script>
		
	</body>
</html>
