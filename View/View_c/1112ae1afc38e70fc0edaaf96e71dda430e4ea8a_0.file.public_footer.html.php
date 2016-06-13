<?php
/* Smarty version 3.1.29, created on 2016-04-01 10:46:44
  from "D:\WWW\MVC\View\admin\public_footer.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56fde1142c3fe6_76986779',
  'file_dependency' => 
  array (
    '1112ae1afc38e70fc0edaaf96e71dda430e4ea8a' => 
    array (
      0 => 'D:\\WWW\\MVC\\View\\admin\\public_footer.html',
      1 => 1459478790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56fde1142c3fe6_76986779 ($_smarty_tpl) {
?>
		</div>
	</div>
</div>
<!--底部-->
<div style=" clear:both"></div>
<div class="m-box-bj fot_bj">
	<div class="m-box fot_bj fot_adm">
		<p class="f_white">Copyright © 2012-2014 <a href="http://www.gzlinker.com" target="_blank" class="f_white">mp.lkweixin.com</a> All Right Reserved</p>
	</div>
</div>

<!-- js -->
<?php echo '<script'; ?>
 type="text/javascript">
function selectall(name) {
	var checkItems=$('.cbitem');
	var ches = document.getElementById('check_box').checked;
	if (ches == false) {
		$.each(checkItems, function(i,val){
			val.checked=false;
		});

	} else {
		$.each(checkItems, function(i,val){
			val.checked=true;
		});
	}
}

function delall(){
	if(confirm('确定删除吗'))
		{$('#info').submit()}
}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
