# MVC
MVC模式
/*******************************************   企业框架使用手册 ******************/
1、要有缓存的页面静态化，都继承于Action类，反之就继承CAction类
2、本程序模板变量输出完全由smarty语法编写，具体参考资料学习 ：http://www.yiibai.com/smarty/smarty_variables.html
3、本程序所用到action(也就是参数m)，都不能重复命名。
3.1、需要注意的几点：
		  后台管理（action控制器）的话，都在定义类名的时候，加前缀Adm_
		  前台管理（action控制器）的话，都在定义类名的时候，加前缀Rec_



/* 基本目录 */
action 					----->			 控制器前台目录
action/admin 			----->			 控制器后台目录
cache  					----->			 smarty模板静态缓存目录
libs   					----->			 smarty模板目录
view/view_c     		----->			 smarty模板编译目录
org						----->			 smarty配置文件目录
view            		----->			 模板视图目录
model           		----->			 控制器模型目录
configs         		----->			 本程序配置目录（数据库配置，smarty配置）


/* 全局变量/常量 */
$GLOBALS['db']       	----->	         数据库变量
										具体参考 ： ./Common/mysql.class.php数据库类使用方法.txt
STYLEPATH               ----->           样式路径常量





/* 模板输出变量功能 */
<{$STYLEPATH}>  		----->			 存放静态样式(css,js,images)
										 存放路径 ：./View/style/.......

