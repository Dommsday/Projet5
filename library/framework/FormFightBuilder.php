<?php

namespace framework;

abstract class FormFightBuilder{

	protected $formFight;
	protected $entity;

	public function __construct(Entity $entity){

		$this->setFormFight(new Form($entity));
		$this->entity = $entity;
	}

	abstract public function build();

	public function setFormFight(Form $formFight){

		$this->formFight = $formFight;
	}

	public function formFight(){

		return $this->formFight;
	}
}
