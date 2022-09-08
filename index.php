<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
  </head>
  <body>
    <style>
        h1{
            text-align: center;
        }
    </style>
    <h1>Webborad KakKak</h1>
    <hr>
    หมวดหมู่: 
    <select name="category">
        <option value="all">-- ทั้งหมด --</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select>
    <a href= "login.html" style="float:right;">เข้าสู่ระบบ</a>
    <ul>
        <?php
            $i = 1;
            while($i<=10){
            echo"<li><a href= post.php?id=$i>กระทู้เรื่อที่ $i</a></li>";
            $i++;
            }
        ?>
    </ul>
  </body>
</html>
