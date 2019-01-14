<?php

namespace framework;

abstract class FormActionBuilder{

	protected $formAction;
	protected $entity;

	public function __construct(Entity $entity){

		$this->setFormAction(new Form($entity));
		$this->entity = $entity;
	}

	abstract public function build();

	public function setFormAction(Form $formAction){

		$this->formAction = $formAction;
	}

	public function formAction(){

		return $this->formAction;
	}
}
