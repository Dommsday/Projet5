<?php

namespace framework;

class PlayerFormConnexionHandler{

	protected $playerFormConnexion;
	protected $manager;
	protected $request;

	public function __construct(Form $playerFormConnexion, Manager $manager, HTTPRequest $request){

		$this->setPlayerFormConnexion($playerFormConnexion);
		$this->setManager($manager);
		$this->setRequest($request);
	}

	public function process(){

		if($this->request->method() == 'POST' && $this->playerFormConnexion->Valid()){

			return true;
		}	
		
		return false;

	}

	public function setPlayerFormConnexion(Form $playerFormConnexion){

		$this->playerFormConnexion = $playerFormConnexion;
	}

	public function setManager(Manager $manager){

		$this->manager = $manager;
	}

	public function setRequest(HTTPRequest $request){

		$this->request = $request;
	}
}