<?php

namespace Model;

use \Entity\Action;


class ActionManagerPDO extends ActionManager{

	public function getAction($title){

		$request = $this->dao->prepare('SELECT id, title FROM action_game WHERE title = :title');

		$request->bindValue(':title', $title);
		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Action');
    
    	$textAction = $request->fetch();
  
     	return $textAction;
	}

	protected function add(Action $title){

		$request = $this->dao->prepare('INSERT INTO action_game SET title = :title');

		$request->bindValue(':title', $title->title());

		$request->execute();
	}

    protected function modify(Action $action){

		$request = $this->dao->prepare('UPDATE action_game SET title = :title WHERE id = :id');

		$request->bindValue(':title', $action->title());
		$request->bindValue(':id', $action->id(), \PDO::PARAM_INT);

		$request->execute();
	}

	public function getAllAction(){

		$request = $this->dao->query('SELECT id, title FROM action_game');

		$listElements = $request->fetchAll();

		return $listElements;
	}

	public function delete($id){

		$request = $this->dao->prepare('DELETE FROM action_game WHERE id = :id');
		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);

		$request->execute();
	}

}