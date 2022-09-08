<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verify</title>
</head>

<body>
    <style>
    h1 {
        text-align: center;
    }

    div {
        text-align: center;
    }
    </style>
    <h1>Webborad KakKak</h1>
    <hr>
    <div align="cenert">
        <?php
          $User = $_POST["User"];
          $Pass = $_POST["Pass"];

        
          //echo "เข้าสู่ระบบด้วย";
          //echo "<br>";
          //echo "Login=".$_POST["User"];
          if( $User == "admin" && $Pass == "ad1234"){
            echo "ยินดีต้อนรับคุณ ADMIN";
          }else if( $User == "member" && $Pass == "mem1234"){
            echo "ยินดีต้อนรับคุณ MEMBER";
          }else{
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
          }
          echo "<br>";
          //echo "Password=".$_POST["Pass"];
          echo "<a href= login.html>กลับสู่หน้าหลัก</a>";
      ?>
    </div>
</body>

</html>