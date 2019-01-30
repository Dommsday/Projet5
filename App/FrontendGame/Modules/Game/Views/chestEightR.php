<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<?php
		if(isset($display) && $display == 1){
	?>

		<div id="apple1" class="apple1-chestEightR apple">
				
			<img class="apple-img" src="<?= $apple['src']?>" />

			<div id="action1" class="action">
				<form action="" method="post">
					<input type="hidden" name="apple1"/>
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

	<?php
	}
	?>

	<div id="chest1-chestFour" class="chest chestEightR">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button type="button" class="open_chest" data-toggle="modal" data-target="#chestEightR">Ouvrir</button>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/village-four-right.html">Aller tout droit</a>
	</div>

</div>

<div class="modal fade" id="chestEightR" tabindex="-1" role="dialog" aria-labelledby="chestEightRLabel" aria-hidden="true">
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
		        777
		     </div>
		</div>
	</div>
</div>