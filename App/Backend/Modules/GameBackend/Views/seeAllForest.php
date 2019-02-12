<div class="all-resume-forest col-lg-12 col-xl-12">
<a class="link btn-all-forest" href="/admin/">Retour</a>
<table id="all-forest-table">
	<tr>
		<th class="title">Titre</th>
		<th class="content">Contenu</th>
		<th class="type">Type</th>
		<th class="action">Action</th>
	</tr>

	<?php
	foreach ($listElements as $element){
	?>

	<tr>
		<td class="title"><?= $element['title'] ?></td>
		<td class="content"><?= $element['content'] ?></td>
		<td class="type"><?= $element['type'] ?></td>

		<td class="action">
			<a href="update-forest-element-<?= $element['id']?>.html"><i class="fas fa-pen"></i></a>
			<a href="delete-forest-element-<?= $element['id']?>.html"><i class="fas fa-trash-alt"></i></a>
		</td>
	</tr>

	<?php
	}
	?>


</table>
	<a class="link btn-all-forest" href="/admin/">Retour</a>
</div>

