<?php

/**
 * Comments form base class.
 *
 * @method Comments getObject() Returns the current form's model object
 *
 * @package    pd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCommentsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cid'          => new sfWidgetFormInputHidden(),
      'pid'          => new sfWidgetFormInputText(),
      'created'      => new sfWidgetFormDateTime(),
      'subject_name' => new sfWidgetFormInputText(),
      'subject_id'   => new sfWidgetFormInputText(),
      'text'         => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'cid'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cid')), 'empty_value' => $this->getObject()->get('cid'), 'required' => false)),
      'pid'          => new sfValidatorInteger(),
      'created'      => new sfValidatorDateTime(),
      'subject_name' => new sfValidatorString(array('max_length' => 50)),
      'subject_id'   => new sfValidatorString(array('max_length' => 20)),
      'text'         => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('comments[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comments';
  }

}
