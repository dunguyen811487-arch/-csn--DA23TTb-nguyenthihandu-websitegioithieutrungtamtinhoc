<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
* {
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    background: linear-gradient(135deg, #d5e0ffff, #b4fde2ff);
    color: #333;
}

/* ===== SIDEBAR ===== */
.sidebar {
    width: 230px;
    background: linear-gradient(180deg, #0d3b9c, #092c72);
    color: #fff;
    height: 100vh;
    position: fixed;
    padding: 20px;
}

.sidebar h3 {
    text-align: center;
    margin-bottom: 30px;
    font-weight: 600;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px 12px;
    margin: 8px 0;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.sidebar ul li:hover {
    background: rgba(255,255,255,0.15);
}

.logout-btn {
    width: 100%;
    background: #e74a3b;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 6px;
    font-weight: 600;
}

/* ===== MAIN ===== */
.main {
    margin-left: 250px;
    padding: 25px;
}

/* ===== BOX ===== */
.main > div {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,.08);
    margin-bottom: 20px;
}

/* ===== FORM ===== */
input, textarea {
    width: 100%;
    padding: 10px;
    margin: 6px 0;
    border-radius: 6px;
    border: 1px solid #ccc;
}

button {
    padding: 8px 14px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    background: #0d6efd;
    color: #fff;
}

button:hover {
    opacity: 0.9;
}

/* ===== CARD ===== */
.card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 16px;
    margin-top: 15px;
}

.card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 16px rgba(0,0,0,.12);
    transition: transform .2s;
}

.card:hover {
    transform: translateY(-4px);
}

.card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
}

.card-body {
    padding: 14px;
}

.card-body h4 {
    margin: 0 0 6px;
    font-size: 17px;
}

.card-body p {
    font-size: 14px;
    color: #555;
}

.card-body button {
    margin-right: 5px;
    margin-top: 6px;
}

/* ===== TABLE ===== */
table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
}

th {
    background: #0d6efd;
    color: #fff;
}

th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
}

/* ===== RESPONSIVE ===== */
@media(max-width: 768px) {
    .sidebar {
        position: relative;
        width: 100%;
        height: auto;
    }
    .main {
        margin-left: 0;
    }
}

</style>
</head>

<body>

<script>
if(localStorage.getItem("role")!=="admin"){
    alert("Bạn không có quyền!");
    location.replace("../login.html");
}
</script>

<div class="sidebar">
<h3>⚙️ ADMIN</h3>
<ul>
<li onclick="show('dashboard')">📊 Dashboard</li>
<li onclick="show('courses')">📚 Khóa học</li>
<li onclick="show('center')">🏢 Trung tâm</li>
<li onclick="show('dangky')">📝 Đăng ký học</li>
<li onclick="show('lienhe')">📩 Liên hệ</li>
<li onclick="show('preview')">👁️ Xem website</li>
<li><button class="logout-btn" onclick="logout()">Đăng xuất</button></li>
</ul>
</div>

<div class="main">

<!-- LIÊN HỆ -->
<div id="lienhe" style="display:none">
<h2>📩 Danh sách yêu cầu liên hệ</h2>

