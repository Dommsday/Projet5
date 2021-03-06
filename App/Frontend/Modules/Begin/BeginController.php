<?php

namespace App\Frontend\Modules\Begin;

use \framework\BackController;
use \framework\HTTPRequest;
use \framework\PlayersFormHandler;
use \framework\PlayerFormConnexionHandler;
use \Entity\InventoryPlayer;
use \Entity\Characters;
use \Entity\Warrior;
use \Entity\Players;
use \FormBuilder\PlayersFormBuilder;
use \FormBuilder\PlayerFormConnexionBuilder;


class BeginController extends BackController{

	//Quand on clique sur 'Nouveau Jeu' on vide au cas où l'inventaire
	public function executeDeleteInventory(HTTPRequest $request){
		$this->managers->getManagerOf('InventoryPlayer')->deleteInventoryPlayer($this->app->user()->getAttribute('id'));

		$this->app->httpResponse()->redirect('/game/');
	}

	//Méthode qui affiche le menu du jeu
	public function executeIndex(HTTPRequest $request){

		$player = $this->managers->getManagerOf('Players')->connexionAdministrator($request->postData('pseudo'));

		$this->page->addVarPage('player', $player);

		$this->page->addVarPage('display', 1);

	}

	//Méthode qui affiche le didactitiel
	public function executeDidactitiel(HTTPRequest $request){

		$this->page->addVarPage('display', 2);

	}

	//Méthode qui affiche la liste des personnages
	public function executeAllCharacters(HTTPRequest $request){

		$this->page->addVarPage('title', 'Liste des personnages');

		$allCharacters = $this->managers->getManagerOf('Begin')->getAllCharacters();

		$this->page->addVarPage('allCharacters', $allCharacters);

		$this->page->addVarPage('display', 2);

	}


	public function executeInscription(HTTPRequest $request){

		$this->page->addVarPage('title', 'Page d\'inscription');

		$this->processPlayersForm($request);

		$this->page->addVarPage('display', 2);

	}

	public function processPlayersForm(HTTPRequest $request){

		$player = new Players;

		$verif = $this->managers->getManagerOf('Players')->connexionPlayer($request->postData('pseudo'));

		$pseudo = htmlspecialchars($request->postData('pseudo'));
		$email = htmlspecialchars($request->postData('email'));
		$password = htmlspecialchars($request->postData('password'));
		$passwordConfirm = htmlspecialchars($request->postData('passwordConfirm'));


		$pseudoLength = $this->app->config()->get('pseudo_length');
		$passwordLength = $this->app->config()->get('password_length');


		if($request->method() == 'POST'){

			if($pseudo == $verif['pseudo']){

				$this->app->user()->setMessage('Le pseudo est déjà utilisé');

			}elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){

				if(($passwordConfirm == $password) && (strlen($pseudo) >= $pseudoLength) && (strlen($password) >= $passwordLength)){

					$player = new Players([

						'pseudo' =>htmlspecialchars($request->postData('pseudo')),
						'email' => htmlspecialchars($request->postData('email')),
						'password' => htmlspecialchars($request->postData('password')),
						'passwordConfirm' => htmlspecialchars($request->postData('passwordConfirm')),
					]);

				}else{

					$this->app->user()->setMessage('Les identifiants doivent etre correctement entrés');
				}
			}
		}

		$formPlayersBuilder = new PlayersFormBuilder($player);
		$formPlayersBuilder->build();

		$playersForm = $formPlayersBuilder->playersForm();

		$formPlayersBuilder = new PlayersFormHandler($playersForm, $this->managers->getManagerOf('Players'), $request);

		if($formPlayersBuilder->process()){
			
			$this->app->user()->setAttribute('pseudo', $request->postData('pseudo'));
			$this->app->user()->setAttribute('id', $request->postData('id'));
			$this->app->httpResponse()->redirect('/confirmation-inscription.html');
		}

		$this->page->addVarPage('playersForm', $playersForm->createView());


	}

	public function executeConnexion(HTTPRequest $request){

		$this->page->addVarPage('title', 'Page de connexion');

		$this->processPlayerFormConnexion($request);

		$this->page->addVarPage('display', 2);
	}

	public function processPlayerFormConnexion(HTTPRequest $request){

		$player = new Players;

		$connexion = $this->managers->getManagerOf('Players')->connexionPlayer($request->postData('pseudo'));

		$password = htmlspecialchars($request->postData('password'));

		$isCorrect = password_verify($password, $connexion['password']);

		if($request->method() == 'POST'){

			if($isCorrect){
				$this->app->user()->setAttribute('pseudo', $request->postData('pseudo'));
				$this->app->user()->setAttribute('id', $connexion['id']);
				$this->app->user()->setAttribute('administrator', $connexion['administrator']);
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

	public function executeConfirmInscription(HTTPRequest $request){

    	$this->page->addVarPage('title', 'Confirmation d\'inscription');

    	$this->page->addVarPage('display', 2);

  	}

  	public function executeConfirmConnexion(HTTPRequest $request){

  		$this->page->addVarPage('title', 'Confirmation de connexion');

  		$this->page->addVarPage('display', 2);
  	}

	public function executeConfirmDeconnexion(HTTPRequest $request){

    	$this->page->addVarPage('title', 'Déconnexion');

    	$this->page->addVarPage('display', 2);

    	$this->app->user()->setAuthenticated(false);

    	session_destroy(); 

  }
}
