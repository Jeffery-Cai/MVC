<?php
/* Smarty version 3.1.29, created on 2016-04-01 17:20:25
  from "D:\WWW\MVC\View\admin\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fe3d5977bcb3_13076270',
  'file_dependency' => 
  array (
    '9d67ad22fcde94cbf72004507141e182c96e5064' => 
    array (
      0 => 'D:\\WWW\\MVC\\View\\admin\\index.html',
      1 => 1459502424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./public_head.html' => 1,
    'file:./public_footer.html' => 1,
  ),
),false)) {
function content_56fe3d5977bcb3_13076270 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./public_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="content contentwp">
	<div class="cLine">
		<h4 class="left">邀请列表</h4>
		<div class="clr"></div>
	</div>
	<div class="cLineB">	
		<div class="left"> 
			<a href="{lanrain::U('Company/addproduct',array('token'=>$token,'company_id'=>$_GET['company_id']))}" title="添加" class="btnGrayS vm bigbtn">
				添加服务</a>
		</div>
		<div class="searchbar right">
			<form method="post" action="">
				<input type="text" id="msgSearchInput" class="txt left" placeholder="输入用户名" name="keyword" value="">
				<select name="is_pay" class="txt left">
					<option value="">请选择</option>
					<option value="0">未支付</option>
					<option value="1">支付成功</option>
				</select>
				<input type="submit" value="搜索" id="msgSearchBtn" href="" class="btnGrayS" title="搜索">
			</form>
		</div>
		<div class="clr"></div>
	</div>

	<div class="msgWrap">
		<form method="post" action="" id="info">
			<input name="delall" type="hidden" value="1">
			<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
					<tr>
						<th class="select"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
						<th width="120">封面图片</th>
						<th width="120">文章标题</th>
						<th width="120">文章简介</th>
						<th width="120">添加时间</th>
						<th width="100" class="norightborder">操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td align="center"><input type="checkbox" value="1" class="cbitem" name="id_1"></td>
						<td align="center">
							<div style="width:100%" class="cateimg">
								<img src="./tpl/Wap/default/common/pinnao/img/user_head.jpg" class="cateimg_small" title="图文自定义内容" style="width:50%;">
								<img src="./tpl/Wap/default/common/pinnao/img/user_head.jpg" class="cateimg_big2" title="图文自定义内容" style="left:130px;width:80%;">
							</div>
						</td>
						<td align="center">刘强东：O2O模式很难成功 因为违背经济常识</td>
						<td align="center">不管是在哪行哪业，发现一家创业公司能够取得成功，有四点最重要，而且这四点基本上能够判断一个全新的商业模式是否有价值。</td>
						<td align="center">2016-03-07 10:09:39</td>
						<td align="center">
							<a href="">修改</a>
							<a href="javascript:drop_confirm('您确定要删除吗?', '/pinnao/index.php?g=User&m=Paper&a=articleDel&id=1');">删除</a>	
						</td>
					</tr>			
				</tbody>
			</table>
			<input type="hidden" name="__hash__" value="709c20171e5d1ecbec818ce7699525e1_72d04cea99c973080f3b90fa908a3c69">
		</form>
		</div>
		<div class="cLine">
			<div class="left" style="padding-left:7px;">
				<input class="btnGrayS" onclick="delall();" type="button" value="删除"/>
			</div>
			<div class="pageNavigator right">
				<div class="pages"></div>
			</div>
			<div class="clr"></div>
		</div>
	</div>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./public_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
