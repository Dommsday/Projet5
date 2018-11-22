<?php

namespace Entity;

use \framework\Entity;

 class Characters extends Entity{

	protected $name;
	protected $damages;
	protected $life;

	const ITS_ME = 1;
	const CHARACTERS_DEAD = 2;
	const CHARACTERS_DAMAGE = 3;

	public function Valid(){
		return !empty($name);
	}

	public function setName($name){
		if (!is_string($name) || empty($name)){

			$this->erreurs[] = self: INVALID_NAME;
		}
	}

	public function setDamages($damages){
		$damages = (int) $damages;

		if($damages >= 0 && $damages <= 100){

			$this->damages = $damages;
		}
	}

	public function setLife($life){
		$life = (int) $life;

		if($life > 0 && $life <= 150){

			$this->life = $life;
		}
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

	public function receiveDamages(){

		$this->life = $this->life - $this->damages;

		if($this->life <= 0){

			return self::CHARACTERS_DEAD;
		}

		return CHARACTERS_DAMAGE;
	}

	public function getDamages(Characters $character){

		if($characters->id == $this->id){
			return self::ITS_ME;
		}

		return self $perso->receiveDamages();
	}
}
