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

I found creating the Car class and using methods straightforward. 
Connecting to the MySQL database with PDO was a bit challenging at first, 
especially figuring out the correct port and credentials. 
Using include/require to organize my code was easy and helped keep the code clean.
*/
?>
