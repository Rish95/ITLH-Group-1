<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rs";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// cd users/rishabh/documents/itlh/prac/


?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
<div class="log"><h2>Login</h2></div>
		<div class="well">
		<form action="sqcon1.php" method="post" role="form">
			<div class="form-group">
				<label for="email">Username:</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password">
			</div>
			
			<button type="submit" class="btn btn-primary center-block">Sign In</button>
		</form>
		</div>
		</div>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email=$_POST["email"];
	$pass=$_POST["pass"];	
	$sql = "INSERT INTO users (id,email,pass)
	VALUES (null, '$email','$pass')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - E-mail: " . $row["email"]. " " . $row["pass"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
  ?>
</body>
</html>