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
    $dbaction1=$_POST['dbaction1'];
    $num1=$_POST['num1'];
    $announcement1=$_POST['announcement1'];

    $link=mysqli_connect('localhost','root','12345678','inn');
    if($dbaction1=="insert1")
    {
        $sql="insert into announce1 (num1, announcement1) values ('$num1','$announcement1')";
        if(mysqli_query($link,$sql))
    {
        header("Location:message.php?message=新增成功");
    }
        else
    {
        header("Location:message.php?message=新增失敗");
    }
    }
   else
   {
    $sql="update announce1 set announcement1='$announcement1'  where num1='$num1'";
    if(mysqli_query($link,$sql))
    {
        header("Location:message.php?message=修改成功");
    }
    
    else
    {
        header("Location:message.php?message=修改失敗");
    }
    }
    
    ?>
</body>
</html>