<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["err_email"];
    $url = $_POST["err_url"];
    $description = $_POST["err_desc"];

    // Process the data (you can customize this part based on your needs)
    $subject = "New Suggestion Submission";
    $message = "Email: $email\nPage Address: $url\nDescription: $description";

    // You can use the mail() function to send an email, save to a database, or perform other actions.
    // Example:
    mail("amresh.csit@gmail.com", $subject, $message);

    // For demonstration purposes, let's print the data
    echo "<h2>Thank you for your suggestion!</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Page Address: $url</p>";
    echo "<p>Description: $description</p>";
} else {
    // If the form is not submitted through POST, redirect to the form page
    header("Location: index.html");
    exit();
}
?>
