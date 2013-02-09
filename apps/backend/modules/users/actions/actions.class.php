<?php

require_once dirname(__FILE__) . '/../lib/usersGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/usersGeneratorHelper.class.php';

/**
 * users actions.
 *
 * @package    flux_docs
 * @subpackage users
 * @author     Gaspar Rajoy
 * @version    1.0 2013-02-08 Gaspar.Rajoy $
 */
class usersActions extends autoUsersActions {

  public function executeDelete(sfWebRequest $request) {

    try {
      parent::executeDelete($request);
    } catch (Doctrine_Connection_Exception $dce) {
      $this->getUser()->setFlash('error', 'Cannot delete a user who has documents', false);
      $this->forward('users', 'index');
    }
  }

}