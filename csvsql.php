<?php
//set the connection variables
$hostname = "localhost";
$username = "root";
$password = "";
$database = "library";
$filename = "Book1.csv";

//connect to mysql database
$connection = mysqli_connect($hostname, $username, $password, $database) or die("Error " . mysqli_error($connection));

// open the csv file
$fp = fopen($filename,"r");

//parse the csv file row by row
while(($row = fgetcsv($fp,"500",",")) != FALSE)
{
    //insert csv data into mysql table
    $sql = "INSERT INTO book(name, author, date) VALUES('" . implode("','",$row) . "')";
    if(!mysqli_query($connection, $sql))
    {
        die('Error : ' . mysqli_error());
    }
}

fclose($fp);

//close the db connection
mysqli_close($connection);
?>