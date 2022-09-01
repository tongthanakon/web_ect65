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
    <div>
        <?php
          echo "เข้าสู่ระบบด้วย";
          echo "<br>";
          echo "Login=".$_POST["User"]; 
          echo "<br>";
          echo "Password=".$_POST["Pass"];
      ?>
    </div>
</body>

</html>