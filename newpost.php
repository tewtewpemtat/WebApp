<?php
  session_start();
  if(!isset($_SESSION['id'])){
  header("location:index2.php");
  die();}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align = "center">DailyPlanet</h1>
    <hr>
<?php 
   echo "ผู้ใช้ : $_SESSION[username]<br>"; ?>
    <table>
        <tr><td colspan="2">หมวดหมู่:<select name="m"> 
             <option value="All">--ทั้งหมด--</option>
             <option value="General">เรื่องทั่วไป</option> 
             <option value="Study">เรื่องเรียน</option> 
        </select></td></tr>
        <tr><td>หัวข้อ:</td><td><input type="text" name="topic" ></td><td></td></tr>
        <tr><td>เนื้อหา:</td><td><textarea name="message"rows="2" cols="30"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
        </table>
</body>
</html>