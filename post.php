<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 align = "center">DailyPlanet</h1>
    <hr>
    <div align = "center">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']?> <br>
        <?php
        $e = $_GET['id'];
        if (($e%2) == 0){
            echo "เป็นกระทู้หมายเลขคู่";
        }
        else 
            echo "เป็นกระทู้หมายเลขคี่";

        ?>
        <table style="border: 2px solid black ; width: 40% " align="center">
        <tr><td style="background-color: #6CD2FE ;" colspan="2">แสดงความคิดเห็น</td></tr>
        <tr><td colspan="2" align="center">
            <textarea name="message"rows="10" cols="80%"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>
        <br>
        <div align="center"><a href="index2.php">กลับไปหน้าหลัก</a></div>
    </div>
</body>
</html>