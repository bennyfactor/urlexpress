<?php

/**
 * Albums form base class.
 *
 * @method Albums getObject() Returns the current form's model object
 *
 * @package    pd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAlbumsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'aid'         => new sfWidgetFormInputHidden(),
      'created'     => new sfWidgetFormDateTime(),
      'mod'         => new sfWidgetFormDateTime(),
      'cover_pid'   => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormTextarea(),
      'description' => new sfWidgetFormTextarea(),
      'sort_order'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'aid'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('aid')), 'empty_value' => $this->getObject()->get('aid'), 'required' => false)),
      'created'     => new sfValidatorDateTime(array('required' => false)),
      'mod'         => new sfValidatorDateTime(array('required' => false)),
      'cover_pid'   => new sfValidatorInteger(),
      'name'        => new sfValidatorString(),
      'description' => new sfValidatorString(),
      'sort_order'  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('albums[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Albums';
  }

}
