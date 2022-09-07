<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        h1 {text-align: center;}
    </style>
</head>
<body>
    <h1>DailyPlanet</h1><hr>
        หมวดหมู่:
        <select name="TABLE"> 
             <option value="All">--ทั้งหมด--</option>
             <option value="General">เรื่องทั่วไป</option> 
             <option value="Study">เรื่องเรียน</option> 
        </select>
    <a href="login.html" style = " float : right ; ">เข้าสู่ระบบ</a>

    <form action = "post.php" method="get">
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a></li>";
        
        }
        ?>
    </form>
</body>
</html>