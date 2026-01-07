<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trung tâm CNTT Vĩnh Long</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* ===== NỀN NGOÀI GIỐNG HEADER INDEX ===== */
body{
    background: linear-gradient(
        135deg,
        rgba(204, 240, 255, 0.85),
        rgba(189, 255, 231, 0.9)
    );
    font-family:'Segoe UI', sans-serif;
}

/* MENU GIỐNG INDEX */
.horizontal-menu{
    background:#0d3b9c;
}
.menu-list{
    list-style:none;
    display:flex;
    justify-content:center;
    margin:0;
    padding:0;
}
.menu-list a{
    color:#fff;
    padding:16px 22px;
    text-decoration:none;
    font-size:16px;
    font-weight:500;
    display:block;
}
.menu-list a:hover{
    background:rgba(255,255,255,0.2);
}
.admin-btn{
    position:absolute;
    right:20px;
    top:50%;
    transform:translateY(-50%);
    border-radius:20px;
}

/* CARD NỘI DUNG */
.center-card{
    background:#fff;
    border-radius:22px;
    padding:40px;
    box-shadow:0 20px 45px rgba(0,0,0,0.25);
    margin-top:40px;
    margin-bottom:60px;
}

/* IMAGE */
.center-img{
    width:100%;
    border-radius:18px;
    box-shadow:0 12px 30px rgba(0,0,0,0.2);
}

/* INFO */
.info-box{
    background:#f8fafc;
    border-radius:16px;
    padding:22px;
}
.info-item{
    margin-bottom:14px;
    font-size:15px;
}
.info-item i{
    color:#4e73df;
    width:22px;
}

/* SECTION TITLE */
.section-title{
    color:#4e73df;
    font-weight:700;
    margin-top:35px;
    margin-bottom:16px;
}
.section-title::after{
    content:"";
    display:block;
    width:50px;
    height:3px;
    background:#4e73df;
    margin-top:6px;
    border-radius:4px;
}

/* FEATURE BOX */
.feature-box{
    background:#fff;
    border-radius:18px;
    padding:28px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    transition:0.35s;
}
.feature-box:hover{
    transform:translateY(-8px);
}
.feature-box i{
    font-size:40px;
    color:#4e73df;
    margin-bottom:12px;
}

/* BUTTON */
.btn-main{
    background:#4e73df;
    color:#fff;
    border-radius:30px;
    padding:12px 45px;
    font-weight:600;
}
.btn-main:hover{
    background:#2e59d9;
}
</style>
</head>

<body>

<!-- ===== MENU (LẤY TỪ INDEX) ===== -->
<nav class="horizontal-menu position-relative">
    <ul class="menu-list">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="gioithieu.php">Giới thiệu</a></li>
        <li><a href="trungtam.php">Trung tâm</a></li>
        <li><a href="khoahoc.php">Khóa học</a></li>
        <li><a href="dangky.php">Đăng ký</a></li>
        <li><a href="lienhe.php">Liên hệ</a></li>
    </ul>


</nav>

<!-- ===== CONTENT ===== -->
<div class="container">

    <div class="center-card">

        <h2 class="text-center fw-bold text-primary mb-4">
            Trung tâm Công nghệ Thông tin Vĩnh Long
        </h2>

        <!-- ẢNH + INFO -->
        <div class="row align-items-center g-4">

            <div class="col-md-5">
                <img src="hinh/trungtam2.jpg" class="center-img" alt="Trung tâm CNTT">
            </div>

            <div class="col-md-7">
                <div class="info-box">
                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <strong>Địa chỉ:</strong> 25 Trần Đại Nghĩa, P.4, TP. Vĩnh Long
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-phone"></i>
                        <strong>Điện thoại:</strong> 0270 3 888 999
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-envelope"></i>
                        <strong>Email:</strong> cnttvinhlong@gmail.com
                    </div>
                    <div class="info-item mb-0">
                        <i class="fa-solid fa-clock"></i>
                        <strong>Giờ làm việc:</strong><br>
                        Thứ 2–6: 7h30–17h00<br>
                        Thứ 7–CN: 8h00–16h00
                    </div>
                </div>
            </div>

        </div>

        <!-- GIỚI THIỆU -->
        <h4 class="section-title">Giới thiệu chung</h4>
        <p>
            Trung tâm CNTT Vĩnh Long là đơn vị đào tạo tin học uy tín tại khu vực
            Đồng bằng sông Cửu Long, chuyên đào tạo CNTT ứng dụng,
            lập trình và thiết kế website.
        </p>

        <!-- ĐIỂM NỔI BẬT -->
        <h4 class="section-title">Điểm nổi bật</h4>

        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <h6 class="fw-bold">Giảng viên kinh nghiệm</h6>
                    <p class="small">Kinh nghiệm thực tế – giảng dạy dễ hiểu.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fa-solid fa-laptop-code"></i>
                    <h6 class="fw-bold">Thực hành chuyên sâu</h6>
                    <p class="small">Học qua dự án và bài tập thực tế.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fa-solid fa-certificate"></i>
                    <h6 class="fw-bold">Chứng chỉ uy tín</h6>
                    <p class="small">Hỗ trợ học tập & xin việc.</p>
                </div>
            </div>
        </div>

        <!-- BUTTON -->
        <div class="text-center mt-5">
            <a href="dangky.php?trungtam=Trung tâm CNTT Vĩnh Long"
               class="btn btn-main">
                Đăng ký tư vấn
            </a>
        </div>

    </div>
</div>

</body>
</html>
