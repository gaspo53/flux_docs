<?php

/**
 * doctrine_route_test actions.
 *
 * @package    symfony12
 * @subpackage doctrine_route_test
 * @author     Gaspar Rajoy
 * @version    1.0 2013-02-08 Gaspar.Rajoy $
 */
class doctrine_route_testActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    try {
      $this->object = $this->getRoute()->getObjects();
    } catch (Exception $e) {
      try {
        $this->object = $this->getRoute()->getObject();
      } catch (Exception $e) {
        return sfView::NONE;
      }
    }
  }
}
