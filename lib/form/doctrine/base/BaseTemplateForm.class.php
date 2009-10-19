<?php

/**
 * Template form base class.
 *
 * @package    examine-template
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id$
 */
class BaseTemplateForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'name'     => new sfWidgetFormInputText(),
      'body'     => new sfWidgetFormTextarea(),
      'renderer' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorDoctrineChoice(array('model' => 'Template', 'column' => 'id', 'required' => false)),
      'name'     => new sfValidatorString(array('max_length' => 64, 'required' => false)),
      'body'     => new sfValidatorString(array('required' => false)),
      'renderer' => new sfValidatorString(array('max_length' => 64, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('template[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Template';
  }

}
