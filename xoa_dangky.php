<?php
$file = "../dangky.txt";

if (!isset($_GET['i'])) {
    header("Location: admin.php");
    exit;
}

$index = intval($_GET['i']);

$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (isset($lines[$index])) {
    unset($lines[$index]);
    file_put_contents($file, implode("\n", $lines));
}

header("Location: admin.php#dangky");
exit;