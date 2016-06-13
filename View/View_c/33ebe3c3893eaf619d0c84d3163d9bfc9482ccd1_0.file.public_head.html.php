<?php
/* Smarty version 3.1.29, created on 2016-04-06 12:25:30
  from "D:\WWW\MVC\View\admin\public_head.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57048fba159b07_73934897',
  'file_dependency' => 
  array (
    '33ebe3c3893eaf619d0c84d3163d9bfc9482ccd1' => 
    array (
      0 => 'D:\\WWW\\MVC\\View\\admin\\public_head.html',
      1 => 1459916728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57048fba159b07_73934897 ($_smarty_tpl) {
?>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['STYLEPATH']->value;?>
/admin/css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['STYLEPATH']->value;?>
/admin/css/style_adm.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['STYLEPATH']->value;?>
/admin/css/stylet.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['STYLEPATH']->value;?>
/admin/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['STYLEPATH']->value;?>
/admin/js/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['STYLEPATH']->value;?>
/admin/js/common.js"><?php echo '</script'; ?>
>
</head>
<body>

</head>
<body class="bodybja">
<div id="herder" class="m-box-bj headbj">
	<div id="top" class="m-box headbj">
    	<div class="head_top">
            <div class="logobar fl">
                <h1><a href="{lanrain::U('User/Index/index')}"><img src="<?php echo $_smarty_tpl->tpl_vars['STYLEPATH']->value;?>
/admin/images/logo_admin.jpg" /></a></h1>
                <h3 class="f_c">企业系统</h3>
            </div>
            <div class="wel_adm fr">
                <span class="f_a">您好，</span>
                <span class="f_a shux">|</span>
                <span><a href="javascript:void(0)" class="f_b" onclick="Javascript:window.open('{lanrain::U('System/Admin/logout')}')">安全退出</a></span>
            </div>
        </div>
        <ul class="head_bot">
        	<?php
$_from = $_smarty_tpl->tpl_vars['topNavData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_vo_topNavData_0_saved_item = isset($_smarty_tpl->tpl_vars['vo_topNavData']) ? $_smarty_tpl->tpl_vars['vo_topNavData'] : false;
$_smarty_tpl->tpl_vars['vo_topNavData'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['vo_topNavData']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo_topNavData']->value) {
$_smarty_tpl->tpl_vars['vo_topNavData']->_loop = true;
$__foreach_vo_topNavData_0_saved_local_item = $_smarty_tpl->tpl_vars['vo_topNavData'];
?>
				<li>
					<a href="./index.php?m=<?php echo $_smarty_tpl->tpl_vars['vo_topNavData']->value['m'];?>
&a=<?php echo $_smarty_tpl->tpl_vars['vo_topNavData']->value['a'];?>
" class="f_white <?php if (mb_strtolower($_smarty_tpl->tpl_vars['vo_topNavData']->value['m'], 'UTF-8') == mb_strtolower($_GET['m'], 'UTF-8')) {?> active <?php }?>"><?php echo $_smarty_tpl->tpl_vars['vo_topNavData']->value['name'];?>
</a>
				</li>
			<?php
$_smarty_tpl->tpl_vars['vo_topNavData'] = $__foreach_vo_topNavData_0_saved_local_item;
}
if ($__foreach_vo_topNavData_0_saved_item) {
$_smarty_tpl->tpl_vars['vo_topNavData'] = $__foreach_vo_topNavData_0_saved_item;
}
?>
        </ul>

	</div>
</div>
<div id="wrapper">
	<div id="Frame" class="contbox">
		<div id="nav" class="cboxTop">
			<span class="big f_d">
				基础设置
			</span>
			
			<span class="sml f_d">
            	
			</span>
		</div>
		<div id="floatline"></div>
		<div class="dib">
			<dl id="Menu" class="contLeft fl">
				<?php if ($_smarty_tpl->tpl_vars['topChildNavData']->value != '') {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['topChildNavData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_vo_topChildNavData_1_saved_item = isset($_smarty_tpl->tpl_vars['vo_topChildNavData']) ? $_smarty_tpl->tpl_vars['vo_topChildNavData'] : false;
$_smarty_tpl->tpl_vars['vo_topChildNavData'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['vo_topChildNavData']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo_topChildNavData']->value) {
$_smarty_tpl->tpl_vars['vo_topChildNavData']->_loop = true;
$__foreach_vo_topChildNavData_1_saved_local_item = $_smarty_tpl->tpl_vars['vo_topChildNavData'];
?>
					<dd>
						<h3 class="f_e snh">
							<!-- 
							<i>
								<img src="<?php echo $_smarty_tpl->tpl_vars['STYLEPATH']->value;?>
/admin/images/icon_c_0<?php echo '<?php ';?>echo $key+1; <?php echo '?>';?>.gif" />
							</i>
							 -->
							 
							<span>
								<a href="index.php?m=<?php echo $_smarty_tpl->tpl_vars['vo_topChildNavData']->value['m'];?>
&a=<?php echo $_smarty_tpl->tpl_vars['vo_topChildNavData']->value['a'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['vo_topChildNavData']->value['name'];?>

								</a>
							</span>

						</h3>
						<?php if ($_smarty_tpl->tpl_vars['vo_topChildNavData']->value['threeNav'] != '') {?>
						<ul style="display: block;">
							
							<?php
$_from = $_smarty_tpl->tpl_vars['vo_topChildNavData']->value['threeNav'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_vo_topThreeNavData_2_saved_item = isset($_smarty_tpl->tpl_vars['vo_topThreeNavData']) ? $_smarty_tpl->tpl_vars['vo_topThreeNavData'] : false;
$_smarty_tpl->tpl_vars['vo_topThreeNavData'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['vo_topThreeNavData']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo_topThreeNavData']->value) {
$_smarty_tpl->tpl_vars['vo_topThreeNavData']->_loop = true;
$__foreach_vo_topThreeNavData_2_saved_local_item = $_smarty_tpl->tpl_vars['vo_topThreeNavData'];
?>
								<li><a href="index.php?m=<?php echo $_smarty_tpl->tpl_vars['vo_topThreeNavData']->value['m'];?>
&a=<?php echo $_smarty_tpl->tpl_vars['vo_topThreeNavData']->value['a'];?>
" class="current"><?php echo $_smarty_tpl->tpl_vars['vo_topThreeNavData']->value['name'];?>
</a></li>		
							<?php
$_smarty_tpl->tpl_vars['vo_topThreeNavData'] = $__foreach_vo_topThreeNavData_2_saved_local_item;
}
if ($__foreach_vo_topThreeNavData_2_saved_item) {
$_smarty_tpl->tpl_vars['vo_topThreeNavData'] = $__foreach_vo_topThreeNavData_2_saved_item;
}
?>
							
						</ul>
						<?php }?>
					</dd>
					<?php
$_smarty_tpl->tpl_vars['vo_topChildNavData'] = $__foreach_vo_topChildNavData_1_saved_local_item;
}
if ($__foreach_vo_topChildNavData_1_saved_item) {
$_smarty_tpl->tpl_vars['vo_topChildNavData'] = $__foreach_vo_topChildNavData_1_saved_item;
}
?>
					<?php }?>
				</if>			
			</dl><?php }
}
