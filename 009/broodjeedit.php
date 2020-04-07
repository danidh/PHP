<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Edit Broodje</title>
</head>
<body>

<form action="index.php" method="GET">
    <span>
    <label for="broodjeselect">Selecteer Broodje Om Te Bewerken</label>
    <select name="broodjeselect" id="broodjeselect" required>
        <option value="" disabled selected hidden>Selecteer Broodje</option>
        <?php
            include "index.php";

            foreach($broodjes->getBroodjes() as $broodje) {
                echo "<option value='" . $broodje->getsoort() . "'>" . $broodje->getSoort() . "</option>";
            }

        ?>
    </select>
    </span>

    <span>
    <label for="soortedit">Nieuwe Soort: </label>
    <input type="text" name="soortedit" id="soortedit">
    </span>
    
    <span>
    <label for="meeledit">Nieuwe Meel: </label>
    <input type="text" name="meeledit" id="meeledit">
    </span>

    <span>
    <label for="vormedit">Nieuwe Vorm: </label>
    <input type="text" name="vormedit" id="vormedit">
    </span>

    <span>
    <label for="gewichtedit">Nieuw Gewicht: </label>
    <input type="number" name="gewichtedit" id="gewichtedit">
    </span>

    <input type="submit" value="submit">
</form>
    
</body>
</html>