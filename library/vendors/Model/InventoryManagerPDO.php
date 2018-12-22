<?php

namespace Model;

use \Entity\Inventory;


class InventoryManagerPDO extends InventoryManager{

	public function getText($id){

		$request = $this->dao->prepare('SELECT id, name, description, damages, life, type FROM inventory WHERE id = :id');

		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);
		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Inventory');
    
    	$textInventory = $requete->fetch();
  
     	return $textInventory;
	}

	protected function add(Inventory $inventory){

		$request = $this->dao->prepare('INSERT INTO inventory SET name = :name, description = :description, type = :type, damages = :damages, life = :life');

		$request->bindValue(':name', $inventory->name());
		$request->bindValue(':description', $inventory->description());
		$request->bindValue(':type', $inventory->type());
		$request->bindValue(':damages', $inventory->damages());
		$request->bindValue(':life', $inventory->life());

		$request->execute();
	}

    protected function modify(Inventory $inventory){

		$request = $this->dao->prepare('UPDATE inventory SET name = :name, description = :description, type = :type, damages = :damages, life = :life WHERE id = :id');

		$request->bindValue(':name', $inventory->name());
		$request->bindValue(':description', $inventory->description());
		$request->bindValue(':type', $inventory->type());
		$request->bindValue(':damages', $inventory->damages());
		$request->bindValue(':life', $inventory->life());
		$request->bindValue(':id', $inventory->id(), \PDO::PARAM_INT);

		$request->execute();
	}

	public function getAllElements(){

		$request = $this->dao->query('SELECT id, name, description, damages, life, type FROM inventory');

		$listElements = $request->fetchAll();

		return $listElements;
	}

	public function delete($id){

		$request = $this->dao->prepare('DELETE FROM inventory WHERE id = :id');
		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);

		$request->execute();
	}
}