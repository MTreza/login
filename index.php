<?php
require_once "users.php"
?>

<?php if(isset($_GET['delete'])):?>

<p class="alert alert-info">حذف شد</p>

<?php endif; ?>

<?php if(isset($_GET['update'])):?>

<p class="alert alert-info"> ویرایش شد</p>

<?php endif; ?>

<?php
$user = new users;
if(isset($_POST['submit'])) {
$firsname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];

$user->setfirstname($firsname);
$user->setlastname($lastname);
$user->setphone($phone);

 $user->setinsertdata();
?>

<p class="alert alert-info">دانش آموز با موفقیت درلیست ثبت شد</p>

<?php } ?>
<center>
<div dir="rtl">
<div class="card my-5">
    <div class="card-header"><strong>لیست دانش آموزان</strong>
        <a href="add.php" class="float-right btn btn-dark btn-sm">افزودن دانش آموز جدید</a>
    </div>
</center>   
</div>
<div>
    <table class="table table-striped table-bordered">
    <thead>
        <tr class="bg-primary text-white">
            
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>تلفن</th>
            <th class="text-center">عملیات</th>
        </tr>

    </thead>
    <tbody>
        <?php foreach($user->redall() as $key=>$value):?>

        <tr>
            <td><?php echo $value['firstname']  ?></td>
            <td><?php echo $value['lastname']  ?></td>
            <td><?php echo $value['phone']  ?></td>

            <td align="center">
                <a href="edit.php?action=edit&id=<?php echo $value['id'] ?>" class=""> ویرایش</a> 
                <a href="del.php?action=delete&id=<?php echo $value['id'] ?>" class="" onclick="return confirm('آیا میخواید کاربر حذف شود؟?');"> حذف</a>
            </td>
        </tr>
        

        <?php endforeach; ?>
        
    </tbody>
    </table>
</div>
</div>
<a href="http://keyhanweb.com/">
        KeyhanWeb.com
    </a>