<?php
$pageTitle = 'Katalog Indie Her';
include 'template/header.php'; 
?>

<section id="uvod" class="hero-section">
    <div class="container hero-content">
        <h1>Katalog indie her</h1>
        <p class="subtitle">
            Najdete zde skoro každou indie hru, kterou hledáte!
            Hodnocení máme z oficiálních stránek Steamu.
            Tato stránka slouží pouze jako katalog nikoliv jako internetový obchod 
            - hry si můžete zakoupit na oficiálních stránkách vývojářů nebo na platformách jako <a href="https://store.steampowered.com/">Steam</a>, <a href="https://www.gog.com/en/">GOG</a> či <a href="https://itch.io/">Itch.io</a>.
        </p>
    </div>
</section>

<?php
$games = [
    ['id' => 1, 'title' => 'Galactic Fighter', 'genre' => 'Sci-Fi Akce', 'image' => 'assets/img/game1.jpg'],
    ['id' => 2, 'title' => 'Středověký Hrad', 'genre' => 'Strategie', 'image' => 'assets/img/game2.jpg'],
    ['id' => 3, 'title' => 'Tajuplný Ostrov', 'genre' => 'Adventure', 'image' => 'assets/img/game3.jpg'],
    ['id' => 4, 'title' => 'Rychlá Auta 99', 'genre' => 'Závody', 'image' => 'assets/img/game4.jpg'],
    ['id' => 5, 'title' => 'Kouzelný les', 'genre' => 'RPG', 'image' => 'assets/img/game5.jpg'],
    ['id' => 6, 'title' => 'Vesmírná loď', 'genre' => 'Simulátor', 'image' => 'assets/img/game6.jpg'],
];
?>

<section id="game-catalog" class="info-section">
    <div class="container">
        <h2 style="margin-bottom: 40px;">Prozkoumej náš katalog her</h2>
        
        <div class="games-grid">
            
            <?php 
            // PHP cyklus, který projde pole $games a pro každou položku vloží šablonu kartičky
            foreach ($games as $game) {
                // Tímto vkládáme soubor template/game_card.php, který vykreslí čtvercovou kartičku
                include 'template/card.php'; 
            }
            ?>
            
        </div>
        </div>
</section>

<?php 
include 'template/footer.php';
?>