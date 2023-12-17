






<?php
include('db_conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `userDetail` (`userid`, `password`) VALUES ('$userid', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "Login/Signup successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



