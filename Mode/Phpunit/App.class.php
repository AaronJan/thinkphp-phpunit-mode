<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 * ThinkPHP 命令模式应用程序类
 */
class App {

    /**
     * 执行应用程序
     * @access public
     * @return void
     */
    static public function run() {
        // 保存日志记录
        if(C('LOG_RECORD')) Log::save();
        return ;
    }

};