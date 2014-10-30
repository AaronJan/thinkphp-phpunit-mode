<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2012 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
//           AaronJan <https://github.com/aaronjan>
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
        // 加载动态项目公共文件和配置
        load_ext_file();
        // Session初始化 支持其他客户端
        if(isset($_REQUEST[C("VAR_SESSION_ID")]))
            session_id($_REQUEST[C("VAR_SESSION_ID")]);
        if(C('SESSION_AUTO_START'))  session_start();
        // 记录应用初始化时间
        if(C('SHOW_RUN_TIME')) G('initTime');
        // 保存日志记录
        if(C('LOG_RECORD')) Log::save();
        return ;
    }

};