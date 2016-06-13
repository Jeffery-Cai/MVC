<?php
/**
* smarty子类->配置类
*/
class Tpl extends Smarty
{
	public function __construct($is_cache=0)
	{
		parent::__construct();
		//初始化Smarty对象中属性：
		$this->template_dir = $GLOBALS['config']['template_dir'];	//smarty模板目录
		$this->compile_dir = $GLOBALS['config']['compile_dir'];	//smarty模板编译目录
		$this->cache_dir = $GLOBALS['config']['cache_dir'];	//smarty模板静态缓存目录

		// 分后台与前台，是否开始缓存
		if($is_cache==1)
		{
			$this->caching = true;	//是否开启静态缓存
		}else{
			$this->caching = false;	//是否开启静态缓存
		}
		$this->cache_lifetime = $GLOBALS['config']['cache_lifetime'];	//静态缓存时间（秒）

		//指定定界符
		$this->left_delimiter = $GLOBALS['config']['left_delimiter'];	//左定界符
		$this->right_delimiter = $GLOBALS['config']['right_delimiter'];	//右定界符
		// $this->php_handling = SMARTY_PHP_ALLOW;
		// $this->allow_php_tag=true;
	}
}