<?php

/**
 * Document filter form.
 *
 * @package    flux_docs
 * @subpackage filter
 * @author     Gaspar Rajoy
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DocumentFormFilter extends BaseDocumentFormFilter
{
  public function configure()
  {
    $this->setWidget('created_at', new sfWidgetFormJQueryDate(
                    array(
                        'config' => '{buttonText: "Choose Date"}',
                        'date_widget' => new sfWidgetFormDate(array('format' => '%day%%month%%year%'))
                    )
            )
    );
  }
}
