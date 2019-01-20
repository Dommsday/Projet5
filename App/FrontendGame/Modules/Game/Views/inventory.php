<div id="test">
<table class="table-inventory">
	<tr class="name-character">
		<th>Nom</th>
		<th>Force</th>
		<th>Vie</th>
	</tr>

	<tr class="stats-character">
		<td><?= $warriorPlayer['name']?></td>
		<td id="damages_players"><?= $warriorPlayer['damages']?></td>
		<td id="life_players"><?= $warriorPlayer['life']?></td>
	
	</tr>

	<!--<button type="button" id="btnModal" class="btn btn-primary " data-toggle="modal" data-target="#inventoryModal">Inventaire</button>-->

	<tr class="objects-inventory">
		<?php 
			foreach ($objects as $object){
		?>
		<td><?= $object['name']?></td>
		<?php
		}
		?>
	</tr>

</table>


<!--<div class="modal fade" id="inventoryModal" tabindex="-1" role="dialog" aria-labelledby="inventoryModalTitle" aria-hidden="false">
	 <div class="modal-dialog modal-dialog-centered" role="document">
	   <div class="modal-content">
	     <div class="modal-header">
	       <h5 class="modal-title" id="inventoryModalTitle">Modal title</h5>
	       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	         <span aria-hidden="true">&times;</span>
	       </button>
	     </div>
	     <div class="modal-body">
	      ...
	     </div>
	    <div class="modal-footer">
	       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	       <button type="button" class="btn btn-primary">Save changes</button>
	    </div>
	    </div>
	 </div>
</div>-->

<div id="testModal">
	<div id="all-modal-dialog">
		<div class="modal-dialog2 modal-dialog-centered" role="document">
		   <div class="modal-content">
		     <div class="modal-header">
		       <p class="modal-title" id="inventoryModalTitle">Caractéristique :</p>
		     </div>
		     <div class="modal-body modal-body2">
		      <p>Vitalité : <?= $warriorPlayer['life']?></p> 
		      <p>Dégâts : <?= $warriorPlayer['damages']?></p> 
		     </div>
		    </div>
		 </div>

		 <div class="modal-dialog1 modal-dialog-centered" role="document">
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

		 <div class="modal-dialog3 modal-dialog-centered" role="document">
		   <div class="modal-content">
		     <div class="modal-header">
		       <p class="modal-title" id="inventoryModalTitle">Inventaire</p>
		     </div>
		     <div class="modal-body modal-body3">
		     	<div id="all-modal-objects">
				<?php 
					foreach ($Allobjects as $Allobject){
				?>
					<div class="modal-object"><?= $Allobject['name']?></div>
					<div class="modal-object-description"><p><?= $Allobject['description']?></p></div>
					<div class="modal-object-damages"><p>Dégâts : <?= $Allobject['damages']?></p></div>
					<div class="modal-object-life"><p>Vie/Durée : <?= $Allobject['life']?></p></div>
				<?php
				}
				?>
					<button type="button" id="btnObject">Utiliser</button>
				</div>
				 <div id="all-modal-description"></div>          
		     </div>
		     
		    </div>
		 </div>
	</div>
</div>

</div>

