<?php

namespace Model;

use \Entity\Inventory;

class InventoryManagerPDO extends InventoryManager{

	public function getText($id){

		$request = $this->dao->prepare('SELECT id, name, description, damages, life, type, lifetime, src FROM inventory WHERE id = :id');

		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);
		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Inventory');
    
    	$textInventory = $request->fetch();
  
     	return $textInventory;
	}

	protected function add(Inventory $inventory){

		$request = $this->dao->prepare('INSERT INTO inventory SET name = :name, description = :description, type = :type, damages = :damages, life = :life, lifetime = :lifetime, src = :src');

		$request->bindValue(':name', $inventory->name());
		$request->bindValue(':description', $inventory->description());
		$request->bindValue(':type', $inventory->type());
		$request->bindValue(':damages', (int) $inventory->damages(), \PDO::PARAM_INT);
		$request->bindValue(':life', (int) $inventory->life(), \PDO::PARAM_INT);
		$request->bindValue(':lifetime', (int) $inventory->lifetime(), \PDO::PARAM_INT);
		$request->bindValue(':src', $inventory->src());

		$request->execute();
	}

    protected function modify(Inventory $inventory){

		$request = $this->dao->prepare('UPDATE inventory SET name = :name, description = :description, type = :type, damages = :damages, life = :life, lifetime = :lifetime, src = :src WHERE id = :id');

		$request->bindValue(':name', $inventory->name());
		$request->bindValue(':description', $inventory->description());
		$request->bindValue(':type', $inventory->type());
		$request->bindValue(':damages', (int) $inventory->damages(), \PDO::PARAM_INT);
		$request->bindValue(':life', (int) $inventory->life(), \PDO::PARAM_INT);
		$request->bindValue(':lifetime', (int) $inventory->lifetime(), \PDO::PARAM_INT);
		$request->bindValue(':id', $inventory->id(), \PDO::PARAM_INT);
		$request->bindValue(':src', $inventory->src());

		$request->execute();
	}

	public function getAllElements(){

		$request = $this->dao->query('SELECT id, name, description, damages, life, type, lifetime, src FROM inventory');

		$listElements = $request->fetchAll();

		return $listElements;
	}

	public function delete($id){

		$request = $this->dao->prepare('DELETE FROM inventory WHERE id = :id');
		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);

		$request->execute();
	}

	public function getApple(){

		$request = $this->dao->query('SELECT id, name, description, damages, life, lifetime, type, src FROM inventory WHERE name = \'Pomme\'');

    	$apple = $request->fetch();
  
     	return $apple;
	}

	public function getKnife(){

		$request = $this->dao->query('SELECT id, name, description, damages, life, lifetime, type, src FROM inventory WHERE name = \'Couteau\'');

    	$knife = $request->fetch();
  
     	return $knife;
	}

	public function getSword(){

		$request = $this->dao->query('SELECT id, name, description, damages, life, lifetime, type, src FROM inventory WHERE name = \'Epée\'');

    	$sword = $request->fetch();
  
     	return $sword;
	}

	public function getAcorn(){

		$request = $this->dao->query('SELECT id, name, description, damages, life, lifetime, type, src FROM inventory WHERE name = \'Gland\'');

    	$acorn = $request->fetch();
  
     	return $acorn ;
	}

	public function getStick(){

		$request = $this->dao->query('SELECT id, name, description, damages, life, lifetime, type, src FROM inventory WHERE name = \'Bâton\'');

    	$stick = $request->fetch();
  
     	return $stick ;
	}

	public function getMap(){

		$request = $this->dao->query('SELECT id, name, description, damages, life, lifetime, type, src FROM inventory WHERE type = \'Map\'');

		$map = $request->fetch();

		return $map;
	}

	public function inventoryPlayer($id_player){

		$request = $this->dao->prepare('INSERT INTO inventory_player SET name = :name, description = :description, damages = :damages, life = :life, type = :type, lifetime = :lifetime, src = :src WHERE id_player = :id_player');

		$request->bindValue(':name', $inventory->name());
		$request->bindValue(':description', $inventory->description());
		$request->bindValue(':type', $inventory->type());
		$request->bindValue(':damages', (int) $inventory->damages(), \PDO::PARAM_INT);
		$request->bindValue(':life', (int) $inventory->life(), \PDO::PARAM_INT);
		$request->bindValue(':lifetime', (int) $inventory->lifetime(), \PDO::PARAM_INT);
		$request->bindValue(':id_player', $inventory->id_player(), \PDO::PARAM_INT);
		$request->bindValue(':src', $inventory->src());

		$request->execute();

	}
}