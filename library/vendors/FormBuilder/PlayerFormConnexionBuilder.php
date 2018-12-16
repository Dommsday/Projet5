<?php
namespace FormBuilder;

use \framework\PlayerConnexionBuilder;
use \framework\StringField;
use \framework\PasswordField;
use \framework\NotNullValidator;

class PlayerFormConnexionBuilder extends PlayerConnexionBuilder{
  
  public function build()
  {
    $this->playerFormConnexion->add(new StringField([
        'label' => 'Pseudo',
        'name' => 'pseudo',
        'id' => 'pseudo',
        'maxLength' => "20",
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier le pseudo'),
        ],
       ]));

       $this->playerFormConnexion->add(new PasswordField([
        'label' => 'Mot de Passe',
        'name' => 'password',
        'id' => 'password',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier votre mot de passe'),
       
        ],
       ]));
  }
}