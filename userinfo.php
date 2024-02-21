<html>
<body>
    
<?php 

// Retrieving user input

$phone =  $_GET['phone'];
$username = $_GET['username'];
$email =  $_GET['email'];
$insurance = $_GET['insurance'];


// Establishing connection to MySQL database
$con = mysqli_connect('localhost', 'root', '', 'hospital');

// Checking if the connection was successful
if ($con) {
    // Creating the SQL query
    $sql = "INSERT INTO userinfo (username, phone, email, insurance ) 
    VALUES ('$username', '$phone', '$email', '$insurance')";

    // Executing the SQL query
    if (mysqli_query($con, $sql)) {
        echo "Record inserted successfully";
    } else {
        // Handling errors if the SQL query fails
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Closing the database connection
    mysqli_close($con);
} else {
    // Handling connection errors
    echo "Connection failed: " . mysqli_connect_error();
}

?>

</body>
</html>