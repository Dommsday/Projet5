<?php

namespace Model;

use \Entity\Characters;


class CharactersManagerPDO extends CharactersManager{

	public function getCrow(){

		$request = $this->dao->query('SELECT id, name, damages, life FROM characters WHERE type =\'crow\'');

		$crow = $request->fetch();

		return $crow;
	}

	public function getBat(){

		$request = $this->dao->query('SELECT id, name, damages, life FROM characters WHERE type =\'bat\'');

		$bat = $request->fetch();

		return $bat;
	}

	public function getWolf(){

		$request = $this->dao->query('SELECT id, name, damages, life FROM characters WHERE type =\'wolf\'');

		$wolf = $request->fetch();

		return $wolf;
	}

	public function getGolem(){

		$request = $this->dao->query('SELECT id, name, damages, life FROM characters WHERE type =\'pierre\'');

		$golem = $request->fetch();

		return $golem;
	}

	public function getDemon(){

		$request = $this->dao->query('SELECT id, name, damages, life FROM characters WHERE type =\'evil\'');

		$demon = $request->fetch();

		return $demon;
	}

	public function getTroll(){

		$request = $this->dao->query('SELECT id, name, damages, life FROM characters WHERE type =\'troll\'');

		$troll = $request->fetch();

		return $troll;
	}

	public function getWarriorPlayer(){

		$request = $this->dao->query('SELECT name, damages, life, type FROM characters WHERE type =\'warrior_player\'');

		$warriorPlayer = $request->fetch();

		return $warriorPlayer;
	}

	public function getText($id){

		$request = $this->dao->prepare('SELECT id, name, type, damages, life FROM characters WHERE id = :id');

		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);
		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Characters');
    
    	$textCharacters = $request->fetch();
  
     	return $textCharacters;
	}

	protected function add(Characters $characters){

		$request = $this->dao->prepare('INSERT INTO characters SET name = :name, type = :type, damages = :damages, life = :life');

		$request->bindValue(':name', $characters->name());
		$request->bindValue(':type', $characters->type());
		$request->bindValue(':damages', (int) $characters->damages(), \PDO::PARAM_INT);
		$request->bindValue(':life', (int) $characters->life(), \PDO::PARAM_INT);

		$request->execute();
	}

    protected function modify(Characters $characters){

		$request = $this->dao->prepare('UPDATE characters SET name = :name, type = :type, damages = :damages, life = :life WHERE id = :id');

		$request->bindValue(':name', $characters->name());
		$request->bindValue(':type', $characters->type());
		$request->bindValue(':damages', (int) $characters->damages(), \PDO::PARAM_INT);
		$request->bindValue(':life', (int) $characters->life(), \PDO::PARAM_INT);
		$request->bindValue(':id', $characters->id(), \PDO::PARAM_INT);

		$request->execute();
	}

	public function getAllElements(){

		$request = $this->dao->query('SELECT id, name, damages, life, type FROM characters');

		$listElements = $request->fetchAll();

		return $listElements;
	}

	public function delete($id){

		$request = $this->dao->prepare('DELETE FROM characters WHERE id = :id');
		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);

		$request->execute();
	}
}