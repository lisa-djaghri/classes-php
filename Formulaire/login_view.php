<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../controller/login_view.php">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        
            <button type="submit">Envoyer</button>
    </form>
</body>
</html>
