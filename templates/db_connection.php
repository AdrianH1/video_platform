<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "video_platform";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



/* change character set to utf8 */
mysqli_set_charset($conn, "utf8");

//printf("character set: %s\n", mysqli_character_set_name($conn));
?>