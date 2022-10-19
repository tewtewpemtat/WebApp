<?php
session_start();  
if ($_SESSION['role'] != 'a'){
    header("location:index.2php");
    die();
}else{
    echo "ลบกระทู้ หมายเลข $_GET[id]";
}
?>