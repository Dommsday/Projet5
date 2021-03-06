<?php

namespace App\Backend\Modules\GameBackend;

use \framework\BackController;
use \framework\HTTPRequest;
use \Entity\Players;
use \Entity\Forest;
use \Entity\Cave;
use \Entity\Characters;
use \Entity\Inventory;
use \framework\User;
use \framework\PlayerFormConnexionHandler;
use \framework\FormTinyMCEHandler;
use \framework\FormActionHandler;
use \FormBuilder\PlayerFormConnexionBuilder;
use \FormBuilder\TinyMCEFormBuilder;
use \FormBuilder\TinyMCEFormBuilderCharacters;
use \FormBuilder\TinyMCEFormBuilderInventory;
use \FormBuilder\ActionFormBuilder;

class GameBackendController extends BackController{

	public function executeConnexion(HTTPRequest $request){

    	$this->page->addVarPage('title', 'Page de connexion');

		$this->processAdministratorFormConnexion($request);

  	}

  	public function processAdministratorFormConnexion(HTTPRequest $request){

		$player = new Players([
    	'pseudo' => htmlspecialchars($request->postData('pseudo')),
		'password' => htmlspecialchars($request->postData('password')),
    	]);

		$connexion = $this->managers->getManagerOf('Players')->connexionAdministrator($request->postData('pseudo'));

		$password = htmlspecialchars($request->postData('password'));

		$isCorrect = password_verify($password, $connexion['password']);

		if($request->method() == 'POST'){

			if(($isCorrect) && ($connexion['administrator'] == 1)){

				$this->app->user()->setAttribute('administrator', $connexion['administrator']);
				$this->app->user()->setAttribute('pseudo', $request->postData('pseudo'));
				$this->app->user()->setAuthenticated(true);
				$this->app->httpResponse()->redirect('/admin/');
			}else{

				$this->app->user()->setMessage('Vous n\'êtes pas l\'administrateur');
			}
		}

		$formPlayerConnexion = new PlayerFormConnexionBuilder($player);
		$formPlayerConnexion->build();

		$playerFormConnexion = $formPlayerConnexion->playerFormConnexion();

		$formPlayersBuilder = new PlayerFormConnexionHandler($playerFormConnexion, $this->managers->getManagerOf('Players'), $request);

		$this->page->addVarPage('playerFormConnexion', $playerFormConnexion->createView());

	}

	public function executeIndex(HTTPRequest $request){

		$user = new User;

		if($user->getAttribute('administrator') == 1){

		$this->page->addVarPage('title', 'Page Admin');

    	}else{

    		$this->app->httpResponse()->redirect('/');
    	}

	}

	public function executeInsert(HTTPRequest $request){

		$this->page->addVarPage('title', 'Rédaction');

	}

	public function executeWritingForest(HTTPRequest $request){

		$this->page->addVarPage('title', 'Ecriture d\'élément');

		$this->processTinyMCEFormForest($request);
	}

	public function processTinyMCEFormForest(HTTPRequest $request){

		if($request->method() == 'POST'){

			$forest = new Forest([
				'title' => $request->postData('title'),
				'content' => $request->postData('content'),
				'type' => $request->postData('type'),
			]);

			if($request->getExists('id')){

				$forest->setId($request->getData('id'));
			}
		}else{

			if($request->getExists('id')){

				$forest = $this->managers->getManagerOf('Forest')->getText($request->getData('id'));
			}else{

				$forest = new Forest;
			}
		}

		$formTinyMCEBuilder = new TinyMCEFormBuilder($forest);
		$formTinyMCEBuilder->build();

		$tinymce = $formTinyMCEBuilder->tinymce();

		$FormTinyMCEHandler = new FormTinyMCEHandler($tinymce, $this->managers->getManagerOf('Forest'), $request);

		if($FormTinyMCEHandler->process()){

			$this->app->user()->setMessage($forest->idNew() ? 'L\'élément à bien été ajouté' : 'L\'élément à bien été modifié');
			$this->app->httpResponse()->redirect('/admin/');
		}

		$this->page->addVarPage('tinymce', $tinymce->createView());
	}

