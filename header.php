<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
     * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
}

#giaoDienLichSuXemLai {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white; 
    width: 80%;
    max-width: 600px;
    height: 80%;
    max-height: 80%;
    overflow-y: auto;
    padding: 20px;
    border-radius: 10px;
    z-index: 1000;
    justify-content: flex-start;
    overflow: scroll;
    transition: transform 0.3 ease;
}

#giaoDienLichSuXemLai.show {
    transform: translate(-50%, -50%) scale(1);
}

header {
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 8%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
    background: #162938;
    max-height: 80px;
}

.logo a {
    font-size: 1.5em;
    font-weight: 800;
    letter-spacing: 1px;
    color: #fff;
    user-select: none;
    text-decoration: none;
    align-items: center;
    justify-content: center;
    display: flex;
}
.logo a:hover{
    text-decoration: none;
    
}
.navigation ul li, #xemlai {
    display: inline-block;
}

.navigation li a {
    position: relative;
    font-size: 1.1rem;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin: 0 30px;
}

.navigation a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform: scaleX(0);
    transition: transform 0.5s;
}

.navigation a:hover::after {
    transform: scaleY(1);
}

ul.dropdown li {
    display: block;
}

ul li ul.dropdown{
    width: auto;
    text-align: left;
    position: absolute;
    display: none;
    background: #162938;
    margin: auto;
}

ul.dropdown li {

}

ul.dropdown li:nth-child(1) {
    margin-top: 20px;
    padding: 20px 0;
    border-bottom: 1px solid #ccc;
}

ul.dropdown li:nth-child(2) {
    padding: 20px 0;
    border-bottom: 1px solid #ccc;
}
 ul.dropdown li:nth-child(3){
    padding: 20px 0;
 }

ul li:hover ul.dropdown {
    display: block;
}

.giaoDienLichSuXemLai {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#closeButton {
    align-self: flex-end;
    background-color: red;
    color: white;
    border: none;
    padding: 7px 17px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 1em;
}

#closeButton:hover {
    background-color: darkred;
}
#overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4); 
    z-index: 999; 
}
body.no-scroll {
    overflow: hidden;
}
#ls{
    text-align: center;
}
table{
    width: 100%;
    border-collapse: collapse;
}
table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: center;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

a {
    color: #4CAF50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
 #doiMK{
    border-bottom: 1px solid #ccc;
    cursor: pointer;
    
}

/* =========================doimk================== */
#app_doiMK{
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    width: 80%;
    max-width: 600px;
    height: 80%;
    max-height: 80%;
    padding: 20px;
    border-radius: 10px;
    z-index: 1000;
    transition: transform 0.3 ease
}
#app_doiMK.show {
    transform: translate(-50%, -50%) scale(1);
}

.app_doiMatKhau{
    height: 700px;
    display: none;
    justify-content: center;
    align-items: center;
}

.app_doiPass{
    background-image: url(img/bg.jpg);
    background-repeat: no-repeat;
    background-position: center;
    width:500px;
    height: 500px;
    border: 1px solid;
    border-radius: 15px;
}

#text_Page{
    font-size: 30px;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 30px;

}

.app_doiPass_item{
    margin: 0 10px;
    padding: 20px;
}
.taiKhoan{
font-size: 25px;
padding-bottom: 10px;

border-bottom: 1px solid;

}
.matKhau{
    margin-top: 20px;
    padding-bottom: 10px;

    font-size: 20px;
    border-bottom: 1px solid;

}
.matKhauMoi{
    margin-top: 20px;
    padding-bottom: 10px;

    font-size: 20px;
    border-bottom: 1px solid;
}
.or{
    text-align: center;
    margin-top: 10px;
    font-size: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-bottom: 1px solid;
}
#pass, #newpass{
    float: right;
    height: 23px;
    border-radius: 8px;
    font-size: 16px;
}
.xacNhan{
    margin-top: 20px;
    font-size: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-bottom: 1px solid;
}

#ok{
    width: 50px;
    height: 20px;
}
#submit_btn{
    margin-top: 50px;
    width: 300px;
    height: 30px;
    border-radius: 15px;
    margin-left: 18%;
    padding: 20px 0;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;

}
.submit, .back{
    display: flex;
    justify-content: center;
}

#submit:hover, #back:hover{
    background-color: white;
    color: black;
}
a{
    text-decoration: none;
}
</style>
</head>
<body>
    <div id="overlay" onclick="closeOverlay()"></div> <!-- Lớp phủ mờ -->
