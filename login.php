<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Đăng nhập</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center" style="height:100vh">

<div class="card p-4 shadow" style="width:380px">
    <h4 class="text-center text-primary mb-3">🔐 Đăng nhập hệ thống</h4>

    <input id="user" class="form-control mb-3" placeholder="Tài khoản">
    <input id="pass" type="password" class="form-control mb-3" placeholder="Mật khẩu">

    <button onclick="login()" class="btn btn-primary w-100">Đăng nhập</button>
    <p id="err" class="text-danger text-center mt-2"></p>
</div>

<script>
function login(){
    const u = user.value;
    const p = pass.value;

    if(u === "admin" && p === "123456"){
        localStorage.setItem("login","true");
        localStorage.setItem("role","admin");
        location.href="admin/admin.php";
    }
    else if(u === "user" && p === "123"){
        localStorage.setItem("login","true");
        localStorage.setItem("role","user");
        location.href="index.php";
    }
    else{
        err.innerText="Sai tài khoản hoặc mật khẩu!";
    }
}
</script>

</body>
</html>
