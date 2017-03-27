<?php
    /**
     * 入口文件
     * 1.定义常量
     * 2.加载函数库
     * 3.启动框架
     **/

    define('ROOT_PATH', realpath(' /'));
    define('DEBUG', false);

    if (DEBUG)
    {
        ini_set('display_errors', 'On');
    }
    else
    {
        ini_set('display_errors', 'Off');
    }

    include ROOT_PATH . 'system/core/functions.php';
    include ROOT_PATH . 'system/app.php';

    spl_autoload_register('APP::load');

    APP::run();
?>
