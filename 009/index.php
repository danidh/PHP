<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht bakkerij</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1 class="title">Overzicht Broodjes Bakkerij</h1>
    <a href="index.php">Broodjes Overzicht</a>
    <a href="addform.php">Broodje Toevoegen</a>
    <a href="broodjeedit.php">Broodje bewerken</a>


    <table>
        <tr>
            <th>Naam/Soort</th>
            <th>Type meel</th>
            <th>Vorm</th>
            <th>Gewicht in gram</th>
        </tr>
        <?php


        include "Broodje.php";
        include "Broodoverzicht.php";

        $broodjes = new Broodoverzicht;
        
        if (isset($_GET['soort'])) {
            $broodjes->addBroodje($_GET['soort'], $_GET['meel'], $_GET['vorm'], $_GET['gewicht']);
            unset($_GET);
        }

        if (isset($_GET['soortedit'])) {
            $broodjes->editBroodje($_GET['broodjeselect'], $_GET['soortedit'], $_GET['meeledit'], $_GET['vormedit'], $_GET['gewichtedit']);
        }

        foreach ($broodjes->getBroodjes() as $broodje){
            echo "<tr>
                <td>" . $broodje->getSoort() . "</td>
                <td>" . $broodje->getMeel() . "</td>
                <td>" . $broodje->getVorm() . "</td>
                <td>" . $broodje->getGewicht() . "</td>
            </tr>";
        }

        

        
        ?>
    </table>

</body>
</html>

