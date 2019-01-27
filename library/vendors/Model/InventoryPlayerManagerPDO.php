<?php

namespace Model;

use \Entity\InventoryPlayer;



class InventoryPlayerManagerPDO extends InventoryPlayerManager{

	protected function add(InventoryPlayer $inventoryPlayer){

		$request = $this->dao->prepare('INSERT INTO inventory_player SET id_player = :id_player, name = :name, description = :description, type = :type, damages = :damages, life = :life, lifetime = :lifetime');

		$request->bindValue(':name', $inventoryPlayer->name());
		$request->bindValue(':description', $inventoryPlayer->description());
		$request->bindValue(':type', $inventoryPlayer->type());
		$request->bindValue(':damages', (int) $inventoryPlayer->damages(), \PDO::PARAM_INT);
		$request->bindValue(':life', (int) $inventoryPlayer->life(), \PDO::PARAM_INT);
		$request->bindValue(':lifetime', (int) $inventoryPlayer->lifetime(), \PDO::PARAM_INT);
		$request->bindValue(':id_player', (int) $inventoryPlayer->idPlayer(), \PDO::PARAM_INT);

		$request->execute();
	}

	public function getInventory($id_player){

		$request = $this->dao->prepare('SELECT name FROM inventory_player WHERE id_player = :id_player LIMIT 0, 4');

		$request->bindValue(':id_player', (int) $id_player, \PDO::PARAM_INT);

		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\InventoryPlayer');

		$inventory = $request->fetchAll();

		return $inventory;
	}

	public function getAllInventory($id_player){

		$request = $this->dao->prepare('SELECT id, name, description, damages, life, type, lifetime FROM inventory_player WHERE id_player = :id_player LIMIT 0, 9');

		$request->bindValue(':id_player', (int) $id_player, \PDO::PARAM_INT);

		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\InventoryPlayer');

		$allInventory = $request->fetchAll();

		return $allInventory;
	}

	public function delete($id){

		$request = $this->dao->prepare('DELETE FROM inventory_player WHERE id = :id');
		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);

		$request->execute();
	}

}
?>