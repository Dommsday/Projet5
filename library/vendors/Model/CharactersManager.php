<?php

namespace Model;

use \framework\Manager;
use \Entity\Characters;

abstract class CharactersManager extends Manager{

	abstract public function getText($id);

	abstract protected function add(Characters $characters);
    
    abstract protected function modify(Characters $characters);

	//Méthode qui s'écrit directement car elle n'est pas dépendante de la DAO
    public function save(Characters $characters){

    	if($cave->Valid()){

    		$cave->idNew() ? $this->add($characters) : $this->modify($characters);
    	}else{

    		throw new \RuntimeException('L\'élément doit être validé pour être enregistré');
    	}
    }
}