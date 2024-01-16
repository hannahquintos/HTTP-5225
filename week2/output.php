<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <?php

    echo '<h1>PHP and Creating Output</h1>';

    echo '<p>The PHP echo command can be used to create output.</p>';

    echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>';

    echo '<ul>
              <li>Use HTML special characters</li>
              <li>Alternate between single and double quotes</li>
              <li>Use a backslash to escape quotes</li>
          </ul>';

    echo '<h2>More HTML to Convert</h2>';

    echo '<p>PHP says "Hello World!"</p>';

    echo "<p>Can you display a sentence with ''' and \"\"\"?</p>";

    // echo '<img src="php-logo.png">';

    ?>

  <img src="<?php echo 'php-logo.png' ; ?>" alt="">

  <!-- PHP VARIABLES -->
  <?php echo '<h1>PHP Variables</h1>' ; ?>
  <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';

    ?>

    <!-- <?php echo $linkName; ?> -->

    <a href="<?php echo $linkURL ?>">
      <?php echo '<h2>'. $linkName .'</h2>'; ?> <!-- . is like + in javascript (used to concatenate) -->
    </a>

    <?php echo '<p>' . $linkURL . '</p>'; ?>
    <?php echo '<img src=' . $linkImage . '>'; ?>
    <?php echo '<p>' . $linkDescription . '</p>'; ?>

    <!-- PHP ARRAYS -->
    <?php echo '<h1>PHP Arrays</h1>' ; ?>
    
    <?php 
      $person['first'] = 'Hannah';
      $person['last'] = 'Quintos';
      $person['program'] = 'Web Development';
      echo '<p>' . $person['first'] . ' ' . $person['last'] . ' is in the ' . $person['program'] . ' program!</p>';
    ?>

  <?php
    $languages = array( 'HTML', 'CSS', 'JavaScript', 'PHP', 'C#' );
    echo '<p>' . $person['first'] . ' is learning ' . $languages[0] . ', ' . $languages[1] . ', ' . $languages[2] . ', ' . $languages[3] . ', and ' . $languages[4] . '.</p>';
  ?>
  </body>
</html>
