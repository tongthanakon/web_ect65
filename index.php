<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
</head>
<?php
  if(!isset($_SESSION['id'])){
?>

<body>
    <style>
    h1 {
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
    <a href="login.html" style="float:right;">เข้าสู่ระบบ</a>
    <ul>
        <?php
    $i = 1;
    while ($i <= 10) {
      echo "<li><a href= post.php?id=$i>กระทู้เรื่อที่ $i</a></li>";
      $i++;
    }
    ?>
    </ul>
</body>
<?php }else{ ?>

<body>
    <style>
    h1 {
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
    <div style="float:right">
        ผู้ใช้งานระบบ : <?php echo $_SESSION['username'] ?>&nbsp;&nbsp;
        <a href="logout.php" >ออกจากระบบ</a>
    </div>
    <br>
    <a href="newpost.php">สร้างกระทู้ใหม่</a>
    <ul>
        <?php
    
    for($i=1;$i<=10;$i++) {
      echo "<li>";
      echo "<a href= post.php?id=$i>กระทู้เรื่องที่ $i</a>";
      if($_SESSION['role']=='a'){
        echo "&nbsp;&nbsp;&nbsp;<a href=delete.php?id=$=i>ลบ</a>";
      }
      echo "</li>";
    }
    ?>
    </ul>
</body>
<?php } ?>

</html>