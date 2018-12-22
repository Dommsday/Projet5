<?php
namespace FormBuilder;

use \framework\TinyMCEBuilder;
use \framework\StringField;
use \framework\TextTinyField;
use \framework\MaxLengthValidator;
use \framework\NotNullValidator;

class TinyMCEFormBuilderCharacters extends TinyMCEBuilder
{
  public function build()
  {

       $this->tinymce->add(new StringField([
        'label' => 'Nom',
        'type' => 'text',
        'name' => 'name',
        'id' => 'name',
        'boots' => 'form-control',
        'maxLength' => 100,
        'validators' => [
          new MaxLengthValidator('Le nom spécifié est trop long', 100),
          new NotNullValidator('Merci de spécifier le nome du personnage'),
        ],
       ]));

      $this->tinymce->add(new StringField([
        'label' => 'Dégâts',
        'type' => 'text',
        'name' => 'damages',
        'id' => 'damages',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier la valeur des dégâts'),
        ],
       ]));

      $this->tinymce->add(new StringField([
        'label' => 'Type',
        'type' => 'text',
        'name' => 'type',
        'id' => 'type',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier la vie du personnage'),
        ],
       ]));

      $this->tinymce->add(new StringField([
        'label' => 'Vie',
        'type' => 'text',
        'name' => 'life',
        'id' => 'life',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier la vie du personnage'),
        ],
       ]));
  }
}