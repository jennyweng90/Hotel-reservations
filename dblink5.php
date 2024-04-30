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
    $dbaction5=$_POST['dbaction5'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $type=$_POST['type'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];

    $link=mysqli_connect('localhost','root','12345678','inn');
    if($dbaction5=="insert5")
    {
        $sql="insert into reserve-customer (name, phone, type, startdate,enddate) values ('$name','$phone','$type','$startdate','$enddate')";
        if(mysqli_query($link,$sql))
    {
        header("Location:message.php?message=訂房成功");
    }
        else
    {
        header("Location:message.php?message=訂房失敗");
    }
    }
   else
   {
    
    }
    
    ?>
</body>
</html>