<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard 123</h1>
    <hr>
    <center>
    <?php
        if($username == "admin" && $pwd == "ad1234"){
            echo"ยินดีต้อนรับคุณ ADMIN <br>";
        }
        else if($username == "member" && $pwd == "mem1234"){
            echo"ยินดีต้อนรับคุณ MEMBER <br>";
        }
        else{
            echo"บัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
        }
        echo"<a href=index.php>กลับไปหน้าหลัก</a>";
    ?>
    </center>
</body>
</html>