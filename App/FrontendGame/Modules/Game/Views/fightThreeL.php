<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>
	
	<div id ="wolf1" class="wolf">
		<img src="/Web/images/wolf.gif" class="wolf_gif"/>

		<table class="ennemi-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $wolf['name']?></td>
				<td id="damages-wolf"><?= $wolf['damages']?></td>
				<td id="life-wolf"><?= $wolf['life']?></td>
			</tr>

		</table>

		<button id="button-attak-wolf" class="button-attak-enemy">Attaquer</button>
	</div>

	<div id="chest1" class="chest chestOne">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button type="button" class="open_chest btn" id="action-open-chest" data-toggle="modal" data-target="#fightThreeL">Ouvrir</button>
		</div>
	</div>

	

	<?php
		if(isset($displayAcorn) && $displayAcorn == 1){
	?>

	<div id="acorn1" class="acorn acorn1-fight-three">
			
		<img class="acorn-img" src="<?= $acorn['src']?>" alt="<?= $acorn['name']?>" title="<?= $acorn['name']?>"/>

		<div id="action-acorn1" class="action-acorn">
			<form action="" method="post">
				<input type="hidden" name="acorn1"/>
				<?= $formAcorn ?>
				<input id="btnAcorn1" type="submit" value="Prendre" class="btnAcorn"/>
			</form>
		</div>
	</div>

	<?php
	}
	?>

	

	<div id="choise-road">
		<a class="choise-top" href="/game/portal.html">Aller tout droit</a>
	</div>

</div>

<div class="modal fade" id="fightThreeL" tabindex="-1" role="dialog" aria-labelledby="fightThreeLLabel" aria-hidden="true">
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
		        88
		     </div>
		</div>
	</div>
</div>