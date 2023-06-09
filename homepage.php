<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/notes.png" />
    <script src="https://kit.fontawesome.com/2be1d00d34.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="header">
    <section class="float-button">
        <a href="item.php"><button class="sticker-container">
            <div class="stickerbutton">
                <p><i class="fa-solid fa-plus"></i>&nbsp;便利貼 📝</p>
                <!-- <i class="fa-regular fa-note-sticky"></i> -->
            </div>
        </button></a>

        <div>
        
        <a href="#"><button class="tomato-container">
            <div class="tomatobutton">
                <p> 蕃茄鐘 🍅&nbsp;&nbsp;<i class="fa-solid fa-chevron-down"></i></p>
            </div>
        </button></a>
        </div>
    </section>

<!-- Start of sidebar -->
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
            <li><a href="note-file.php">筆記</a></li>
            <li><a href="item.php">便利貼</a></li>
            <li><a href="#"><i class="fa-solid fa-calendar-lines"></i>行事曆</a></li>
            <li><a href="#">記帳</a></li>
            <li><a href="schedule-file.html">課表</a></li>           
            <li class="setting"><a href="#"><i class="fa-solid fa-gear"></i>&nbsp;&nbsp; 設定</a></li>
            <li class="signup"><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp; 登入 / 註冊</a></li>   
            <li class="logout"><a href="#"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp; 登出</a></li>              
        </ul>
        </div>
        <div class="dark-mode">
            <span><i class="fa-solid fa-moon"></i></span>
        </div>
        
    </div>
    <a href="javascript:void(0)"><i class="fa-solid fa-bars" onclick="showMenu()"></i></a>
</nav>
<!-- End of sidebar -->

<!-- Start of function boxes -->
<section class="main">
    <div class="welcome-phrase">
        <h2 class="welcome-user">Welcome User</h2>
        <h5>Wednesday, April 19th, 2023</h5>
    </div>

<div class="container">
    <h2>功能  <i class="fa-solid fa-bolt"></i></h2>
    <ul class="boxes">
        <li class="box">
            <div>
                <h3 class="box-title">筆記</h3>
                <div class="box-content">
                    <p>上課筆記...</p>
                </div>
            </div>
            <div class="box-link-wrapper">
                <a href="note-file.html" class="box-link" type="onclick">進入功能</a>
            </div>
        </li>
        <li class="box">
            <div>
                <h3 class="box-title">行事曆</h3>
                <div class="box-content">
                    <p>每日行程...</p>
                </div>
            </div>
            <div class="box-link-wrapper">
                <a href="#" class="box-link">進入功能</a>
            </div>
        </li>
        <li class="box">
            <div>
                <h3 class="box-title">記帳</h3>
                <div class="box-content">
                    <p>收入支出...</p>
                </div>
            </div>
            <div class="box-link-wrapper">
                <a href="#" class="box-link">進入功能</a>
            </div>
        </li>
        <li class="box">
            <div>
                <h3 class="box-title">課表</h3>
                <div class="box-content">
                    <p>翹課...</p>
                </div>
            </div>
            <div class="box-link-wrapper">
                <a href="schedule-file.html" class="box-link">進入功能</a>
            </div>
        </li>
        <li class="box">
            <div>
                <h3 class="box-title">便利貼</h3>
                <div class="box-content">
                    <p>買晚餐...</p>
                </div>
            </div>
            <div class="box-link-wrapper">
                <a href="item.php" class="box-link">進入功能</a>
            </div>
        </li>
        <li class="box">
            <div>
                <h3 class="box-title">番茄鐘</h3>
                <div class="box-content">
                    <p>專心點...</p>
                </div>
            </div>
            <div class="box-link-wrapper">
                <a href="#" class="box-link">進入功能</a>
            </div>
        </li>
        <li class="box">
            <div>
                <h3 class="box-title">...</h3>
                <div class="box-content">
                    <p>none</p>
                </div>
            </div>
            <div class="box-link-wrapper">
                <a href="#" class="box-link">---</a>
            </div>
        </li>
        <li class="box">
            <div>
                <h3 class="box-title">...</h3>
                <div class="box-content">
                    <p>none</p>
                </div>
            </div>
            <div class="box-link-wrapper">
                <a href="#" class="box-link">---</a>
            </div>
        </li>
    </ul>
</div>

</section>
<!-- End of function boxes -->






<!---------JAVASCRIPT CODE--------------->
<script src="script.js"></script>

</body>
</html>
