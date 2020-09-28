<?php

class Database 
{
    public $connect;
    
    public function connect(){
        global $connect;
        $connect = mysqli_connect('localhost','qlsv_db','12345678','qlsv_db');
        // var_dump($connect);
    }
    public function getAll(){
        // lay ra tat ca danh sach sinh vien
        global $connect;
        $this->connect();
        $connect = mysqli_connect('localhost','qlsv_db','12345678','qlsv_db');
        $sql = "SELECT * FROM `tv_sinhvien`";
        $query = mysqli_query($connect, $sql);
        // var_dump($query);
        $data = [];
        if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){
                array_push($data,$row);
            }
        }
        return $data;
    }
    public function getID($id)
    {
        // lay sinh vien theo id
        global $connect;
        $this->connect();
        $sql = "SELECT * FROM `tv_sinhvien` WHERE sv_id = ${id}";
        $query = mysqli_query($connect, $sql);
        $data = [];
        if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){
                array_push($data,$row);
            }
        }
        return $data;

    }
    public function add($student_name, $student_sex, $student_birthday)
    {
        //them sinh vien
        global $connect;
        $this->connect();
        $sql="INSERT INTO `tv_sinhvien` (`sv_name`, `sv_sex`, `sv_birthday`) VALUES ('${student_name}', '${student_sex}', '${student_birthday}')";
        var_dump($sql);
        $query = mysqli_query($connect, $sql);
        return $query;
    }
    public function edit($id, $student_name, $student_sex, $student_birthday)
    {
        // sua sinh vien
        global $connect;
        $this->connect();
        $sql = "UPDATE `tv_sinhvien` SET `sv_name`='${student_name}',`sv_sex`='${student_sex}',`sv_birthday`= '${student_birthday}' WHERE sv_id = ${id}";
        $query = mysqli_query($connect, $sql);
        return $query;

    }
    public function delete($id)
    {
        // xoa sinh vien
        global $connect;
        $this->connect();
        $sql = "DELETE FROM `tv_sinhvien` WHERE sv_id = ${id}";
        $query = mysqli_query($connect, $sql);
        return $query;
    }
}
?>