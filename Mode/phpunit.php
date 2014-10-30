<?php
// +----------------------------------------------------------------------
// | ThinkPHP Mode for Phpunit testing
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author : AaronJan
// | Website: https://github.com/AaronJan
// +----------------------------------------------------------------------

// Phpunit测试模式定义文件
return array(
    'core'          =>   array(
        MODE_PATH.'Phpunit/functions.php',   // 命令行系统函数库
        MODE_PATH.'Phpunit/Log.class.php',
        MODE_PATH.'Phpunit/App.class.php',
        MODE_PATH.'Phpunit/Action.class.php',
    ),

    // 项目别名定义文件 [支持数组直接定义或者文件名定义]
    'alias'         =>   array(
        'Model'     =>   MODE_PATH.'Phpunit/Model.class.php',
        'Db'        =>   MODE_PATH.'Phpunit/Db.class.php',
        'Cache'     =>   CORE_PATH.'Core/Cache.class.php',
        'Debug'     =>   CORE_PATH.'Util/Debug.class.php',
    ), 

    // 系统行为定义文件 [必须 支持数组直接定义或者文件名定义 ]
    'extends'       =>    array(
    	MODE_PATH.'Phpunit/tags.php'
    ), 

    // 项目应用行为定义文件 [支持数组直接定义或者文件名定义]
    'tags'          =>   array(), 

);