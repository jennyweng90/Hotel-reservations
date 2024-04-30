<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>輔大聖心教學旅館</title>
</head>
<body>
    <?php
    $num1=$_GET['num1'];
    $link=mysqli_connect('localhost','root','12345678','inn');
    $sql="delete from announce1 where num1='$num1'";
    if(mysqli_query($link,$sql))
    {
      header("Location:message.php?message=刪除成功");
    }
    
     else
    {
        header("Location:message.php?message=刪除失敗");
    }
    
    ?>
</body>
</html>