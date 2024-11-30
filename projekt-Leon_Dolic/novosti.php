<?php
include 'db.php';
$query = "SELECT * FROM novosti ORDER BY datum DESC";
$result = $conn->query($query);
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novosti</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   

    <main>
   
    <h2>Najnovije vijesti</h2>
    <div class="news-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='news-item'>";
                echo "<h3>" . htmlspecialchars($row['naslov']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['sadrzaj']) . "</p>";
                echo "<p><small>Objavljeno: " . htmlspecialchars($row['datum']) . "</small></p>";
                echo "<a href='" . htmlspecialchars($row['link']) . "' target='_blank'><button>Pročitaj više</button></a>";
                echo "</div>";
            }
        } else {
            echo "<p>Nema dostupnih vijesti.</p>";
        }
        ?>
    </div>


    </main>

    <footer>
        <p>Copyright © 2024. Sva prava pridržana.</p>
    </footer>
</body>
</html>
