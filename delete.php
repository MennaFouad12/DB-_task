<?php
require_once('./init.php');


    
        global $con;
        $stmt = $con->prepare('DELETE FROM students WHERE ID=?');
        $stmt->execute(array($_GET['id']));
        header('location:index.php');
    
?>