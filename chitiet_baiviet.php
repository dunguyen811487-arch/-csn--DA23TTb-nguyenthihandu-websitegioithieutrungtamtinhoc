<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Chi tiết bài viết</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <a href="index.php" class="btn btn-secondary mb-3">← Quay lại</a>

    <div class="card shadow">
        <div class="card-body">
            <h2 id="tieuDe" class="text-primary"></h2>
            <hr>
            <p id="noiDung" class="fs-5"></p>
        </div>
    </div>
</div>

<script>
const baiViet = [
{
    id: 0,
    tieuDe: "Vì sao kỹ năng Tin học là bắt buộc?",
    noiDung: "Trong thời đại công nghệ số phát triển mạnh mẽ như hiện nay, kỹ năng tin học không còn là lợi thế mà đã trở thành yêu cầu bắt buộc đối với hầu hết các ngành nghề. Từ học sinh, sinh viên cho đến người lao động, việc sử dụng thành thạo máy tính và các phần mềm cơ bản là điều kiện cần để học tập, làm việc hiệu quả. Các kỹ năng như soạn thảo văn bản bằng Microsoft Word, xử lý số liệu với Excel, thiết kế bài thuyết trình bằng PowerPoint hay khai thác thông tin trên Internet giúp người dùng tiết kiệm thời gian, nâng cao chất lượng công việc và giảm thiểu sai sót.\n\nBên cạnh đó, kỹ năng tin học còn đóng vai trò quan trọng trong việc thích nghi với môi trường làm việc hiện đại, nơi mà hầu hết các quy trình đều được số hóa. Doanh nghiệp ngày nay ưu tiên tuyển dụng những ứng viên có khả năng sử dụng công nghệ thành thạo, linh hoạt và sẵn sàng học hỏi các công cụ mới. Việc thiếu kỹ năng tin học sẽ khiến người lao động gặp nhiều hạn chế trong quá trình làm việc và thăng tiến.\n\nChính vì vậy, trang bị kỹ năng tin học từ sớm không chỉ giúp cá nhân nâng cao hiệu suất học tập, lao động mà còn mở rộng cơ hội việc làm, đáp ứng yêu cầu của xã hội trong quá trình chuyển đổi số hiện nay."
},
{
    id: 1,
    tieuDe: "Những khóa học Tin học phổ biến",
    noiDung: "Nhằm đáp ứng nhu cầu học tập và làm việc ngày càng đa dạng của người học, các khóa học tin học hiện nay được thiết kế phong phú và phù hợp với nhiều đối tượng khác nhau. Trong đó, tin học văn phòng là khóa học phổ biến nhất, cung cấp kiến thức và kỹ năng sử dụng các phần mềm như Word, Excel, PowerPoint để phục vụ học tập, công việc hành chính và quản lý dữ liệu.\n\nBên cạnh tin học văn phòng, các khóa học thiết kế đồ họa cũng thu hút đông đảo học viên, đặc biệt là những người yêu thích sáng tạo và làm việc trong lĩnh vực truyền thông, quảng cáo. Ngoài ra, các khóa học lập trình Web, Python, C/C++ giúp người học tiếp cận với lĩnh vực công nghệ thông tin chuyên sâu, từ đó mở ra nhiều cơ hội nghề nghiệp trong tương lai.\n\nViệc lựa chọn khóa học phù hợp với mục tiêu cá nhân sẽ giúp học viên tiết kiệm thời gian, chi phí và đạt hiệu quả cao trong quá trình học tập. Các khóa học tin học không chỉ cung cấp kiến thức lý thuyết mà còn chú trọng thực hành, giúp người học tự tin ứng dụng vào thực tế."
},
{
    id: 2,
    tieuDe: "Học Tin học ở đâu uy tín tại Vĩnh Long?",
    noiDung: "Tại Vĩnh Long, nhu cầu học tin học ngày càng tăng cao, kéo theo sự phát triển của nhiều trung tâm đào tạo tin học với quy mô và chất lượng khác nhau. Việc lựa chọn một trung tâm uy tín đóng vai trò quan trọng trong việc đảm bảo hiệu quả học tập và khả năng ứng dụng kiến thức vào thực tế. Các trung tâm chất lượng thường có chương trình đào tạo rõ ràng, giáo trình được cập nhật theo xu hướng công nghệ mới và chú trọng thực hành.\n\nNgoài ra, đội ngũ giảng viên là yếu tố then chốt quyết định chất lượng đào tạo. Những giảng viên có kinh nghiệm thực tế sẽ giúp học viên dễ dàng tiếp cận kiến thức, giải đáp thắc mắc và định hướng học tập phù hợp. Bên cạnh đó, cơ sở vật chất, phòng máy và phần mềm giảng dạy cũng cần được đầu tư đầy đủ để đáp ứng nhu cầu học tập.\n\nVới mức học phí hợp lý, thời gian học linh hoạt và môi trường học tập chuyên nghiệp, các trung tâm tin học uy tín tại Vĩnh Long đang góp phần nâng cao chất lượng nguồn nhân lực, giúp người học tự tin hơn trong học tập, công việc và hội nhập vào môi trường số."
}
];


const params = new URLSearchParams(window.location.search);
const id = parseInt(params.get("id"));

const bv = baiViet.find(b => b.id === id);

if (bv) {
    document.getElementById("tieuDe").innerText = bv.tieuDe;
    document.getElementById("noiDung").innerText = bv.noiDung;
} else {
    document.body.innerHTML = "<h3 class='text-center mt-5'>Bài viết không tồn tại</h3>";
}
</script>

</body>
</html>
