<?php

/**
 * examine actions.
 *
 * @package    examine-template
 * @subpackage examine
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class examineActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->name = 'Kousuke Ebihara';
  }
}
