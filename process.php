<?php 
  /*$dbUsername="Luan";
  $dbPass="test";
  if(isset($_POST['username'])){
  if($_POST['username']==$dbUsername && $_POST['password']==$dbPass){
      echo 'Đăng nhập thành công';
  }else{
      echo 'Đăng nhập thất bại';
  }
  }else{
      echo 'Không có thông tin gì cả';
      //chuyển về index.php
      header('Location: index.php');
  }*/

  mkdir('uploads/test',0775);
  $tmpFilePath = $_FILES['img']['tmp_name'];
  $realFileName = $_FILES['img']['name'];
  move_uploaded_file($tmpFilePath,'uploads/'.time().$realFileName)
?>