<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Week 5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Student Catalog</h1>
            </div>
        </div>

        <?php
            $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
            $query = 'SELECT id, fname, lname, marks, grade, imageURL FROM students';

            $students = mysqli_query($connect, $query);

            if(mysqli_connect_error()){
                die("Connection error: " . mysqli_connect_error());
            }

            // echo '<pre>';
            // echo print_r($students);
            // echo '</pre>';


        ?>

        <div class="container">
            <div class="row">

            <?php
                foreach($students as $student){

                    if($student['marks'] < 50){
                        $bgClass = 'bg-danger';
                    } else{
                        $bgClass = 'bg-success';
                    }


                    echo '<div class="col-md-4">
                            <div class="card ' . $bgClass . '">
                                <img class="card-img-top" src="' . $student['imageURL'] . '" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">' . $student['fname'] . ' ' . $student['lname'] . '</h5> Marks: ' . $student['marks'] . '
                                </div>
                            </div>
                         </div>';
                }
            ?>

            </div>
        </div>

    </div>
    </div>
  </body>
</html>