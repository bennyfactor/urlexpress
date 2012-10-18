<?php

/**
 * Photos filter form base class.
 *
 * @package    pd
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePhotosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'created'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'mod'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'caption'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'file'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aid'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sort_order' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'created'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'mod'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'caption'    => new sfValidatorPass(array('required' => false)),
      'file'       => new sfValidatorPass(array('required' => false)),
      'aid'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sort_order' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('photos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Photos';
  }

  public function getFields()
  {
    return array(
      'pid'        => 'Number',
      'created'    => 'Date',
      'mod'        => 'Date',
      'caption'    => 'Text',
      'file'       => 'Text',
      'aid'        => 'Number',
      'sort_order' => 'Number',
    );
  }
}
