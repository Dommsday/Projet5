<div class="all-resume-inventory col-lg-12 col-xl-12">

<table id="all-inventory-table-backend">
	<tr id="title-all-inventory">
		<th class="name">Nom</th>
		<th class="description">Contenu</th>
		<th class="damages">Dégâts</th>
		<th class="life">Regain de vie</th>
		<th class="lifetime">Durée d'utilisation</th>
		<th class="type">Type</th>
		<th class="picture">Image</th>
		<th class="action">Action</th>
		
	</tr>

	<?php
	foreach ($listElements as $element){
	?>

	<tr id="container-all-inventory">
		<td class="name"><?= $element['name'] ?></td>
		<td class="description"><?= $element['description'] ?></td>
		<td class="damages"><?= $element['damages'] ?></td>
		<td class="life"><?= $element['life'] ?></td>
		<td class="lifetime"><?= $element['lifetime'] ?></td>
		<td class="type"><?= $element['type'] ?></td>
		<td class="picture"><img class="img-all-pictures" src="<?= $element['src'] ?>" alt="<?= $element['name'] ?>"/></td>
		<td class="action">
			<a href="update-inventory-element-<?= $element['id']?>.html"><i class="fas fa-pen" title="mettre à jour"></i></a>
			<a href="delete-inventory-element-<?= $element['id']?>.html"><i class="fas fa-trash-alt" title="supprimer"></i></a>
		</td>
	</tr>

	<?php
	}
	?>


</table>
	<a class="link btn-all-inventory" href="/admin/">Retour</a>
</div>

