<?php
    function getDbConnection(){
        $db_handle = pg_connect("host=localhost dbname=postgres user=postgres password=Elysee@123");
        if ($db_handle) {
            return $db_handle;
        } else {
            throw new RuntimeException("Database connection Failed");
        }
    }

    function closeConnection($db_handle){
        pg_close($db_handle);
    }
?>