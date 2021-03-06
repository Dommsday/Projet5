<?php

namespace Entity;

use \framework\Entity;

class Inventory extends Entity{

	protected $id;
	protected $name;
	protected $description;
	protected $damages;
	protected $life;
	protected $type;
	protected $lifetime;
	protected $src;

	const INVALID_NAME = 1;
	const INVALD_DESCRIPTION = 2;
	const INVALD_DAMAGES = 3;
	const INVALD_LIFE = 4;
	const INVALD_TYPE = 5;
	const INVALD_LIFETIME = 6;
	const INVALD_SRC = 7;

	
	public function Valid(){
		return !(empty($this->name) || empty($this->description) || empty($this->src));
	}

	public function setId($id){

		$id = (int) $id;

		if($id > 0){

			$this->id = $id;
		}
	}

	public function setName($name){

		if(!is_string($name) || empty($name)){

			$this->erreurs[] = self::INVALID_NAME;
		}

		$this->name = $name;
	}

	public function setDescription($description){

		if(!is_string($description) || empty($description)){

			$this->erreurs[] = self::INVALD_DESCRIPTION;
		}

		$this->description = $description; 
	}

	public function setDamages($damages){
		
		if($damages >= 0 && $damages <= 100){

			$this->damages = $damages;
		}
	}

	public function setLife($life){
	
		if($life >= 0 && $life <= 150){

			$this->life = $life;
		}
	}

	public function setType($type){

		if(!is_string($type) || empty($type)){

			$this->erreurs[] = self::INVALD_TYPE;
		}

		$this->type = $type; 
	}

	public function setLifetime($lifetime){
	
		if($lifetime >= 0 && $lifetime <= 20){

			$this->lifetime = $lifetime;
		}
	}

	public function setSrc($src){

		if(!is_string($src) || empty($src)){

			$this->erreurs[] = self::INVALD_SRC;
		}

		$this->src = $src; 
	}



	public function id(){
		return $this->id;
	}

	public function name(){
		return $this->name;
	}

	public function description(){
		return $this->description;
	}

	public function damages(){
		return $this->damages;
	}

	public function life(){
		return $this->life;
	}

	public function type(){
		return $this->type;
	}

	public function lifetime(){
		return $this->lifetime;
	}

	public function src(){
		return $this->src;
	}
}