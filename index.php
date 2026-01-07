<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trung tâm Tin học Vĩnh Long</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<style>
.menu-list a.active{
    background: rgba(255,255,255,0.25);
    border-bottom: 3px solid #fff;
    font-weight: 700;
}

.menu-list a{
    transition: all 0.3s ease;
}


   /* ===== BANNER IMAGE (NHỎ GỌN) ===== */

.banner-img {
    text-align: center;
    max-width: 340;
    max-height: 380px;             /* ⬅ THU NHỎ CHIỀU CAO */
    object-fit: cover;
    border-radius: 12px;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
    padding: 20px
}



.cta-section {
    background: linear-gradient(135deg, #4e73df, #1cc88a);
    color: white;
    text-align: center;
    padding: 70px 2px;
}

.feature-box {
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    transition: 0.35s;
}
.feature-box:hover {
    transform: translateY(-8px);
}
.feature-box i {
    font-size: 42px;
    color: #4e73df;
    margin-bottom: 15px;
}

body {
    background: linear-gradient(135deg, #e5ebfcff, #bdfcf3ff);
    font-family: 'Segoe UI', sans-serif;
}

/* ===== HEADER ===== */
header {
    background:
        linear-gradient(135deg, rgba(15, 0, 125, 0.85), rgba(25, 215, 145, 0.9)),
        url('hinh/.jpg');
    background-size: cover;
    background-position: center;
    padding: 40px 20px;   /* ⬅ GIẢM CHIỀU CAO */
    text-align: center;
    color: white;
}

header h1 {
    font-size: 2.6rem;
    font-weight: 800;
    text-shadow: 0 4px 15px rgba(0,0,0,0.4);
}

header h6 {
    font-size: 1.15rem;
    opacity: 0.95;
}


/* ===== MENU ===== */
.horizontal-menu {
    background: #0d3b9c;
    position: relative; /* ⭐ BẮT BUỘC */
}

.admin-btn {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 20px;
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

.menu-container {
    max-width: 1400px;
    margin: auto;
    position: relative; /* ⭐ để admin bám theo */
}
/* ===== SLIDE ===== */
.slide-img {
    height: 260px;
    object-fit: cover;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    transition: transform 0.6s ease;
}
.slide-img:hover {
    transform: scale(1.06);
}

/* Hover zoom nhẹ */
.slide-img:hover {
    transform: scale(1.05);
}

/* ===== CARD ===== */
.trung-tam-card {
    background: white;
    border-radius: 18px;
    padding: 25px;
    border-left: 6px solid #4e73df;
    box-shadow: 0 12px 30px rgba(0,0,0,0.1);
    transition: 0.35s;
}
.trung-tam-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 45px rgba(0,0,0,0.18);
}
.trung-tam-card h4 {
    font-weight: 700;
}

/* ===== SIDEBAR ===== */
.quang-cao-card {
    background: white;
    border-radius: 16px;
    padding: 18px;
    margin-bottom: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.quang-cao-card:hover {
    transform: translateY(-8px); /* chỉ nhấc lên */
    box-shadow: 0 18px 40px rgba(0,0,0,0.18);
}
/* CTA đặc biệt */
.quang-cao-card.cta {
    background: linear-gradient(135deg, #4e73df, #36b9cc);
    color: white;
}

/* BUTTON */
.btn {
    border-radius: 25px;
    font-weight: 600;
}

/* ===== FOOTER ===== */
footer {
    background: linear-gradient(90deg, #1e3c72, #2a5298);
    color: white;
    text-align: center;
    padding: 30px;
}

/* ÉP container rộng hơn */
.container {
    max-width: 1400px !important;
    padding-left: 6px !important;
    padding-right: 6px !important;
}
/* ÉP row sát lề hơn */
.row {
    margin-left: -15px !important;
    margin-right: -15px !important;
}

/* ÉP cột sát lề */
.col-md-8,
.col-md-4 {
    padding-left: 3px !important;
    padding-right: 3px !important;
}

.gallery-title {
    font-weight: 700;
    margin: 30px 0 15px;
}

.gallery-img {
    width: 99%;
    height: 580px;          /* ⬅ giảm chiều cao */
    object-fit: cover;
    border-radius: 14px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    transition: transform 0.35s ease;
}

.horizontal-menu .container {
    max-width: 1400px;
}
.admin-btn {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 20px;
}


/* ===== RESPONSIVE ===== */
@media (max-width: 992px) {
    header h1 {
        font-size: 2rem;
    }

    .gallery-img {
        height: 320px;
    }

    .slide-img {
        height: 180px;
    }
}

@media (max-width: 768px) {
    /* Menu */
    .menu-list {
        flex-wrap: wrap;
    }
    .menu-list a {
        padding: 10px 12px;
        font-size: 14px;
    }

    /* Card */
    .trung-tam-card {
        padding: 18px;
    }

    /* Gallery */
    .gallery-img {
        height: 240px;
    }
}

@media (max-width: 576px) {
    header h1 {
        font-size: 1.6rem;
    }

    header h6 {
        font-size: 0.95rem;
    }

    .btn {
        font-size: 14px;
        padding: 8px 14px;
    }
}

.site-header{
    position:relative;
    text-align:center;
    padding:30px 20px;
    background: linear-gradient(90deg, #0e4597ff, #28c89dff);
    color:white;
}

/* LOGO KHÔNG ẢNH HƯỞNG TEXT */
.logo{
    position:absolute;
    left:50px;
    top:50%;
    transform:translateY(-50%);
}

.logo img{
    height:120px;
    width:auto;
}

/* GIỮ NGUYÊN TEXT */
.site-header h1{
    margin:0;
    font-size:32px;
    font-weight:700;
}

.site-header h6{
    margin-top:6px;
    font-size:15px;
    font-weight:400;
    opacity:0.9;
}

/* RESPONSIVE */
@media (max-width:768px){
    .logo{
        position:static;
        transform:none;
        margin-bottom:10px;
    }
}
</style>
</head>

<body>

<!-- ===== HEADER ===== -->
<header class="site-header">
    <div class="logo">
        <img src="hinh/logo.png" alt="Logo Trung tâm Tin học">
    </div>

    <h1>Trung tâm Tin học tại Vĩnh Long</h1>
    <h6>Học Tin học bài bản – Nâng cao kỹ năng – Mở rộng cơ hội nghề nghiệp</h6>
</header>

<!-- ===== MENU ===== -->
<nav class="horizontal-menu">
    <div class="menu-container">
        <ul class="menu-list">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="gioithieu.php">Giới thiệu</a></li> 
            <li><a href="trungtam.php">Trung tâm</a></li>
            <li><a href="khoahoc.php">Khóa học</a></li>
            <li><a href="dangky.php">Đăng ký học</a></li>
            <li><a href="lienhe.php">Liên hệ</a></li>
        </ul>

        <!-- NÚT ADMIN GIỮ NGUYÊN KIỂU CŨ -->
        <a href="login.php" class="btn btn-warning btn-sm fw-bold admin-btn">
            <i class="fa-solid fa-user-shield"></i> Admin
        </a>
    </div>
</nav>

<div class="container mt-4">
<!-- ===== SLIDE ===== -->
<div id="slide3Anh"
     class="carousel slide mb-4"
     data-bs-ride="carousel"
     data-bs-interval="4000">

    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="hinh/slide1.jpg" class="w-100 slide-img">
                </div>
                <div class="col-md-4">
                    <img src="hinh/slide2.jpg" class="w-100 slide-img">
                </div>
                <div class="col-md-4">
                    <img src="hinh/slide3.jpg" class="w-100 slide-img">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="hinh/slide4.jpg" class="w-100 slide-img">
                </div>
                <div class="col-md-4">
                    <img src="hinh/slide5.jpg" class="w-100 slide-img">
                </div>
                <div class="col-md-4">
                    <img src="hinh/slide6.jpg" class="w-100 slide-img">
                </div>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button"
            data-bs-target="#slide3Anh" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button"
            data-bs-target="#slide3Anh" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="row">


<!-- ===== MAIN CONTENT ===== -->
<div class="col-md-8">
<h3 class="text-primary mb-3">📘 Bài viết & Thông tin Tin học</h3>

<div id="dsBaiViet"></div>

<!-- ===== THƯ VIỆN HÌNH ẢNH ===== -->
<h4 class="gallery-title text-primary">
    📸 Hoạt động & Lớp học tại trung tâm
</h4>

<div class="row g-3 mb-4">
    <div class="col-md-12">
        <img src="hinh/hoatdong1.jpg" class="gallery-img">
    </div>
</div>

</div>

<!-- ===== SIDEBAR ===== -->
<div class="col-md-4">
<h4 class="text-secondary mb-3">🔥 Khóa học nổi bật</h4>

<div class="quang-cao-card">
<h5 class="text-danger fw-bold">Lập trình Web Fullstack</h5>
<img src="hinh/index1.jpg" class="img-fluid rounded mb-2">
<p class="small">HTML, CSS, JS, PHP – Giảm 50% học phí</p>
<a href="dangky.php" class="btn btn-danger btn-sm w-100">Đăng ký ngay</a>
</div>

<div class="quang-cao-card">
<h5 class="fw-bold">Thiết kế đồ họa Photoshop</h5>
<img src="hinh/index2.jpg" class="img-fluid rounded mb-2">
<p class="small">Thiết kế banner – poster – logo</p>
<a href="dangky.php" class="btn btn-warning btn-sm w-100">Xem chi tiết</a>
</div>

<div class="quang-cao-card bg-primary text-white">
<h5>🎯 Tư vấn miễn phí</h5>
<p class="small">Đội ngũ chuyên viên hỗ trợ 24/7</p>
<a href="lienhe.php" class="btn btn-light btn-sm w-100">Liên hệ ngay</a>
</div>
        <!-- ===== BANNER KÊU GỌI ===== -->
<div class="banner-section mb-4 text-center">
    <img src="hinh/banner.png" alt="Banner trung tâm tin học" class="banner-img mx-auto d-block">
</div>

</div>

</div>
</div>
<section class="container my-5">
    <h2 class="text-center fw-bold text-primary mb-4">
        Vì sao nên học tại chúng tôi?
    </h2>

    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="feature-box">
                <i class="fa-solid fa-chalkboard-user"></i>
                <h5>Giảng viên kinh nghiệm</h5>
                <p>Giáo viên có kinh nghiệm thực tế, dạy dễ hiểu.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fa-solid fa-laptop-code"></i>
                <h5>Học thực hành 90%</h5>
                <p>Thực hành trực tiếp trên máy, làm dự án thật.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box">
                <i class="fa-solid fa-certificate"></i>
                <h5>Cấp chứng chỉ</h5>
                <p>Chứng chỉ có giá trị xin việc và nâng lương.</p>
            </div>
        </div>


    </div>
</section>



<!-- ===== FOOTER ===== -->
<footer>
<p>Website Giới thiệu Trung tâm Tin học Vĩnh Long</p>
</footer>


<script>
const baiViet = [
{
    id: 0,
    tieuDe: "Vì sao kỹ năng Tin học là bắt buộc?",
    noiDung: "Trong thời đại công nghệ số phát triển mạnh mẽ như hiện nay, kỹ năng tin học không còn là lợi thế mà đã trở thành yêu cầu bắt buộc đối với hầu hết các ngành nghề. Từ học sinh, sinh viên cho đến người lao động, việc sử dụng thành thạo máy tính và các phần mềm cơ bản là điều kiện cần để học tập, làm việc hiệu quả. Các kỹ năng như soạn thảo văn bản bằng Microsoft Word, xử lý số liệu với Excel, thiết kế bài thuyết trình bằng PowerPoint hay khai thác thông tin trên Internet giúp người dùng tiết kiệm thời gian, nâng cao chất lượng công việc và giảm thiểu sai sót.\n\nBên cạnh đó, kỹ năng tin học còn đóng vai trò quan trọng trong việc thích nghi với môi trường làm việc hiện đại, nơi mà hầu hết các quy trình đều được số hóa. Doanh nghiệp ngày nay ưu tiên tuyển dụng những ứng viên có khả năng sử dụng công nghệ thành thạo, linh hoạt và sẵn sàng học hỏi các công cụ mới. Việc thiếu kỹ năng tin học sẽ khiến người lao động gặp nhiều hạn chế trong quá trình làm việc và thăng tiến.\n\nChính vì vậy, trang bị kỹ năng tin học từ sớm không chỉ giúp cá nhân nâng cao hiệu suất học tập, lao động mà còn mở rộng cơ hội việc làm, đáp ứng yêu cầu của xã hội trong quá trình chuyển đổi số hiện nay."
},
{
    id: 1,
    tieuDe: "Những khóa học Tin học phổ biến",
    noiDung: "Nhằm đáp ứng nhu cầu học tập và làm việc ngày càng đa dạng của người học, các khóa học tin học hiện nay được thiết kế phong phú và phù hợp với nhiều đối tượng khác nhau. Trong đó, tin học văn phòng là khóa học phổ biến nhất, cung cấp kiến thức và kỹ năng sử dụng các phần mềm như Word, Excel, PowerPoint để phục vụ học tập, công việc hành chính và quản lý dữ liệu.\n\nBên cạnh tin học văn phòng, các khóa học thiết kế đồ họa cũng thu hút đông đảo học viên, đặc biệt là những người yêu thích sáng tạo và làm việc trong lĩnh vực truyền thông, quảng cáo. Ngoài ra, các khóa học lập trình Web, Python, C/C++ giúp người học tiếp cận với lĩnh vực công nghệ thông tin chuyên sâu, từ đó mở ra nhiều cơ hội nghề nghiệp trong tương lai.\n\nViệc lựa chọn khóa học phù hợp với mục tiêu cá nhân sẽ giúp học viên tiết kiệm thời gian, chi phí và đạt hiệu quả cao trong quá trình học tập. Các khóa học tin học không chỉ cung cấp kiến thức lý thuyết mà còn chú trọng thực hành, giúp người học tự tin ứng dụng vào thực tế."
},
{
    id: 2,
    tieuDe: "Học Tin học ở đâu uy tín tại Vĩnh Long?",
    noiDung: "Tại Vĩnh Long, nhu cầu học tin học ngày càng tăng cao, kéo theo sự phát triển của nhiều trung tâm đào tạo tin học với quy mô và chất lượng khác nhau. Việc lựa chọn một trung tâm uy tín đóng vai trò quan trọng trong việc đảm bảo hiệu quả học tập và khả năng ứng dụng kiến thức vào thực tế. Các trung tâm chất lượng thường có chương trình đào tạo rõ ràng, giáo trình được cập nhật theo xu hướng công nghệ mới và chú trọng thực hành.\n\nNgoài ra, đội ngũ giảng viên là yếu tố then chốt quyết định chất lượng đào tạo. Những giảng viên có kinh nghiệm thực tế sẽ giúp học viên dễ dàng tiếp cận kiến thức, giải đáp thắc mắc và định hướng học tập phù hợp. Bên cạnh đó, cơ sở vật chất, phòng máy và phần mềm giảng dạy cũng cần được đầu tư đầy đủ để đáp ứng nhu cầu học tập.\n\nVới mức học phí hợp lý, thời gian học linh hoạt và môi trường học tập chuyên nghiệp, các trung tâm tin học uy tín tại Vĩnh Long đang góp phần nâng cao chất lượng nguồn nhân lực, giúp người học tự tin hơn trong học tập, công việc và hội nhập vào môi trường số."
}
];

const div = document.getElementById("dsBaiViet");

div.innerHTML = baiViet.map(bv => `
<div class="trung-tam-card mb-4">
    <h4 class="text-primary">📖 ${bv.tieuDe}</h4>
    <p class="text-muted mt-2">
        ${bv.noiDung.substring(0, 120)}...
    </p>
    <a href="chitiet_baiviet.php?id=${bv.id}"
       class="btn btn-outline-primary btn-sm">
       Xem chi tiết bài viết
    </a>
</div>
`).join('');
document.addEventListener("DOMContentLoaded", function(){
    const links = document.querySelectorAll(".menu-list a");
    const currentPage = location.pathname.split("/").pop();

    links.forEach(link => {
        const href = link.getAttribute("href").split("/").pop();
        if(href === currentPage){
            link.classList.add("active");
        }
    });
});
</script>

</body>
</html>
