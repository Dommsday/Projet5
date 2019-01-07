<?php

namespace Model;

use \framework\Manager;
use \Entity\InventoryPlayer;


abstract class InventoryPlayerManager extends Manager{

	abstract protected function add(InventoryPlayer $inventoryPlayer);
    
	//Méthode qui s'écrit directement car elle n'est pas dépendante de la DAO
    public function save(InventoryPlayer $inventoryPlayer){

    	if($inventoryPlayer->Valid()){

    		$this->add($inventoryPlayer);
    	}else{

    		throw new \RuntimeException('L\'objet doit être validé pour être enregistré');
    	}
    }
}