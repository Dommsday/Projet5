<?php
namespace FormBuilder;

use \framework\TinyMCEBuilder;
use \framework\StringField;
use \framework\NumberField;
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
          new NotNullValidator('Merci de spécifier le nom du personnage'),
        ],
       ]));

      $this->tinymce->add(new NumberField([
        'label' => 'Dégâts',
        'type' => 'number',
        'name' => 'damages',
        'id' => 'damages',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier la valeur de dégâts'),
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

      $this->tinymce->add(new NumberField([
        'label' => 'Vie',
        'type' => 'number',
        'name' => 'life',
        'id' => 'life',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier la vie du personnage'),
        ],
       ]));
  }
}