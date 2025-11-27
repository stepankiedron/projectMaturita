<?php
$pageTitle = 'Katalog Indie Her';
include 'template/header.php'; 
?>

<section id="uvod" class="hero-section">
    <div class="container hero-content">
        <h1>Katalog indie her</h1>
        <p class="popisek">
            Najdete zde skoro každou indie hru, kterou hledáte!
            Hodnocení máme z oficiálních stránek Steamu.
            Tato stránka slouží pouze jako katalog nikoliv jako internetový obchod 
            - hry si můžete zakoupit na oficiálních stránkách vývojářů nebo na platformách jako 
            <a href="https://store.steampowered.com/">Steam</a>, 
            <a href="https://www.gog.com/en/">GOG</a> či 
            <a href="https://itch.io/">Itch.io</a>.
        </p>
    </div>
</section>

<?php
$games = [
    ['id' => 1, 'title' => 'Omori', 'genre' => 'Horror', 'studio' => 'OMOCAT, LLC', 'image' => 'img/omori.png'],
    ['id' => 2, 'title' => 'Stray', 'genre' => 'Sci-Fi, Adventure',  'studio' => 'BlueTwelve Studio', 'image' => 'img/Stray.png'],
    ['id' => 3, 'title' => 'Hades', 'genre' => 'Rogue-Like, Action',  'studio' => 'Supergiant Games', 'image' => 'img/Hades.png'],
    ['id' => 4, 'title' => 'Hollow Knight', 'genre' => 'Souls-Like',  'studio' => 'Team Charry', 'image' => 'img/hollowknight.png'],
    ['id' => 5, 'title' => 'Celeste', 'genre' => 'Platformer',  'studio' => 'Maddy Makes Games', 'image' => 'img/Celeste.png'],
    ['id' => 6, 'title' => 'Slay the Spire', 'genre' => 'Card Game, Rogue-Like',  'studio' => 'MegaCrit', 'image' => 'img/SlayTheSpire.png'],
    ['id' => 7, 'title' => 'Stardew Valley', 'genre' => 'Simulation', 'studio' => 'ConcernedApe', 'image' => 'img/stardewvalley.png'],
    ['id' => 8, 'title' => 'Cuphead', 'genre' => 'Action', 'studio' => 'Studio MDHR', 'image' => 'img/cuphead.png'],
    ['id' => 9, 'title' => 'Dead Cells', 'genre' => 'Rogue-Like, Action',   'studio' => 'Motion Twin', 'image' => 'img/deadcells.png'],
    ['id' => 10,'title' => 'Limbo', 'genre' => 'Puzzle, Adventure, Horror', 'studio' => 'Playdead', 'image' => 'img/limbo.png']
];

// přečti filtr z URL
$selectedGenre = $_GET['genre'] ?? 'all';
?>

<section id="game-catalog" class="main-section">

    <h2>Prozkoumej náš katalog her</h2>

    <form method="GET" class="genre-filter">
        <label for="genre">Filtrovat podle žánru:</label>
        <select name="genre" id="genre" onchange="this.form.submit()">
            <option value="all"        <?php if ($selectedGenre === 'all') echo 'selected'; ?>>Všechny žánry</option>
            <option value="Horror"     <?php if ($selectedGenre === 'Horror') echo 'selected'; ?>>Horror</option>
            <option value="Sci-Fi"     <?php if ($selectedGenre === 'Sci-Fi') echo 'selected'; ?>>Sci-Fi</option>
            <option value="Adventure"  <?php if ($selectedGenre === 'Adventure') echo 'selected'; ?>>Adventure</option>
            <option value="Rogue-Like" <?php if ($selectedGenre === 'Rogue-Like') echo 'selected'; ?>>Rogue-Like</option>
            <option value="Action"     <?php if ($selectedGenre === 'Action') echo 'selected'; ?>>Action</option>
            <option value="Souls-Like" <?php if ($selectedGenre === 'Souls-Like') echo 'selected'; ?>>Souls-Like</option>
            <option value="Platformer" <?php if ($selectedGenre === 'Platformer') echo 'selected'; ?>>Platformer</option>
            <option value="Card Game"  <?php if ($selectedGenre === 'Card Game') echo 'selected'; ?>>Card Game</option>
        </select>
    </form>

    <div class="games-grid">

        <?php
        foreach ($games as $game) {

            // Když není vybrán "all" a hra neobsahuje filtr → přeskočíme
            if ($selectedGenre !== 'all' && stripos($game['genre'], $selectedGenre) === false) {
                continue;
            }

            include 'card.php';
        }
        ?>

    </div>

</section>

<?php 
include 'template/footer.php';
?>
