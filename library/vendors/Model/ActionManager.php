<?php

namespace Model;

use \framework\Manager;
use \Entity\Action;

abstract class ActionManager extends Manager{

	abstract public function getAction($title);

    abstract public function getAllAction();

	abstract protected function add(Action $title);
    
    abstract protected function modify(Action $action);

    abstract public function delete($id);

	//Méthode qui s'écrit directement car elle n'est pas dépendante de la DAO
    public function save(Action $action){

    	if($action->Valid()){

    		$action->idNew() ? $this->add($action) : $this->modify($action);
    	}else{

    		throw new \RuntimeException('L\'élément doit être validé pour être enregistré');
    	}
    }
}