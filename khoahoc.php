<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Danh sách Khóa học Tin học Vĩnh Long</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>

    .container {
    max-width: 1400px !important;
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


body {
    background: linear-gradient(135deg, #d4ddecff, #afe7ecff);
    font-family: 'Segoe UI', sans-serif;
}

/* MENU */
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
/* SEARCH */
#timKiemKhoaHoc {
    padding: 14px;
    border-radius: 30px;
    border: 2px solid #4e73df;
}

/* COURSE CARD */
.course-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    transition: all 0.35s ease;
    position: relative;
}
.course-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 18px 40px rgba(0,0,0,0.18);
}

/* IMAGE */
.course-img {
    height: 180px;
    width: 100%;
    object-fit: cover;
}

/* CONTENT */
.course-body {
    padding: 18px;
}
.course-body h5 {
    font-weight: 700;
}
.center-name {
    font-size: 0.9rem;
    color: #6c757d;
}

/* BUTTON */
.course-card .btn {
    border-radius: 25px;
    background: linear-gradient(90deg, #4e73df, #36b9cc);
    border: none;
    font-weight: 600;
}
.course-card .btn:hover {
    background: linear-gradient(90deg, #1cc88a, #4e73df);
}

/* BADGE */
.course-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: #f6c23e;
    color: #000;
    font-size: 0.75rem;
    padding: 5px 10px;
    border-radius: 20px;
    font-weight: bold;
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
    <h1 class="text-primary">Danh sách Khóa học Tin học</h1>
    <p class="text-muted">Tổng hợp các khóa học từ nhiều trung tâm uy tín tại Vĩnh Long</p>
</header>

<!-- SEARCH & FILTER -->
<div class="row mb-4 g-3">
    <div class="col-md-8">
        <input type="text" id="timKiemKhoaHoc" class="form-control"
        placeholder="Tìm kiếm khóa học hoặc trung tâm..." onkeyup="locKhoaHoc()">
    </div>
    <div class="col-md-4">
        <select id="locTrungTam" class="form-select" onchange="locKhoaHoc()">
            <option value="">-- Tất cả trung tâm --</option>
        </select>
    </div>
</div>

<!-- DANH SÁCH KHÓA HỌC -->
<div id="danhSachKhoaHoc" class="row g-4"></div>




<script>
const dsKhoaHoc = [
    {
        ten: "Tin học văn phòng A–B–C",
        trungTam: "Trung tâm Tin học ABC",
        diaChi: "Số 10, Nguyễn Huệ, Vĩnh Long",
        link: "chitiet/chitiet1.php",
        hinh: "hinh/anhkhoahoc1.jpg"

    },
    {
        ten: "Photoshop từ cơ bản đến nâng cao",
        trungTam: "Trung tâm Tin học ABC",
        diaChi: "Số 10, Nguyễn Huệ, Vĩnh Long",
        link: "chitiet/chitiet2.php",
        hinh: "hinh/anhkhoahoc2.jpg"

    },
    {
        ten: "Lập trình Web Frontend",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet/chitiet3.php",
        hinh: "hinh/anhkhoahoc3.jpg"

    },
    {
        ten: "THIẾT KẾ – ĐỒ HỌA",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet/chitiet4.php",
        hinh: "hinh/anhkhoahoc4.jpg"

    },
    {
        ten: "Lập trình Web Fullstack với PHP & MySQL",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet3.php",
        hinh: "hinh/anhkhoahoc5.jpg"

    },
    {
        ten: "Python cơ bản cho người mới bắt đầu",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet3.php",
        hinh: "hinh/anhkhoahoc6.jpg"

    },
    {
        ten: "Lập trình Web Frontend",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet3.php",
        hinh: "hinh/anhkhoahoc7.jpg"

    },
    {
        ten: "Lập trình Web Frontend",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet3.php",
        hinh: "hinh/anhkhoahoc8.jpg"

    },
    {
        ten: "Lập trình Web Frontend",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet3.php",
        hinh: "hinh/anhkhoahoc9.jpg"

    },
    {
        ten: "Lập trình Web Frontend",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet3.php",
        hinh: "hinh/anhkhoahoc10.jpg"
    },
    {
        ten: "Lập trình Web Frontend",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet3.php",
        hinh: "hinh/anhkhoahoc11.jpg"
    },
    {
        ten: "Lập trình Web Frontend",
        trungTam: "Trung tâm CNTT Vĩnh Long",
        diaChi: "Số 25, Trần Đại Nghĩa, Vĩnh Long",
        link: "chitiet3.php",
        hinh: "hinh/anhkhoahoc12.jpg"
    }
];
/* ============================
   GHÉP KHÓA HỌC ADMIN THÊM
============================ */
const khoaHocAdmin = JSON.parse(localStorage.getItem("dsKhoaHoc")) || [];
dsKhoaHoc.push(...khoaHocAdmin);

//* ===== HIỂN THỊ ===== */
function hienThiKhoaHoc(data){
const c=document.getElementById("danhSachKhoaHoc");
c.innerHTML=data.map(k=>`
<div class="col-md-6 col-lg-4">
<div class="course-card h-100">
<span class="course-badge"><i class="fa fa-fire"></i> HOT</span>
<img src="${k.hinh || 'hinh/anhkhoahoc.jpg'}" class="course-img">
<div class="course-body">
<h5>${k.ten}</h5>
<p class="center-name"><i class="fa fa-building"></i> ${k.trungTam}</p>
<p class="small"><i class="fa fa-location-dot text-danger"></i> ${k.diaChi}</p>
<a href="${k.link}" class="btn btn-primary w-100 mt-2">
<i class="fa fa-circle-info"></i> Xem chi tiết
</a>
</div>
</div>
</div>`).join("");
}

/* ===== DANH SÁCH TRUNG TÂM ===== */
function taoDanhSachTrungTam(){
const select=document.getElementById("locTrungTam");
[...new Set(dsKhoaHoc.map(k=>k.trungTam))].forEach(tt=>{
const o=document.createElement("option");
o.value=tt;o.textContent=tt;
select.appendChild(o);
});
}

/* ===== LỌC ===== */
function locKhoaHoc(){
const key=document.getElementById("timKiemKhoaHoc").value.toLowerCase();
const tt=document.getElementById("locTrungTam").value;
const kq=dsKhoaHoc.filter(k=>
(k.ten.toLowerCase().includes(key)||k.trungTam.toLowerCase().includes(key)) &&
(tt===""||k.trungTam===tt)
);
hienThiKhoaHoc(kq);
}

document.addEventListener("DOMContentLoaded",()=>{
hienThiKhoaHoc(dsKhoaHoc);
taoDanhSachTrungTam();
});

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