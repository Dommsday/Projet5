<div class="container-game container-dead">
	
	<div id="title_dead">

		<p id="text_player_dead"> <?= $user->getAttribute('pseudo')?> Vous n'êtes pas parvenus à sortir de cette forêt...</p>

		<a class="link-dead-game"href="delete-inventory-<?= $user->getAttribute('id') ?>.html">Revenir au menu principal</a>
	</div>
	
</div>