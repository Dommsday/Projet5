<?php

namespace Model;

use \Entity\InventoryPlayer;


class InventoryPlayerManagerPDO extends InventoryPlayerManager{

	protected function add(InventoryPlayer $inventoryPlayer){

		$request = $this->dao->prepare('INSERT INTO inventory_player SET id_player = :id_player, name = :name, description = :description, type = :type, damages = :damages, life = :life');

		
		$request->bindValue(':name', $inventoryPlayer->name());
		$request->bindValue(':description', $inventoryPlayer->description());
		$request->bindValue(':type', $inventoryPlayer->type());
		$request->bindValue(':damages', (int) $inventoryPlayer->damages(), \PDO::PARAM_INT);
		$request->bindValue(':life', (int) $inventoryPlayer->life(), \PDO::PARAM_INT);
		$request->bindValue(':id_player', (int) $inventoryPlayer->idPlayer(), \PDO::PARAM_INT);

		$request->execute();
	}

}
?>