<table border="1" width="100%" cellpadding="8">
<thead>
<tr>
<th>Họ tên</th>
<th>Email</th>
<th>SĐT</th>
<th>Nội dung</th>
<th>Thời gian</th>
<th>Hành động</th>
</tr>
</thead>
<tbody>
<?php
$file = "../lienhe.txt";
if(file_exists($file)){
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach($lines as $i => $line){
        $data = explode("|", $line);
        echo "<tr>
                <td>".($data[1] ?? "")."</td>
                <td>".($data[2] ?? "")."</td>
                <td>".($data[3] ?? "")."</td>
                <td>".($data[4] ?? "")."</td>
                <td>".($data[0] ?? "")."</td>
                <td>
                  <a href='xoa_lienhe.php?i=$i' onclick=\"return confirm('Xóa yêu cầu này?')\">❌ Xóa</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6' class='text-center'>Chưa có yêu cầu nào</td></tr>";
}
?>
</tbody>
</table>
</div>

<!-- DASHBOARD -->
<div id="dashboard">
<h2>Dashboard</h2>
<p>Trang quản trị hệ thống</p>
</div>

<!-- KHÓA HỌC -->
<div id="courses" style="display:none">
<h2>📚 Quản lý khóa học</h2>

<input id="tenKH" placeholder="Tên khóa học">
<input id="trungTam" placeholder="Trung tâm">
<input id="diaChi" placeholder="Địa chỉ">
<input id="linkCT" placeholder="Link chi tiết">
<input id="hinhAnh" placeholder="Link hình ảnh">

<button onclick="themKhoaHoc()" id="btnKH">➕ Thêm</button>

<div id="dsKhoaHoc"></div>
</div>

<!-- TRUNG TÂM -->
<div id="center" style="display:none">
<h2>🏢 Quản lý trung tâm</h2>

<input id="tenTT" placeholder="Tên trung tâm">
<input id="diaChiTT" placeholder="Địa chỉ">
<textarea id="motaTT" placeholder="Mô tả trung tâm"></textarea>

<input id="khoaHocTT" placeholder="Khóa học (cách nhau bằng dấu phẩy)">
<input id="reviewTT" placeholder="Đánh giá / nhận xét">
<input id="hinhTT" placeholder="Link hình ảnh">
<input id="linkTT" placeholder="Link chi tiết trung tâm">

<button onclick="themCenter()" id="btnTT">➕ Thêm trung tâm</button>

<div id="dsCenter"></div>
</div>

<!-- DANH SÁCH ĐĂNG KÝ -->
<div id="dangky" style="display:none">
<h2>📝 Danh sách đăng ký học</h2>

<a href="../xuat_excel_dangky.php">
<button>📥 Xuất Excel</button>
</a>

<table border="1" width="100%" cellpadding="8">
<thead>
<tr>
<th>Họ tên</th>
<th>SĐT</th>
<th>Email</th>
<th>Trung tâm</th>
<th>Khóa học</th>
<th>Thời gian</th>
<th>Hành động</th>
</tr>
</thead>
<tbody>
<?php
$file = "../dangky.txt";
if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $index => $line) {
        $data = explode("|", $line);
        echo "<tr>
            <td>".($data[1] ?? "")."</td>
            <td>".($data[2] ?? "")."</td>
            <td>".($data[3] ?? "")."</td>
            <td>".($data[7] ?? "")."</td>
            <td>".($data[8] ?? "")."</td>
            <td>".($data[0] ?? "")."</td>
            <td>
                <a href='xoa_dangky.php?i=$index'
                   onclick=\"return confirm('Xóa đăng ký này?')\">
                   ❌ Xóa
                </a>
            </td>
        </tr>";
    }
}
?>


</tbody>
</table>
</div>

<!-- PREVIEW -->
<div id="preview" style="display:none">
<h2>👁️ Xem trước Website</h2>
<iframe src="../index.php"
style="width:100%;height:80vh;border-radius:10px;border:1px solid #ccc"></iframe>
</div>

</div>

<script>

  

let indexKHDangSua=-1, indexTTDangSua=-1;

function show(id){
document.querySelectorAll(".main>div").forEach(d=>d.style.display="none");
document.getElementById(id).style.display="block";
}

/* ===== KHÓA HỌC ===== */
function themKhoaHoc(){
let ds=JSON.parse(localStorage.getItem("dsKhoaHoc"))||[];
let obj={ten:tenKH.value,trungTam:trungTam.value,diaChi:diaChi.value,link:linkCT.value,hinh:hinhAnh.value};
indexKHDangSua==-1?ds.push(obj):ds[indexKHDangSua]=obj;
indexKHDangSua=-1;btnKH.innerText="➕ Thêm";
localStorage.setItem("dsKhoaHoc",JSON.stringify(ds));
xoaFormKH();hienThiKH();
}

function suaKH(i){
let k=JSON.parse(localStorage.getItem("dsKhoaHoc"))[i];
tenKH.value=k.ten;trungTam.value=k.trungTam;diaChi.value=k.diaChi;
linkCT.value=k.link;hinhAnh.value=k.hinh;
indexKHDangSua=i;btnKH.innerText="💾 Lưu";
}

