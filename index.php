<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Webboard</title>
</head>
<body>
    <div class="container-lg">
    <h1 style="text-align: center;" class="mt-3">Webboard 123</h1>
    <hr>
 <nav class="navbar navbar-expand-lg" style="background-color: #d3d3d3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
</svg> Home</a>
      <ul class="navbar-nav">
        <?php if(!isset($_SESSION['id'])){?>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login.php"><i class="bi bi-pencil-square"></i> เข้าสู่ระบบ</a>
        </li>
        <?php }else{ ?>
        <li class="nav-item dropdown">
          <a class="btn btn-btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-lines-fill"> </i><?php echo $_SESSION['username']; ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-power"></i> ออกจากระบบ</a></li>
          </ul>
        </li>
        <?php } ?>    
      </ul>
  </div>
</nav>
<div class="mt-3 d-flex justify-content-between">
    <div>
      <label>หมวดหมู่</label>
      <span class="dropdown">
          <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            --ทั้งหมด--
          </button>
      <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
          <li><a class="dropdown-item" href="#">เรื่องเรียน</a></li>
          <li><a class="dropdown-item" href="#">เรื่องทั่วไป</a></li>
      </ul>
      </span>
    </div>
    <?php if(isset($_SESSION['id'])){?>
    <div>
      <a href="newpost.php" class="btn btn-success btn-sm"><i class="bi bi-plus"></i>สร้างกระทู้ใหม่</a>
    </div>
    <?php }?>
</div>
  <table class="table table-striped mt-4">
    <?php
        for($i = 1;$i<=10;$i++){
            echo "<tr><td class='d-flex justify-content-between'><a href=post.php?id=$i style=text-decoration:none>กระทู้ที่ $i</a>";
            if(isset($_SESSION['id']) && $_SESSION['role']=='a'){
                echo "&nbsp;&nbsp<a href=delete.php?id=$i class='btn btn-danger btn-sm'><i class='bi bi-trash'></i></a>";
            }
            echo "</td></tr>";
        }
        ?>
  </table>
    </div>
</body>
</html>