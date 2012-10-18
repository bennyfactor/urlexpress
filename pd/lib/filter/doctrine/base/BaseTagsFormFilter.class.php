<?php

/**
 * Tags filter form base class.
 *
 * @package    pd
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTagsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pid'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'subject_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'subject_name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'xcoord'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ycoord'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'pid'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'subject_id'   => new sfValidatorPass(array('required' => false)),
      'subject_name' => new sfValidatorPass(array('required' => false)),
      'xcoord'       => new sfValidatorPass(array('required' => false)),
      'ycoord'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tags_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tags';
  }

  public function getFields()
  {
    return array(
      'tid'          => 'Number',
      'pid'          => 'Number',
      'created'      => 'Date',
      'subject_id'   => 'Text',
      'subject_name' => 'Text',
      'xcoord'       => 'Text',
      'ycoord'       => 'Text',
    );
  }
}
