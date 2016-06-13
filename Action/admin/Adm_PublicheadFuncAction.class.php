<?php
/**
* 后台管理 -> 头部，最多为三级菜单
*/
class Adm_PublicheadFuncAction extends CAction
{
	/* 组装最顶部菜单 */
	public function getTopNav()
	{
		$where = 'pid = 0 AND sid = 0 AND status = 1';
		$res = $GLOBALS['db']->where($where)->orderby('id desc')->get('adminmenu')->result_array();
		return $res;
	}

	/* 组装二级+三级菜单 */
	public function getTopChildNav($top)
	{
		// $top顶级菜单
		$Nav = array();
		$where = 'm = "'.$top.'" AND status = 1';
		$res = $GLOBALS['db']->select('id')->where($where)->get('adminmenu')->row_array();

		// 第二级
		$res['twoNav'] = $GLOBALS['db']->where('pid='.$res['id'].' AND status=1')->get('adminmenu')->result_array();
		$twoNav = $res['twoNav'];
		foreach ($twoNav as $k => $v) {
			$twoNav[$k]['threeNav'] = $GLOBALS['db']->where('sid='.$v['id'].' AND status=1')->get('adminmenu')->result_array();
		}
		return $twoNav;
	}
}