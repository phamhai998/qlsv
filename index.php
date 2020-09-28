<?php
require 'Database/Database.php';
$database = new Database;
$students = $database->getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danh sách sinh viên</title>
</head>
<body>
    <h1>bảng danh sách sinh viên</h1>
    <table width="100%" border="1" cellspacing="0" cellpadding="8">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Gender</td>
                    <td>Birthday</td>
                    <td>Options</td>
                </tr>
                <?php foreach ($students as $item){ ?>
                <tr>
                    <td><?php echo $item['sv_id']; ?></td>
                    <td><?php echo $item['sv_name']; ?></td>
                    <td><?php echo $item['sv_sex']; ?></td>
                    <td><?php echo $item['sv_birthday']; ?></td>
                    <td>
                    <form method="post" action="Students/DeleteStudent.php">
                        <input onclick="window.location = 'Students/EditStudent.php?id=<?php echo $item['sv_id']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['sv_id']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                    </td>
                </tr>
                <?php } ?>
    </table>
    <a href="Students/AddStudent.php">thêm sinh viên</a>
</body>
</html>