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
    $num2=$_GET['num2'];
    $link=mysqli_connect('localhost','root','12345678','inn');
    $sql="delete from announce2 where num2='$num2'";
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