<?php

    //if submit button was clicked
    //grades in the name of the submit button
    if(isset($_POST['grades'])){
        // print_r($_POST);

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];
        $imageURL = $_POST['imageURL'];

        // Connection string
        include('../includes/connect.php');

        //use mysqli_real_escape_string to sanitize data - takes in 2 parameters (connection string, column name)
        $query = "INSERT INTO students (fname, lname, marks, imageURL) 
        VALUES (
            '".mysqli_real_escape_string($connect, $fname)."',
            '".mysqli_real_escape_string($connect, $lname)."',
            '".mysqli_real_escape_string($connect, $marks)."',
            '".mysqli_real_escape_string($connect, $imageURL)."')";

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