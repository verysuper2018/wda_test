<?php
  if(isset($_POST['login'])){
    $sql="SELECT * FROM `user` WHERE acc='{$_POST['acc']}' and pw='{$_POST['pw']}'";
    $result=$conn->query($sql);
    if($result->fetch()){
      $_SESSION['acc']=$_POST['acc'];
      if($_SESSION['acc']=='admin'){
        header('location:index.php?do=admin');
      }else{
        header('location:index.php');
      }      
    }else{
      ?><script>alert('「查無帳號」或「密碼錯誤」')</script><?php
    }
  }
?>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td colspan="2">會員登入</td>
    </tr>
    <tr>
      <td>帳號</td>
      <td><input type="text" name="acc" id="textfield" /></td>
    </tr>
    <tr>
      <td>密碼</td>
      <td><input type="text" name="pw" id="textfield2" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="login" id="button" value="登入" />
      <input type="reset" name="button2" id="button2" value="重設" /></td>
      <td><a href="#">忘記密碼</a> | <a href="#">尚未註冊</a></td>
    </tr>
  </table>
</form>
