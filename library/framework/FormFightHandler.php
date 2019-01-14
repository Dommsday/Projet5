<?php

namespace framework;

class FormFightHandler{

	protected $formFight;
	protected $manager;
	protected $request;

	public function __construct(Form $formFight, Manager $manager, HTTPRequest $request){

		$this->setFormFight($formFight);
		$this->setManager($manager);
		$this->setRequest($request);
	}

	public function process(){

		if($this->request->method() == 'POST' && $this->formFight->Valid()){

			$this->formObject->entity();

			return true;
		}

		return false;
	}

	public function setFormFight(Form $formFight){

		$this->formFight = $formFight;
	}

	public function setManager(Manager $manager){

		$this->manager = $manager;
	}

	public function setRequest(HTTPRequest $request){

		$this->request = $request;
	}
}