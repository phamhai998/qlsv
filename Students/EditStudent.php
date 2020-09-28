<?php
require '../Database/Database.php';
$database = new Database;
 
// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
var_dump($id);
die;


if ($id){
    $data = $database->getID($id);
}
 
// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
   header("location: ../index.php");
}
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm sinh viên</title>
</head>
<body>
    <h1>Thêm sinh vien </h1>
    <a href="../index.php">Trở về</a> <br/> <br/>
</body>
</html>