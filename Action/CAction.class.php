<?php
/**
* 无缓存 
*/
class CAction extends Tpl
{
	public function __construct()
	{

		parent::__construct(0);  // 去除缓存
	}
	public function init(){
		$this->assign('STYLEPATH',STYLEPATH);    // 全局样式配置
		$this->MysqlObject($GLOBALS['config']['DB_NAME'],$GLOBALS['config']['DB_PWD'],$GLOBALS['config']['DB_USER'],$GLOBALS['config']['DB_HOST']);  // 全局mysql类

		$m = trim($_GET['m']);

		require_once('admin/Adm_PublicheadFuncAction.class.php');
		$Adm_PublicheadFunc = new Adm_PublicheadFuncAction();
		$topNavData = $Adm_PublicheadFunc->getTopNav();
		$topChildNavData = $Adm_PublicheadFunc->getTopChildNav($m);

		// echo '<pre>';
		// var_dump($topChildNavData);

		$this->assign('topNavData',$topNavData);  /* 组装最顶部菜单一 */
		$this->assign('topChildNavData',$topChildNavData);  /* 组装最顶部菜单一 */




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

	/* 定义数据库配置 */
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

	/* U函数 */

}