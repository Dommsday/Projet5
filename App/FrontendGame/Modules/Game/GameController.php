<?php

namespace App\FrontendGame\Modules\Game;

use \framework\BackController;
use \framework\HTTPRequest;
use \Entity\Players;
use \Entity\Forest;
use \Entity\Inventory;
use \framework\User;
use \framework\PlayerFormConnexionHandler;
use \FormBuilder\PlayerFormConnexionBuilder;

class GameController extends BackController{

	public function executeTest(HTTPRequest $request){

		$warriorPlayer = $this->managers->getManagerOf('Characters')->getWarriorPlayer();

	}

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

		$forest = $this->managers->getManagerOf('Forest')->startStory();

		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textStart', $forest);
		$this->page->addVarPage('apple', $apple);

	}

	//Partie de Gauche

	public function executeFightOneL(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$bat = $this->managers->getManagerOf('Characters')->getBat();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('bat', $bat);
	}

	public function executeChestOneL(HTTPRequest $request){

		$textChest = $this->managers->getManagerOf('Forest')->chest();

		$this->page->addVarPage('textChest', $textChest);
	}

	public function executeChestThreeL(HTTPRequest $request){

		$textChest = $this->managers->getManagerOf('Forest')->chest();

		$this->page->addVarPage('textChest', $textChest);
	}

	public function executeChestFourL(HTTPRequest $request){

		$textChest = $this->managers->getManagerOf('Forest')->chest();

		$this->page->addVarPage('textChest', $textChest);
	}

	public function executeChestFiveL(HTTPRequest $request){

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeVillageOneL(HTTPRequest $request){

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeVillageTwoL(HTTPRequest $request){

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textVillage', $textVillage);
		
	}

	public function executeUnderOneL(HTTPRequest $request){

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();

		$this->page->addVarPage('textUndergrowth', $textUndergrowth);

	}

	public function executeUnderTwoL(HTTPRequest $request){

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeUnderThreeL(HTTPRequest $request){

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightTwoL(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeFightThreeL(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('wolf', $wolf);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightFourL(HTTPRequest $request){

		$forest = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textFight', $forest);
		$this->page->addVarPage('wolf', $wolf);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightFiveL(HTTPRequest $request){

		$forest = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();

		$this->page->addVarPage('textFight', $forest);
		$this->page->addVarPage('wolf', $wolf);
	}

	public function executeFountainOneL(HTTPRequest $request){

		$textFountain = $this->managers->getManagerOf('Forest')->fountain();
		
		$this->page->addVarPage('textFountain', $textFountain);

	}

	public function executeFountainTwoL(HTTPRequest $request){

		$textFountain = $this->managers->getManagerOf('Forest')->fountain();
		
		$this->page->addVarPage('textFountain', $textFountain);

	}

	public function executePortal(HTTPRequest $request){

		$textPortal = $this->managers->getManagerOf('Forest')->portal();

		$this->page->addVarPage('textPortal', $textPortal);
	}

	public function executeImpasseOneL(HTTPRequest $request){

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();

		$this->page->addVarPage('textImpasse', $textImpasse);
	}

	public function executeImpasseTwoL(HTTPRequest $request){

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textImpasse', $textImpasse);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeImpasseDead(HTTPRequest $request){

		$textImpasseDead = $this->managers->getManagerOf('Forest')->impasseDead();

		$this->page->addVarPage('textImpasseDead', $textImpasseDead);
	}

	//Fin Partie de Gauche

	//Partie de Droite

	public function executeFightOneR(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeFightFourR(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeFightFiveR(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('wolf', $wolf);
	}

	public function executeFightSevenR(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$bat = $this->managers->getManagerOf('Characters')->getBat();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('bat', $bat);
	}

	public function executeChestEightR(HTTPRequest $request){

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeChestNineR(HTTPRequest $request){

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeUnderFourR(HTTPRequest $request){

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();

		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
	}

	public function executeVillageThreeR(HTTPRequest $request){

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeVillageFourR(HTTPRequest $request){

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeVillageFiveR(HTTPRequest $request){

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightTwoR(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('wolf', $wolf);
	}

	public function executeFightThreeR(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('wolf', $wolf);
		$this->page->addVarPage('crow', $crow);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightSixR(HTTPRequest $request){

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();

		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeUnderFiveR(HTTPRequest $request){

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeUnderSixR(HTTPRequest $request){

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeImpasseThreeR(HTTPRequest $request){

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();

		$this->page->addVarPage('textImpasse', $textImpasse);
	}

	public function executeImpasseFourR(HTTPRequest $request){

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textImpasse', $textImpasse);
		$this->page->addVarPage('apple', $apple);
	}

	//Fin Partie de Droite
}


