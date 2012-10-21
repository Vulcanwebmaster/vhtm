<?php 
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initDatabase(){
        $db = $this->getPluginResource('db')->getDbAdapter();
        Zend_Registry::set('db', $db);    
    }
    
	public function _initAutoload(){
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new Zend_Controller_Plugin_ErrorHandler(array(
                                'module'     => 'error',
                                'controller' => 'error',
                                'action'     => 'error'
        )));
		
    }
    
	/*protected function _initRoutes()
	{   
	    $this->bootstrap('frontController');
	
	    $frontController = Zend_Controller_Front::getInstance();
	
	    $frontController->getRouter()->addRoute("tintuc/danh-muc",new Zend_Controller_Router_Route('tintuc/:action/*', 
		    array('module' => 'default', 'controller' => 'tintuc', 'action' => 'categoryId')));
		$frontController->getRouter()->addRoute("tt",new Zend_Controller_Router_Route('tintuc/*', 
		    array('module' => 'default', 'controller' => 'tintuc', 'action' => 'index')));
	}*/
	
	public function _initDbRegistry()
    {
        $this->bootstrap('multidb');
        $multidb = $this->getPluginResource('multidb');
        Zend_Registry::set('unc_website', $multidb->getDb('uncwebsite'));
        Zend_Registry::set('unc_forum', $multidb->getDb('uncforum'));
    }
	
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