<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add task</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

  <?php include '../navbar/navbar.php'; ?>


  <div class="wrapper">

    <div class="container" style="height:75vh; width: 70vh; border:1px solid black;">
      <fieldset style="border: 10px solid transparent; border-top-color: black; box-sizing: border-box; grid-area: 1 / 1;">
        <legend style="font-size:2rem;">Category Detail</legend>
      </fieldset>
      <div class="box">
        <div class="box1">
          <form method="post" action="c_action.php">
            <!-- <div class="mb-3 mt-3">
              <label for="text" class="form-label">C_ID:</label>
              <input type="text" class="form-control" id="cid" placeholder="Enter cid" name="cid">
            </div> -->
            <div class="mb-3">
              <label for="name" class="form-label">Name:</label>
              <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-check mb-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">Add Category Details</button>
          </form>
        </div>
      </div>
    </div>

</body>
<footer>
<?php include '../footer/footer.php';?>
</footer>

</html>