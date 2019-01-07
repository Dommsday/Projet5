<?php

namespace framework;

abstract class FormObjectBuilder{

	protected $formObject;
	protected $entity;

	public function __construct(Entity $entity){

		$this->setFormObject(new Form($entity));
		$this->entity = $entity;
	}

	abstract public function build();

	public function setFormObject(Form $formObject){

		$this->formObject = $formObject;
	}

	public function formObject(){

		return $this->formObject;
	}
}