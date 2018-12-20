<?php

namespace App\Backend\Modules\GameBackend;

use \framework\BackController;
use \framework\HTTPRequest;
use \Entity\Players;
use \Entity\Forest;
use \framework\User;
use \framework\PlayerFormConnexionHandler;
use \framework\FormTinyMCEHandler;
use \FormBuilder\PlayerFormConnexionBuilder;
use \FormBuilder\TinyMCEFormBuilder;

class GameBackendController extends BackController{

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
				$this->app->httpResponse()->redirect('/admin/');
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

		$this->page->addVarPage('title', 'Page Admin');
	}

	public function executeInsert(HTTPRequest $request){

		$this->page->addVarPage('title', 'Rédaction');

		$this->processTinyMCEForm($request);
	}

	public function processTinyMCEForm(HTTPRequest $request){

		if($request->method() == 'POST'){

			$forest = new Forest([
				'title' => $request->postData('title'),
				'content' => $request->postData('content'),
				'type' => $request->postData('type')
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
}