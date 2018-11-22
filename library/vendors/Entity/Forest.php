<?php

namespace Entity;

use \framework\Entity;

class Forest extends Entity{

	protected $id;
	protected $title;
	protected $content

	const INVALID_TITLE = 1;
	const INVALD_CONTENT = 2;

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

	public function id(){
		return $this->id;
	}

	public function title(){
		return $this->title;
	}

	public function content(){
		return $this->content;
	}


}