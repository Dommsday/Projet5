<div class="container-game container-village">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<div id="chest1" class="chest chest-village-ThreeR">
			
		<img class="chest-img" src="/Web/images/chest.png" alt="coffre" title="Coffre"/>

		<div id="action_chest1" class="action_chest">
			<button type="button" id="action-open-chest" class="open_chest btn" data-toggle="modal" data-target="#chestVillageThreeR">Ouvrir</button>
		</div>
	</div>

	<div id="all-apple">

		<?php
		if(isset($displayApple) && $displayApple  == 1){
			
		?>

		<div id="apple1" class="apple1-villageThree-R apple">
				
			<img class="apple-img" src="<?= $apple['src']?>" alt="<?= $apple['name']?>" title="<?= $apple['name']?>"/>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" name="apple1" value="Prendre" id="btnApple1" class="btnApple"/>
				</form>
			</div>
		</div>

		<?php
		}
		?>	
	
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-three-right.html"><img class="arrow arrow-top" alt="arrow-top" title="flèche pour aller tout droit" src="/Web/images/arrow_top.png" /></a>	
	</div>

</div>

<div class="modal fade" id="chestVillageThreeR" tabindex="-1" role="dialog" aria-labelledby="chestVillageThreeRLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		    <div class="modal-header">
		       <h5 class="modal-title" id="chestVillageThreeRLabel">Un bout de parchemin</h5>
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		    </button>
		    </div>
		     <div class="modal-body">
		        <p>Un petit bout de papier, preques détruit. On peut y apercevoir des chiffres. Vous devriez les noter quelques part</p>
		        <img class="parchemin_two_img parchemin_img" src="/Web/images/parchemin_two.png" />
		     </div>
		</div>
	</div>
</div>