<?php

namespace Model;

use \framework\Manager;
use \Entity\Warrior;
use \Entity\Characters;

abstract class BeginManager extends Manager{

	abstract public function getAllCharacters();
}
