<?php
/**
* 后台管理 -> 头部
*/
class Adm_PublicheadAction extends CAction
{
	public function index()
	{
		/* 组装菜单一 */
		require_once('Adm_PublicheadFuncAction.class.php');
		$Adm_PublicheadFunc = new Adm_PublicheadFuncAction();
		$topNavData = $Adm_PublicheadFunc->getTopNav();
		// echo '<pre>';
		// var_dump($topNavData);
		$this->assign('topNavData',$topNavData);
		$this->display('admin/public_head.html');
	}
}