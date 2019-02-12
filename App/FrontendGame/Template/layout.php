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
	<link rel="stylesheet"  href="/Web/css/layout.css"  />
	<link rel="stylesheet" media="screen and (min-width: 992px) and (max-width: 1199px)" href="/Web/css/resolution_large_screen.css" />
	<link rel="stylesheet" href="/Web/css/resolution_tablette.css" media="screen and (min-width: 768px) and (max-width: 991px)" />
	<link rel="stylesheet" href="/Web/css/resolution_phone.css" media="screen and (max-width: 767px)"/>

	<!--FICHIER DES ICONES-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

	<!--FICHIER POLICE D'ECRITURE-->
	<link href="https://fonts.googleapis.com/css?family=Puritan" rel="stylesheet">
</head>

<body>

	<!--CADRE GAME-->
	
	<section class="section-container-frontendgame container-fluid">
			<div class="row text_game">

				<audio id="audio_broken_weapon" src="/Web/sound/broken_weapon.mp3"></audio>

				<?= $content ?>

				<div class="text-inventory">
					<div id="container-table-button" class="col-xl-6">
						<table class="table-inventory">
							<tr class="name-character">
								<th>Nom</th>
								<th>Force</th>
								<th>Vie</th>
								<th>Arme</th>
							</tr>
			
							<tr class="stats-character">
								<td><?= $warriorPlayer['name']?></td>
								<td id="damages_players"><?= $warriorPlayer['damages']?></td>
								<td id="life_players"><?= $warriorPlayer['life']?></td>
								<td id="weapon_players">Mains nues</td>
							</tr>
						</table>

						<button type="button" class="btn btn-secondary" id="button_inventory" data-toggle="modal" data-target="#inventoryModal"><img src="/Web/images/logo_inventory.png" class="img_inventory" alt="logo_inventory" title="inventaire"/></button>
					</div>
				</div>

				<div id="return_home">
					<span><img class="img_home" src="/Web/images/home.png" alt="home" title="Retour à l'Acceuil" data-toggle="modal" data-target="#exitModal"/><span>
				</div>

			</div>
	</section>

	<div class="modal fade" id="exitModal" tabindex="-1" role="dialog" aria-labelledby="exitModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			    <div class="modal-header">
			       <h5 class="modal-title" id="exitModalLabel">Un bout de parchemin</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			    </button>
			    </div>
			     <div class="modal-body">
			        <p id="para-exit">Si vous retournez à l'Accueil, vous recommencerez le jeu depuis le début...</p>
			        <a href="delete-inventory-<?= $user->getAttribute('id') ?>.html" class="link-exit" id="deconnexion">Accueil</a>
			     </div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="inventoryModal" tabindex="-1" role="dialog" aria-labelledby="inventoryModalTitle" aria-hidden="true">
		<div id="all-modal-dialog" role="document">
			<div class="modal-dialog modal-dialog2" role="document">
			   <div class="modal-content">
			     <div class="modal-header">
			       <p class="modal-title" id="inventoryModalTitle">Caractéristique :</p>
			     </div>
			     <div class="modal-body modal-body2">
			      <p>Vitalité : <span id="statLife"><?= $warriorPlayer['life']?></span> + <span id="life"></span></p> 
			      <p>Dégâts : <span id="statDamage"><?= $warriorPlayer['damages']?></span> + <span id="damages"></span></p>
			      <p>Arme : <span id="nameWeapon">Mains nues</span></p>
			      <p>Utilisation : <span id="statLifetime">/</span></p>  
			     </div>
			    </div>
			 </div>

			 <div class="modal-dialog modal-dialog1" role="document">
			   <div class="modal-content">
			    <div class="modal-header modal-header1">
			       <p class="modal-title" id="inventoryModalTitle">Personnage :</p>
			       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		         		<span aria-hidden="true">&times;</span>
		       		</button>
			    </div>
			    <div class="modal-body modal-body-one">
			     	<div id="modal-img">
						<img src="<?= $warriorPlayer['src']?>" class="warrior_png_img" alt="<?= $warriorPlayer['name']?>" title="<?= $warriorPlayer['name']?>"/>
			     	</div>

			     	<div id="modal-description-player">
						<p>Nom : <?= $warriorPlayer['name']?></p>
						<p>Classe : <?php if($warriorPlayer['type'] == "warrior_player"){ ?>
	    					Guerrier
							<?php
								}else{
							?>
							Inconnu
							<?php
							}
							?>
						</p>
					</div>
			     </div>

			    </div>
			 </div>

			 <div class="modal-dialog modal-dialog3" role="document">
			   <div class="modal-content">
			     <div class="modal-header">
			       <p class="modal-title" id="inventoryModalTitle">Inventaire</p>
			     </div>
			     <div class="modal-body modal-body3">
			     	<div id="all-modal-objects">
					<?php 
						foreach ($allObjects as $allObject){
					?>
			
						<div class="modal-object"><img class="img-src-modal" src="<?= $allObject['src']?>" /></div>
						<div class="modal-object-name"><?= $allObject['name']?></div>
						<div class="modal-object-description"><?= $allObject['description']?></div>
						<div class="modal-object-damages"><?= $allObject['damages']?></div>
						<div class="modal-object-life"><?= $allObject['life']?></div>
						<div class="modal-object-lifetime"><?= $allObject['lifetime']?></div>
						<a class="modal-object-href" href="delete-object-<?=$allObject['id']?>.html">Utiliser</a>
					<?php
					}
					?>
					</div>
					 <div id="all-modal-description"></div>          
			     </div>
			     
			    </div>
			 </div>
		</div>
	</div>

	<script type="text/javascript" src="/Web/js/playerStorage.js"></script>
	<script type="text/javascript" src="/Web/js/fightDemon.js"></script>
	<script type="text/javascript" src="/Web/js/fightBat.js"></script>
	<script type="text/javascript" src="/Web/js/fightCrow.js"></script>
	<script type="text/javascript" src="/Web/js/fightWolf.js"></script>
	<script type="text/javascript" src="/Web/js/fightGolem.js"></script>
	<script type="text/javascript" src="/Web/js/gate.js"></script>
	<script type="text/javascript" src="/Web/js/takeApple.js"></script>
	<script type="text/javascript" src="/Web/js/takeStick.js"></script>
	<script type="text/javascript" src="/Web/js/takeSword.js"></script>
	<script type="text/javascript" src="/Web/js/takeChest.js"></script>
	<script type="text/javascript" src="/Web/js/takeAcorn.js"></script>
	<script type="text/javascript" src="/Web/js/secret.js"></script>
	<script type="text/javascript" src="/Web/js/fountain.js"></script>
	<script type="text/javascript" src="/Web/js/fightTroll.js"></script>
	
</body>
</html>