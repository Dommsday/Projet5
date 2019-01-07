<?php

namespace Entity;

use \Entity\Inventory;

class InventoryPlayer extends Inventory{

	protected $idPlayer;

	public function setIdPlayer($idPlayer){

		$idPlayer = (int) $idPlayer;

		if($idPlayer > 0){

			$this->idPlayer = $idPlayer;
		}
	}

	public function idPlayer(){
		return $this->idPlayer;
	}

}