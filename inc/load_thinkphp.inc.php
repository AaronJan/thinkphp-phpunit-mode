<?php
// +----------------------------------------------------------------------
// | ThinkPHP Mode for Phpunit testing
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author : AaronJan
// | Website: https://github.com/AaronJan
// +----------------------------------------------------------------------

//设置运行模式为phpunit
define('MODE_NAME','phpunit');

//设置时区防止意外
date_default_timezone_set('Asia/Shanghai');

//打开报错
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//一些ThinkPHP配置，按照自己的情况修改
define('APP_DEBUG',  true);
define('APP_NAME',   'App');
define('APP_PATH',   '../App/');
define('THINK_PATH', '../ThinkPHP/');

//加载ThinkPHP框架
require(THINK_PATH.'ThinkPHP.php');
