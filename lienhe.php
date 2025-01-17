<?php
session_start(); // Bắt đầu session

// Kiểm tra nếu người dùng chưa đăng nhập thì chuyển hướng về trang đăng nhập
if (!isset($_SESSION['user_id'])) {
  header('Location: dangnhap.html');
  exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="lienhe.css">
    <style>
    </style>
  </head>
  <body>
    <!--Header-->
    <script src="script.js"></script>
    <!--home-->
    <div id="head">
      <div id="quick" title="Trang chủ">
        <a href="trangchu.php">
            <img src="quick.png" alt="trang chu">
        </a>
    </div>
    
      <div class="muc_1">
        <a class="demuc" href="trangchu.php">
          <img id="game1" src="home.png" alt="game" />
          <br />
          <span class="title"> Trở về </span>
        </a>
      </div>
      <div class="mid">
        <!--search-->
        <div class="search">
          <form id="search-form">
            <input type="text" id="nhap_vao" placeholder="Tìm Kiếm" />
          </form>
          <!--Game-->
          <div class="main">
            <div class="muc_1" class="main">
              <a class="demuc" href="trochoi.php">
                <img id="game1" src="Game.png" alt="game" />
                <br />
                <span class="title"> Trò chơi </span>
              </a>
            </div>
          </div>
          <!--community-->
          <div class="muc_1">
            <a class="demuc" href="congdong.php">
              <img id="game1" src="community.png" alt="game" />
              <br />
              <span class="title"> Cộng đồng </span>
            </a>
          </div>
          <!--timetable-->
          <div class="muc_1">
            <a class="demuc" href="lichtrinh.php">
              <img id="game1" src="timetable.png" alt="game" />
              <br />
              <span class="title"> Lịch trình </span>
            </a>
          </div>
          <!--Liên hệ-->
          <div class="muc_1" style="background-color: gold;">
            <a class="demuc" href="lienhe.php">
              <img id="game1" src="phone.png" alt="game" />
              <br />
              <span class="title"> Liên hệ </span>
            </a>
          </div>
          <!--thong báo-->
          <div class="muc_2" title="Thông báo">
            <a class="demuc0" href="#" onclick="toggleNotification()">
              <img id="game1" src="chuong.png" alt="Thông báo" />
            </a>
            <div id="notification-box" class="hidden">
              <p>Thông báo 1</p>
              <p>Thông báo 2</p>
              <p>Thông báo 3</p>
            </div>
          </div>
          <div><!-- <div id="search-results"></div> --></div>
        </div>
        <div class="muc_5" title="Tài Khoản">
         <a class="demuc5" href="tk.php">
            <img id="game5" src="tk.png" alt="game" />
         </a>
        </div>

    </div>
        <!--sign up -->
        <!-- <a href="./dangky.html" class="dang_ky">Đăng ký</a> -->
      </div>
    </div>
    <hr />
    <div id="thong_tin">
      <div class="muc_3" title="Mail">
        <a class="demuc3" href="mailto:quickstudy.9a2@gmail.com">
          <img id="game3" src="mail.png" alt="game" />
          <br />
          <span class="title3"><b class="lien"> Mail </b> <br>quickstudy.9a2@gmail.com </span>
        </a>
      </div>
      <!-- số điện thoại -->
      <div class="muc_3" title="Số điện thoại">
        <a class="demuc3" href="tel:">
          <img id="game3" src="lien_he.png" alt="game" />
          <br />
          <span class="title3"> <b class="lien">Điện thoại</b> <br> 0900000000 </span>
        </a>
      </div>
      <!-- địa chỉ -->
      <div class="muc_3" title="Địa chỉ">
        <a class="demuc3" href="./lienhe.html">
          <img id="game3" src="locate.png" alt="game" />
          <br />
          <span class="title3"> <b class="lien">Người sáng lập</b>  <br>Lê Hoàng Nhất Huy <br>Trần Thanh Thanh </span>
        </a>
      </div>
    </div>
    <script src="script.js"></script>
    <script src="thong_bao.js"></script>
  </body>
</html>

  </body>
</html>

