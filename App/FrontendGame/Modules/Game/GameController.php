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
use \framework\FormFightHandler;
use \framework\FormObjectHandler;
use \FormBuilder\PlayerFormConnexionBuilder;
use \FormBuilder\FightFormBuilder;
use \FormBuilder\ObjectFormBuilder;
use \framework\BackController;



class GameController extends BackController{

	public function executeDelete(HTTPRequest $request){
		$this->managers->getManagerOf('InventoryPlayer')->delete($request->getData('id'));
		$this->app->httpResponse()->redirect($_SERVER['HTTP_REFERER']);
	}

	public function takeKnife(HTTPRequest $request){

		$knife = $this->managers->getManagerOf('Inventory')->getKnife();

		if($request->method() == 'POST'){

			$object = new InventoryPlayer([
				'idPlayer' => $this->app->user()->getAttribute('id'),
				'name' => $knife['name'],
				'description' => $knife['description'],
				'damages' => $knife['damages'],
				'life' => $knife['life'],
				'type' => $knife['type'],
				'lifetime' => $knife['lifetime'],
				'src' =>$knife['src']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formKnife = $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formKnife, $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
			
		}

		if(!isset($_POST['knife1'])){
			 $this->page->addVarPage('display', 1);
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
				'type' => $apple['type'],
				'lifetime' => $apple['lifetime'],
				'src' =>$apple['src']
			]);

		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formApple = $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formApple, $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){

		}

		if(!isset($_POST['apple1'])){
			 $this->page->addVarPage('displayApple', 1);
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
				'type' => $sword['type'],
				'lifetime' => $sword['lifetime'],
				'src' =>$sword['src']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formSword = $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formSword, $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
		}

		if(!isset($_POST['sword1'])){
				$this->page->addVarPage('displaySword', 1);
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
				'type' => $acorn['type'],
				'lifetime' => $acorn['lifetime'],
				'src' =>$acorn['src']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formAcorn= $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formAcorn, $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
		
		}

		if(!isset($_POST['acorn1'])){
				$this->page->addVarPage('displayAcorn', 1);
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
				'type' => $stick['type'],
				'lifetime' => $stick['lifetime'],
				'src' =>$stick['src']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formStick= $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formStick, $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
			
		}

		if(!isset($_POST['stick1'])){
				$this->page->addVarPage('displayStick', 1);
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
				'type' => $map['type'],
				'lifetime' => $map['lifetime'],
				'src' =>$map['src']
			]);
		}else{
			$object = new InventoryPlayer;
		}
		

		$ObjectFormBuilder = new ObjectFormBuilder($object);
		$ObjectFormBuilder->build();

		$formMap= $ObjectFormBuilder->formObject();

		$formPlayerHandler = new FormObjectHandler($formMap, $this->managers->getManagerOf('InventoryPlayer'), $request);

		if($formPlayerHandler->process()){
			
		}

		$this->page->addVarPage('formMap', $formMap->createView());
	}

	public function formFight(HTTPRequest $request){

		$bat = $this->managers->getManagerOf('Characters')->getBat();

		if($request->method() == 'POST'){

			echo 'La vie de la chauve-souris est de '.$bat['life'];
		}else{
			$bat = new Characters;
		}

		$formFight = new FightFormBuilder($bat);
		$formFight->build();

		$formFightGame = $formFight->formFight();

		$formFightHandler = new FormFightHandler($formFightGame, $this->managers->getManagerOf('Characters'), $request);

		if($formFightHandler->process()){
			
		}

		$this->page->addVarPage('formFightGame', $formFightGame->createView());
	}

	public function executeInventory(){

		$warriorPlayer = $this->managers->getManagerOf('Characters')->getWarriorPlayer();
		$allObjects = $this->managers->getManagerOf('InventoryPlayer')->getAllInventory($this->app->user()->getAttribute('id'));

		$this->page->addVarPage('warriorPlayer', $warriorPlayer);
		$this->page->addVarPage('allObjects', $allObjects);

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

		
		$this->takeApple($request);

		$this->executeInventory();

		$forest = $this->managers->getManagerOf('Forest')->startStory();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();

		$this->page->addVarPage('textStart', $forest);
		$this->page->addVarPage('apple', $apple);
		
	}

	//Partie de Gauche

	public function executeFightOneL(HTTPRequest $request){

		$this->takeStick($request);
		$this->executeInventory();
	

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$bat = $this->managers->getManagerOf('Characters')->getBat();
		$stick = $this->managers->getManagerOf('Inventory')->getStick();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('bat', $bat);
		$this->page->addVarPage('stick', $stick);

	}

	public function executeFinalFight(HTTPRequest $request){

		$this->executeInventory();
	
		$textFinalFight = $this->managers->getManagerOf('Forest')->finalFight();
		$troll = $this->managers->getManagerOf('Characters')->getTroll();
		
		$this->page->addVarPage('textFinalFight', $textFinalFight);
		$this->page->addVarPage('troll', $troll);

	}

	public function executeChestOneL(HTTPRequest $request){

		$this->takeSword($request);
		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$sword = $this->managers->getManagerOf('Inventory')->getSword();
		
		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('sword', $sword);
	}

	public function executeChestThreeL(HTTPRequest $request){

		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		
		$this->page->addVarPage('textChest', $textChest);
	}

	public function executeChestFourL(HTTPRequest $request){

		$this->takeStick($request);
		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$stick = $this->managers->getManagerOf('Inventory')->getStick();
		
		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('stick', $stick);
	}

	public function executeChestFiveL(HTTPRequest $request){

		$this->takeApple($request);
	
		
		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
	
		
		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('apple', $apple);
		
		
	}

	public function executeVillageOneL(HTTPRequest $request){

		$this->takeAcorn($request);
		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$acorn = $this->managers->getManagerOf('Inventory')->getAcorn();
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('acorn', $acorn);
	}

	public function executeVillageTwoL(HTTPRequest $request){

		$this->takeApple($request);
		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
		
	}

	public function executeUnderOneL(HTTPRequest $request){

		$this->takeStick($request);
		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$stick = $this->managers->getManagerOf('Inventory')->getStick();

		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('stick', $stick);

	}

	public function executeUnderTwoL(HTTPRequest $request){

		$this->takeAcorn($request);
		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$acorn = $this->managers->getManagerOf('Inventory')->getAcorn();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('acorn', $acorn);
	}

	public function executeUnderThreeL(HTTPRequest $request){

		$this->takeAcorn($request);
		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$acorn = $this->managers->getManagerOf('Inventory')->getAcorn();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('acorn', $acorn);
	}

	public function executeFightTwoL(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeFightThreeL(HTTPRequest $request){

		$this->takeAcorn($request);
		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		$acorn = $this->managers->getManagerOf('Inventory')->getAcorn();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('wolf', $wolf);
		$this->page->addVarPage('acorn', $acorn);
	}

	public function executeFightFourL(HTTPRequest $request){

		$this->takeApple($request);
		$this->executeInventory();


		$forest = $this->managers->getManagerOf('Forest')->fight();
		$wolf = $this->managers->getManagerOf('Characters')->getWolf();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textFight', $forest);
		$this->page->addVarPage('wolf', $wolf);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightFiveL(HTTPRequest $request){

		$this->takeApple($request);
		$this->executeInventory();

		$forest = $this->managers->getManagerOf('Forest')->fight();
		$bat = $this->managers->getManagerOf('Characters')->getBat();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textFight', $forest);
		$this->page->addVarPage('bat', $bat);
		$this->page->addVarPage('apple', $apple);
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

		$this->takeStick($request);
		$this->executeInventory();

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();
		$stick = $this->managers->getManagerOf('Inventory')->getStick();
		
		$this->page->addVarPage('textImpasse', $textImpasse);
		$this->page->addVarPage('stick', $stick);
	}

	public function executeImpasseDead(HTTPRequest $request){

		$this->executeInventory();

		$textImpasseDead = $this->managers->getManagerOf('Forest')->impasseDead();
		
		$this->page->addVarPage('textImpasseDead', $textImpasseDead);
	}

	//Fin Partie de Gauche

	//Partie de Droite

	public function executeFightOneR(HTTPRequest $request){

		$this->takeAcorn($request);
		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$bat = $this->managers->getManagerOf('Characters')->getBat();
		$acorn = $this->managers->getManagerOf('Inventory')->getAcorn();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('bat', $bat);
		$this->page->addVarPage('acorn', $acorn);
	}

	public function executeFightFourR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$bat = $this->managers->getManagerOf('Characters')->getBat();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('bat', $bat);
	}

	public function executeFightFiveR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$golem = $this->managers->getManagerOf('Characters')->getGolem();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('golem', $golem);
	}

	public function executeFightSevenR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$crow = $this->managers->getManagerOf('Characters')->getCrow();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('crow', $crow);
	}

	public function executeChestEightR(HTTPRequest $request){

		$this->takeApple($request);
		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		
		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('apple', $apple);
		
	}

	public function executeChestNineR(HTTPRequest $request){

		$this->takeStick($request);
		$this->executeInventory();

		$textChest = $this->managers->getManagerOf('Forest')->chest();
		$stick = $this->managers->getManagerOf('Inventory')->getStick();
		
		$this->page->addVarPage('textChest', $textChest);
		$this->page->addVarPage('stick', $stick);
	}

	public function executeUnderFourR(HTTPRequest $request){

		$this->takeAcorn($request);
		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$acorn = $this->managers->getManagerOf('Inventory')->getAcorn();

		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('acorn', $acorn);
	}

	public function executeVillageThreeR(HTTPRequest $request){

		$this->takeApple($request);
		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeVillageFourR(HTTPRequest $request){

		$this->takeSword($request);
		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$sword = $this->managers->getManagerOf('Inventory')->getSword();
		
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('sword', $sword);
		
	}

	public function executeVillageFiveR(HTTPRequest $request){

		$this->takeApple($request);
		$this->executeInventory();

		$textVillage = $this->managers->getManagerOf('Forest')->village();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textVillage', $textVillage);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeFightTwoR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$golem = $this->managers->getManagerOf('Characters')->getGolem();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('golem', $golem);
	}

	public function executeFightThreeR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$bat = $this->managers->getManagerOf('Characters')->getBat();
		
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('bat', $bat);
	}

	public function executeFightSixR(HTTPRequest $request){

		$this->executeInventory();

		$textFight = $this->managers->getManagerOf('Forest')->fight();
		$golem = $this->managers->getManagerOf('Characters')->getGolem();
		
		$this->page->addVarPage('textFight', $textFight);
		$this->page->addVarPage('golem', $golem);
	}

	public function executeUnderFiveR(HTTPRequest $request){

		$this->takeApple($request);
		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('apple', $apple);
	}

	public function executeUnderSixR(HTTPRequest $request){

		$this->takeAcorn($request);
		$this->executeInventory();

		$textUndergrowth = $this->managers->getManagerOf('Forest')->undergrowth();
		$acorn = $this->managers->getManagerOf('Inventory')->getAcorn();
		
		$this->page->addVarPage('textUndergrowth', $textUndergrowth);
		$this->page->addVarPage('acorn', $acorn);
	}

	public function executeImpasseThreeR(HTTPRequest $request){

		$this->executeInventory();

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();
		
		$this->page->addVarPage('textImpasse', $textImpasse);
	}

	public function executeImpasseFourR(HTTPRequest $request){

		$this->takeApple($request);
		$this->executeInventory();

		$textImpasse = $this->managers->getManagerOf('Forest')->impasse();
		$apple = $this->managers->getManagerOf('Inventory')->getApple();
		
		$this->page->addVarPage('textImpasse', $textImpasse);
		$this->page->addVarPage('apple', $apple);
	}

	//Fin Partie de Droite
}


