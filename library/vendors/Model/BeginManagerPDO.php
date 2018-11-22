<?php

namespace Model;

use \Entity\Characters;


class BeginManagerPDO extends BeginManager{

	public function getAllCharacters(){

		$request = $this->dao->query('SELECT id, name, damages, life FROM characters');

		$characters = $request->fetchAll();

		return $characters;
	}
}
