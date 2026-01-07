<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Giới thiệu | Trung tâm Tin học Vĩnh Long</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#e5ebfc,#bdfcf3);
}

/* ===== MENU ===== */
.horizontal-menu {
    background: #0d3b9c;
}
.menu-list {
    list-style: none;
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 0;

}
.menu-list a {
    color: white;
    padding: 16px 22px;      /* ⬅ GIẢM padding */
    text-decoration: none;
    font-size: 16px;         /* ⬅ chữ nhỏ lại */
    font-weight: 500;        /* ⬅ bớt đậm */
    display: block;
    background: transparent;
    transition: background 0.3s;
}

.menu-list a:hover {
    background: rgba(255,255,255,0.2);
}

.horizontal-menu .container {
    max-width: 1400px;
}

/* MENU ACTIVE */
.menu-list a.active{
    background: rgba(255,255,255,0.25);
    color: #fff;
    font-weight: 700;
    border-bottom: 3px solid #f1f6f5ff;
}

/* CONTAINER */
.container{
    max-width:1500px!important;
}

/* SECTION TITLE */
.section-title{
    font-weight:800;
    color:#003f85;
    margin-bottom:30px;
}

/* INFO BLOCK */
.info-box{
    background:#fff;
    border-radius:16px;
    padding:30px;
    box-shadow:0 10px 30px rgba(0,0,0,.1);
    transition:.35s;
    height:100%;
}
.info-box:hover{
    transform:translateY(-6px);
}

/* ICON BOX */
.icon-circle{
    width:60px;
    height:60px;
    border-radius:50%;
    background:linear-gradient(135deg,#0056b3,#00c6a7);
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    font-size:26px;
    margin-bottom:15px;
}

/* IMAGE */
.about-img{
    width:100%;
    height:320px;
    object-fit:cover;
    border-radius:18px;
    box-shadow:0 12px 35px rgba(0,0,0,.2);
}

/* TIMELINE */
.timeline{
    position:relative;
    padding-left:40px;
}
.timeline::before{
    content:"";
    position:absolute;
    left:15px;
    top:0;
    width:4px;
    height:100%;
    background:#0056b3;
    border-radius:10px;
}
.timeline-item{
    margin-bottom:35px;
    position:relative;
}
.timeline-item::before{
    content:"";
    position:absolute;
    left:-29px;
    top:5px;
    width:18px;
    height:18px;
    background:#fff;
    border:4px solid #0056b3;
    border-radius:50%;
}

/* STATS */
.stat-box{
    background:#fff;
    border-radius:16px;
    padding:25px;
    box-shadow:0 8px 25px rgba(0,0,0,.12);
}

/* FOOTER */
footer{
    background:linear-gradient(90deg,#1e3c72,#2a5298);
    color:#fff;
    text-align:center;
    padding:30px;
}
</style>
</head>

<body>

<!-- MENU -->
<nav class="horizontal-menu">
<ul class="menu-list">
    <li><a href="index.php">Trang chủ</a></li>
    <li><a href="gioithieu.php" class="active">Giới thiệu</a></li>
    <li><a href="trungtam.php">Trung tâm</a></li>
    <li><a href="khoahoc.php">Khóa học</a></li>
    <li><a href="dangky.php">Đăng ký</a></li>
    <li><a href="lienhe.php">Liên hệ</a></li>
</ul>
</nav>

<div class="container py-5">

<!-- GIỚI THIỆU NGẮN -->
<div class="row mb-5 align-items-center">
    <div class="col-md-6">
        <h2 class="section-title">Hệ thống Trung tâm Tin học Vĩnh Long</h2>
        <p>
            Đây là nền tảng tổng hợp và giới thiệu các trung tâm đào tạo tin học trên địa bàn
            tỉnh Vĩnh Long, giúp người học dễ dàng tiếp cận thông tin, đăng ký khóa học và
            định hướng phát triển kỹ năng công nghệ.
        </p>
    </div>
    <div class="col-md-6">
        <img src="hinh/trungtam1.jpg" class="about-img">
    </div>
</div>

<!-- GIÁ TRỊ CỐT LÕI -->
<h3 class="section-title text-center">Giá trị hệ thống mang lại</h3>

<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="info-box text-center">
            <div class="icon-circle mx-auto">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <h5>Tra cứu dễ dàng</h5>
            <p>Thông tin khóa học rõ ràng, đầy đủ, cập nhật liên tục.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box text-center">
            <div class="icon-circle mx-auto">
                <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <h5>Đăng ký nhanh</h5>
            <p>Gửi đăng ký trực tuyến chỉ trong vài phút thao tác.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box text-center">
            <div class="icon-circle mx-auto">
                <i class="fa-solid fa-people-group"></i>
            </div>
            <h5>Kết nối trung tâm</h5>
            <p>Tạo cầu nối giữa học viên và các trung tâm uy tín.</p>
        </div>
    </div>
</div>

<!-- LỘ TRÌNH -->
<div class="row mb-5">
    <div class="col-md-6">
        <img src="hinh/trungtam3.jpg" class="about-img">
    </div>
    <div class="col-md-6">
        <h3 class="section-title">Định hướng phát triển</h3>
        <div class="timeline">
            <div class="timeline-item">
                <h6>Giai đoạn 1</h6>
                <p>Giới thiệu các khóa học tin học cơ bản và văn phòng.</p>
            </div>
            <div class="timeline-item">
                <h6>Giai đoạn 2</h6>
                <p>Mở rộng các khóa học lập trình, thiết kế đồ họa.</p>
            </div>
            <div class="timeline-item">
                <h6>Giai đoạn 3</h6>
                <p>Hướng đến AI, an ninh mạng và công nghệ mới.</p>
            </div>
        </div>
    </div>
</div>

<!-- THỐNG KÊ -->
<h3 class="section-title text-center">Thống kê nổi bật</h3>

<div class="row text-center g-4 mb-5">
    <div class="col-md-3">
        <div class="stat-box">
            <h2 class="text-primary">10+</h2>
            <p>Trung tâm</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-box">
            <h2 class="text-success">50+</h2>
            <p>Khóa học</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-box">
            <h2 class="text-danger">2000+</h2>
            <p>Học viên</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-box">
            <h2 class="text-warning">95%</h2>
            <p>Hài lòng</p>
        </div>
    </div>
</div>

</div>

<footer>
<p>Website Giới thiệu Trung tâm Tin học Vĩnh Long</p>
</footer>

</body>
</html>
