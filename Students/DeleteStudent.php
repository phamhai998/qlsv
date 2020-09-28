<?php
require '../Database/Database.php';
$database = new Database;
 
// Thực hiện xóa
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    $database->delete($id);
}
header("location: ../index.php");
 
?>
