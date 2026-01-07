<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

$thongbao = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $ten      = trim($_POST["tenHocVien"] ?? "");
    $sdt      = trim($_POST["sdtHocVien"] ?? "");
    $email    = trim($_POST["emailHocVien"] ?? "");
    $tuoi     = trim($_POST["tuoiHocVien"] ?? "");
    $trungTam = trim($_POST["trungTam"] ?? "");
    $khoaHoc  = trim($_POST["khoaHoc"] ?? "");
    $trinhDo  = trim($_POST["trinhDo"] ?? "");
    $mucTieu  = trim($_POST["mucTieu"] ?? "");

    if ($ten === "" || $sdt === "" || $trungTam === "" || $khoaHoc === "") {
        $thongbao = "❌ Vui lòng nhập đầy đủ thông tin bắt buộc.";
        return;
    }

    $thoigian = date("d/m/Y H:i:s");

    $dong = "$thoigian|$ten|$sdt|$email|$tuoi|$trinhDo|$mucTieu|$trungTam|$khoaHoc\n";
    file_put_contents("dangky.txt", $dong, FILE_APPEND | LOCK_EX);

    $thongbao = "✅ Đăng ký thành công! Chúng tôi sẽ liên hệ sớm.";
}
