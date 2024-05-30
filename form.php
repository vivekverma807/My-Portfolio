<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

$n_nam = $_POST['nam'];
$n_ema = $_POST['ema'];
$n_num = $_POST['num'];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection Failed!" . mysqli_connect_error());
} else {
    $sql = "INSERT INTO form VALUES ('$n_nam','$n_ema','$n_num')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<br>Data Inserted";
    } else {
        echo "<br>Data Not Inserted";
    }
}
?>