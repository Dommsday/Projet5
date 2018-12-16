<?php

namespace Model;

use \framework\Manager;
use \Entity\Players;

abstract class PlayersManager extends Manager{

	abstract protected function newPlayers(Players $player);

	abstract public function connexionPlayer($pseudo);

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