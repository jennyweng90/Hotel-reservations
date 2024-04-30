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
    $name=$_GET['name'];
    $link=mysqli_connect('localhost','root','12345678','inn');
    $sql="delete from reserve where name='$name'";
    if(mysqli_query($link,$sql))
    {
      header("Location:message2.php?message2=刪除成功");
    }
    
     else
    {
        header("Location:message2.php?message2=刪除失敗");
    }
    
    ?>
</body>
</html>