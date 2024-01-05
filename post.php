<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard 123</h1>
    <hr>
    <div style="text-align: center;">
        <form action="id" method="get">
            <p style="text-align: center;"></p>
            <?php
            echo "ต้องการดูกระทู้หมายเลข $_GET[id] <br>"
            ?>
            <table style="border: 2px solid black; width: 40%;" align="center">
                <tr>
                    <td colspan="2" style="background-color: #6cd2fe;">แสดงความคิดเห็น</td>
                </tr>
                <tr>
                    <td align="center">
                        <form>
                            <textarea name="message" rows="10" cols="30"></textarea>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td>
                </tr>
        </form>
    </div>
    </table>
    <center><a href="index.html">กลับไปหน้าหลัก</a></center>
</body>

</html>