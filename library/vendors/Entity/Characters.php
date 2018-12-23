<?php

namespace Entity;

use \framework\Entity;

class Characters extends Entity{

	protected $id;
	protected $name;
	protected $damages;
	protected $life;
	protected $type;

	const ITS_ME = 1;
	const CHARACTERS_DEAD = 2;
	const CHARACTERS_DAMAGE = 3;
	const CHARACTERS_TYPE = 4;
	const INVALID_NAME = 4;

	public function Valid(){
		return !(empty($this->name) || empty($this->type));
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

	public function setDamages($damages){

		if($damages >= 0 && $damages <= 100){

			$this->damages = $damages;
		}
	}

	public function setLife($life){
	
		if($life > 0 && $life <= 150){

			$this->life = $life;
		}
	}

	public function setType($type){
		if (!is_string($type) || empty($type)){

			$this->erreurs[] = self::CHARACTERS_TYPE;
		}

		$this->type = $type;

	}

	public function id(){

		return $this->id;
	}

	public function name(){

		return $this->name;
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

	public function receiveDamages(){

		$this->life = $this->life - $this->damages;

		if($this->life <= 0){

			return self::CHARACTERS_DEAD;
		}

		return CHARACTERS_DAMAGE;
	}

	public function getDamages(Characters $character){

		if($character->id == $this->id){
			return self::ITS_ME;
		}

		return self::$character->receiveDamages();
	}
}
