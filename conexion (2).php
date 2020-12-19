<?php




$link =  mysqli_connect("127.0.0.1", "root", "", "agn3");


if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


$mysqli = new mysqli("localhost", "root", "", "agn3");
mysqli_character_set_name($link);

/* change character set to utf8 */

if (!mysqli_set_charset($link, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($link));
    exit();
} else {
mysqli_character_set_name($link);
}

?>