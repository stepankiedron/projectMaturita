<div class="game-card">
    <a href="hra_detail.php?id=<?php echo $game['id']; ?>">
        <div class="game-image-wrapper">
            <img src="<?php echo $game['image']; ?>" alt="Obrázek hry <?php echo $game['title']; ?>">
            
            <div class="game-title-overlay">
                <h3><?php echo $game['title']; ?></h3>
            </div>

        </div>
        </a>
</div>