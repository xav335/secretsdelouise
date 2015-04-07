<?php 
require 'admin/classes/News.php';
require 'admin/classes/utils.php';
session_start();
$news = new News();
if (!empty($_GET)){
	$result = $news->newsGet($_GET['id']);
} else {
	$result = $news->newsGet(null);
}	
	//print_r($result);
	if (empty($result)) {
		$titre=  		'';
		$date_news= 	'';
		$accroche= 		'Pas de news pour le moment.';
		$contenu= 		'';
	} else {
		$titre=  		$result[0]['titre'];
		$date_news= 	traitement_datetime_affiche($result[0]['date_news']);
		$accroche= 		$result[0]['accroche'];
		$contenu= 		$result[0]['contenu'];
	}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<title>Les secrets de Louise - Actualités</title>
<?php include('inc/meta.php'); ?>
</head>
<body>
	
<?php include('inc/header.php'); ?>
<!-- Breadcrumb -->
<div class="row breadcrumb">
	<a href="./">Accueil</a> >  Actualités
</div>
<!-- End Breadcrumb -->	
	<!-- Actualités -->
	<div class="row actualites">
		<h1>Actualités</h1>
		<?php 
			if (!empty($result)) {
				$i=0;
				foreach ($result as $value) { 
				$i++;
				?>
				<div class="row">
					<div class="large-3 medium-3 small-3 columns">
						<a href="photos/news<?php echo $value['image1']?>" class="fancybox"><img src="/photos/news/thumbs<?php echo $value['image1']?>" alt="" /></a>
					</div>
					<div class="large-9 medium-9 small-9 columns">
						<h2><?php echo $value['titre']?></h2>
						<h5><?php echo traitement_datetime_affiche($value['date_news'])?></h5>
						<p>
							<?php echo $value['contenu']?>
						</p>
						<?php if (!empty($value['accroche'])) {?>
						<a href="<?php echo $value['accroche']?>" class="bt-plus">en savoir +</a>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
	<!-- Fin Actualités -->
	
<?php include('inc/footer.php'); ?>
	<script>
		$('.header .content2 ul li:nth-child(1)').addClass('active');
	</script>
	
</body>
</html>
