<?php
// 1. Zjistíme, jestli bylo ID hry předáno přes URL (např. hra_detail.php?id=5)
$game_id = $_GET['id'] ?? null;
$game_title = 'Neznámá hra';
$game_description = 'Nebyla nalezena žádná data o této hře.';

// 2. Pro provizorní účely nastavíme titul podle ID
if ($game_id) {
    $game_title = "Detail hry č. " . $game_id;
    $game_description = "Toto je detailní stránka pro hru s ID: {$game_id}. Zde se v budoucnu načtou data z databáze.";
}

// 3. Nastav titul pro <title> tag
$pageTitle = $game_title;

// 4. Vloží hlavičku
include 'template/header.php'; 
?>

<section id="game-detail" class="info-section">
    <div class="container">
        <h1><?php echo htmlspecialchars($game_title); ?></h1>
        
        <div class="detail-content">
            
            <div class="info-img">
                <img src="img/hollowknight.png" alt="Obrázek hry">
            </div>
            <aside class="sidebar">
                
                <div class="description-section">
                    <h2>Popis hry</h2>
                    <p><?php echo htmlspecialchars($game_description); ?></p>
                </div>
                
                <h3>Technické detaily</h3>
                <ul>
                    <li>**ID hry:** <?php echo $game_id ?? 'Neznámé'; ?></li>
                    <li>**Žánr:** Akce/RPG</li>
                    <li>**Hodnocení:** (Brzy dynamicky)</li>
                </ul>
            </aside>
        </div>
    </div>
</section>
<?php 
// 5. Vloží patičku
include 'template/footer.php';
?>