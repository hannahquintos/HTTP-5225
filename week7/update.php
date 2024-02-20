<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
  <?php include('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="display-5 mt-4 mb-4">Update Student Profile</h1>
            <?php
            $id = $_GET['id'];
            $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
            $query = "SELECT * FROM students WHERE `id` = '$id'";

            $student = mysqli_query($connect, $query);

            $result = $student -> fetch_assoc();


             ?>
            <form action="includes/updateStudent.php" method="POST">
                <input type="hidden" id="id" name="id" value="<?php echo $result['id'];?>">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="First Name" value="<?php echo $result['fname'];?>">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Last Name" value="<?php echo $result['lname'];?>">
                </div>
                <div class="mb-3">
                    <label for="marks" class="form-label">Marks</label>
                    <input type="number" class="form-control" id="marks" name="marks" aria-describedby="Enter Marks" value="<?php echo $result['marks'];?>">
                </div>
                <div class="mb-3">
                    <label for="imageURL" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="Image URL" value="<?php echo $result['imageURL'];?>">
                </div>
                <button type="submit" name="grades" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
  </body>
</html>