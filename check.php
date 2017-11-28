<html>

<head><title>Checking...</title></head>

<?php
session_start();
include('sql_connect.php');

$id = $_POST['id'];

$result = mysqli_query($mysqli,"SELECT * FROM user WHERE user_name='".$id[0]."' AND user_password = '".$id[1]."'") or die(mysqli_error($mysqli));
$result = mysqli_fetch_array($result);
if($result){
    $_SESSION['num'] = $result[0];
    $_SESSION['user'] = $result[1];
    header('location:Footer.php');
}else{
    $_SESSION['notThere'] = 1;
    header('location:login.php');
}
?>
</html>
