<?php
if(isset($_POST['submit'])){
    $file = "lienhe.txt"; // file lưu yêu cầu liên hệ
    $ten = $_POST['hoten'] ?? "";
    $email = $_POST['email'] ?? "";
    $sdt = $_POST['sdt'] ?? "";
    $noidung = $_POST['noidung'] ?? "";

    $line = date('Y-m-d H:i:s') . "|$ten|$email|$sdt|$noidung\n";
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo "<script>alert('Cảm ơn $ten! Yêu cầu đã được gửi.');location.replace('index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liên hệ & Tư vấn - Trung tâm Tin học Vĩnh Long</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

    .contact-form input,
.contact-form textarea {
    border-radius: 12px;
    border: 1px solid #ccc;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 1rem;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 8px rgba(13, 110, 253, 0.3);
    outline: none;
}

.contact-form button {
    border-radius: 12px;
    font-weight: 600;
    padding: 12px;
    font-size: 1.05rem;
}
/* Thiết lập cơ bản */
body {  background: linear-gradient(90deg, #e6eaf1ff, #a1e0d8ff); }
.contact-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    background-color: white;
}
.contact-info-box {
    padding: 20px;
    background-color: #e9ecef;
    border-radius: 8px;
}
.header-link {
    display: block;
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.1rem;
    color: #0056b3;
}
.map-placeholder {
    height: 300px;
    background-color: #ccc;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    margin-top: 20px;
    color: #666;
}

/* Menu giả lập (dùng để giữ đồng bộ giao diện) */
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

.map-box {
    width: 172%;
    height: 250px;        /* ≈ 1/2 chiều rộng, gọn */
    border-radius: 8px;
    overflow: hidden;     /* ÉP MAP KHỚP KHUNG */
}
.map-box iframe {
    width: 100%;
    height: 100%;
    border: 0;
}
</style>
</head>
<body>


<a href="index.php" class="header-link mt-3">← Quay lại Trang chủ</a>

<div class="container">
    <div class="contact-container">
        <h2 class="text-center text-primary mb-4">📞 Liên hệ và Yêu cầu Tư vấn</h2>
        <p class="text-center text-muted">Chúng tôi sẵn lòng giải đáp mọi thắc mắc của bạn về các khóa học, trung tâm và thủ tục đăng ký tại Vĩnh Long.</p>

        <div class="row mt-5 align-items-center"> <!-- thêm align-items-center -->
    
    <div class="col-md-5 mb-4 mb-md-0">
        <div class="contact-info-box text-center"> <!-- text-center để nội dung giữa -->
            <h5 class="text-secondary mb-3">Thông tin liên hệ chung</h5>
            <p>
                <strong><i class="fas fa-map-marker-alt"></i> Địa chỉ văn phòng:</strong><br>
                Tầng 5, Tòa nhà V-Tech, 123 Đường Công Nghệ, TP. Vĩnh Long.
            </p>
            <p>
                <strong><i class="fas fa-phone"></i> Đường dây nóng:</strong><br>
                (0270) 388 8888 (Phòng Tư vấn)
            </p>
            <p>
                <strong><i class="fas fa-envelope"></i> Email:</strong><br>
                hotro@tinhocvinhlong.edu.vn
            </p>
            <p>
                <strong><i class="fas fa-clock"></i> Giờ làm việc:</strong><br>
                Thứ Hai - Thứ Sáu: 8:00 - 17:00
            </p>
        </div>
    </div>

    <div class="col-md-7">
        <h5 class="text-primary mb-3">Gửi yêu cầu tư vấn</h5>
        <form action="lienhe_submit.php" method="post" class="contact-form p-4 bg-light rounded shadow-sm">
            <div class="mb-3">
                <input type="text" name="hoten" class="form-control form-control-lg" placeholder="Họ và Tên" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="tel" name="sdt" class="form-control form-control-lg" placeholder="Số điện thoại" required>
            </div>
            <div class="mb-3">
                <textarea name="noidung" class="form-control form-control-lg" rows="5" placeholder="Nội dung bạn muốn tư vấn..." required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-lg w-100">Gửi Yêu cầu</button>
        </form>
    </div>

</div>
        <div class="col-md-7 mt-4">
    <h6 class="text-secondary mb-2">
        <i class="fas fa-map-marker-alt"></i> Vị trí văn phòng
    </h6>

    <div class="map-box">
         <iframe
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3930.0139116402947!2d106.34480407479262!3d9.932798990169216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOcKwNTUnNTguMSJOIDEwNsKwMjAnNTAuNiJF!5e0!3m2!1svi!2s!4v1767517636734!5m2!1svi!2s"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

<script>
function xuLyGuiLienHe(event) {
    event.preventDefault(); // Ngăn chặn form submit

    // Lấy dữ liệu từ form (thực tế sẽ gửi AJAX/Fetch API tới server)
    const ten = document.querySelector('input[type="text"]').value;
    const sdt = document.querySelector('input[type="tel"]').value;
    
    // Mô phỏng thông báo thành công
    alert(`Cảm ơn ${ten}!\nYêu cầu tư vấn của bạn đã được gửi thành công qua số điện thoại ${sdt}.\nChúng tôi sẽ phản hồi trong vòng 24 giờ.`);
    
    // Xóa form sau khi gửi
    event.target.reset();
    return false;
}
</script>

</body>
</html>