<?php
echo "we are going to connect to mysql database, 1st start mysq in xaamp, if its saying port 3306 is already in sue, fo to its config, itit file and change port to 3307 in 2 places and save";
/*
ways to connect:
1. using the mysqli_connect() function, which is a procedural style connection method.
2. usinf PDO, used when only mysql is not used, more db are also used
 */

 //all 3 are default when u use xaamp
 $servername = "localhost";
 $username = "root";
 $password = "root"; 

 //create connection
$conn = mysqli_connect($servername, $username, $password);

//die if connection not successful
if(!$conn)
{
    die("Sorry we couldn't connect to you. ".mysqli_connect_error());
}

echo "<br>";
echo "connection successful";
?>