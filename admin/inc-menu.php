	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                	<div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
                    <a  href="/admin/"><img src="/admin/img/logo.png" height="51"/></a>
                	</div>
                	<div class="col-md-12 collapse navbar-collapse">
	           			<ul class="nav navbar-nav">
	           				<li>
					          	<a href="/admin/rubrique/liste.php" role="button">Rubriques</a>
					        </li>
					        <li class="dropdown">
					          	<a href="/admin/produit-list.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Produits<span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="/admin/catproduct-list.php">Catégories</a></li>
					          		<li class="divider"></li>
					            	<li><a href="/admin/product-edit.php">Ajout Produits</a></li>
					            	<li><a href="/admin/product-list.php">Modif / Suppr</a></li>
					            	<li class="divider"></li>
					            	<li><a href="/admin/product-color-edit.php">Couleurs</a></li>
					            	<li><a href="/admin/product-size-edit.php">Tailles</a></li>
					            	<li class="divider"></li>
					            	<li><a href="/admin/product-list-stock.php">Sous références en rupture de Stock</a></li>
					            	<li><a href="/admin/product-list.php?actif=OFF">Produits supprimés</a></li>
					          	</ul>
					        </li>
					        <li class="dropdown">
					          	<a href="commandes-list.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Commandes<span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="/admin/commandes-list.php?all=1">Toutes les commandes</a></li>
					            	<li><a href="/admin/commandes-list.php?statutCommande=1">Commandes à traiter</a></li>
					            	<li><a href="/admin/commandes-list.php?statutCommande=2">Commandes à livrer</a></li>
					            	<li><a href="/admin/commandes-list.php?statutCommande=3">Commandes Traitées & livrées</a></li>
					            	<li><hr></li>
					            	<li><a href="/admin/commandes-list.php">Commandes non abouties</a></li>
					          	</ul>
					        </li>
	           				<li class="dropdown">
					          	<a href="/admin/news-list.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Actualités <span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="/admin/news-edit.php">Ajout</a></li>
					            	<li><a href="/admin/news-list.php">Modif / Suppr</a></li>
					          	</ul>
					        </li>
	                        <li class="dropdown">
					          	<a href="/admin/goldbook-list.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Livre d'or <span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="/admin/goldbook-edit.php">Ajout</a></li>
					            	<li><a href="/admin/goldbook-list.php">Modif / Suppr</a></li>
					          	</ul>
					        </li>
					         <li class="dropdown">
					          	<a href="/admin/contact-list.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contacts <span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="/admin/contact-edit.php">Ajout</a></li>
					            	<li><a href="/admin/contact-list.php">Modif / Suppr</a></li>
					            	<li class="divider"></li>
					            	<li><a href="/admin/contact-import.php">Import / Export</a></li>
					          	</ul>
					        </li>
	                        <li class="dropdown">
					          	<a href="/admin/newsletter-list.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Newsletter<span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="/admin/newsletter-edit.php">Ajout Newsletter</a></li>
					            	<li><a href="/admin/newsletter-list.php">Modif / Suppr / Envoi</a></li>
					            	<li class="divider"></li>
					            	<li><a href="/admin/newsletterjournal-list.php">Journal des envoi</a></li>
					          	</ul>
					        </li>
	                    </ul>
                    </div> 
                    <div class="col-md-1 collapse navbar-collapse">
                      	<a class="btn btn-success pull-right" href="/admin/?action=getout">Exit</a>
                     </div> 
                </div><!--/.nav-collapse -->
               
            </div>
        </nav>
<script type="text/javascript">
$(document).ready(function () {
	var url = window.location;
	// Will only work if string in href matches with location
	$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

	// Will also work for relative and absolute hrefs
	$('ul.nav a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');
	});
</script>
