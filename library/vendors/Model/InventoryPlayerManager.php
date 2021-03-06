<?php

namespace Model;

use \framework\Manager;
use \Entity\InventoryPlayer;
use \framework\User;

abstract class InventoryPlayerManager extends Manager{

	abstract protected function add(InventoryPlayer $inventoryPlayer);

	abstract public function getInventory($id_player);

    abstract public function getAllInventory($id_player);

    abstract public function delete($id);

    abstract public function deleteInventoryPlayer($id_player);
    
	//Méthode qui s'écrit directement car elle n'est pas dépendante de la DAO
    public function save(InventoryPlayer $inventoryPlayer){

    	if($inventoryPlayer->Valid()){

    		$this->add($inventoryPlayer);
    	}else{

    		throw new \RuntimeException('L\'objet doit être validé pour être enregistré');
    	}
    }
}