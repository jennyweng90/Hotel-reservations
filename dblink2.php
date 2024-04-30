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
    $dbaction2=$_POST['dbaction2'];
    $num2=$_POST['num2'];
    $announcement2=$_POST['announcement2'];

    $link=mysqli_connect('localhost','root','12345678','inn');
    if($dbaction2=="insert2")
    {
        $sql="insert into announce2 (num2, announcement2) values ('$num2','$announcement2')";
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
    $sql="update announce2 set announcement2='$announcement2'  where num2='$num2'";
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