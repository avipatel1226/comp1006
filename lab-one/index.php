<?php
// index.php
// This is the main page of the lab

// Include the Car class
require 'car.php';

// Include the database connection
require 'connect.php';

// Instantiate a Car object
$myCar = new Car("Honda", "Civic", 2020);

// Echo car information to the browser
echo "<p>" . $myCar->getInfo() . "</p>";

/*
Lab Reflection:

For this first lab, I found creating the Car class and using its methods fairly straightforward, 
as it reinforced my understanding of classes, properties, and constructors in PHP. 
Using include/require to organize code in separate files was easy and helped keep the project structured.

The part I found more challenging was connecting to the MySQL database using PDO, 
especially ensuring the correct port, username, and password because I already had xampp in my computer i used it in my previous
college so it was giving me connction errors. Debugging the connection error 
helped me understand the importance of error handling with try/catch blocks.

Overall, this lab helped me practice both PHP object-oriented programming and database connectivity, 
and it gave me confidence to work with PHP and MySQL for future projects.
*/
?>
