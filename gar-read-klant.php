<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-read-klant</title>
</head>
<body>
<h1>garage read klant</h1>
<p>
    dit zijn alle gegevens uit de tabel klanten van de databse garage.
</p>
<?php
//tabel uitlezen en netjes afdrukken------------------------------------------
require_once "gar-connect.php";

$klanten = $conn->prepare(
    "select * from garage.klant"
);
$klanten->execute();
echo "<table>";
foreach ($klanten as $klant){
    echo "<tr>";
    echo "<td>". $klant["klantid"]."</td>";
    echo "<td>". $klant["klantnaam"]."</td>";
    echo "<td>". $klant["klantadress"]."</td>";
    echo "<td>". $klant["klantpostcode"]."</td>";
    echo "<td>". $klant["klantplaats"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='index.php'>terug naar het menu</a>";
?>
</body>
</html>