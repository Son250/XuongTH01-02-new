<?php
function loadall_ketqua()
{
    $sql = "SELECT ketqua.id, ketqua.bo_ket_qua, taikhoan.username, dethi.id, ketqua.diem FROM ketqua JOIN taikhoan on taikhoan.id = ketqua.id_nguoi_dung join dethi on dethi.id = ketqua.id_de_thi";
    $result = pdo_query($sql);
    return $result;
}

function add_ketqua($name, $time_start, $time_end, $time, $so_de_thi)
{
    $sql = "INSERT INTO `lichthi`(`name`, `time_start`, `time_end`,`time`, `so_de_thi`) VALUES ('$name','$time_start','$time_end','$time', '$so_de_thi')";
    pdo_execute($sql);
}
function add_ketqua_nguoidung($id_nguoi_dung, $id_de_thi)
{
    $sql = "INSERT INTO `ketqua`(`bo_ket_qua`, `id_nguoi_dung`, `id_de_thi`, `diem`) VALUES ('not','$id_nguoi_dung', '$id_de_thi','not')";
    pdo_execute($sql);
}

function delete_ketqua($id)
{
    $sql = "DELETE FROM lichthi where id =" . $id;
    pdo_execute($sql);
}
function getold_ketqua($id)
{
    $sql = "select * from lichthi where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function update_ketqua($id, $name, $time_start, $time_end, $time, $so_de_thi)
{

    $sql = "UPDATE `lichthi` SET `name`='$name',`time_start`='$time_start',`time_end`='$time_end',`time`='$time' ,`so_de_thi`='$so_de_thi' WHERE id= $id";
    pdo_execute($sql);
}
function  kq($true,$userID,$id,$diem){
    $conn = pdo_get_connection();
    $sql = "INSERT INTO ketqua(bo_ket_qua, id_nguoi_dung, id_de_thi, diem) 
            VALUES (:bo_ket_qua, :id_nguoi_dung, :id_de_thi, :diem)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':bo_ket_qua', $true);
    $stmt->bindParam(':id_nguoi_dung', $userID);
    $stmt->bindParam(':id_de_thi', $id); // Chú ý sửa tên tham số này thành :pttt
    $stmt->bindParam(':diem', $diem);
   
    $stmt->execute();
    $last_id = $conn->lastInsertId();
    return $last_id;
}