<?php

namespace framework;

abstract class PlayerConnexionBuilder{

	protected $playerFormConnexion;

	public function __construct(Entity $entity){

		$this->setPlayerFormConnexion(new Form($entity));
	}

	abstract public function build();

	public function setPlayerFormConnexion(Form $playerFormConnexion){

		$this->playerFormConnexion = $playerFormConnexion;
	}

	public function playerFormConnexion(){
		return $this->playerFormConnexion;
	}
}