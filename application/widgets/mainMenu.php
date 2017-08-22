<?php
/**
 * 挂件：主导航栏
 *
 * @author tommy
 * @copyright Copyright (C) www.doitphp.com 2015 All rights reserved.
 * @version $Id: mainMenu 1.0 2015-04-26 06:55:30Z tommy $
 * @package Widget
 * @since 1.0
 */
namespace widgets;

use doitphp\App;
use doitphp\core\Widget;

class mainMenu extends Widget {

	/**
	 * main method
	 *
	 * @access public
	 *
	 * @param array $params 参数
	 *
	 * @return void
	 */
	public function renderContent($params = null) {

		//get params
		$controllerName = App::getControllerName();
		$actionName     = App::getActionName();

		$this->assign(array(
		'controller' => $controllerName,
		'action'     => $actionName,
		));

		$this->display();
	}

}