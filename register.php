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
    <title>Webboard 123</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard 123</h1>
    <hr>
    <from action="">
        <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td colspan="2" style="background-color: #6cd2fe;">กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี:</td><td><input type="text" name="login" size="50%"></td></tr>
        <tr><td>รหัสผ่าน:</td><td><input type="password" name="pwd" size="50%"></td></tr>
        <tr><td>ชื่อ-นามสกุล:</td><td><input type="text" name="login" size="50%"></td></tr>
        <td>เพศ:</td>
            <td>
                <input type="radio" name="genaral" value="M">ชาย<br>
                <input type="radio" name="genaral" value="W">หญิง<br>
                <input type="radio" name="genaral" value="O">อื่นๆ<br>
            </td>
        <tr><td>อีเมล:</td><td><input type="email" name="email" size="50%"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="login"></td></tr>
        </table>
        <br>
        <div style="text-align: center;"><a href="index.php">กลับไปหน้าหลัก</a></div>
    </from>
</body>
</html>