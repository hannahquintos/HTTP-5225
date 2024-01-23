<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            // $linkURL = '';
            $linkCTA = 'Codecademy';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            // $linkURL = 'https://www.w3schools.com/';
            $linkURL = '';
            $linkCTA = 'W3Schools';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            // $linkURL = 'https://www.codecademy.com/';
            $linkURL = '';
            $linkCTA = 'Mozilla';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change

        if ($linkName === ''){
            $linkName = 'Hello World';
        }

        echo '<h2>'.$linkName.'</h2>';

        // echo '<a href="'.$linkURL.'">'.$linkCTA.'</a>';
        if ($linkURL === ''){
            echo '<p>'.$linkCTA.'</p>';
        }
        else{
            echo '<a href="'.$linkURL.'">'.$linkCTA.'</a>';
        }

        echo '<img src="'.$linkImage.'" width="200" />';
        echo '<p>'.$linkDescription.'</p>';

        ?>

        <?php
        echo '<h1>Grades</h1>';

        //generate random number
        $randomNumber = ceil(rand(1,100));
        
        //output random number
        echo '<p>Your grade is '.$randomNumber.'%</p>';

        if($randomNumber < 60){
            echo '<p> Unfortunately you got an F. You have failed.</p>';
        }
        elseif($randomNumber < 70){
            echo '<p> You got an E. Congrats, you passed!</p>';
        }
        elseif($randomNumber < 75){
            echo '<p> You got a D. Congrats, you passed!</p>';
        }
        elseif($randomNumber < 80){
            echo '<p> You got a C. Congrats, you passed!</p>';
        }
        elseif($randomNumber < 85){
            echo '<p> You got a B. Congrats, you passed!</p>';
        }
        elseif($randomNumber < 90){
            echo '<p> You got an A. Congrats, you passed!</p>';
        }
        elseif($randomNumber >= 90){
            echo '<p> You got an A+. Congrats, you passed!</p>';
        }

        ?>

        <?php
        echo '<h1>Days of the Week</h1>';

        $randomDay = ceil(rand(1,7));
        echo '<p>Weekday number is '.$randomDay.'</p>';

        switch($randomDay)
        {
            case "1":
                echo "<p> Have a super Sunday! </p>";
                break;
            case "2":
                echo "<p> Have a  magnificent Monday! </p>";
                break;
            case "3":
                echo "<p> Have a terrific Tuesday! </p>";
                break;
            case "4":
                echo "<p> Have a wonderful Wednesday! </p>";
                break;
            case "5":
                echo "<p> Have a thrilling Thursday! </p>";
                break;
            case "6":
                echo "<p> Have a fantastic Friday! </p>";
                break;
            case "7":
                echo "<p> Have a stellar Saturday! </p>";
                break;
            default:
            echo "<p> Have a great day! </p>";
            break;
        }

        ?>

    </body>
</html>
