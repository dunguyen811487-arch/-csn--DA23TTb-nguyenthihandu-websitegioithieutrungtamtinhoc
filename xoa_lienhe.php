<?php
$file = "../lienhe.txt";
if(isset($_GET['i']) && file_exists($file)){
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $index = intval($_GET['i']);
    if(isset($lines[$index])){
        unset($lines[$index]);
        file_put_contents($file, implode("\n",$lines)."\n", LOCK_EX);
    }
}
header("Location: admin.php"); // quay lại trang admin
exit;
?>