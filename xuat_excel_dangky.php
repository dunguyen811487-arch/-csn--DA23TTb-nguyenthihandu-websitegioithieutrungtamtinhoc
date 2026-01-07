<?php
header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=danh_sach_dang_ky.xls");
header("Pragma: no-cache");
header("Expires: 0");

// BOM UTF-8
echo "\xEF\xBB\xBF";

$file = "dangky.txt";

echo "<table border='1'>";
echo "<tr>
        <th>Họ tên</th>
        <th>SĐT</th>
        <th>Email</th>
        <th>Khóa học</th>
        <th>Thời gian</th>
      </tr>";

if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $d = explode("|", $line);
        echo "<tr>
                <td>".($d[1]??"")."</td>
                <td>".($d[2]??"")."</td>
                <td>".($d[3]??"")."</td>
                <td>".($d[8]??"")."</td>
                <td>".($d[0]??"")."</td>
              </tr>";
    }
}
echo "</table>";
exit;