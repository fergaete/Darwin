<?php

/**
 * board actions.
 *
 * @package    darwin
 * @subpackage board
 * @author     DB team <collections@naturalsciences.be>
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class boardActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $this->widgets = Doctrine::getTable('MyPreferences')
      ->setUserRef($this->getUser()->getAttribute('db_user')->getId())
      ->getBoardWidgets();
  }

  public function executeAddWidget(sfWebRequest $request)
  {
    $this->forward404unless($request->getParameter('widget',false));
    
    //mark widget as visible
    Doctrine::getTable('MyPreferences')
      ->setUserRef($this->getUser()->getAttribute('db_user')->getId())
      ->changeWidgetStatus('board_widget', $request->getParameter('widget'), 'visible');

    return $this->renderPartial('boardwidget/wlayout',array('widget' => $request->getParameter('widget'), 'is_opened' => true));
  }

  public function executeChangeStatus(sfWebRequest $request)
  {
    Doctrine::getTable('MyPreferences')
      ->setUserRef($this->getUser()->getAttribute('db_user')->getId())
      ->changeWidgetStatus('board_widget', $request->getParameter('widget'), $request->getParameter('status'));
    return $this->renderText("ok");
  }

  public function executeChangeOrder(sfWebRequest $request)
  {
    $col1 = explode(',', $request->getParameter('col1'));
    $col2 = explode(',', $request->getParameter('col2'));
    Doctrine::getTable('MyPreferences')
      ->setUserRef($this->getUser()->getAttribute('db_user')->getId())
      ->changeOrder($col1, $col2);
    return $this->renderText(var_export($col1,true).var_export($col2,true));
  }

  public function executeReloadContent(sfWebRequest $request)
  {
    return $this->renderComponent('boardwidget',$request->getParameter('widget'));
  }
}
