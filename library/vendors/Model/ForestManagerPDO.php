<?php

namespace Model;

use \Entity\Forest;


class ForestManagerPDO extends ForestManager{

	public function startStory(){

		$request = $this->dao->query('SELECT id, content, title FROM forest WHERE type = \'start\'');

		$textStart = $request->fetch();

		return $textStart;
	}

	public function impasse(){

		$request = $this->dao->query('SELECT id, content, title FROM forest WHERE type = \'impasse\'');

		$textImpasse = $request->fetch();

		return $textImpasse;
	}

	public function getText($id){

		$request = $this->dao->prepare('SELECT id, title, content, type FROM forest WHERE id = :id');

		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);
		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Forest');
    
    	$textForest = $request->fetch();
  
     	return $textForest;
	}

	protected function add(Forest $forest){

		$request = $this->dao->prepare('INSERT INTO forest SET title = :title, content = :content, type = :type');

		$request->bindValue(':title', $forest->title());
		$request->bindValue(':content', $forest->content());
		$request->bindValue(':type', $forest->type());

		$request->execute();
	}

    protected function modify(Forest $forest){

		$request = $this->dao->prepare('UPDATE forest SET title = :title, content = :content, type = :type WHERE id = :id');

		$request->bindValue(':title', $forest->title());
		$request->bindValue(':content', $forest->content());
		$request->bindValue(':type', $forest->type());
		$request->bindValue(':id', $forest->id(), \PDO::PARAM_INT);

		$request->execute();
	}

	public function getAllElements(){

		$request = $this->dao->query('SELECT id, title, content, type FROM forest');

		$listElements = $request->fetchAll();

		return $listElements;
	}

	public function delete($id){

		$request = $this->dao->prepare('DELETE FROM forest WHERE id = :id');
		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);

		$request->execute();
	}
}