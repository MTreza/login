<?php
require_once "users.php";

$user = new users;

if(isset($_GET['action']) && $_GET['action'] == "delete") {
    $id = $_GET['id'];
    if($user->deleteData($id)) {
        header("location:index.php?delete");
    }
}

?>