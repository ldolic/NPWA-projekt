<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Leon Dolic">
    <title>Naslovnica</title>
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

      
    <main>
        <h2>Gradski nogometni klub Dinamo Zagreb</h2>
        <div class="content">
            
                <p>
                    <img src="Slike/Dinamo.png" alt="Primjer slike" class="content-image">
                    Građanski nogometni klub Dinamo Zagreb je hrvatski nogometni klub iz Zagreba. 
                    Od osnutka Republike Hrvatske najtrofejniji je klub u državi. Nadimci kluba su modri, zagrebački plavi, plavi lavovi, purgeri...
                </p>

                <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed risus quis augue aliquam porta. 
				   Maecenas rhoncus pulvinar magna sit amet ultrices. Nunc vitae dignissim lorem, vel rutrum est. 
				   Donec congue tincidunt nisl at congue. Aliquam pretium lacus vel finibus pellentesque. 
				   Nullam vestibulum tincidunt quam, ac fermentum ante congue in. Donec facilisis suscipit mauris quis pulvinar. Donec eu libero nunc.
					Suspendisse efficitur dolor nec ullamcorper feugiat. Proin commodo faucibus dui, sed venenatis augue condimentum vitae. 
					Cras ac odio nec risus fermentum aliquet. Quisque magna diam, tempor sed tellus in, laoreet porttitor lorem. Ut sit amet sem dictum, 
					luctus nibh non, varius velit. Nulla nec tincidunt neque. Phasellus interdum tristique pretium. Praesent ac justo eget tellus commodo convallis. 
					Vestibulum et euismod nisl, vitae porta nulla. Vivamus faucibus nisi sed tortor porta, id placerat est euismod. 
					Cras volutpat, nibh et consectetur lacinia, elit magna dapibus quam, pellentesque rutrum est sapien id justo. Maecenas faucibus leo vel justo posuere, 
					et pulvinar ante pellentesque. Vivamus et tortor ultricies, cursus lorem tincidunt, consequat tellus. Pellentesque commodo diam vitae varius maximus.
					Proin pretium libero nec turpis ornare, pharetra gravida tortor ultrices. Cras ultricies est id arcu ornare, at tempor sapien feugiat. Maecenas quis magna vel dui porta 
					accumsan eu eu augue. Sed sed suscipit ipsum, sit amet sodales nisl. In interdum varius enim eget vestibulum. Suspendisse congue ultricies hendrerit. 
					
                </p>
          
        </div>
        <div class="content">
            <p>Nullam varius luctus quam in feugiat. Praesent maximus quis ligula sed dignissim. Aliquam commodo vel erat ut tempus. Orci varius natoque penatibus et 
					magnis dis parturient montes, nascetur ridiculus mus. Praesent eu ultrices mi. Duis id congue neque. Cras vitae euismod lectus.
					Ut sem lacus, cursus in venenatis vitae, pharetra eu mauris. Nam quis sagittis purus. Sed at maximus libero, id fermentum mi. Donec et felis consectetur, 
					aliquet urna eu, dictum mi. Duis et dolor vel nulla lacinia porta. Aliquam at mattis nunc. Nulla sodales volutpat tellus in aliquam. Nullam commodo dignissim condimentum. 
					Sed id sodales orci, rutrum auctor sapien. Integer congue, sapien in rutrum pharetra, quam eros finibus est, eget blandit nibh dui sit amet odio. Nullam luctus non metus in semper.
					Integer pulvinar venenatis lorem, vitae ultrices purus aliquam ac. Vivamus luctus fermentum eros non accumsan.
					Maecenas vulputate nec diam vitae consectetur. Praesent quis maximus diam, in facilisis quam. Suspendisse scelerisque libero urna, vitae lacinia mauris bibendum non. Etiam enim ante, 
					congue sit amet accumsan sed, iaculis tincidunt neque. Quisque eleifend at elit nec posuere. Suspendisse ut velit a quam sagittis gravida. Nullam tempus lacus vel nibh laoreet gravida. 
					Aenean odio ipsum, viverra eget aliquet at, scelerisque sit amet magna. Duis tristique malesuada erat. Nunc cursus ante odio, eget facilisis mauris hendrerit ac. Vivamus rhoncus quam quis 
					blandit elementum. Maecenas consequat et dui quis faucibus. Donec risus magna, auctor at sollicitudin in, congue at tortor.
					</p>
        </div>
    </main>
    
    <footer>
        <p>Copyright © 2024. Sva prava pridržana.</p>
        <p>
            Pratite nas na:
            <a href="https://github.com/ldolic/NPWA-projekt"><img src="Slike/git.png" alt="GitHub ikona"></a>
        </p>
    </footer>
</body>
</html>
