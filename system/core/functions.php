<?php
    function show_error($var)
    {
        if (is_bool($var))
        {
            var_dump($var);
        }
        else if (is_null($var))
        {
            var_dump(NULL);
        }
        else
        {
            echo '<pre style="border:5px solid #eceff1;padding:20px;">' . print_r($var, true) . '</pre>';
        }
    }

?>
