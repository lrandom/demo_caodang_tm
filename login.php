<?php
  session_start();
  $dbUsername="Luan";
  $dbPass="test";
  if(isset($_POST['username'])){
  if($_POST['username']==$dbUsername 
     && $_POST['password']==$dbPass){
      $_SESSION['user'] = array(
          'username'=>$_POST['username']
      );
      header('Location: profile.php');
  }else{
      echo 'Đăng nhập thất bại';
  }
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
<form method="post" 
    enctype="multipart/form-data">
       <input type="text" name="username"/>
       <input type="password" name="password"/>
       <input type="submit" value="Login"/>
    </form>
</body>
</html>