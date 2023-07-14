<?php
    // Database connection configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_books";
  
    // Create database connection
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    // Check if connection was successful
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  
    // If the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      // Retrieve form data
      $name = $_POST["name"];
      $email = $_POST["email"];
      $feedback = $_POST["feedback"];
      $rating = $_POST["rating"];
  
      // Prepare SQL statement to insert the form data into a table
      $sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', '$rating')";
  
      // Execute the SQL statement
      if ($conn->query($sql) === TRUE) {
        echo "<p>Thank you for your feedback!</p>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  
    // Close the database connection
    $conn->close();
    ?>
