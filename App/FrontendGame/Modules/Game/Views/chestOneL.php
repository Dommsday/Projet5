<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<div id="chest1" class="chest chestOne">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button type="button" class="open_chest btn" data-toggle="modal" data-target="#chestOneL">Ouvrir</button>
		</div>
	</div>

	<?php
		if(isset($display) && $display == 1){
	?>

	<div id="sword1" class="sword swordOne">
			
		<img class="sword-img" src="<?= $sword['src']?>" alt="<?= $sword['name']?>" title="<?= $sword['name']?>"/>
		<?= $sword['name']?>

		<div id="action_sword1" class="action_sword">
			<form action="" method="post">
				<input type="hidden" name="sword1"/>
				<?= $formSword ?>
				<input id="btnSword1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<?php
	}
	?>

	<div id="choise-road">
		<a class="choise-left" href="/game/village-one-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/fight-five-left.html">Aller à droite</a>
	</div>

</div>

<div class="modal fade" id="chestOneL" tabindex="-1" role="dialog" aria-labelledby="chestOneLLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		    <div class="modal-header">
		       <h5 class="modal-title" id="chestOneLLabel">Un bout de parchemin</h5>
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		    </button>
		    </div>
		     <div class="modal-body">
		        <p>Un petit bout de papier, preques détruit. On peut y apercevoir des chiffres. Vous devriez les noter quelques part</p>
		        12666625148
		     </div>
		</div>
	</div>
</div>