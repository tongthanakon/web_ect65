<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Post</title>
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
    <p align="center">ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?><br>
    <?php
        if($_GET['id']%2==0){
          echo "เป็นกระทู้หมายเลขคู่";
        }else{
          echo "เป็นกระทู้หมายเลขคี่";
        }
    ?></p>
    <table align="center">
      <form action="verify.php" method="post">
      <tr><td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
      <tr><td><textarea rows="5"cols="100"></textarea></td></tr>
      <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
      </form>
    </table>
    <br>  
    <div align="center">
      <a href= "index.php">กลับไปหน้าหลัก</a>
    </div>
  </body>
</html>
