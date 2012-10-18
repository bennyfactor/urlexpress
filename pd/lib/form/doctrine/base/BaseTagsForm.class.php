<?php

/**
 * Tags form base class.
 *
 * @method Tags getObject() Returns the current form's model object
 *
 * @package    pd
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTagsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tid'          => new sfWidgetFormInputHidden(),
      'pid'          => new sfWidgetFormInputText(),
      'created'      => new sfWidgetFormDateTime(),
      'subject_id'   => new sfWidgetFormInputText(),
      'subject_name' => new sfWidgetFormTextarea(),
      'xcoord'       => new sfWidgetFormInputText(),
      'ycoord'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tid'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tid')), 'empty_value' => $this->getObject()->get('tid'), 'required' => false)),
      'pid'          => new sfValidatorInteger(),
      'created'      => new sfValidatorDateTime(array('required' => false)),
      'subject_id'   => new sfValidatorString(array('max_length' => 10)),
      'subject_name' => new sfValidatorString(),
      'xcoord'       => new sfValidatorString(array('max_length' => 8)),
      'ycoord'       => new sfValidatorString(array('max_length' => 8)),
    ));

    $this->widgetSchema->setNameFormat('tags[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tags';
  }

}
