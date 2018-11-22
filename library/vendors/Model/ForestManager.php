<?php

namespace Model;

use \framework\Manager;
use \Entity\Forest;

abstract class BeginManager extends Manager{

	abstract protected function getAllCharacters();
}