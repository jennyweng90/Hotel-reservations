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
    $dbaction3=$_POST['dbaction3'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $type=$_POST['type'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];

    $link=mysqli_connect('localhost','root','12345678','inn');
    if($dbaction3=="insert3")
    {
        $sql="insert into reserve (name, phone, type, startdate,enddate) values ('$name','$phone','$type','$startdate','$enddate')";
        if(mysqli_query($link,$sql))
    {
        header("Location:message2.php?message2=新增成功");
    }
        else
    {
        header("Location:message2.php?message2=新增失敗");
    }
    }
   else
   {
    $sql="update reserve set phone='$phone' ,type='$type' , startdate='$startdate', enddate='$enddate' where name='$name'";
    if(mysqli_query($link,$sql))
    {
        header("Location:message2.php?message2=修改成功");
    }
    
    else
    {
        header("Location:message2.php?message2=修改失敗");
    }
    }
    
    ?>
</body>
</html>