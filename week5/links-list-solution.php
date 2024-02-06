<?php

// Connect to the MySQL database
$connect = mysqli_connect('<DB_HOST>', '<DB_USER>', '<DB_PASSWORD>', '<DB_DATABASE>');

// If the connection did not work, display an error message
if (!$connect) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

?>
<!doctype html>
<html>
    <head>
        <title>PHP amd MySQL</title>
    </head>
    <body>

        <h1>PHP and MySQL</h1>

        <?php

        // Create a query
        $query = 'SELECT id,name,url,image,description
            FROM links
            ORDER BY name';

        // Execute the query
        $result = mysqli_query($connect, $query);

        // If there is no result, display an error message
        if (!$result)
        {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
        }

        // Display the number of recirds found
        echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';

        // Loop through the records found
        while ($record = mysqli_fetch_assoc($result))
        {

            // Output the record using if statements and echo
            echo '<hr>';

            if ($record['name'])
            {
                echo '<h2>' . $record['name'] . '</h2>';
            }
            else
            {
                echo '<h2>' . $record['url'] . '</h2>';
            }

            if ($record['description'])
            {
                echo '<p>' . $record['description'] . '</p>';
            }

            if ($record['image'])
            {
                echo '<img src="' . $record['image'] . '" width="100">';
            }

            
            if ($record['url'])
            {

                echo '<br>';

                echo '<a href="' . $record['url'] . '">';

                if ($record['name'])
                {
                    echo 'Visit ' . $record['name'];
                }
                else
                {
                    echo $record['url'];
                }

                echo '</a>';
            }

            // This code will help with debugging
            echo '<pre>';
            print_r($record);
            echo '</pre>';

        }

        ?>


    </body>
</html>
