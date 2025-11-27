<?php
$pageTitle = 'Přihlášení uživatele';
include 'template/header.php'; 
?>

<section id="prihlaseni" class="info-section">
    <div class="container">
        <div class="form-container">
            <h2>Přihlášení</h2>
            
            <form action="registre.php" method="POST">
                
                <div class="form-group">
                    <label for="email">E-mailová adresa:</label>
                    <input type="email" id="email" name="email" required 
                    placeholder="např. jannovak@email.cz">
                </div>
                
                <div class="form-group">
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" required 
                    placeholder="Zadejte své heslo">
                </div>
                
                <div class="form-group">
                    <button type="submit" class="button primary cta-button">
                        Přihlásit se
                    </button>
                </div>
                
                <div class="form-links">
                    <p>Zapomněli jste <a href="forgot_password.php">heslo</a>?</p>
                    <p>Nemáte účet? <a href="registre.php">Zaregistrujte se</a></p>
                </div>
                
            </form>
        </div>
    </div>
</section>

<?php 
include 'template/footer.php';
?>