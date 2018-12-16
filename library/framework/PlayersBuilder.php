<?php

namespace framework;

abstract class PlayersBuilder{

	protected $playersForm;
	protected $entity;

	public function __construct(Entity $entity){

		$this->setPlayersForm(new Form($entity));
		$this->entity = $entity;
	}

	abstract public function build();

	public function setPlayersForm(Form $playersForm){

		$this->playersForm = $playersForm;
	}

	public function playersForm(){

		return $this->playersForm;
	}
}