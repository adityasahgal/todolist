<?php 
include '../connections/config.php';


$name = $_POST['name'];

$sql = "INSERT INTO `category` ( `name`) VALUES ( '$name')";
$result = mysqli_query($conn, $sql);
if($result){
    header('location: allCategory.php');
}else{
    header('location: categorymodule.php');
}
?>