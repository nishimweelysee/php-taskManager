<?php
    require ("../database/database.php");
    function savetask($task){
        $sqlNewTable = "CREATE TABLE IF NOT EXISTS Task (
            ID  SERIAL PRIMARY KEY,
            title VARCHAR(30) NOT NULL,
            date DATE NOT NULL,
            username VARCHAR(50),
            note VARCHAR(100),
            status VARCHAR(20) DEFAULT 'Pending',
            created_at TIMESTAMPTZ NOT NULL DEFAULT NOW(),
            updated_at TIMESTAMPTZ NOT NULL DEFAULT NOW(),
            completed_at TIMESTAMPTZ )";
            $conn = getDbConnection();
            try {
                pg_exec($conn, $sqlNewTable);
                $data = pg_insert($conn, "task",$task,PGSQL_DML_STRING);
                pg_exec($conn,$data);
                header("Location: ./view.php", true, 301);
                exit();
            } catch (Exception $ex) {
                $message = $ex->getMessage();
                echo $message;
            }
            closeConnection($conn);
    }
    function updateTask($task){
        $conn = getDbConnection();
            try {
                print_r($task);
                $data = pg_update($conn, "task",$task,array("id"=>$task['id']),PGSQL_DML_STRING);
                print $data;
                pg_exec($conn,$data);
                header("Location: ./view.php", true, 301);
                exit();
            } catch (Exception $ex) {
                $message = $ex->getMessage();
                echo $message;
            }
            closeConnection($conn);
    }

    function getAlltasks (){
        $conn = getDbConnection();
        $result = pg_query($conn, "SELECT * FROM task");
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }
        $arr = pg_fetch_all($result);
        closeConnection($conn);
        return $arr;
    }

    function deleteTask($id){
        $conn = getDbConnection();
        $data = pg_delete($conn,"task",$id,PGSQL_DML_STRING);
        pg_exec($conn,$data);
        closeConnection($conn);
        header("Location: ./view.php", true, 301);
        exit();
    }
    function getTaskbyId($id){
        $conn = getDbConnection();
        $result = pg_exec($conn,"SELECT * FROM task WHERE id ='$id'");
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }
        return pg_fetch_array($result);
    }

?>