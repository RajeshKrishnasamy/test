<?php

require "../Dp/singleton.php";

$connection = ConnectDb::getInstance();
$conn = $connection->getConnection();

// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


echo "<pre>";

writeln('BEGIN TESTING ABSTRACT FACTORY PATTERN');
  writeln('');

$stmt = $conn->prepare(
    "CALL GetGuestByEmail('mary@example.com')"
);

$stmt->execute();

$result = $stmt->fetchAll();
print_r ($result);

exit();

$stmt = $conn->prepare("SELECT id, firstname, lastname FROM myguests");
$stmt->execute();

// set the resulting array to associative
echo"<pre>";
$result = $stmt->fetchAll();
print_r ($result);




exit();

// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email)
VALUES (:firstname, :lastname, :email)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);

// insert a row
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

// insert another row
$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

// insert another row
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

