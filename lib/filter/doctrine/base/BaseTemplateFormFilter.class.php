<?php

/**
 * Template filter form base class.
 *
 * @package    examine-template
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id$
 */
class BaseTemplateFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'body'     => new sfWidgetFormFilterInput(),
      'renderer' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'     => new sfValidatorPass(array('required' => false)),
      'body'     => new sfValidatorPass(array('required' => false)),
      'renderer' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('template_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Template';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'name'     => 'Text',
      'body'     => 'Text',
      'renderer' => 'Text',
    );
  }
}
