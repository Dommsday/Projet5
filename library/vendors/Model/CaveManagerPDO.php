<?php

namespace Model;

use \Entity\Cave;


class CaveManagerPDO extends CaveManager{

	public function getText($id){

		$request = $this->dao->prepare('SELECT id, title, content FROM cave WHERE id = :id');

		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);
		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Cave');
    
    	$textCave = $requete->fetch();
  
     	return $textCave;
	}

	protected function add(Cave $cave){

		$request = $this->dao->prepare('INSERT INTO cave SET title = :title, content = :content, type = :type');

		$request->bindValue(':title', $cave->title());
		$request->bindValue(':content', $cave->content());
		$request->bindValue(':type', $cave->type());

		$request->execute();
	}

    protected function modify(Cave $cave){

		$request = $this->dao->prepare('UPDATE cave SET title = :title, content = :content, type = :type WHERE id = :id');

		$request->bindValue(':title', $cave->title());
		$request->bindValue(':content', $cave->content());
		$request->bindValue(':type', $cave->type());
		$request->bindValue(':id', $cave->id(), \PDO::PARAM_INT);

		$request->execute();
	}

	public function getAllElements(){

		$request = $this->dao->query('SELECT id, title, content, type FROM cave');

		$listElements = $request->fetchAll();

		return $listElements;
	}

	public function delete($id){

		$request = $this->dao->prepare('DELETE FROM cave WHERE id = :id');
		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);

		$request->execute();
	}
}