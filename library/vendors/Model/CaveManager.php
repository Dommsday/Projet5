<?php

namespace Model;

use \framework\Manager;
use \Entity\Cave;

abstract class CaveManager extends Manager{

	abstract public function getText($id);

	abstract protected function add(Cave $cave);
    
    abstract protected function modify(Cave $cave);

	//Méthode qui s'écrit directement car elle n'est pas dépendante de la DAO
    public function save(Cave $cave){

    	if($cave->Valid()){

    		$cave->idNew() ? $this->add($cave) : $this->modify($cave);
    	}else{

    		throw new \RuntimeException('L\'élément doit être validé pour être enregistré');
    	}
    }
}
