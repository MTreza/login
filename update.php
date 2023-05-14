<?php
require_once "users.php";
?>



<?php

$user = new users;
if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$phone = $_POST['pgone'];

	$user->setfirstname($firstname);
	$user->setlastname($lastname);
    $user->setphone($phone);
    
    if($user->UpdateData($id)) {
        header("location:index.php?update");
    }
}

?>

