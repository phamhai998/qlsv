<?php
require 'Database/Database.php';
$database = new Database;
$database->getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sach Sinh Vien</title>
</head>
<body>
    <h1>lua chon</h1>
    <a href="Students/AddStudent.php">them sinh vien</a> <br>
    <a href="Students/EditStudent.php">sua sinh vien</a> <br>
    <a href="Students/DeleteStudent.php">xoa sinh vien</a> <br>
</body>
</html>