	public function executeWritingCave(HTTPRequest $request){

		$this->page->addVarPage('title', 'Ecriture d\'élément');

		$this->processTinyMCEFormCave($request);
	}

	public function processTinyMCEFormCave(HTTPRequest $request){

		if($request->method() == 'POST'){

			$cave = new Cave([
				'title' => $request->postData('title'),
				'content' => $request->postData('content'),
				'type' => $request->postData('type'),
				'src' => $request->postData('src')
			]);

			if($request->getExists('id')){

				$cave->setId($request->getData('id'));
			}
		}else{

			if($request->getExists('id')){

				$cave = $this->managers->getManagerOf('Cave')->getText($request->getData('id'));
			}else{

				$cave = new Cave;
			}
		}

		$formTinyMCEBuilder = new TinyMCEFormBuilder($cave);
		$formTinyMCEBuilder->build();

		$tinymce = $formTinyMCEBuilder->tinymce();

		$FormTinyMCEHandler = new FormTinyMCEHandler($tinymce, $this->managers->getManagerOf('Cave'), $request);

		if($FormTinyMCEHandler->process()){

			$this->app->user()->setMessage($cave->idNew() ? 'L\'élément à bien été ajouté' : 'L\'élément à bien été modifié');
			$this->app->httpResponse()->redirect('/admin/');
		}

		$this->page->addVarPage('tinymce', $tinymce->createView());
	}

	public function executeWritingCharacters(HTTPRequest $request){

		$this->page->addVarPage('title', 'Ecriture d\'élément');

		$this->processTinyMCEFormCharacters($request);
	}

	public function processTinyMCEFormCharacters(HTTPRequest $request){

		if($request->method() == 'POST'){

			$characters = new Characters([
				'name' => $request->postData('name'),
				'damages' => $request->postData('damages'),
				'type' => $request->postData('type'),
				'life' => $request->postData('life'),
				'src' => $request->postData('src')
			]);

			if($request->getExists('id')){

				$characters->setId($request->getData('id'));
			}
		}else{

			if($request->getExists('id')){

				$characters = $this->managers->getManagerOf('Characters')->getText($request->getData('id'));
			}else{

				$characters = new Characters;
			}
		}

		$formTinyMCEBuilder = new TinyMCEFormBuilderCharacters($characters);
		$formTinyMCEBuilder->build();

		$tinymce = $formTinyMCEBuilder->tinymce();

		$FormTinyMCEHandler = new FormTinyMCEHandler($tinymce, $this->managers->getManagerOf('Characters'), $request);

		if($FormTinyMCEHandler->process()){

			$this->app->user()->setMessage($characters->idNew() ? 'L\'élément à bien été ajouté' : 'L\'élément à bien été modifié');
			$this->app->httpResponse()->redirect('/admin/');
		}

		$this->page->addVarPage('tinymce', $tinymce->createView());
	}

	public function executeWritingInventory(HTTPRequest $request){

		$this->page->addVarPage('title', 'Ecriture d\'élément');

		$this->processTinyMCEFormInventory($request);
	}

	public function processTinyMCEFormInventory(HTTPRequest $request){

		if($request->method() == 'POST'){

			$inventory = new Inventory([
				'name' => $request->postData('name'),
				'description' => $request->postData('description'),
				'damages' => $request->postData('damages'),
				'life' => $request->postData('life'),
				'type' => $request->postData('type'),
				'lifetime' => $request->postData('lifetime'),
				'src' => $request->postData('src')
			]);

			if($request->getExists('id')){

				$inventory->setId($request->getData('id'));
			}
		}else{

			if($request->getExists('id')){

				$inventory = $this->managers->getManagerOf('Inventory')->getText($request->getData('id'));
			}else{

				$inventory = new Inventory;
			}
		}

		$formTinyMCEBuilder = new TinyMCEFormBuilderInventory($inventory);
		$formTinyMCEBuilder->build();

		$tinymce = $formTinyMCEBuilder->tinymce();

		$FormTinyMCEHandler = new FormTinyMCEHandler($tinymce, $this->managers->getManagerOf('Inventory'), $request);

		if($FormTinyMCEHandler->process()){

			$this->app->user()->setMessage($inventory->idNew() ? 'L\'objet à bien été ajouté' : 'L\'objet à bien été modifié');
			$this->app->httpResponse()->redirect('/admin/');
		}

		$this->page->addVarPage('tinymce', $tinymce->createView());
	}

