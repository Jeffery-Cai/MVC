<?php
/**
* 主控制器
*/
class Rec_IndexAction extends CAction
{
	public function __contruct()
	{
	}
	public function index()
	{
		$data = $GLOBALS['db']->limit(1)->get('admin_user')->result_array();
		$this->assign("title",date('Y-m-d H:i:s'));
		$this->display("index.html");
	}
}