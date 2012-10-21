<?php 
class Default_Bootstrap extends Zend_Application_Module_Bootstrap
{
	protected function _initFrontController()
	{
		$front = Zend_Controller_Front::getInstance();       
		$front->addControllerDirectory(APPLICATION_PATH . "/modules/default/controllers");
		
		$config = new Zend_Config_Ini(APPLICATION_PATH . '/configs/routers.ini', 'thietlap');
		$router = new Zend_Controller_Router_Rewrite();
		          
		$router = $router->addConfig($config, 'routes');
		          
		$front->setRouter($router);
		return $front;
	}
}
?>