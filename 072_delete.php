<?php
include '072_database.php';
$db = new database();
$id = $_REQUEST['id'];
$delete = $db->delete($id);

if($delete){
    echo "<script>alert('Berhasil Menghapus Data :)');</script>";
		echo "<script>window.location.href = '072_home.php';</script>";
}
?>