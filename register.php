<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<?php if(!isset( $_POST['submit'])) : ?>
    <!-- Pokaż tą część jeśli nie wysłaliśmy formularza -->
     <h1>Zarejestruj nowe konto</h1>
    <form action="register.php" method="post">
        <!-- Pole email oraz labelka do emaila -->
        <label for="emailInput">Login:</label>
        <input type="email" name="emailInput" id="emailInput"><br>
        <!-- Pole z hasłem oraz etykieta do niego -->
        <label for="passwordInput">Hasło:</label>
        <input type="password" name="passwordInput" id="passwordInput"><br>
        <!-- Przycisk wyślij -->
        <input type="submit" name="submit" value="Zarejestruj">
    </form>
    <?php else: ?>
    <!-- Pokaż tą część jeśli wysłaliśmy formularz -->

    <?php
        $db = new mysqli('localhost', 'root', 'Pixar_1404#', 'phploginform');
        $email = $_POST['emailInput'];
        $password = $_POST['passwordInput'];
        $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";

        $result = $db->query($sql);
    ?>

    <h1>Rejestracja zakończona pomyślnie</h1>
    <a href="index.php">Logowanie</a>
    
    <?php endif; ?>




</body>
</html>