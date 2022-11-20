<?php
session_start();?> 
<?php
if($_SESSION["role"] != "a"){
    header("location:index2.php");
}
$id= $_GET['id'];
$conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$conn->exec("DELETE FROM post WHERE `post`.`id` = $id");
$conn->exec("DELETE FROM comment WHERE `comment`.`post_id` = $id");
$conn = null;
header("location:index2.php");
?>
</body>
</html>