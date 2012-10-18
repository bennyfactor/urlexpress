<?php

/**
 * Photos form base class.
 *
 * @method Photos getObject() Returns the current form's model object
 *
 * @package    pd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePhotosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pid'        => new sfWidgetFormInputHidden(),
      'created'    => new sfWidgetFormDateTime(),
      'mod'        => new sfWidgetFormDateTime(),
      'caption'    => new sfWidgetFormTextarea(),
      'file'       => new sfWidgetFormTextarea(),
      'aid'        => new sfWidgetFormInputText(),
      'sort_order' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'pid'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('pid')), 'empty_value' => $this->getObject()->get('pid'), 'required' => false)),
      'created'    => new sfValidatorDateTime(array('required' => false)),
      'mod'        => new sfValidatorDateTime(array('required' => false)),
      'caption'    => new sfValidatorString(),
      'file'       => new sfValidatorString(),
      'aid'        => new sfValidatorInteger(),
      'sort_order' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('photos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Photos';
  }

}
