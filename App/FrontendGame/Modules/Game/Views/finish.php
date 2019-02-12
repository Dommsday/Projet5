<div class="container-game container-finish">

	<div id="title_finish">
		<p id="text_player_finish">Félicitation <?= $user->getAttribute('pseudo') ?>, tu as réussis à sortir de la fôret vivant</p>

		<a class="link-finish-game" href="delete-inventory-<?= $user->getAttribute('id') ?>.html" id="deconnexion">Revenir au menu principal</a>
	</div>
</div>