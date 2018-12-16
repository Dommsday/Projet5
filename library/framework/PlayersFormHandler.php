<?php

namespace framework;

class PlayersFormHandler{

	protected $playersForm;
	protected $manager;
	protected $request;

	public function __construct(Form $playersForm, Manager $manager, HTTPRequest $request){

		$this->setPlayersForm($playersForm);
		$this->setManager($manager);
		$this->setRequest($request);
	}

	public function process(){

		if($this->request->method() == 'POST' && $this->playersForm->Valid()){

			$this->manager->save($this->playersForm->entity());

			return true;
		}

		return false;
	}

	public function setPlayersForm(Form $playersForm){

		$this->playersForm = $playersForm;
	}

	public function setManager(Manager $manager){

		$this->manager = $manager;
	}

	public function setRequest(HTTPRequest $request){

		$this->request = $request;
	}

}
