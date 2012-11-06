<?php
use Service\User\Impl\UserServiceImpl;

class Common_Controller_Base extends \Yaf_Controller_Abstract {
	//关闭自动渲染
	public function init() {
		Yaf_Dispatcher::getInstance()->disableView();
		$this->initMergeGet();
	}

	/**
	*合并url中的参数到$_GET变量
	*@return void
	*@param void
	*/
	public function initMergeGet() {
		$dispatcher = Yaf_Dispatcher::getInstance();
		$params = $dispatcher->getRequest()->getParams();
		foreach ($params as $key => $value) {
			$_GET[$key]= $value;
		}
	}

	/**
	*返回url或者$_GET里传递的参数
	*@param $key键名，$default默认值
	*@return string
	*/
	public function getQuery($key, $default = null) {
		return isset($_GET[$key]) ? $_GET[$key] : $default;
	}

	/**
	*返回$_POST里传递的参数
	*@param $key键名，$default默认值
	*@return string
	*/
	public function getPost($key, $default = null) {
		return isset($_POST[$key]) ? $_POST[$key] : $default;
	}

	protected function getUserService(){
		return new UserServiceImpl;
	}

	protected function getPostService(){

	}

}