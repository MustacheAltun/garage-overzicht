<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-search-klant2</title>
</head>
<body>
<h1>garage zoek op klantid 2</h1>
<p>
    op de klantid gegevens zoeken uit de tabel klanten van de database garage.
</p>
<?php
//klantid uit het formulier halen----------------------------------
$klantid = $_POST["klantidvak"];

//klantgegevens uit de tabel halen----------------------------------------
require_once "gar-connect.php";

$autos = $conn->prepare("
select * from garage.auto where klantid = :klantid");
$autos->execute(["klantid" => $klantid]);
//klantgegevens laten zien ----------------------------------------------------------
echo "<table>";
foreach ($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<td>" . $auto["klantid"] . "</td>";
    echo "<tr>";
}
echo "</table><br />";
echo "<a href='index.php'>terug naar het menu</a>";
?>
</body>
</html>