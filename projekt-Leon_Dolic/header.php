<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Leon Dolic">
    <title>GNK Dinamo Zagreb</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <div class="header-content">
            <h1>Dobrodošli!</h1>
            <img src="Slike/Dinamo.png" alt="Primjer slike" class="header-image">
            <div class="time-display">
                <?php
                    echo date("d. M Y. H:i:s");
                ?>
            </div>
        </div>
    </header>
	 <nav class="navbar">
			<ul class="menu">
        <li><a href="index.php">Početna</a></li>
        <li><a href="novosti.php">Novosti</a></li>
        <li><a href="galerija.php">Galerija</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
        <li><a href="login.php">Admin</a></li>
    </ul>
</nav>
	</body>
	
	</html>