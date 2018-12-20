<?php
namespace App\FrontendGame;

use \framework\Application;

class FrontendGameApplication extends Application{

	public function __construct(){

		parent::__construct();

		$this->name = 'FrontendGame';
	}

	public function run(){

        if($this->user->isAuthenticated()){
            
            $controller = $this->getController();
            
            
        }else{
            
            $controller = new Modules\Game\GameController($this, 'Game', 'connexion');
            
        }
		
		$controller->execute();

		$this->httpResponse->setPage($controller->page());
		$this->httpResponse->send();
	}
}