function xoaKH(i){
if(!confirm("Xóa khóa học?"))return;
let ds=JSON.parse(localStorage.getItem("dsKhoaHoc"));
ds.splice(i,1);localStorage.setItem("dsKhoaHoc",JSON.stringify(ds));
hienThiKH();
}

function hienThiKH(){
let ds=JSON.parse(localStorage.getItem("dsKhoaHoc"))||[];
dsKhoaHoc.innerHTML=`<div class="card-list">${
ds.map((k,i)=>`
<div class="card">
<img src="${k.hinh||'../hinh/anhkhoahoc.jpg'}">
<div class="card-body">
<h4>${k.ten}</h4>
<p>${k.trungTam}</p>
<button onclick="suaKH(${i})">✏️</button>
<button onclick="xoaKH(${i})">❌</button>
</div></div>`).join("")}</div>`;
}

function xoaFormKH(){tenKH.value=trungTam.value=diaChi.value=linkCT.value=hinhAnh.value="";}

/* ===== TRUNG TÂM ===== */
function themCenter(){
  let ds = JSON.parse(localStorage.getItem("dsCenter")) || [];

  let obj = {
    ten: tenTT.value,
    diaChi: diaChiTT.value,
    mota: motaTT.value,
    khoaHoc: khoaHocTT.value.split(",").map(k => k.trim()),
    review: reviewTT.value,
    hinh: hinhTT.value,
    linkChiTiet: linkTT.value
  };

  if(indexTTDangSua === -1){
    // THÊM MỚI
    ds.push(obj);
  } else {
    // SỬA
    ds[indexTTDangSua] = obj;
    indexTTDangSua = -1;
    btnTT.innerText = "➕ Thêm trung tâm";
  }

  localStorage.setItem("dsCenter", JSON.stringify(ds));
  hienThiCenter();
  xoaFormTT();
}

function suaCenter(i){
  let ds = JSON.parse(localStorage.getItem("dsCenter"));
  let c = ds[i];

  tenTT.value = c.ten;
  diaChiTT.value = c.diaChi;
  motaTT.value = c.mota;
  khoaHocTT.value = c.khoaHoc.join(", ");
  reviewTT.value = c.review;
  hinhTT.value = c.hinh;
  linkTT.value = c.linkChiTiet;

  indexTTDangSua = i;
  btnTT.innerText = "💾 Lưu thay đổi";
}


function xoaCenter(i){
  if(!confirm("Xóa trung tâm này?")) return;
  let ds = JSON.parse(localStorage.getItem("dsCenter"));
  ds.splice(i,1);
  localStorage.setItem("dsCenter", JSON.stringify(ds));
  hienThiCenter();
}

function hienThiCenter(){
  let ds = JSON.parse(localStorage.getItem("dsCenter")) || [];

  dsCenter.innerHTML = `
  <div class="card-list">
    ${ds.map((c,i)=>`
      <div class="card">
        <img src="${c.hinh || '../hinh/trungtam_default.jpg'}">
        <div class="card-body">
          <h4>${c.ten}</h4>
          <p>${c.diaChi}</p>
          <p><b>Khóa học:</b> ${c.khoaHoc.join(", ")}</p>
          <p><i>"${c.review}"</i></p>
          <a href="../${c.linkChiTiet}" target="_blank">🔗 Xem chi tiết</a><br><br>

          <button onclick="suaCenter(${i})">✏️ Sửa</button>
          <button onclick="xoaCenter(${i})">❌ Xóa</button>
        </div>
      </div>
    `).join("")}
  </div>`;
}
function xoaFormTT(){
  tenTT.value =
  diaChiTT.value =
  motaTT.value =
  khoaHocTT.value =
  reviewTT.value =
  hinhTT.value =
  linkTT.value = "";
}
document.addEventListener("DOMContentLoaded",()=>{hienThiKH();hienThiCenter();});

function logout(){localStorage.removeItem("role");location.replace("../index.php");}

document.addEventListener("DOMContentLoaded",()=>{
  hienThiKH();
  hienThiCenter();
  show("dashboard");
});

</script>


</body>
</html>
