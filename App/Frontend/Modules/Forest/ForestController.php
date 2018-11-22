<?php

namespace App\Frontend\Modules\Forest;

use \framework\BackController;
use \framework\HTTPRequest;
use \Entity\Forest;

class ForestController extends BackController{

	public function executeStart(HTTPRequest $request){

		$manager = $this->managers->getManagerOf('Forest');

		$this->page->addVarPage('textStart', $manager->startStory());
	}
}