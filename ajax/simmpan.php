<?php  
$con = new mysqli('localhost','root','','ajax');

$id = $_POST['id'];
$nama = $_POST['nama'];


$data = $con->query("INSERT INTO media (id,nama) VALUES ('$id','$nama')");
echo json_encode($data);

?>