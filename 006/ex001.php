<?php



$user = 'schooluser';
$pass = 'P@$$w0rd';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3308', $user, $pass);
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>CursistNr</th><th>Naam</th><th>Roepnaam</th><th>Straat</th><th>Postcode</th><th>Plaats</th><th>Geslacht</th><th>Geb_datum</th></tr>";
    foreach($dbh->query('SELECT * from cursist') as $row) {
        $i = 0;
        foreach($row as $key => $value) {
            if($i == 8) {
                echo "<tr>";
                $i = 0;
            }
            if (!is_numeric($key)) {
                echo "<td>" . $value . "</td>";
                $i++;
            }
        }
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

echo "</tr>";