<?php
// index.php
// This is the main page of the lab

// Include the Car class
require 'car.php';

// Include the database connection
require 'connect.php';

// Instantiate a Car object
$myCar = new Car("Toyota", "Corolla", 2020);

// Echo car information to the browser
echo "<p>" . $myCar->getInfo() . "</p>";

/*
Lab Reflection:
The easiest part of this lab was creating the Car class and instantiating an object. 
It was straightforward to define properties and methods. 
The most challenging part was setting up the PDO connection and remembering to use try/catch blocks 
to properly handle errors. Overall, I learned how to structure PHP projects using include/require
and how to connect to a database securely.
*/
?>
