<div id="container-inventory">
	<div id="container-table-button">
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
		<button type="button" id="button_inventory" data-toggle="modal" data-target="#inventoryModal">Inventaire</button>
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
						<img src="/Web/images/warrior.png" class="warrior_png_img"/>
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
						<a class="modal-object-href" href="delete-object-<?=$allObject['id']?>.html"></a>
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
</div>

