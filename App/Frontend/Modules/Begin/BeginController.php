<?php

namespace App\Frontend\Modules\Begin;

use \framework\BackController;
use \framework\HTTPRequest;
use \Entity\Characters;
use \Entity\Warrior;

class BeginController extends BackController{

	//Méthode qui affiche le menu du jeu
	public function executeIndex(HTTPRequest $request){

		$this->page->addVarPage('title', 'L\'histoire dont vous êtes le héros');
		
	}

	//Méthode qui affiche la liste des personnages
	public function executeAllCharacters(HTTPRequest $request){

		$this->page->addVarPage('title', 'Liste des personnages');

		$manager = $this->managers->getManagerOf('Begin');

		$this->page->addVarPage('characters', $manager->getAllCharacters());

	}

	public function executeAbout(HTTPRequest $request){

		$this->page->addVarPage('title', 'A propos');
	}
}
