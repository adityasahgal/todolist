<?php

include '../connections/config.php';


$id = $_GET['id'];
$sql = "DELETE FROM `category` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);
if($result){
    header('Location: allCategory.php');
} else {
    // echo "The db is not update" . mysqli_error($conn);
    header('Location: allCategory.php');
}
// print_r($row);
?>