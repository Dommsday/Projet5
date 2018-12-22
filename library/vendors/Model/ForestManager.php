<?php

namespace Model;

use \framework\Manager;
use \Entity\Forest;

abstract class ForestManager extends Manager{

	abstract public function startStory();

	abstract public function impasse();

	abstract public function getText($id);

    abstract public function getAllElements();

	abstract protected function add(Forest $forest);
    
    abstract protected function modify(Forest $forest);

    abstract public function delete($id);

	//Méthode qui s'écrit directement car elle n'est pas dépendante de la DAO
    public function save(Forest $forest){

    	if($forest->Valid()){

    		$forest->idNew() ? $this->add($forest) : $this->modify($forest);
    	}else{

    		throw new \RuntimeException('L\'élément doit être validé pour être enregistré');
    	}
    }
}