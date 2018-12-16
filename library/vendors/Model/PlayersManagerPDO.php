<?php

namespace Model;

use \Entity\Players;

class PlayersManagerPDO extends PlayersManager{

	protected function newPlayers(Players $player){

		$request = $this->dao->prepare('INSERT INTO players SET pseudo = :pseudo, email = :email, password = :password, passwordConfirm = :passwordConfirm, date = NOW()');

		$request->bindValue(':pseudo', $player->pseudo());
		$request->bindValue(':email', $player->email());
		$request->bindValue(':password', password_hash($player->password(), PASSWORD_DEFAULT));
		$request->bindValue(':passwordConfirm', password_hash($player->passwordConfirm(), PASSWORD_DEFAULT));

		$request->execute();

		$player->setId($this->dao->lastInsertId());
	}

	public function connexionPlayer($pseudo){

		$request = $this->dao->prepare('SELECT id, pseudo, password FROM players WHERE pseudo = :pseudo');

		$request->bindValue(':pseudo', $pseudo, \PDO::PARAM_STR);
		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Players');

		$connexion = $request->fetch();

		return $connexion;
	}
}
