<?php
  session_start();
  if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <style>
        h1{
            text-align: center;
        }
        table{
            border: 2px solid black;
            width: 40%;
        }
    </style>
    <h1>Webborad KakKak</h1>
    <hr>
    <table align="center">
      <form action="verify.php" method="post">
      <tr><td colspan="2" style="background-color: #6CD2FE;">เข้าสู่ระบบ</td></tr>
      <tr><td>Login</td><td><input type="text" name="User" size="50"></td></tr>
      <tr><td>Password</td><td><input type="password" name="Pass" size="50"></td></tr>
      <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
      </form>
    </table>
    <br>  
    <div align="center">
      ถ้ายังไม่ได้เป็นสมาชิก <a href= "register.php">กรุณาสมัครสมาชิก</a>
    </div>
    
    
  </body>
</html>
