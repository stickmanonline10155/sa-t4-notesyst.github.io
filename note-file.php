<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>筆記</title>
    <link rel="stylesheet" href="./login-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/937e93c93c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--導覽列-->
<nav>
    <div class="sidebar">
        <a href="javascript:void(0)"><i class="fa-solid fa-xmark" onclick="hideMenu()"></i></a>
        
        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
        <!-- <i class="fa fa-times" onclick="hideMenu()"></i>--->
        <div class="logo">
            <!-- <i class="fa-solid fa-bars"></i> -->
            <a href="homepage.html"><h3 align = "center">LOGO</h3></a>
        </div>
        <div class="search-box">
            <input type="text" class="search" placeholder="搜尋..." >
        </div>
        <div>
        <ul id="homepage-menu">
            <li><a href="note-file.html">筆記</a></li>
            <li><a href="sticker.html">便利貼</a></li>
            <li><a href="#"><i class="fa-solid fa-calendar-lines"></i>行事曆</a></li>
            <li><a href="#">記帳</a></li>
            <li><a href="schedule-file.html">課表</a></li>
            <li class="setting"><a href="#"><i class="fa-solid fa-gear"></i>&nbsp;&nbsp; 設定</a></li>
            <li class="signup"><a href="login.html"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp; 登入 / 註冊</a></li>   
            <li class="logout"><a href="#"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp; 登出</a></li>
        </ul>
        </div>
        <div class="dark-mode">
            <span><i class="fa-solid fa-moon"></i></span>
        </div>
        
    </div>
    <a href="javascript:void(0)"><i class="fa-solid fa-bars" onclick="showMenu()"></i></a>
</nav>
<div class="note-nav">
    <div class="note-file-nav-title" >
        <h5>筆記</h5>
    </div>
    
</div>

<!--筆記檔案區-->
<div class="note-file">
    <div class="note-file-icon">
        <div class="nf-title">
                <a href="note_demo/demo_1.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                <p align="center">演算法</p>
            
        </div>
    </div>

    <div class="note-file-icon">
        <div class="nf-title">
        <a href="note_demo/demo_2.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
        <p align="center">IoT演講</p>
        </div>
    </div>

    <div class="note-file-icon">
        <div class="nf-title">
        <a href="note_demo/demo_3.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
        <p align="center">Unemployment</p>
        </div>
    </div>

    <div class="note-file-icon">
        <div class="nf-title">
        <a href="note_demo/demo_4.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
        <p align="center">鏈結串列</p>
        </div>
    </div>

    <div class="note-file-icon">
        <div class="nf-title">
        <a href="note_demo/demo_5.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
        <p align="center">樹狀結構</p>
        </div>
    </div>

    

</div>

<!--懸浮按鈕-->
<div class="add-note">
    <a href="./note-insert.php" style="text-decoration: none;">+</a>
</div>
    

<!---------JAVASCRIPT CODE--------------->
<script src="script.js"></script>
</body>
</html>
