<?php 
 include '../connections/config.php';

 $id = $_POST['id'];
 $name = $_POST['name'];
 
 $sql = "UPDATE `category` SET  `name` = '$name' WHERE `id` = '$id;";
 $result = mysqli_query($conn, $sql);
 if($result){
    header('location: allCategory.php');
 }else{
    header('location: editCategory.php?id='.$id);
 }
?>