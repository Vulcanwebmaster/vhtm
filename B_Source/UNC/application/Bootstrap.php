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
	
	public function _initDbRegistry()
    {
        $this->bootstrap('multidb');
        $multidb = $this->getPluginResource('multidb');
        Zend_Registry::set('unc_website', $multidb->getDb('uncwebsite'));
        Zend_Registry::set('unc_forum', $multidb->getDb('uncforum'));
    }
	
}
?>