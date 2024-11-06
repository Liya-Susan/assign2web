<?php
// contact.php - Handle contact form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Normally, you would store this data in a database or send an email
    echo "<p>Thank you for your message, $name!</p>";
}

include 'templates/header.php';
?>

<div class="content">
    <h2>Contact Us</h2>
    <form action="contact.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</div>

<?php
include 'templates/footer.php';
?>
