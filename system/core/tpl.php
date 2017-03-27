<?php
    class tpl {
        public static $assign = array();

        public static function assign($name, $value)
        {
            self::$assign[$name] = $value;
        }

        public static function import($file)
        {
            $file = ROOT_PATH . 'views/' . $file;

            if (is_file($file))
            {
                extract(self::$assign);
                include $file;
            }
            else
            {
                throw new Exception("没有找到模板" . $file, 1);
            }
        }
    }
