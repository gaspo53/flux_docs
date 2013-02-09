[?php

/**
 * <?php echo $this->table->getOption('name') ?> form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 *@version    1.0 2013-02-08 Gaspar.Rajoy $
 */
class <?php echo $this->table->getOption('name') ?>Form extends Base<?php echo $this->table->getOption('name') ?>Form
{
<?php if ($parent = $this->getParentModel()): ?>
  /**
   * @see <?php echo $parent ?>Form
   */
  public function configure()
  {
    parent::configure();
  }
<?php else: ?>
  public function configure()
  {
  }
<?php endif; ?>
}
