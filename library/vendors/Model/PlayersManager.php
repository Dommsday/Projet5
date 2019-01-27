<?php

namespace Model;

use \framework\Manager;
use \Entity\Players;

abstract class PlayersManager extends Manager{

	abstract protected function newPlayers(Players $player);

	abstract public function connexionAdministrator($pseudo);

	abstract public function connexionPlayer($pseudo);

	abstract public function getAllMembers();

	abstract public function delete($id);

	public function save(Players $player){

		if($player->Valid()){

			if($player->idNew()){

				$this->newPlayers($player);
			}
		}else{

			throw new \RuntimeException('Les différents champs doivent être valides pour être enregistrés');
		}
	}
}