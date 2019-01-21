<?php
namespace FormBuilder;

use \framework\PlayersBuilder;
use \framework\StringField;
use \framework\PasswordField;
use \framework\PasswordConfirmField;
use \framework\EmailField;
use \framework\NotNullValidator;
use \framework\MaxLengthValidator;

class PlayersFormBuilder extends PlayersBuilder{
  
  public function build()
  {
    $this->playersForm->add(new StringField([
        'label' => 'Pseudo',
        'name' => 'pseudo',
        'type' => 'text',
        'id' => 'pseudo',
        'placeholder' => "6 caractères minimum",
        'maxLength' => "20",
        'boots' => 'form-control',
        'idSpan' => 'pseudoHelp',
        'validators' => [
          new MaxLengthValidator('La longueur maximale est atteinte', 20),
          new NotNullValidator('Merci de spécifier le pseudo'),
        ],
       ]));

       $this->playersForm->add(new PasswordField([
        'label' => 'Mot de Passe',
        'name' => 'password',
        'type' => 'password',
        'id' => 'password',
        'placeholder' => "8 caractères minimum",
        'boots' => 'form-control',
        'idSpan' => 'passwordHelp',
        'validators' => [
          new NotNullValidator('Merci de spécifier votre mot de passe'),
       
        ],
       ]));


       $this->playersForm->add(new PasswordField([
        'label' => 'Retaper Mot de Passe',
        'name' => 'passwordConfirm',
        'type' => 'password',
        'id' => 'passwordConfirm',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier le même mot de passe que le précédent '),
        ],
       ])); 

       $this->playersForm->add(new EmailField([
        'label' => 'E-mail',
        'name' => 'email',
        'id' => 'email',
        'type' => 'email',
        'placeholder' => "Ex: aaa@bb.cc",
        'idSpan' => 'emailHelp',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier une adresse mail valide'),
        ],
       ]));
  }
}