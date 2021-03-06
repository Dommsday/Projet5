<?php
namespace FormBuilder;

use \framework\TinyMCEBuilder;
use \framework\StringField;
use \framework\NumberField;
use \framework\TextTinyField;
use \framework\MaxLengthValidator;
use \framework\NotNullValidator;

class TinyMCEFormBuilderInventory extends TinyMCEBuilder
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
          new NotNullValidator('Merci de spécifier le nome de l\'objet'),
        ],
       ]));

       $this->tinymce->add(new TextTinyField([
        'label' => 'Texte',
        'name' => 'description',
        'id' => 'mytextarea',
        'rows' => 8,
        'cols' => 60,
        'validators' => [
          new NotNullValidator('Merci de spécifier la description de l\'objet'),
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
          new NotNullValidator('Merci de spécifier le type de l\'objet'),
        ],
       ]));

      $this->tinymce->add(new NumberField([
        'label' => 'Vie',
        'type' => 'number',
        'name' => 'life',
        'id' => 'life',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier la durée de vie de l\'objet'),
        ],
       ]));

      $this->tinymce->add(new NumberField([
        'label' => 'Utilisation',
        'type' => 'number',
        'name' => 'lifetime',
        'id' => 'lifetime',
        'boots' => 'form-control',
        'validators' => [
          new NotNullValidator('Merci de spécifier la durée de vie de l\'objet'),
        ],
       ]));

      $this->tinymce->add(new TextTinyField([
        'label' => 'Lien',
        'name' => 'src',
        'id' => 'src',
        'rows' => 8,
        'cols' => 90,
        'validators' => [
          new NotNullValidator('Merci de spécifier le lien-image de l\'objet'),
        ],
       ]));
  }
}