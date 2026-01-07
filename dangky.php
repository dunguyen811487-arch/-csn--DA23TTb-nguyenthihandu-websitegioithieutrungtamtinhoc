<?php
$thongbao = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include "xuly_dangky.php";
}
?>
<?php if (!empty($thongbao)): ?>
<div class="alert alert-success text-center fw-bold">
    <?= $thongbao ?>
</div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Đăng ký Khóa học Tin học</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {  background: linear-gradient(90deg, #e6eaf1ff, #a1e0d8ff);
        color: black;}
.form-container { 
    max-width: 700px; /* Tăng chiều rộng form một chút */
    margin: 50px auto; 
    padding: 30px; 
    border-radius: 10px; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    background-color: white;
}
.header-link {
    display: block;
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.1rem;
    color: #0056b3;
}

.btn{
    background: linear-gradient(135deg, #3760ddff, #12d1c8ff);
    color: white;
}
</style>
</head>
<body>

<a href="index.php" class="header-link mt-3">← Quay lại Trang chủ</a>

<div class="container">
    <div class="form-container">
        <h2 class="text-center text-primary mb-4">📝 Đăng ký Khóa học Tin học</h2>
        <p class="text-center text-muted">Vui lòng cung cấp thông tin chi tiết để chúng tôi tư vấn khóa học phù hợp nhất.</p>

        <form method="POST">
            
            <h5 class="text-secondary mt-4 mb-3">1. Thông tin Khóa học & Trung tâm</h5>
            
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label for="selectTrungTam" class="form-label">Chọn Trung tâm học:</label>
                    <select class="form-select" id="selectTrungTam" name="trungTam" required>
                        <option value="" selected disabled>-- Chọn Trung tâm --</option>
                        </select>
                </div>
                <div class="col-md-6">
                    <label for="selectKhoaHoc" class="form-label">Chọn Khóa học quan tâm:</label>
                    <select class="form-select" id="selectKhoaHoc" name="khoaHoc" required>
                        <option value="" selected disabled>-- Vui lòng chọn Trung tâm trước --</option>
                    </select>
                </div>
            </div>

            <h5 class="text-secondary mb-3">2. Thông tin Cá nhân</h5>

            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" id="tenHocVien" name="tenHocVien" required
                        placeholder="Nguyễn Văn A"
                        pattern="^[A-Za-zÀ-ỹ\s]{2,50}$"
                        title="Tên không được chứa số hoặc ký tự đặc biệt.">
                </div>
                <div class="col-md-6">
                    <input type="tel" class="form-control" id="sdtHocVien" name="sdtHocVien" required 
                     placeholder="0901234567"
                     pattern="^(03|05|07|08|09)[0-9]{8}$"
                     title="Số điện thoại phải gồm 10 số và bắt đầu bằng 03, 05, 07, 08 hoặc 09.">
                </div>
                <div class="col-md-6">
                    <label for="emailHocVien" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="emailHocVien" name="emailHocVien" placeholder="vidu@email.com">
                </div>
                <div class="col-md-6">
                    <label for="tuoiHocVien" class="form-label">Tuổi:</label>
                    <input type="number" class="form-control" id="tuoiHocVien" name="tuoiHocVien" placeholder="Ví dụ: 25" min="15" max="99">
                </div>
            </div>
            
            <h5 class="text-secondary mt-4 mb-3">3. Trình độ & Mục tiêu</h5>

            <div class="row g-3">
                <div class="col-md-6">
                    <label for="trinhDo" class="form-label">Trình độ Tin học hiện tại:</label>
                    <select class="form-select" id="trinhDo" name="trinhDo" required>
                        <option value="Chưa biết gì" selected>Chưa biết gì/Rất cơ bản</option>
                        <option value="Cơ bản">Cơ bản (Sử dụng Văn phòng)</option>
                        <option value="Khá">Khá (Có thể tự làm đồ án/dự án nhỏ)</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="mucTieu" class="form-label">Mục tiêu khóa học:</label>
                    <select class="form-select" id="mucTieu" name="mucTieu" required>
                        <option value="Cải thiện công việc hiện tại" selected>Cải thiện công việc hiện tại</option>
                        <option value="Tìm việc mới/Chuyển ngành">Tìm việc mới/Chuyển ngành</option>
                        <option value="Học để biết/Sở thích">Học để biết/Sở thích cá nhân</option>
                    </select>
                </div>
            </div>

           <button type="submit" class="btn btn-lg w-100 mt-5"> <strong>Gửi Thông tin & Đăng ký Tư vấn</strong></button>
        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<script>
let dsTrungTamData = [];
localStorage.setItem("dsTrungTamData", JSON.stringify([
  {
    ten: "Trung tâm Tin học Vĩnh Long",
    khoaHoc: [
      "Tin học văn phòng",
      "Lập trình Web",
      "Thiết kế đồ họa"
    ]
  },
  {
    ten: "Trung tâm CNTT ABC",
    khoaHoc: [
      "Python cơ bản",
      "Java nâng cao"
    ]
  }
]));
// =========================
// KHỞI TẠO FORM
// =========================
function khoiTaoForm() {
    // Lấy dữ liệu từ LocalStorage
    const dataString = localStorage.getItem("dsTrungTamData");

    if (dataString) {
        dsTrungTamData = JSON.parse(dataString);
    } else {
        console.error("Không có dữ liệu! Kiểm tra index.html.");
        return;
    }

    const selectTrungTam = document.getElementById("selectTrungTam");
    const selectKhoaHoc = document.getElementById("selectKhoaHoc");

    // Reset options, tránh bị lặp
    selectTrungTam.innerHTML = `<option value="" disabled selected>-- Chọn Trung tâm --</option>`;
    selectKhoaHoc.innerHTML = `<option value="" disabled selected>-- Vui lòng chọn Trung tâm trước --</option>`;
    selectKhoaHoc.disabled = true;

    // Thêm danh sách trung tâm
    dsTrungTamData.forEach(tt => {
        const opt = new Option(tt.ten, tt.ten);
        selectTrungTam.add(opt);
    });

    // Khi chọn trung tâm → load khóa học
    selectTrungTam.addEventListener("change", () => {
        capNhatKhoaHoc(selectTrungTam.value);
    });

    // Lấy param nếu nhấn từ nút “Đăng ký ngay”
    const urlParams = new URLSearchParams(window.location.search);
    const trungTamParam = urlParams.get("trungtam");
    const khoaHocParam = urlParams.get("khoahoc");

    if (trungTamParam) {
        selectTrungTam.value = decodeURIComponent(trungTamParam);
        capNhatKhoaHoc(selectTrungTam.value);

        if (khoaHocParam) {
            selectKhoaHoc.value = decodeURIComponent(khoaHocParam);
        }
    }
}


// =========================
// CẬP NHẬT KHÓA HỌC
// =========================
function capNhatKhoaHoc(tenTrungTam) {
    const selectKhoaHoc = document.getElementById("selectKhoaHoc");

    selectKhoaHoc.innerHTML = `<option value="" disabled selected>-- Chọn Khóa học --</option>`;
    selectKhoaHoc.disabled = false; // ✅ DÒNG QUAN TRỌNG

    const tt = dsTrungTamData.find(x => x.ten === tenTrungTam);

    if (tt && Array.isArray(tt.khoaHoc)) {
        tt.khoaHoc.forEach(kh => {
            selectKhoaHoc.add(new Option(kh, kh));
        });
    }
}


// =========================
// XỬ LÝ GỬI FORM
// =========================


// =========================
// CHẠY KHI LOAD TRANG
// =========================
document.addEventListener("DOMContentLoaded", khoiTaoForm);


</script>


</body>
</html>