// ===== BẢO VỆ ADMIN =====
if(localStorage.getItem("role") !== "admin"){
    location.href = "../login.html";
}

// ===== MENU =====
function showSection(id){
    document.querySelectorAll('.section')
        .forEach(s => s.style.display = "none");
    document.getElementById(id).style.display = "block";
}

// ===== KHÓA HỌC =====
let courses = JSON.parse(localStorage.getItem("courses")) || [];

function renderCourses(){
    const ul = document.getElementById("courseList");
    ul.innerHTML = "";
    courses.forEach((c,i)=>{
        ul.innerHTML += `
            <li>
                ${c}
                <button onclick="deleteCourse(${i})">X</button>
            </li>`;
    });
}
renderCourses();

function addCourse(){
    const name = courseName.value.trim();
    if(name){
        courses.push(name);
        localStorage.setItem("courses", JSON.stringify(courses));
        courseName.value="";
        renderCourses();
    }
}
function deleteCourse(i){
    courses.splice(i,1);
    localStorage.setItem("courses", JSON.stringify(courses));
    renderCourses();
}

// ===== THÔNG TIN TRUNG TÂM =====
function saveCenter(){
    localStorage.setItem("centerInfo", centerInfo.value);
    alert("Đã lưu thông tin trung tâm");
}
centerInfo.value = localStorage.getItem("centerInfo") || "";

// ===== LOGOUT =====
function logout(){
    localStorage.clear();
    location.href="../index.html";
}
