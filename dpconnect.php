<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "exam_registration";
$conn = mysqli_connect($servername, $username, $password, $database);
$username = $_POST['username '];
$password = $_POST['password'] ;

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt= $conn->prepare("insert into users(username,password) values(?,?)");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ")
    $stmt->bind_param("sss",$username, $password);
    $stmt->execute();
    echo"Successful";
    $stmt->close();
    $conn->close();
}

?>                                                                                                                                            