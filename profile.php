<?php 
  session_start();
  if(isset($_GET['action']) && $_GET['action']=='logout'){
      unset($_SESSION['user']);
      header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     if(isset($_SESSION['user'])){
         //co dang nhap
         echo $_SESSION['user']['username'];
     }else{
         header('Location: index.php');
     }
    ?>
    <a href="?action=logout">Đăng xuất</a>
</body>
</html>