<?php
include('db_conn.php');
echo "<pre>";
print_r($_POST);
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO `student` (`password`, `email`, `name`) VALUES ('$password', '$email', '$name')";

if ($conn->query($sql) === TRUE) {
    echo "New record added";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
