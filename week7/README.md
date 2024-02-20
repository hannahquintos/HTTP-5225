# A Basic Introduction to PHP and MySQL

This tutorial will review how to use SQL and PHP to display data from a MySQL database in an HTML webpage. 

## The End Goal

The `links.sql` file in the repository includes a list of links that can be imported into your MySQL database. Once those have been imported we will use PHP and SQL to display the data from the MySQL database in an HTML webpage. 

There are multiple methods of retrieving data from a MySQL database using PHP. For simplicity sake the example below will use a series of `mysqli` PHP functions. 

## Steps

1. Open up phpMyAdmin.

    If you're using a local server phpMyAdmin can usually be accessed by starting your server and then clicking on the phpMyAdmin link. If you're using a hosting account there will be a link to phpMyAdmin in your control panel. 
    
    Once you have phpMyAdmin open, click on the import tab and select the `links.sql` file from this repository. This will create a table called `links` and populate it with some sample data. 

2. Create a new file and name it `links-list.php`. In that file place the standard HTML tags. 

3. Above the `doctype` tag add some PHP to connect to your database:
    
    ```php
    <?php
    
    $connect = mysqli_connect('localhost', 'root', 'root', 'sandbox');
    
    if (!$connect) 
    {
        echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
        echo 'Error Message: ' . mysqli_connect_error() . '<br>';
        exit;
    }
    
    ?>
    ```

    The first line of PHP will initiatie a connection to your MySQL server. The `mysqli_connect` function requires a host, username, password, and database name. 
    
    If you are using a local PHP server link MAMP or WAMP your host is `localhost` and your username and password are likely both `root`. This may vary depending on how you set up your local host. The database name will be whataver you named your database. If you don't have one go ahead an create one. 
    
    If you are using a hosting account, your MySQL user, password, and database will need to be created in your hosting control panel. There is likely help in your control panel on what to use for your host. 
    
    The second part of the above code will display an error message if the MySQL connection fails. 
    
    > Hint: It would be a good idea to test at this point, nothing else below will work if your MySQL connection isn't working. 
    
    > [More information on PHP and `mysqli_connect()`](https://www.php.net/manual/en/function.mysqli-connect.php)

4. In the body section of your document add the following PHP:

    ```php
    <?php
    
    $query = 'SELECT id,name,url,image,description
      FROM links
      ORDER BY name';
    $result = mysqli_query($connect, $query);
    
    if (!$result)
    {
      echo 'Error Message: ' . mysqli_error($connect) . '<br>';
      exit;
    }
    
    echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';
    
    ?>
    ```
    
    The first block of PHP will create and execute an SQL statement. If this query is successful then inside the `$result` variable will be a list of links. The next block of code will display an error message if the query failed. The final line of PHP will inform us as to how many records the query retrieved.

    > [More information on PHP and `mysqli_query()`](https://www.php.net/manual/en/mysqli.query.php)

4. After the query has executed successfully, add this PHP:

    ```php
    <?php
    
    while ($record = mysqli_fetch_assoc($result))
    {
    
      echo '<hr>';
      echo '<h2>' . $record['name'] . '</h2>';
      echo '<p>' . $record['url'] . '</p>';
    
      echo '<pre>';
      print_r($record);
      echo '</pre>';
    
    }
    
    ?>
    ```
    
    The above code will loop through each record and display the link. From here the link information will need to be formatted using HTML just like the [php-for-while](https://github.com/codeadamca/php-for-while) and [php-if-switch](https://github.com/codeadamca/php-if-switch) examples.

    > [More information on PHP and `mysqli_fetch_assoc()`](https://www.php.net/manual/en/mysqli-result.fetch-assoc.php)

> Full tutorial URL:  
> https://codeadam.ca/learning/php-sql-mysql.html

***

## Repo Resources

* [Visual Studio Code](https://code.visualstudio.com/) or [Brackets](http://brackets.io/) (or any code editor)
* [Filezilla](https://filezilla-project.org/) (or any FTP program)

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>
