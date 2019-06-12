<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
</head>
<body>
<h1>garage update klant 3</h1>
<p>
    klantgegevens wijzigen in de tabel klant van de database garage.
</p>
<?php
//klantgegevens uit het formulier halen-----------------------------------------------------
$klantid = $_POST["klantidvak"];
$klantnaam = $_POST["klantnaamvak"];
$klantadress = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats = $_POST["klantplaatsvak"];

// updaten klantgegevens------------------------------------------------
require_once "gar-connect.php";
$sql = $conn->prepare("
update garage.klant set 
klantnaam = :klantnaam,
 klantadress = :klantadress,
  klantpostcode = :klantpostcode,
   klantplaats = :klantplaats
where klantid = :klantid
");

$sql->execute([
    "klantid" => $klantid,
    "klantnaam" => $klantnaam,
    "klantadress" =>$klantadress,
    "klantpostcode" => $klantpostcode,
    "klantplaats" => $klantplaats
]);
echo "de klant is gewijzigd";
echo "<a href='index.php'>terug naar het menu</a>";
?>
</body>
</html>