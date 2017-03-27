<?php
    class index extends model {

        public function get_demo_list()
        {
            // 这里可以进行数据库操作
            // 例如: return $this->select("imooc_admin", "*");
            $list = array("Volvo","BMW","SAAB");

            return $list;
        }
    }

?>
