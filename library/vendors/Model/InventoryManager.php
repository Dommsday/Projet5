<?php

namespace Model;

use \framework\Manager;
use \Entity\Inventory;

abstract class InventoryManager extends Manager{

	abstract public function getText($id);

	abstract protected function add(Inventory $inventory);
    
    abstract protected function modify(Inventory $inventory);

    abstract public function getAllElements();

    abstract public function delete($id);

    abstract public function getApple();

    abstract public function getKnife();

    abstract public function getSword();

    abstract public function getAcorn();

    abstract public function getStick();

    abstract public function getMap();
	//Méthode qui s'écrit directement car elle n'est pas dépendante de la DAO
    public function save(Inventory $inventory){

    	if($inventory->Valid()){

    		$inventory->idNew() ? $this->add($inventory) : $this->modify($inventory);
    	}else{

    		throw new \RuntimeException('L\'objet doit être validé pour être enregistré');
    	}
    }
}