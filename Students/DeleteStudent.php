<h1>Delete</h1>
<?php
require '../Database/Database.php';
$database = new Database;
 
// Thực hiện xóa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
// die;
if ($id){
    $database->delete($id);
    header("location: ../index.php");
}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditStudent</title>
</head>
<body>
    <a href="../index.php">trở về</a>
    <h1>xóa thông tin sinh viên</h1>
        <form method="get" action="DeleteStudent.php?">
        <h3>nhập vào id sinh viên cần xóa </h3>
        ID : <input type="text" name="id"/>
        <input type="submit" />
        </form>
</body>
</html>