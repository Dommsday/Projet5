<?php
namespace App\FrontendGame\Modules\Game;

use \framework\HTTPRequest;
use \Entity\Players;
use \Entity\Forest;
use \Entity\Inventory;
use \Entity\InventoryPlayer;
use \Entity\Characters;
use \framework\User;
use \framework\PlayerFormConnexionHandler;
use \FormBuilder\PlayerFormConnexionBuilder;
use \framework\FormObjectHandler;
use \FormBuilder\ObjectFormBuilder;
use \framework\BackController;



class GameController extends BackController{

	public function takeKnife(HTTPRequest $request){

		$knife = $this->managers->getManagerOf('Inventory')->getKnife();

		if($request->method() == 'POST'){

			$object = new InventoryPlayer([
				'idPlayer' => $this->app->user()->getAttribute('id'),
				'name' => $knife['name'],
				'description' => $knife['description'],
				'damages' => $knife['damages'],
				'life' => $knife['life'],
				'type' => $knife['type']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formKnife = $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formKnife, $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
			$this->app->user()->setMessage('L\'objet à été mis dans votre inventaire');
		}

		$this->page->addVarPage('formKnife', $formKnife->createView());
	}


	public function takeApple(HTTPRequest $request){

		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		if($request->method() == 'POST'){

			$object = new InventoryPlayer([
				'idPlayer' => $this->app->user()->getAttribute('id'),
				'name' => $apple['name'],
				'description' => $apple['description'],
				'damages' => $apple['damages'],
				'life' => $apple['life'],
				'type' => $apple['type']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formApple = $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formApple, $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
			$this->app->user()->setMessage('L\'objet à été mis dans votre inventaire');
		}

		$this->page->addVarPage('formApple', $formApple->createView());
	}

	public function takeSword(HTTPRequest $request){

		$sword = $this->managers->getManagerOf('Inventory')->getSword();

		if($request->method() == 'POST'){

			$object = new InventoryPlayer([
				'idPlayer' => $this->app->user()->getAttribute('id'),
				'name' => $sword['name'],
				'description' => $sword['description'],
				'damages' => $sword['damages'],
				'life' => $sword['life'],
				'type' => $sword['type']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formSword = $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formSword, $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
			$this->app->user()->setMessage('L\'objet à été mis dans votre inventaire');
		}

		$this->page->addVarPage('formSword', $formSword->createView());
	}

	public function takeAcorn(HTTPRequest $request){

		$acorn = $this->managers->getManagerOf('Inventory')->getAcorn();

		if($request->method() == 'POST'){

			$object = new InventoryPlayer([
				'idPlayer' => $this->app->user()->getAttribute('id'),
				'name' => $acorn['name'],
				'description' => $acorn['description'],
				'damages' => $acorn['damages'],
				'life' => $acorn['life'],
				'type' => $acorn['type']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formAcorn= $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formAcorn $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
			$this->app->user()->setMessage('L\'objet à été mis dans votre inventaire');
		}

		$this->page->addVarPage('formAcorn', $formAcorn->createView());
	}

	public function takeStick(HTTPRequest $request){

		$stick = $this->managers->getManagerOf('Inventory')->getStick();

		if($request->method() == 'POST'){

			$object = new InventoryPlayer([
				'idPlayer' => $this->app->user()->getAttribute('id'),
				'name' => $stick['name'],
				'description' => $stick['description'],
				'damages' => $stick['damages'],
				'life' => $stick['life'],
				'type' => $stick['type']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formStick= $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formStick $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
			$this->app->user()->setMessage('L\'objet à été mis dans votre inventaire');
		}

		$this->page->addVarPage('formStick', $formStick->createView());
	}

	public function takeMap(HTTPRequest $request){

		$map = $this->managers->getManagerOf('Inventory')->getMap();

		if($request->method() == 'POST'){

			$object = new InventoryPlayer([
				'idPlayer' => $this->app->user()->getAttribute('id'),
				'name' => $map['name'],
				'description' => $map['description'],
				'damages' => $map['damages'],
				'life' => $map['life'],
				'type' => $map['type']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formMap= $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formMap $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
			$this->app->user()->setMessage('L\'objet à été mis dans votre inventaire');
		}

		$this->page->addVarPage('formMap', $formMap->createView());
	}

	public function executeInventory(){

		$warriorPlayer = $this->managers->getManagerOf('Characters')->getWarriorPlayer();
		$objects = $this->managers->getManagerOf('Inventory')->getAllElements();

		$this->page->addVarPage('warriorPlayer', $warriorPlayer);
		$this->page->addVarPage('objects', $objects);
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

		$this->executeInventory();
		$this->takeApple($request);

		$forest = $this->managers->getManagerOf('Forest')->startStory();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
	

		$this->page->addVarPage('textStart', $forest);
		$this->page->addVarPage('apple', $apple);

	}

	//Partie de Gauche

	public function executeFightOneL(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$bat = $this->managers->getManagerOf('Characters')->getBat();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('bat', $bat);
	}

	public function executeChestOneL(HTTPRequest $request){

		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		
		$this->page->addVarPage('textChest', $textChest);
	}

	public function executeChestThreeL(HTTPRequest $request){

		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		
		$this->page->addVarPage('textChest', $textChest);
	}

	public function executeChestFourL(HTTPRequest $request){

		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		
		$this->page->addVarPage('textChest', $textChest);
	}

	public function executeChestFiveL(HTTPRequest $request){

		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeVillageOneL(HTTPRequest $request){

		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeVillageTwoL(HTTPRequest $request){

		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
		
	}

	public function executeUnderOneL(HTTPRequest $request){

		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);

	}

	public function executeUnderTwoL(HTTPRequest $request){

		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeUnderThreeL(HTTPRequest $request){

		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightTwoL(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeFightThreeL(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('wolf', $wolf);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightFourL(HTTPRequest $request){

		$this->executeInventory();

		$forest = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textFight', $forest);
		$this->page->addVarPage('wolf', $wolf);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightFiveL(HTTPRequest $request){

		$this->executeInventory();

		$forest = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		
		$this->page->addVarPage('textFight', $forest);
		$this->page->addVarPage('wolf', $wolf);
	}

	public function executeFountainOneL(HTTPRequest $request){

		$this->executeInventory();

		$textFountain = $this->managers->getManagerOf('Forest')->fountain();
		
		$this->page->addVarPage('textFountain', $textFountain);

	}

	public function executeFountainTwoL(HTTPRequest $request){

		$this->executeInventory();

		$textFountain = $this->managers->getManagerOf('Forest')->fountain();
		
		$this->page->addVarPage('textFountain', $textFountain);

	}

	public function executePortal(HTTPRequest $request){

		$this->executeInventory();

		$textPortal = $this->managers->getManagerOf('Forest')->portal();
		
		$this->page->addVarPage('textPortal', $textPortal);
	}

	public function executeImpasseOneL(HTTPRequest $request){

		$this->executeInventory();

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();
		
		$this->page->addVarPage('textImpasse', $textImpasse);
	}

	public function executeImpasseTwoL(HTTPRequest $request){

		$this->executeInventory();

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textImpasse', $textImpasse);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeImpasseDead(HTTPRequest $request){

		$this->executeInventory();

		$textImpasseDead = $this->managers->getManagerOf('Forest')->impasseDead();
		
		$this->page->addVarPage('textImpasseDead', $textImpasseDead);
	}

	//Fin Partie de Gauche

	//Partie de Droite

	public function executeFightOneR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeFightFourR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeFightFiveR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('wolf', $wolf);
	}

	public function executeFightSevenR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$bat = $this->managers->getManagerOf('Characters')->getBat();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('bat', $bat);
	}

	public function executeChestEightR(HTTPRequest $request){

		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeChestNineR(HTTPRequest $request){

		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeUnderFourR(HTTPRequest $request){

		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
	}

	public function executeVillageThreeR(HTTPRequest $request){

		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeVillageFourR(HTTPRequest $request){

		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeVillageFiveR(HTTPRequest $request){

		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightTwoR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('wolf', $wolf);
	}

	public function executeFightThreeR(HTTPRequest $request){

		$this->executeInventory();

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

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeUnderFiveR(HTTPRequest $request){

		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeUnderSixR(HTTPRequest $request){

		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeImpasseThreeR(HTTPRequest $request){

		$this->executeInventory();

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();
		
		$this->page->addVarPage('textImpasse', $textImpasse);
	}

	public function executeImpasseFourR(HTTPRequest $request){

		$this->executeInventory();

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textImpasse', $textImpasse);
		$this->page->addVarPage('apple', $apple);
	}

	//Fin Partie de Droite
}


