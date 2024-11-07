<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $days = $_POST['days'];
    $preferences = $_POST['preferences'];

   
    echo "<h1>Thank you, $name!</h1>";
    echo "<p>Your itinerary plan has been submitted.</p>";
}
?>
