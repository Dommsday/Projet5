<!DOCTYPE html>
<html>
<head>
	<title>
		<?= isset($title) ? $title : "L'histoire dont vous êtes le héros"; ?>
	</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Vous vous retrouvez dans une fôret maléfique. Votre but est de sortir d'ici vivant. Cette histoire est basé sur les jeux textuels tel que les livres 'Histoire dont vous êtes le héros'. ">

	<!--LIEN BOOTSTRAP-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<!--FICHIER CSS-->
	<link rel="stylesheet" href="/Web/css/layout.css"  />
	<link rel="stylesheet" media="screen and (min-width:992px) and (max-width:1199px)" href="/Web/css/resolution_large_screen.css" />
	<link rel="stylesheet" href="/Web/css/resolution_tablette.css" media="screen and (min-width: 768px) and (max-width: 991px)" />
	<link rel="stylesheet" href="/Web/css/resolution_phone.css" media="screen and (max-width: 767px)"/>
	
	
	<!--FICHIER DES ICONES-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

	<!--FICHIER POLICE D'ECRITURE-->
	<link href="https://fonts.googleapis.com/css?family=Puritan" rel="stylesheet">

	<!--FACEBOOK-->
    <meta property="og:title" content="Jean Forteroche">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.julien-zimmermann.fr/histoire/Autoload/index.php">
    <meta property="og:image" content=" ">
    <meta property="og:description" content="Vous vous retrouvez dans une fôret maléfique. Votre but est de sortir d'ici vivant. Cette histoire est basé sur les jeux textuels tel que les livres 'Histoire dont vous êtes le héros'.">
        
    <!--TWITTER-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Vous vous retrouvez dans une fôret maléfique. Votre but est de sortir d'ici vivant."/>
    <meta name="twitter:site" content=" ">
</head>

<body>

	<section class="container-fluid" id="layout-game">
		<div class="ban">
			<img class="img-fluid" src="/Web/images/old-spooky-tree.jpg" alt="Spooky Tree Responsive image" />
		</div>
		
		
	<div class="container-contenu container-fluid">

		<div class="row text_frontend">

			<?php if($user->hasMessage()){
			?>
			<p class="message"><i class="fas fa-check-circle"></i><?=$user->getMessage()?></p>
			<?php  
			}
			?>

			<?= $content ?>
		</div>

	</div>

	</section>
	<!--FIN CONTENU DES DERNIERES NEWS-->

	<!--FOOTER-->
	
	<script type="text/javascript" src="/Web/js/time.js"></script>

	<!--PARTIE FORMULAIRE TINYMCE-->
	<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

	<script>
  		tinymce.init({
    		selector: '#mytextarea'
  		});
  	</script>
  	<!--FIN PARTIE FORMULAIRE TINYMCE-->

</body>
</html>