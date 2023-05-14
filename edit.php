<?php 
require_once "users.php"; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liststudent</title>
</head>

<body>

<?php

$user = new users;

if(isset($_GET['action']) && $_GET['action'] == "edit") {
	$id = $_GET['id'];
	$result = $user->getOne($id);
}

?>
<div class="container"dir="rtl">
<div class="card my-5">
	<div class="card-header"><strong>ویرایش کاربر</strong> <a href="index.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>لیست دانش آموزان</a></div>
		<div class="card-body">
			<div class="col">
				<form method="post" action="update.php">
				<input type="hidden" name="id" value="<?php echo $result['id'] ?>" >
					<div class="form-group">
						<label>نام</label>
						<input type="text" name="firstname" class="form-control" value="<?php echo $result['firstname'] ?>" required="">
					</div>

					<div class="form-group">
						<label>نام خانوادگی</label>
						<input type="text" name="lastname" class="form-control"  value="<?php echo $result['lastname'] ?>" required="">
					</div>

					<div class="form-group">
						<label>تلفن</label>
						<input type="number" name="phone" class="form-control"  value="<?php echo $result['phone'] ?>" required="">
					</div>

					<div class="form-group">
						<button type="submit" name="edit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i>ویرایش</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
    <a href="http://keyhanweb.com/">
        KeyhanWeb.com
    </a>