<?php
include 'dbconnected.php';

if(isset($_POST['name']) && $_POST['name']  !="" ){

    echo " hello : "  .$_POST['name']. '' ;
}else{
    echo "please enter name";
}
$chat = $_POST['name'];
$sendrid = 2;
$touserid = 4;
$status  = 4;
$sql="INSERT INTO `massges` ( `massges`, `sender_id`, `to_user_id`, `status`)
 VALUES ('$chat', '$sendrid', '$touserid', '$status')";


if (mysqli_query($conn,$sql)){

$success = '<div class="alert alert-success" role="alert">  شكراً لك لقد  تم تحميل الفلم بنجاح</div>';
header('location:profile.php');
}

?>
