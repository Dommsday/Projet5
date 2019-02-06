<div class="container-game container-fight">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

	
	<div id ="golem1" class="golem golem-fight-sixR">
		<img src="/Web/images/golem.gif" class="golem_gif"/>

		<table class="ennemi-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $golem['name']?></td>
				<td id="damages-golem"><?= $golem['damages']?></td>
				<td id="life-golem"><?= $golem['life']?></td>
			</tr>

		</table>

		<button type="button" id="button-attak-golem" class="button-attak-enemy btn">Attaquer</button>
	</div>

	<?php
		if(isset($displayApple) && $displayApple  == 1){
			
		?>

		<div id="apple1" class="apple1-fightFive-L apple">
				
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

	<div id="choise-road">
		<a class="choise-top" href="/game/fountain-two-left.html"><img class="arrow arrow-top" alt="arrow-top" title="flèche pour aller tout droit" src="/Web/images/arrow_top.png" /></a>
	</div>
	
</div>