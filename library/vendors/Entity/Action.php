<?php

namespace Entity;

use \framework\Entity;

class Action extends Entity{

	protected $id;
	protected $title;

	const INVALID_TITLE = 1;

	public function Valid(){
		return !empty($this->title);
	}

	public function setId($id){

		$id = (int) $id;

		if($id > 0){

			$this->id = $id;
		}
	}

	public function setTitle($title){

		if(!is_string($title) || empty($title)){

			$this->erreurs[] = self::INVALID_TITLE;
		}

		$this->title = $title;
	}

	public function id(){
		return $this->id;
	}

	public function title(){
		return $this->title;
	}

}