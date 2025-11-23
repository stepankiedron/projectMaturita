<?php
$pageTitle = 'Registrace nového účtu';
include 'template/header.php'; 
?>

<section id="registrace" class="info-section">
    <div class="container">
        <div class="form-container">
            <h2>Vytvořit nový účet</h2>
            
            <form action="registre.php" method="POST">
                
                <div class="form-group">
                    <label for="username">Jméno / Uživatelské jméno:</label>
                    <input type="text" id="username" name="username" required 
                           placeholder="např. Jan Novák" maxlength="50">
                </div>
                
                <div class="form-group">
                    <label for="email">E-mailová adresa:</label>
                    <input type="email" id="email" name="email" required 
                           placeholder="např. vase.jmeno@skola.cz">
                </div>
                
                <div class="form-group">
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" required 
                           placeholder="Zvolte bezpečné heslo">
                </div>
                
                <div class="form-group">
                    <label for="password_confirm">Potvrzení hesla:</label>
                    <input type="password" id="password_confirm" name="password_confirm" required 
                           placeholder="Zopakujte heslo">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="button primary cta-button" style="width: 100%;">
                        Registrovat se
                    </button>
                </div>
                
                <div class="form-links">
                    <p>Již máte účet? <a href="login.php">Přihlaste se zde</a></p>
                </div>
                
            </form>
        </div>
    </div>
</section>

<?php 
include 'template/footer.php';
?>