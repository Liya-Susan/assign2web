<?php
// home.php - Dynamically display articles from the database
include 'includes/db.php';

// Fetch articles from the database
$sql = "SELECT * FROM articles ORDER BY created_at DESC";
$result = $conn->query($sql);

echo "<div class='content'>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<article>";
        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
        echo "<small>Posted on: " . $row['created_at'] . "</small>";
        echo "</article>";
    }
} else {
    echo "<p>No articles found.</p>";
}
echo "</div>";

$conn->close();
?>
