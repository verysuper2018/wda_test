<?php
  $conn=new PDO("mysql:host=127.0.0.1;dbname=wda_2_1;charset=UTF8;","root","");
  date_default_timezone_set("Asia/Taipei");
  session_start();
  $today=date("m 月 d 日 l");
  if(!isset($_SESSION['acc'])){
    $sql="UPDATE `log_visit` SET count=count+1 WHERE `time`='{$today}'";
    $result=$conn->query($sql);
    if(!$result->fetch()){
      $sql="INSERT INTO `log_visit` VALUES(null,'{$today}', 1)";
      $conn->query($sql);      
    }
    $_SESSION['acc']='visit';
  }
  $sql="SELECT * FROM `log_visit` WHERE `time`='{$today}'";
  $todayTotal=$conn->query($sql)->fetch(PDO::FETCH_ASSOC)['count'];
  $sql="SELECT sum(count) as count FROM `log_visit`";
  $allTotal=$conn->query($sql)->fetch(PDO::FETCH_ASSOC)['count'];
  switch($_SESSION['acc']){
    case 'admin':
      $utype=999;
      break;
    case 'visit':
      $utype=0;
      break;
    default:
      $utype=1;
  }
?>