<header>
        <!-- LOGO -->
        <div class="logo">
        <a href="trangchu.php" ><img src="img/logo (2).png" alt="">THILAIXE.VN</a>
        </div>
        
        <nav class="navigation">
             <!-- THANH ĐIỀU HƯỚNG -->
             <ul class="list">
                <li><a href="trangchu.php">TRANG CHỦ</a></li>
                <li>
                    <a href="#">THI THỬ</a>

                    <ul class="dropdown">
                        <li><a href="giaoDienTracNghiem.php">LÝ THUYẾT</a></li>
                        <li><a href="giaoDienMoPhong.php">MÔ PHỎNG</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">LUYỆN THI</a>

                    <ul class="dropdown">
                        <li><a href="chonDeLyThuyet.php">LÝ THUYẾT</a></li>
                        <li><a href="chonDeMoPhong.php">MÔ PHỎNG</a></li>
                    </ul>
                </li>
                <li><a href="giaoDienTimKiem.php">ĐỊA ĐIỂM</a></li>
                <?php
                    if(!isset($_SESSION["username"])){
                        echo "<li><button class='btnLogin-popup' onclick='dangnhap()'>ĐĂNG NHẬP</button></li>";
                    } else{
                        // NÚT ĐĂNG XUẤT
                        echo "
                        <li>
                        <a href='#'> TÀI KHOẢN </a>
                        <ul class='dropdown'>
                            <li onclick='xemLaiLSThi()' id='xemlai'><a href='#'>XEM LỊCH SỬ THI</a></li>
                            <li onclick='doiMatKhau()' id='doiMK'><a href='#'>ĐỔI MẬT KHẨU</a></li>
                            <li><a href='XuLyPHP/XuLy.php?action=logout' class='dangxuat'>ĐĂNG XUẤT</a></li>
                        </ul>
                        </li>
                        ";
                    }                 
                ?>
            </ul> 
        </nav>  
    </header>
    <script>
     function xemLaiLSThi() {
    var overlay = document.getElementById('overlay');
    var lsModal = document.getElementById('giaoDienLichSuXemLai');
    overlay.style.display = 'block';
    lsModal.style.display = 'flex';
    document.body.classList.add('no-scroll'); // Ngăn cuộn trang chính
}

function closeOverlay() {
    var overlay = document.getElementById('overlay');
    var lsModal = document.getElementById('giaoDienLichSuXemLai');
    var mkModal = document.getElementById('app_doiMK');
    overlay.style.display = 'none';
    lsModal.style.display = 'none';
    mkModal.style.display = 'none';
    document.body.classList.remove('no-scroll'); // Cho phép cuộn trang chính
}

// ============doimk
function doiMatKhau() {
    var overlay = document.getElementById('overlay');
    var mkModal = document.getElementById('app_doiMK');
    overlay.style.display = 'block';
    mkModal.style.display = 'flex';
    document.body.classList.add('no-scroll'); // Ngăn cuộn trang chính
}

function dangnhap() {
    window.location.href = "start.php";
}

    </script>
<!-- ========================================================== -->

<div class="giaoDienLichSuXemLai" id="giaoDienLichSuXemLai">
    <button id="closeButton" onclick="closeOverlay()"><i class="ri-close-large-line"></i></button>
    <div id='ls'><h1>Lịch sử xem lại</h1></div>
    <div class="table">
        <?php
        $conn = mysqli_connect("localhost","root","","olblx");
        $user = $_SESSION['username'];
        $sql = "SELECT * FROM lich_su_lam_bai WHERE username = '$user'";
        mysqli_query($conn,"SET NAMES 'utf8'");
        $kq = mysqli_query($conn,$sql);
        if($dong = mysqli_fetch_array($kq)){
            echo "<table border='1' align='center'>";
            echo "<tr><td align='center'><b>Ngày làm bài</b></td><td align='center'><b>Tên người dùng</b></td><td align='center'><b>Đề</b></td><td align='center'><b>Kết quả</b></td><td align='center'><b>Xem thêm</b></td></tr>";
            $mlb = $dong['MaLamBai'];
            echo "<tr><td>".$dong['ngaylambai']."</td><td>".$dong['username']."</td><td>".$dong['de']."</td><td>".$dong['ketqua']."</td><td><a href = 'giaoDienXemLai.php?code=$mlb'>Xem thêm chi tiết</a></td></tr>";
            while($dong = mysqli_fetch_array($kq)){
                $mlb = $dong['MaLamBai'];
                echo "<tr><td>".$dong['ngaylambai']."</td><td>".$dong['username']."</td><td>".$dong['de']."</td><td>".$dong['ketqua']."</td><td><a href = 'giaoDienXemLai.php?code=$mlb'>Xem thêm chi tiết</a></td></tr>";
            }
            echo "</table>";
        }
        else echo "<h1>Chưa làm bài kiểm tra nào</h1>";
        mysqli_close($conn);
        ?>
    </div>
</div>


<!-- ============================DOIMK====================== -->
<div class="app_doiMatKhau" id="app_doiMK">
        <form action="XuLyPHP/XuLy.php" method="POST">
        <div class="app_doiPass">
            <div class="doiMatKhau_text">
                <h3 id="text_Page">ĐỔI MẬT KHẨU</h3>
            </div>
            <div class="app_doiPass_item">
                <input type="text" name="action" value="DoiMK" id="" hidden>
                <div class="taiKhoan">Xin chào: <?php echo $_SESSION['username'] ?></div>
                <div class="matKhau">Nhập mật khẩu cũ: <input type="text" name="pass" id="pass"></div>
                <div class="matKhauMoi">Nhập mật khẩu mới: <input type="text" name="newpass" id="newpass"></div>
                <div class="matKhauMoi">Nhập lại mật khẩu mới: <input type="text" name="newpasschk" id="newpass"></div>
                <button id="submit_btn">Đổi mật khẩu</button>
            </div>
        </div>
    </form>
    </div>
</body>
</html>