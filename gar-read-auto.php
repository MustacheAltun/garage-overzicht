<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-read-klant</title>
</head>
<body>
<h1>garage read auto</h1>
<p>
    dit zijn alle gegevens uit de tabel auto's van de database garage.
</p>
<?php
//tabel uitlezen en netjes afdrukken------------------------------------------
require_once "gar-connect.php";

$autos = $conn->prepare(
    "select * from garage.auto"
);
$autos->execute();
echo "<table>";
foreach ($autos as $auto){
    echo "<tr>";
    echo "<td>". $auto["autokenteken"]."</td>";
    echo "<td>". $auto["automerk"]."</td>";
    echo "<td>". $auto["autotype"]."</td>";
    echo "<td>". $auto["autokmstand"]."</td>";
    echo "<td>". $auto["klantid"]."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='index.php'>terug naar het menu</a>";
?>
</body>
</html>