	public function executeSeeAllForest(HTTPRequest $request){

		$this->page->addVarPage('title', 'Liste des éléments');

		$manager = $this->managers->getManagerOf('Forest')->getAllElements();

		$this->page->addVarPage('listElements', $manager);
	}

	public function executeSeeAllCave(HTTPRequest $request){

		$this->page->addVarPage('title', 'Liste des éléments');

		$manager = $this->managers->getManagerOf('Cave')->getAllElements();

		$this->page->addVarPage('listElements', $manager);
	}

	public function executeSeeAllCharacters(HTTPRequest $request){

		$this->page->addVarPage('title', 'Liste des éléments');

		$manager = $this->managers->getManagerOf('Characters')->getAllElements();

		$this->page->addVarPage('listElements', $manager);
	}

	public function executeSeeAllInventory(HTTPRequest $request){

		$this->page->addVarPage('title', 'Liste des éléments');

		$manager = $this->managers->getManagerOf('Inventory')->getAllElements();

		$this->page->addVarPage('listElements', $manager);
	}

	public function executeSeeAllMembers(HTTPRequest $request){

		$manager = $this->managers->getManagerOf('Players')->getAllMembers();

		$this->page->addVarPage('members', $manager);

		$this->page->addVarPage('title', 'Liste de tout les membres');
	}

	public function executeUpdateForest(HTTPRequest $request){

		$this->page->addVarPage('title', 'Modification d\'élément');

		$this->processTinyMCEFormForest($request);
	}

	public function executeUpdateCave(HTTPRequest $request){

		$this->page->addVarPage('title', 'Modification d\'élément');

		$this->processTinyMCEFormCave($request);
	}

	public function executeUpdateCharacters(HTTPRequest $request){

		$this->page->addVarPage('title', 'Modification d\'élément');

		$this->processTinyMCEFormCharacters($request);
	}

	public function executeUpdateInventory(HTTPRequest $request){

		$this->page->addVarPage('title', 'Modification d\'élément');

		$this->processTinyMCEFormInventory($request);
	}

	public function executeUpdateAction(HTTPRequest $request){

		$this->page->addVarPage('title', 'Modification d\'action');

		$this->processActionForm($request);
	}

	public function executeDeleteForest(HTTPRequest $request){

		$this->managers->getManagerOf('Forest')->delete($request->getData('id'));

		$this->app->user()->setMessage('L\'élément à bien été supprimé');

		$this->app->httpResponse()->redirect('/admin/all-forest.html');
	}

	public function executeDeleteCave(HTTPRequest $request){

		$this->managers->getManagerOf('Cave')->delete($request->getData('id'));

		$this->app->user()->setMessage('L\'élément à bien été supprimé');

		$this->app->httpResponse()->redirect('/admin/all-cave.html');
	}

	public function executeDeleteCharacters(HTTPRequest $request){

		 $this->managers->getManagerOf('Characters')->delete($request->getData('id'));

		$this->app->user()->setMessage('L\'élément à bien été supprimé');

		$this->app->httpResponse()->redirect('/admin/all-characters.html');
	}

	public function executeDeleteInventory(HTTPRequest $request){

		$this->managers->getManagerOf('Inventory')->delete($request->getData('id'));

		$this->app->user()->setMessage('L\'élément à bien été supprimé');

		$this->app->httpResponse()->redirect('/admin/all-forest.html');
	}

	public function executeDeleteMember(HTTPRequest $request){

		$this->managers->getManagerOf('Players')->delete($request->getData('id'));

		$this->app->user()->setMessage('Le joueur à bien été supprimé');

		$this->app->httpResponse()->redirect('/admin/all-members.html');
	}

}