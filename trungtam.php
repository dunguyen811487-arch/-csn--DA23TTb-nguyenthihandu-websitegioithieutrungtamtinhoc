<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Danh sách Trung tâm Đào tạo Tin học tại Vĩnh Long</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

    .container {
    max-width: 1200px !important;
    padding-left: 6px !important;
    padding-right: 6px !important;
}

    .menu-list a.active{
    background: rgba(255,255,255,0.25);
    border-bottom: 3px solid #fff;
    font-weight: 700;
}

.menu-list a{
    transition: all 0.3s ease;
}

    footer {
    background: linear-gradient(90deg, #1e3c72, #2a5298);
    color: white;
    text-align: center;
    padding: 30px;
}
body { background: #cfe3f7ff; }

/* CSS cho Menu Nằm Ngang */
.horizontal-menu {
    background: #0056b3; 
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.horizontal-menu .menu-list {
    list-style: none; padding: 0; margin: 0; display: flex; justify-content: center;
}
.horizontal-menu .menu-list li { margin: 0; }
.horizontal-menu .menu-list a {
    color: white; text-decoration: none; padding: 12px 25px; display: block;
    font-size: 17px; transition: 0.3s; border-radius: 0;
}
.horizontal-menu .menu-list a:hover {
    background: rgba(255, 255, 255, 0.2); 
}

/* Card */
.center-detail-card {
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    background-color: white;
    transition: 0.3s;
}
.center-detail-card:hover {
    transform: translateY(-5px);
}

/* Image */
.center-image {
    height: 220px;
    width: 100%;
    object-fit: cover;
    border-radius: 8px;
    transition: 0.3s;
}
.center-image:hover {
    transform: scale(1.05);
    filter: brightness(1.1);
}

/* Stars */
.star {
    color: #f1c40f;
    font-size: 18px;
}

/* BUTTON */
.btn {
    border-radius: 25px;
    color: white;
    background: linear-gradient(90deg, #4e73df, #36b9cc);
    border: none;
    font-weight: 600;
}
.btn:hover {
    background: linear-gradient(90deg, #1cc88a, #4e73df);
}

.badge 
{
    background:  #7800f8ff;
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
</style>
</head>

<body>
            <nav class="horizontal-menu">
    <ul class="menu-list">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="gioithieu.php">Giới thiệu</a></li> 
        <li><a href="trungtam.php">Trung tâm</a></li>
        <li><a href="khoahoc.php">Khóa học</a></li>
        <li><a href="dangky.php">Đăng ký học</a></li>
        <li><a href="lienhe.php">Liên hệ</a></li>
    </ul>
</nav>

<div class="container py-5">

    <header class="text-center mb-5">
        <h1 class="text-primary fw-bold">
            <i class="fa-solid fa-building-columns"></i> Danh sách các Trung tâm Đào tạo Tin học
        </h1>
        <p class="lead text-muted">Tổng hợp chi tiết địa chỉ, khóa học, đánh giá chất lượng tại Vĩnh Long.</p>
    </header>



    <!-- HIỂN THỊ DANH SÁCH TRUNG TÂM -->
    <div id="danhSachTrungTamChiTiet"></div>

    <!-- KHU VỰC BÀI VIẾT -->
    <section class="mt-5">
        <h2 class="text-center text-primary fw-bold mb-4">
            <i class="fa-solid fa-lightbulb"></i> Bài viết
        </h2>

        <div class="row">
            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm rounded">
                    <h5><i class="fa-solid fa-star text-warning"></i> “Học hôm nay – Làm chủ tương lai”</h5>
                    <p>Trang bị kỹ năng tin học giúp bạn nắm bắt cơ hội nghề nghiệp trong kỷ nguyên số.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm rounded">
                    <h5><i class="fa-solid fa-bolt text-warning"></i> “Bắt đầu từ con số 0 – Thành thạo chỉ sau 1 khóa”</h5>
                    <p>Dành cho người mới bắt đầu, giáo trình dễ hiểu, thực hành 100%.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white shadow-sm rounded">
                    <h5><i class="fa-solid fa-laptop-code text-warning"></i> “Học thật – Làm thật – Ứng dụng ngay”</h5>
                    <p>Định hướng thực chiến giúp học viên áp dụng ngay vào công việc.</p>
                </div>
            </div>
        </div>
    </section>

</div>

<footer >
  Website Giới thiệu Trung tâm Tin học Vĩnh Long
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    
// ==========================
// DỮ LIỆU TRUNG TÂM MỚI
// ==========================
/* ==========================
   DỮ LIỆU MẶC ĐỊNH (CỨU DỮ LIỆU)
========================== */
let ds = JSON.parse(localStorage.getItem("dsCenter")) || [];
const trungTamMacDinh = [
    {
        ten: "Trung tâm Tin học ABC",
        diaChi: "Số 10, Nguyễn Huệ, Vĩnh Long",
        mota: "Đào tạo tin học văn phòng, đồ họa, lập trình.",
        khoaHoc: ["Tin học văn phòng", "Photoshop", "Lập trình Web"],
        review: "Giáo viên thân thiện – Dạy dễ hiểu.",
        hinh: "hinh/trungtam1.jpg",
        linkChiTiet: "trungtam_abc.php"
    },
    {
        ten: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        mota: "Nhiều khóa học chất lượng – uy tín nhiều năm.",
        khoaHoc: ["Excel nâng cao", "Thiết kế Web", "Java"],
        review: "Phù hợp sinh viên và người đi làm.",
        hinh: "hinh/trungtam2.jpg",
        linkChiTiet: "chitiettrungtam2.php"
    },
    {
        ten: "Trung tâm Kỹ năng số Trà Vinh",
        diaChi: "Phường 1, Trà Vinh",
        mota: "Đào tạo kỹ năng theo chuẩn doanh nghiệp.",
        khoaHoc: ["Tin học A-B-C", "PowerPoint", "C#"],
        review: "Hỗ trợ học viên 24/7.",
        hinh: "hinh/trungtam3.jpg",
        linkChiTiet: "chitiettrungtam3.php"
    },
    {
        ten: "IT Center Future",
        diaChi: "Hòa Thuận, Vĩnh Long",
        mota: "Thực hành 90% – đảm bảo kỹ năng.",
        khoaHoc: ["Đồ họa", "Tin học công chức", "Python"],
        review: "Giảng viên trẻ, nhiệt huyết.",
        hinh: "hinh/trungtam4.jpg",
        linkChiTiet: "chitiettrungtam4.php"
    }
];

/* ==========================
   CHỈ KHỞI TẠO 1 LẦN
========================== */


/* ==========================
   LẤY TRUNG TÂM TỪ ADMIN
========================== */
function layTrungTamTuAdmin() {
    const dsAdmin = JSON.parse(localStorage.getItem("dsCenter")) || [];

    return dsAdmin.map(tt => ({
        ten: tt.ten,
        diaChi: tt.diaChi,
        mota: tt.mota,
        khoaHoc: tt.khoaHoc,
        review: tt.review,
        hinh: tt.hinh || "hinh/trungtam_default.jpg",
        linkChiTiet: tt.linkChiTiet || "#"
    }));
}

/* ==========================
   HIỂN THỊ
========================== */
function taiDuLieuTrungTam() {
    const container = document.getElementById("danhSachTrungTamChiTiet");

    // dữ liệu mặc định luôn có
    const macDinh = trungTamMacDinh;

    // dữ liệu từ admin
    const tuAdmin = layTrungTamTuAdmin();

    const dsTong = [...macDinh];

    tuAdmin.forEach(tt => {
    if (!dsTong.some(m => m.ten === tt.ten)) {
        dsTong.push(tt);
    }
    });

    container.innerHTML = dsTong.map(tt => `
        <div class="center-detail-card">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="${tt.hinh}" class="center-image mb-3"
                         onerror="this.src='hinh/trungtam_default.jpg'">
                    <p><strong>
                        <i class="fa-solid fa-location-dot text-danger"></i>
                        Địa chỉ:
                    </strong> ${tt.diaChi}</p>
                </div>
                <div class="col-md-8">
                    <h3 class="fw-bold">${tt.ten}</h3>
                    <p>${tt.mota}</p>

                    <h6 class="text-secondary">Khóa học:</h6>
                    ${tt.khoaHoc.map(kh =>
                        `<span class="badge me-1 mb-1">${kh}</span>`
                    ).join("")}

                    <p class="mt-2 fst-italic">"${tt.review}"</p>

                    <div class="mt-3">
                        <a href="${tt.linkChiTiet}" class="btn btn-outline-primary me-2">
                            <i class="fa-solid fa-circle-info"></i> Xem chi tiết
                        </a>
                        <a href="dangky.php?trungtam=${encodeURIComponent(tt.ten)}"
                           class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square"></i> Đăng ký
                        </a>
                    </div>
                </div>
            </div>
        </div>
    `).join("");
}

document.addEventListener("DOMContentLoaded", taiDuLieuTrungTam);

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
