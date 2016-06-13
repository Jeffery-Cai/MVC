<?php
/**
* 后台管理
*/
class Adm_IndexAction extends CAction
{
	public function index()
	{
		$this->display('admin/index.html');
	}

	public function img()
	{
		echo '123';
	}
}