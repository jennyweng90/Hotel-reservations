<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$ID = $_POST['ID'];
$password = $_POST['password'];
$link = mysqli_connect('localhost','root','12345678','inn');
$sql = "select distinct * from account where ID = '$ID' and password = '$password'";
$result = mysqli_query($link,$sql);
if($row = mysqli_fetch_assoc($result))
{   $_SESSION['name']=$row['name'];
    $_SESSION['level']=$row['level'];
    header("Location:首頁.php");
}
else
{
    header("Location:message3.php?message=此帳號不存在");
}
?>
</table>
</div>
</body>
</html>