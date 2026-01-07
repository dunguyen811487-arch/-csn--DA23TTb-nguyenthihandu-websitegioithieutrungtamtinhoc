<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chi tiết khóa học – Tin học văn phòng</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body{
    background: linear-gradient(135deg, rgba(208,246,241,0.85), rgba(187,245,223,0.9));
    font-family:'Segoe UI', sans-serif;
}
.horizontal-menu{background:#0d3b9c;}
.menu-list{list-style:none; display:flex; justify-content:center; margin:0; padding:0;}
.menu-list a{color:#fff; padding:16px 22px; text-decoration:none; font-size:16px; font-weight:500; display:block;}
.menu-list a:hover{background:rgba(255,255,255,0.2);}
.main-card{background:#fff; border-radius:24px; padding:40px; box-shadow:0 22px 50px rgba(0,0,0,0.25); margin:50px 0 70px;}
.course-title{font-weight:800; color:#4e73df;}
.course-sub{color:#6c757d;}
.course-box{background:#f9fbff; border-radius:18px; padding:28px; margin-bottom:25px;}
.course-box h5{font-weight:700; color:#4e73df; margin-bottom:14px;}
.sidebar-box{background:#fff; border-radius:20px; padding:28px; box-shadow:0 12px 30px rgba(0,0,0,0.15);}
.price{font-size:30px; font-weight:800; color:#e74a3b;}
.course-img{width:100%; border-radius:16px; box-shadow:0 12px 30px rgba(0,0,0,0.2); margin-bottom:20px;}
.btn-main{background:#4e73df; color:#fff; border-radius:30px; padding:12px; font-weight:600;}
.btn-main:hover{background:#2e59d9;}
</style>
</head>
<body>

<!-- MENU -->
<nav class="horizontal-menu">
    <ul class="menu-list">
        <li><a href="../index.php">Trang chủ</a></li>
        <li><a href="../trungtam.php">Trung tâm</a></li>
        <li><a href="../khoahoc.php">Khóa học</a></li>
        <li><a href="../dangky.php">Đăng ký</a></li>
        <li><a href="../lienhe.php">Liên hệ</a></li>
    </ul>
</nav>

<!-- CONTENT -->
<div class="container">
    <div class="main-card">

        <div class="text-center mb-5">
            <h1 class="course-title">📘 Tin học văn phòng</h1>
            <p class="course-sub">Khóa học nền tảng – Ứng dụng trực tiếp vào học tập & công việc</p>
        </div>

        <div class="row g-4">

            <!-- CỘT TRÁI -->
            <div class="col-md-8">

                <div class="course-box">
                    <h5><i class="fa-solid fa-circle-info"></i> Giới thiệu khóa học</h5>
                    <p>Khóa học Tin học văn phòng giúp học viên thành thạo <strong>Word – Excel – PowerPoint</strong> từ cơ bản đến nâng cao, chú trọng thực hành và ứng dụng thực tế.</p>
                </div>

                <div class="course-box">
                    <h5><i class="fa-solid fa-list-check"></i> Nội dung đào tạo</h5>
                    <ul>
                        <li>✔ Soạn thảo văn bản chuyên nghiệp với Word</li>
                        <li>✔ Excel: công thức, bảng tính, xử lý dữ liệu</li>
                        <li>✔ PowerPoint: thiết kế & thuyết trình</li>
                        <li>✔ Thực hành chiếm 90% thời lượng</li>
                    </ul>
                </div>

                <!-- Dán lộ trình ở đây -->
                <div class="course-box">
                    <h5><i class="fa-solid fa-route"></i> Lộ trình khóa học</h5>
                    <div class="border-start border-3 ps-3 mb-3">
                        <p class="fw-bold text-primary mb-1">Tuần 1 – 2</p>
                        <p>• Làm quen máy tính, Word cơ bản<br>• Soạn thảo, định dạng văn bản hành chính</p>
                    </div>
                    <div class="border-start border-3 ps-3 mb-3">
                        <p class="fw-bold text-primary mb-1">Tuần 3 – 4</p>
                        <p>• Excel: hàm cơ bản, bảng tính<br>• Thống kê – xử lý dữ liệu thực tế</p>
                    </div>
                    <div class="border-start border-3 ps-3 mb-3">
                        <p class="fw-bold text-primary mb-1">Tuần 5</p>
                        <p>• PowerPoint: thiết kế slide<br>• Kỹ năng thuyết trình báo cáo</p>
                    </div>
                    <div class="border-start border-3 ps-3">
                        <p class="fw-bold text-primary mb-1">Tuần 6</p>
                        <p>• Ôn tập tổng hợp<br>• Kiểm tra – cấp chứng chỉ</p>
                    </div>
                </div>

            </div>

            <!-- CỘT PHẢI -->
            <div class="col-md-4">

                <div class="sidebar-box text-center mb-4">
                    <img src="hinh/khoahoc1.jpg" class="course-img">
                    <p class="mb-1"><strong>Thời gian học</strong></p>
                    <p>2–3 buổi / tuần<br>⏱ 6 tuần</p>
                    <hr>
                    <p class="mb-1"><strong>Học phí ưu đãi</strong></p>
                    <del>2.000.000đ</del>
                    <div class="price">1.200.000đ</div>
                    <a href="#" class="btn btn-main w-100 mt-3"><i class="fa-solid fa-pen-to-square"></i> Đăng ký ngay</a>
                </div>

                <div class="course-box">
                    <h5><i class="fa-solid fa-star"></i> Đánh giá của học viên</h5>

                    <!-- DANH SÁCH ĐÁNH GIÁ -->
                    <div id="reviewList"></div>
                    <hr>

                    <!-- FORM NHẬP ĐÁNH GIÁ -->
                    <h6 class="fw-bold mb-3">✍️ Gửi đánh giá của bạn</h6>
                    <form id="reviewForm">
                        <div class="mb-3">
                            <label class="form-label">Họ tên</label>
                            <input type="text" class="form-control" placeholder="Nhập họ tên" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Đánh giá</label>
                            <select class="form-select">
                                <option>★★★★★ Rất hài lòng</option>
                                <option>★★★★☆ Hài lòng</option>
                                <option>★★★☆☆ Bình thường</option>
                                <option>★★☆☆☆ Chưa tốt</option>
                                <option>★☆☆☆☆ Không hài lòng</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nhận xét</label>
                            <textarea class="form-control" rows="3" placeholder="Chia sẻ cảm nhận của bạn..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-main">
                            <i class="fa-solid fa-paper-plane"></i> Gửi đánh giá
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>

<script>
const reviewForm = document.getElementById("reviewForm");
const reviewList = document.getElementById("reviewList");
const STORAGE_KEY = "reviews_tin_hoc_van_phong";

let currentUser = localStorage.getItem("currentUserReview") || "";

/* ===== LOAD REVIEW ===== */
document.addEventListener("DOMContentLoaded", function(){
    const reviews = getReviews();
    reviewList.innerHTML = "";
    reviews.forEach((r, index) => renderReview(r, index));
});

/* ===== SUBMIT REVIEW ===== */
reviewForm.addEventListener("submit", function(e){
    e.preventDefault();

    const name = this.querySelector("input").value.trim();
    const rating = this.querySelector("select").value;
    const comment = this.querySelector("textarea").value.trim();

    if(!name || !comment){
        alert("Nhập đầy đủ thông tin!");
        return;
    }

    currentUser = name;
    localStorage.setItem("currentUserReview", name);

    const star = rating.split(" ")[0];
    const review = { name, star, comment, owner: name };

    const reviews = getReviews();
    reviews.push(review);
    saveReviews(reviews);

    renderReview(review, reviews.length - 1);
    this.reset();
});

/* ===== RENDER REVIEW ===== */
function renderReview(review, index){
    const canDelete = review.owner === currentUser;
    const deleteButton = canDelete ? `
        <button class="btn btn-sm btn-outline-danger" onclick="deleteReview(${index})">
            <i class="fa-solid fa-trash"></i>
        </button>` : "";

    reviewList.insertAdjacentHTML("beforeend", `
        <div class="mb-4 border rounded p-3">
            <div class="d-flex justify-content-between">
                <div>
                    <strong>${review.name}</strong>
                    <span class="text-warning ms-2">${review.star}</span>
                    <p class="text-muted small mb-0">${review.comment}</p>
                </div>
                ${deleteButton}
            </div>
        </div>
    `);
}

/* ===== DELETE REVIEW ===== */
function deleteReview(index){
    if(!confirm("Bạn có chắc muốn xóa đánh giá này?")) return;

    const reviews = getReviews();
    if(reviews[index].owner !== currentUser){
        alert("Bạn chỉ có thể xóa đánh giá của mình!");
        return;
    }

    reviews.splice(index,1);
    saveReviews(reviews);

    reviewList.innerHTML = "";
    reviews.forEach((r,i) => renderReview(r,i));
}

/* ===== LOCALSTORAGE ===== */
function getReviews(){
    return JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
}
function saveReviews(reviews){
    localStorage.setItem(STORAGE_KEY, JSON.stringify(reviews));
}
</script>


</body>
</html>