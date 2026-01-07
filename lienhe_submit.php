<?php
if(isset($_POST['submit'])){
    $file = "lienhe.txt";
    $ten = $_POST['hoten'] ?? "";
    $email = $_POST['email'] ?? "";
    $sdt = $_POST['sdt'] ?? "";
    $noidung = $_POST['noidung'] ?? "";

    $line = date('Y-m-d H:i:s') . "|$ten|$email|$sdt|$noidung\n";
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo "<script>alert('Cảm ơn $ten! Yêu cầu đã được gửi.');location.replace('index.php');</script>";
}
?>
