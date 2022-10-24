<?php
    if(isset($_GET["editId"])){
        $id = $_GET["editId"];
        include 'userEdit.php';
    }else if(isset($_GET["delId"])){
        $id = $_GET["delId"];
        include 'userDelete.php';
    }else if(isset($_POST["name"])){
        include 'userAdd.php';
    }else {
        include 'userRead.php';
    }
?>