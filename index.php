<?php
header('Content-type: text/html; charset=utf-8');
date_default_timezone_set("PRC");

function __autoload($name){
	// echo '<pre>';
	// var_dump($name);
	$name = strtolower($name);
	if(file_exists("./Action/{$name}.class.php")){
		require("./Action/{$name}.class.php");
	}elseif(file_exists("./Action/admin/{$name}.class.php")){
		require("./Action/admin/{$name}.class.php");
	}elseif(file_exists("./ORG/{$name}.class.php")){
		require("./ORG/{$name}.class.php");
	}elseif(file_exists("./Libs/".ucfirst($name).".class.php")){
		require("./Libs/".ucfirst($name).".class.php");
	}elseif(file_exists("./Libs/sysplugins/{$name}.php")){
		require("./Libs/sysplugins/{$name}.php");
	}elseif(file_exists("./Common/".ucfirst($name).".class.php")){
		require("./Common/".ucfirst($name).".class.php");
	}elseif(file_exists("./System/".ucfirst($name).".class.php")){
		require("./System/".ucfirst($name).".class.php");
	}else{
		die("无法加载{$name}模块 !");
	}
}
define("PATH_URL",str_replace("\\","/",dirname(__FILE__)));
define('STYLEPATH','./View/style/');	/* 静态style路径 */

$configs = require_once(PATH_URL."/configs/configs.php"); // 加载配置文件
$GLOBALS['config'] = $configs;   // 全局配置


$m = trim($_GET['m']);
if(empty($m))
{
	$m = 'Index';
}
$classname = ucfirst($m)."Action";
$action = new $classname();
$action->init();