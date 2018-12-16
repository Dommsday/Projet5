<?php

namespace framework;

class Form{

	protected $entity;
	protected $fields = [];

	public function __construct(Entity $entity){

		$this->setEntity($entity);
	}

	public function add(Field $field){

		$attr = $field->name();
		$field->setValue($this->entity->$attr());

		$this->fields[] = $field;
		return $this;
	}

	public function createView(){

		$view = '';

		foreach ($this->fields as $field){
			
			$view .= $field->buildWidget().'<br />';
		}

		return $view;
	}

	public function Valid(){

		$valid = true;

		foreach ($this->fields as $field){
			
			if(!$field->Valid()){

				$valid = false;
			}
		}

		return $valid;
	}


	public function setEntity(Entity $entity){

		$this->entity = $entity;
	}

	public function entity(){

		return $this->entity;
	}
}
