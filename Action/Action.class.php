<?php
/**
* 有缓存
*/
class Action extends Tpl
{
	public function __construct()
	{
		parent::__construct(1);
	}
	public function init(){
		$this->assign('STYLEPATH',STYLEPATH);    // 全局样式配置
		$this->MysqlObject($GLOBALS['config']['DB_NAME'],$GLOBALS['config']['DB_PWD'],$GLOBALS['config']['DB_USER'],$GLOBALS['config']['DB_HOST']);  // 全局mysql类

		$a = trim($_GET['a']); //默认方法名值为index
		if(empty($a))
		{
			$a = 'index';
		}

		if(method_exists($this,$a)){
			$this->$a();
		}else{
			die("没有找到{$a}对应的方法");
		}
	}


	public function MysqlObject($dbname,$rootpass,$rootname,$host)  
	{
	    if ($GLOBALS['db'] == 0)  
	    {  
	      $db = new Mysql($dbname,$rootpass,$rootname,$host);  
	      $GLOBALS['db'] = $db;  
	    }  
	    else{
	      $db = $GLOBALS['db'];  
	      return $db;
	    }
	}
}