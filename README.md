# thinkphp-phpunit-mode

## Intro

ThinkPHP framework is mostly used by people who knows about Chinese language. So, try to learn some.


起因是想用phpunit去测试ThinkPHP的Model和其他函数、库。做了一番搜索，发现都是用类似hack的手段去实现，觉得不够优雅。而后发现ThinkPHP有一个模式扩展，看了代码之后发现非常适合改造，于是就有了这个项目。

目前的代码的Mode部分还只是简单从Cli模式中修改而来，会随着使用中发现的问题更新，如果你有任何疑问或者建议都可以提到issues。



## 使用方法

建议目录结构：


	Module/                          # 模块目录
	       App/
	           Common/
	           Conf/
	           Lib/
	           Tpl/
	           Runtime/
	       inc/                      # 本项目中的Inc文件夹
	       src/                      # phpunit可能需要用到的
	       tests/                    # 存放测试
	
将`Mode`文件夹中的文件放到`ThinkPHP/Extend/Mode`中；

最后在`tests`目录下新建一个测试，在开头包含`inc/load_thinkphp.inc.php`即可。

### 示例:

`ExampleTest.php`

	<?php
	require('../inc/load_thinkphp.inc.php');
	
	class ExampleTest extends PHPUnit_Framework_TestCase
	{
        
   	    public function testAssert()
        {
            $this->assertEquals(1, 1);
        }
    
	}


