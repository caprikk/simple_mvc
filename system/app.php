<?php
    class App
    {
        public static $class_map = array();
        public static $models = array();

        public static function run()
        {
            $route = new route();
            $controller = $route->controller;
            $action = $route->action;
            $query = $route->query;

            echo '控制器：' , $controller != '' ? $controller:'index';
            echo '<br />';
            echo '模块：',$action != '' ? $action:'index';
            echo '<br />';
            echo '参数：',var_dump($query);

            $controller = ($controller != '') ? $controller : 'index';
            
            $action = ($action != '') ? $action:'index';

            if (isset($controller))
            {
                $file = ROOT_PATH . 'controller/' . $controller . '.php';

                if (is_file($file))
                {
                    include $file;

                    $obj = new main();

                    $obj->$action();
                }
            }
        }

        public static function load($class)
        {
            // 自动加载类库
            // new route()
            if (isset($class_map[$class]))
            {
                return true;
            }
            else
            {
                $file = ROOT_PATH . 'system/core/' . $class . '.php';

                if (is_file($file))
                {
                    include $file;

                    self::$class_map[$class] = $class;
                }
                else
                {
                    throw new Exception("没有找到类:" . $class, 1);
                }

            }
        }

        /*
        * 全局调用Model
        */
        public static function model($model = null)
        {
            if (!$model)
            {
                return false;
            }

            // 检查是否有缓存
            if (isset(self::$models[$model]))
            {
                return self::$models[$model];
            }
            else
            {
                $file = ROOT_PATH . 'model/' . $model . '.php';

                if (is_file($file))
                {
                    include $file;

                    self::$models[$model] = new $model();
                }
                else
                {
                    throw new Exception("没有找到相应MODEL:" . $model, 1);
                }

                return self::$models[$model];
            }
        }
    }
?>
