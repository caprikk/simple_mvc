<?php
    class main extends controller {
        public function index()
        {
            $demo_list = $this->model('index')->get_demo_list();

            tpl::assign('demo_list', $demo_list);

            tpl::import('index/index.tpl.htm');
        }
    }
?>
