<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php
           $servername = "localhost";
           $username = "username";
           $password = "password";
           $dbname = "db_for_PHP_first_attempt";
   
           // Create connection
           $conn = new mysqli($servername, $username, $password, $dbname);
           // Check connection
           if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
           }
   
           $sql = "INSERT INTO ticket_form_first_attempt(ID, email, platforms, region, subject, decription, state, date)
           VALUES ('1','john@example.com', )";
   
           if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
           } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
           }
   
           $conn->close();
    ?>
    </main>
</body>
</html>