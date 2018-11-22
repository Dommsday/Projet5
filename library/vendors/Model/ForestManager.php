<?php

namespace Model;

use \framework\Manager;
use \Entity\Forest;

abstract class ForestManager extends Manager{

	abstract public function startStory();
}