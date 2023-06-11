<?php
include '../connections/config.php';
$sql = "SELECT * FROM `category`";
$result = mysqli_query($conn, $sql);
?>
<html>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
</head>
<style>
    table,tr,th,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>

<?php include '../navbar/navbar.php';?>

    <div class="btn" style="margin-left:80%; ">
        <button type="button" class="btn btn-primary" data-toggle="offcanvas" aria-pressed="false" autocomplete="off">
            <a href="categorymodule.php" style="color:white; text-decoration:none; ">Add Category</a>
        </button>
    </div>
    <div class="container mt-3 my-4 my-4">

        <table class="table">
            <thead>
                <tr>
                    <th>S.no.</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>

                        <td><a href="editCategory.php?id=<?= $row['id'] ?>"><img src="../Icon/edit-64.png" height="30px" alt=""></a>
                            <a href="deleteCategory.php?id=<?= $row['id'] ?>"><img src="../Icon/delete-100.png" height="30px" alt=""></a>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>

    </div>
    <footer>
    <?php include '../footer/footer.php';?>
    </footer>


</body>

</html>