<?php

    if(isset($_GET['delete'])){

        $id = $_GET['id'];

        // Connection string
        include('../includes/connect.php');

        $query = "DELETE FROM students WHERE `id` = '$id'";

        $student = mysqli_query($connect, $query);

        if($student){
            // echo("Success");
            header("Location: ../index.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    } else{
        echo "You should not be here!";
    }

?>