<?php
    require_once ROOT_PATH . 'system/Medoo.php';

    use Medoo\Medoo;

    class model extends Medoo {

        function __construct()
        {
            // $dsn = 'mysql:host=localhost;dbname=shopimooc';
            // $username = 'root';
            // $pwd = 'root';
            //
            // try
            // {
            //     parent::__construct($dsn, $username, $pwd);
            // }
            // catch (PDOException $e)
            // {
            //     show_error($e->getMessage());
            // }

            include_once ROOT_PATH . 'system/config/database.php';

            parent::__construct($config);

        }
    }
?>
