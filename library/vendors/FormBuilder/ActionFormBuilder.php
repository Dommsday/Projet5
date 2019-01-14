<?php
namespace FormBuilder;

use \framework\FormActionBuilder;
use \framework\StringField;
use \framework\TextTinyField;
use \framework\MaxLengthValidator;
use \framework\NotNullValidator;

class ActionFormBuilder extends FormActionBuilder
{
  public function build()
  {

       $this->formAction->add(new StringField([
        'label' => 'Action',
        'type' => 'text',
        'name' => 'title',
        'id' => 'title',
        'boots' => 'form-control',
        'maxLength' => 50,
        'validators' => [
          new MaxLengthValidator('L\'action titre spécifié est trop long (50 caractères)', 50),
          new NotNullValidator('Merci de spécifier l\'action'),
        ],
       ]));
  }
}