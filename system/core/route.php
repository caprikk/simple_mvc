<?php
    class route {
        public $controller;
        public $action;
        public $query;

        public function __construct()
        {
            if (isset($_SERVER['PATH_INFO']))
            {
                $pathinfo = explode('/', $_SERVER['PATH_INFO']);

                if (isset($pathinfo[1]))
                {
                    $this->controller = $pathinfo[1];
                }

                if (isset($pathinfo[2]) && !empty($pathinfo[2]))
                {
                    $this->action = $pathinfo[2];
                }

                if (!empty($_GET))
                {
                    $this->query = $_GET;
                }
            }
        }
    }
 ?>
