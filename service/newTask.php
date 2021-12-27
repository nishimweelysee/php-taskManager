<?php 
    include './TaskService.php';
    // require('../model/Task.php');
    // $title = $_POST['title'];
    // $date = $_POST['date'];
    // $username = $_POST['username'];
    // $note = $_POST['note'];
    // $task = new Task($title,$date,$username,"Pending",$note);
    savetask($_POST);
?>