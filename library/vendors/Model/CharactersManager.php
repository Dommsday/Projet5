<?php

namespace Model;

use \framework\Manager;
use \Entity\Characters;

abstract class CharactersManager extends Manager{

    abstract public function getWarriorPlayer();

	abstract public function getText($id);

    abstract public function getCrow();

    abstract public function getBat();

    abstract public function getWolf();

    abstract public function getTroll();

    abstract public function getGolem();

    abstract public function getDemon();

	abstract protected function add(Characters $characters);
    
    abstract protected function modify(Characters $characters);

    abstract public function getAllElements();

    abstract public function delete($id);

	//Méthode qui s'écrit directement car elle n'est pas dépendante de la DAO
    public function save(Characters $characters){

        if($characters->Valid()){

            $characters->idNew() ? $this->add($characters) : $this->modify($characters);
        }else{

            throw new \RuntimeException('Le personnage/bestiaire doit être validé pour être enregistré');
        }
    }
}