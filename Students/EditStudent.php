<h1>Edit</h1>
<?php
 
require '../Database/Database.php';
$database = new Database ;

if (!empty($_POST['edit_student']))
{
    // Lay data
    $data['sv_name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['sv_sex']         = isset($_POST['sex']) ? $_POST['sex'] : '';
    $data['sv_birthday']    = isset($_POST['birthday']) ? $_POST['birthday'] : '';
    $data['sv_id']          = isset($_POST['id']) ? $_POST['id'] : '';
     
    $errors = array();
    prin_r($errors);
    if (!$errors){
        $database->edit($data['sv_id'], $data['sv_name'], $data['sv_sex'], $data['sv_birthday']);
        // Trở về trang danh sách
        header("location: ../index.php");
    }
}
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh vien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Thêm sinh vien </h1>
        <a href="../index.php">Trở về</a> <br/> <br/>
        <form method="post" action="EditStudent.php">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>ID</td>
                    <td>
                        <input type="text" name="id" />
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name"/>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <select name="sex">
                            <option value="Nam">Nam</option>
                            <option value="Nữ" >Nu</option>
                        </select>
                        <?php if (!empty($errors['sv_sex'])) echo $errors['sv_sex']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Birthday</td>
                    <td>
                        <input type="text" name="birthday"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>