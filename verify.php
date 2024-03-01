<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <hr>
    <center>
    <?php
        session_start();
        if (isset($_SESSION['id'])){
            header("location: index.php");
            die();
        }
        $login=$_POST["login"];
        $pwd=$_POST["pwd"];
        $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
        $sql="SELECT * FROM user where login='$login' and password=sha1('$pwd')";
        $result=$conn->query($sql);
        if($login == "admin" && $pwd == "ad1234"){
            $_SESSION['username']=$date['login'];
            $_SESSION['role']=$date['role'];
            $_SESSION['user_id']=$date['id'];
            $_SESSION['id']=session_id();
            header("location:index.php");
            die();
            //echo"ยินดีต้อนรับคุณ ADMIN <br>";
            //echo"<a href=index.php>กลับไปหน้าหลัก</a>";
        }
        else{
            $_SESSION['error']='error';
            header("location:login.php");
            die();
            //echo"บัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
            //echo"<a href=index.php>กลับไปหน้าหลัก</a>";
        }
        $conn=null;
    ?>
</body>
</html>