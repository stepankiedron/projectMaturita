<?php
$pageTitle = 'Top 10 Indie Her';
include 'template/header.php'; 
?>

<section class="top10-hero hero-section">
    <div class="container hero-content">
        <h1>Top 10 Indie Her</h1>
        <p class="subtitle">
            Dočasná stránka zobrazující náš výběr 10 nejlepších indie her. 
            Jako hodnocení použijeme hodnocení z našeho katalogu.
        </p>
    </div>
</section>

<?php
// PROVIZORNÍ DATA 
$top10 = [
    ['id' => 1, 'title' => 'Omori', 'genre' => 'Horror', 'studio' => 'OMOCAT, LLC', 'image' => 'img/omori.png'],
    ['id' => 2, 'title' => 'Stray', 'genre' => 'Sci-Fi, Adventure',  'studio' => 'BlueTwelve Studio', 'image' => 'img/Stray.png'],
    ['id' => 3, 'title' => 'Hades', 'genre' => 'Rogue-Like, Action',  'studio' => 'Supergiant Games', 'image' => 'img/Hades.png'],
    ['id' => 4, 'title' => 'Hollow Knight', 'genre' => 'Souls-Like',  'studio' => 'Team Charry', 'image' => 'img/hollowknight.png'],
    ['id' => 5, 'title' => 'Celeste', 'genre' => 'Platformer',  'studio' => 'Maddy Makes Games', 'image' => 'img/Celeste.png'],
    ['id' => 6, 'title' => 'Slay the Spire', 'genre' => 'Card Game, Rogue-Like',  'studio' => 'MegaCrit', 'image' => 'img/SlayTheSpire.png'],
    ['id' => 7, 'title' => 'Stardew Valley', 'genre' => 'Simulation', 'studio' => 'ConcernedApe', 'image' => 'img/stardewvalley.png'],
    ['id' => 8, 'title' => 'Cuphead', 'genre' => 'Action', 'studio' => 'Studio MDHR', 'image' => 'img/cuphead.png'],
    ['id' => 9, 'title' => 'Dead Cells', 'genre' => 'Rogue-Like, Action',   'studio' => 'Motion Twin', 'image' => 'img/deadcells.png'],
    ['id' => 10,'title' => 'Limbo', 'genre' => 'Puzzle, Adventure', 'studio' => 'Playdead', 'image' => 'img/limbo.png']
];
?>

<section class="top10-section info-section">
    <div class="container">
        <h2>Naše Top 10</h2>

        <div class="games-grid">
            <?php 
            foreach ($top10 as $game) {
                include 'card.php';
            }
            ?>
        </div>
    </div>
</section>

<?php 
include 'template/footer.php';
?>
