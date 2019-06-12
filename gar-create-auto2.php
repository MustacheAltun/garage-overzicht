<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
</head>
<body>
<h1>garage create klant 2</h1>
<p>
   een auto toevoegen aan de tabel.
    auto in de database garage.
</p>
<?php
//klantgegevens uit het formulier halen--------------------------------------------------------------------
$autokenteken = $_POST["autokentekenvak"]; // je komt niet uit het formulier (autoincrement)
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];
$klantid = $_POST["klantid"];
// klantgegevens invoeren in de tabel-------------------------------------------------------------------------
require_once "gar-connect.php";

$sql = $conn->prepare("insert into garage.auto values 
(
:autokenteken, :automerk, :autotype, :autokmstand, :klantid
)
");
//manier 1 (of manier 2 gebruiken)----------------------------------------------
/*
$sql ->bindParam(":klantid", $klantid);
$sql ->bindParam(":klantnaam",$klantnaam);
$sql ->bindParam(":klantadress",$klantadress);
$sql ->bindParam(":klantpostcode",$klantpostcode);
$sql ->bindParam(":klantplaats",$klantplaats);

$sql-> execute();
*/
//manier 2-------------------------

$sql->execute([
        "autokenteken" => $autokenteken,
        "automerk" => $automerk,
        "autotype" => $autotype,
        "autokmstand" => $autokmstand,
        "klantid" => $klantid

    ]
);

echo "de auto is toegevoegd";
echo "<a href='index.php'> terug naar het menu </a>"
?>

</body>
</html>