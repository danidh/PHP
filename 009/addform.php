<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Voeg toe</title>
</head>
<body>

<a href="index.php">Terug naar overzicht</a>

    <form action="index.php" method="GET">

        <span>
        <label for="soort">Soort/Type brood: </label>
        <input type="text" name="soort" id="soort" required>
        </span>

        <span>
        <label for="meel">Soort meel: </label>
        <input type="text" name="meel" id="meel" required>
        </span>

        <span>
        <label for="vorm">Vorm brood: </label>
        <input type="text" name="vorm" id="vorm" required>
        </span>

        <span>
        <label for="gewicht">Gewicht brood: </label>
        <input type="number " name="gewicht" id="gewicht" required>
        </span>

        <input type="submit" value="submit">

    </form>
    
</body>
</html>