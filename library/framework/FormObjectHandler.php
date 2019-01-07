<?php

namespace framework;

class FormObjectHandler{

	protected $formObject;
	protected $manager;
	protected $request;

	public function __construct(Form $formObject, Manager $manager, HTTPRequest $request){

		$this->setFormObject($formObject);
		$this->setManager($manager);
		$this->setRequest($request);
	}

	public function process(){

		if($this->request->method() == 'POST' && $this->formObject->Valid()){

			$this->manager->save($this->formObject->entity());

			return true;
		}

		return false;
	}

	public function setFormObject(Form $formObject){

		$this->formObject = $formObject;
	}

	public function setManager(Manager $manager){

		$this->manager = $manager;
	}

	public function setRequest(HTTPRequest $request){

		$this->request = $request;
	}
}
