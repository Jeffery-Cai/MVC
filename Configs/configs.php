<?php
return array(
/* 配置数据库 */
	'DB_TYPE'=>'mysql',
		
	'DB_HOST'=>'localhost',
		
	'DB_PORT'=>'3306',
		
	'DB_NAME'=>'mvc',
		
	'DB_USER'=>'root',
		
	'DB_PWD'=>'root',
		
	'DB_PREFIX'=>'lk_',

/* 配置smarty */
	'template_dir'=>'View',

	'compile_dir'=>'View/View_c',

	'cache_dir'=>'Cache',

	'cache_lifetime'=>'2',   // 以秒数计算

	'left_delimiter'=>'<{',

	'right_delimiter'=>'}>'
);