<?php

namespace Entity;

use \framework\Entity;

class Cave extends Entity{

	protected $id;
	protected $title;
	protected $content;
	protected $type;

	const INVALID_TITLE = 1;
	const INVALD_CONTENT = 2;
	const INVALD_TYPE = 3;

	public function Valid(){
		return !(empty($this->title) || empty($this->content));
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

	public function setContent($content){

		if(!is_string($content) || empty($content)){

			$this->erreurs[] = self::INVALD_CONTENT;
		}

		$this->content = $content; 
	}

	public function setType($type){

		if(!is_string($type) || empty($type)){

			$this->erreurs[] = self::INVALD_TYPE;
		}

		$this->type = $type; 
	}



	public function id(){
		return $this->id;
	}

	public function title(){
		return $this->title;
	}

	public function content(){
		return $this->content;
	}

	public function type(){
		return $this->type;
	}
}