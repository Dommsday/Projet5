<?php

namespace framework;

class FormActionHandler{

	protected $formAction;
	protected $manager;
	protected $request;

	public function __construct(Form $formAction, Manager $manager, HTTPRequest $request){

		$this->setFormAction($formAction);
		$this->setManager($manager);
		$this->setRequest($request);
	}

	public function process(){

		if($this->request->method() == 'POST' && $this->formAction->Valid()){

			$this->manager->save($this->formAction->entity());

			return true;
		}

		return false;
	}

	public function setFormAction(Form $formAction){

		$this->formAction = $formAction;
	}

	public function setManager(Manager $manager){

		$this->manager = $manager;
	}

	public function setRequest(HTTPRequest $request){

		$this->request = $request;
	}
}