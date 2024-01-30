<!doctype html>
<html>
<head>
   <title>PHP and For Loops</title> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <h1>PHP and For Loops</h1> 
    
    <p>Use PHP echo, if statements, and loops to output all three links.</p>
        
        
    <?php

    // **************************************************
    // Do not edit this code

    // Define a multi dimensional array to store all of the links
    $links = array (
        0 => array (
          'name' => 'Codecademy',
          'url' =>'https://www.codecademy.com/',
          'image' => '',
          'description' => 'Learn to code interactively, for free.' ),
        1 => array ( 
          'name' => '',
          'url' => 'https://www.w3schools.com/',
          'image' => 'w3schools.png',
          'description' => 'W3Schools is optimized for learning, testing, and training.' ),
        2 => array (
          'name' => 'Mozilla Developer Network',
          'url' => 'https://www.codecademy.com/',
          'image' => 'mozilla.png',
          'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
        );
        
    // **************************************************
    echo "<p>-------</p>";
    // Loop through the array and display the link information
    for ($i = 0; $i < count ($links); $i ++)
    {
      if ($links[$i]['name'] != ""){
        echo '<h1>'.$links[$i]['name'].'</h1>';
      } else {
        echo '<h1>'.$links[$i]['url'].'</h1>';
      }
      if ($links[$i]['url'] != ""){
        echo '<a href="'.$links[$i]['url'].'">'.$links[$i]['name'].'</a>';
      }
      if ($links[$i]['image'] != ""){
        echo "<img src='" . $links[$i]['image']. "' width=200px />";
      }
      if ($links[$i]['description'] != ""){
        echo '<p>'.$links[$i]['description'].'</p>';
      }
      echo "<p>-------</p>";
    }

    // Use the print_r function to view the contents of the array
    echo '<pre>';
    print_r ($links);
    echo '</pre>';

    echo "<p>-------</p>";
    ?>

    <?php
      function getUsers(){
        $url = "https://jsonplaceholder.typicode.com/users";
        $data = file_get_contents("$url");
        return json_decode($data, true);
      }

      $users = getUsers();

      echo '<pre>';
      echo print_r ($users);
      echo '</pre>';

          
    ?>

    <div class="container-fluid">
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">

    <?php
      for ($i = 0; $i < count ($users); $i ++){
        echo '<div class="col">';
          echo '<div class="card" style="width: 25rem; height: 20rem; padding: 1em; margin-top: 1em">';
            echo '<div class="card-body">';
              echo '<h3 class="card-title">'.$users[$i]['name'].'</h3>';
              echo '<p class="card-text"> Username: '.$users[$i]['username'].'</p>';
              echo '<a class="card-link" href="mailto:'.$users[$i]['email'].'">'.$users[$i]['email'].'</a>';
              echo '<p class="card-text">'.$users[$i]['address']['suite']. ' ' .$users[$i]['address']['street']. ", " .$users[$i]['address']['city']. ", " . $users[$i]['address']['zipcode'] .'</p>';
              echo '<p class="card-text">'.$users[$i]['phone'].'</p>';
              echo '<a class="card-link" href="'.$users[$i]['website'].'">'.$users[$i]['website'].'</a>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      }
    ?>
  </div>
  </div>
  </div>
    
</body>
</html>
