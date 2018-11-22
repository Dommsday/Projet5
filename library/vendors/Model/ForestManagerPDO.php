<?php

namespace Model;

use \Entity\Forest;


class ForestManagerPDO extends ForestManager{

	public function startStory(){

		$request = $this->dao->query('SELECT id, content, title FROM forest WHERE atout = \'start\'');

		$textStart = $request->fetch();

		return $textStart;
	}

	public function impasse(){

		$request = $this->dao->query('SELECT id, content, title FROM forest WHERE atout = \'impasse\'');

		$textImpasse = $request->fetch();

		return $textImpasse;
	}
}