<?php
namespace FormBuilder;

use \framework\TinyMCEBuilder;
use \framework\StringField;
use \framework\TextTinyField;
use \framework\MaxLengthValidator;
use \framework\NotNullValidator;

class TinyMCEFormBuilder extends TinyMCEBuilder
{
  public function build()
  {
    
       $this->tinymce->add(new StringField([
        'label' => 'Titre',
        'name' => 'title',
        'id' => 'title',
        'boots' => 'form-control',
        'maxLength' => 100,
        'validators' => [
          new MaxLengthValidator('Le titre spécifié est trop long', 100),
          new NotNullValidator('Merci de spécifier le titre de la news'),
        ],
       ]));

      $this->tinymce->add(new TextTinyField([
        'label' => 'Texte',
        'name' => 'content',
        'id' => 'mytextarea',
        'rows' => 8,
        'cols' => 60,
        'validators' => [
          new NotNullValidator('Merci de spécifier le contenu de la news'),
        ],
       ]));

      $this->tinymce->add(new StringField([
        'label' => 'Type',
        'name' => 'type',
        'id' => 'type',
        'boots' => 'form-control',
        'maxLength' => 50,
        'validators' => [
          new MaxLengthValidator('Le titre spécifié est trop long', 50),
          new NotNullValidator('Merci de spécifier le titre de la news'),
        ],
       ]));
  }
}