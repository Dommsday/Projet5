<?php

namespace App\FrontendGame\Modules\Game;

use \framework\BackController;
use \framework\HTTPRequest;
use \Entity\Players;
use \Entity\Forest;
use \framework\User;
use \framework\PlayerFormConnexionHandler;
use \FormBuilder\PlayerFormConnexionBuilder;

class GameController extends BackController{

	public function executeConnexion(HTTPRequest $request){

    	$this->page->addVarPage('title', 'Page de connexion');

		$this->processPlayerFormConnexion($request);

  	}

  	public function processPlayerFormConnexion(HTTPRequest $request){

		$player = new Players;

		$connexion = $this->managers->getManagerOf('Players')->connexionPlayer($request->postData('pseudo'));

		$password = htmlspecialchars($request->postData('password'));

		$isCorrect = password_verify($password, $connexion['password']);

		if($request->method() == 'POST'){

			if($isCorrect){

				$this->app->user()->setAttribute('pseudo', $request->postData('pseudo'));
				$this->app->user()->setAuthenticated(true);
				$this->app->httpResponse()->redirect('/confirmation-connexion.html');
			}else{

				$this->app->user()->setMessage('Le pseudo ou le mot de passe est incorrect');
			}
		}

		$formPlayerConnexion = new PlayerFormConnexionBuilder($player);
		$formPlayerConnexion->build();

		$playerFormConnexion = $formPlayerConnexion->playerFormConnexion();

		$formPlayersBuilder = new PlayerFormConnexionHandler($playerFormConnexion, $this->managers->getManagerOf('Players'), $request);

		$this->page->addVarPage('playerFormConnexion', $playerFormConnexion->createView());

	}

	public function executeIndex(HTTPRequest $request){

		$this->page->addVarPage('title', 'Hello');

		$manager = $this->managers->getManagerOf('Forest')->startStory();

		$this->page->addVarPage('textStart', $manager);
	}

	public function executeRightChoise(HTTPRequest $request){

		$manager = $this->managers->getManagerOf('Forest')->impasse();

		$this->page->addVarPage('textImpasse', $manager);
	}

}


