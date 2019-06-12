<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-delete-klant3.php</title>
</head>
<body>
<h1>garage delete klant 3</h1>
<p>
    op klantid gegevens zoeken uit de tabel klanten van de database garage zodat ze verwijderd kunnen worden.
</p>
<?php
// gegevens uit het formulier halen---------------------------------------------------
$autokenteken = $_POST["autokentekenvak"];
$verwijderen = $_POST["verwijdervak"];

// gegevens uit het formulier halen --------------------------------------------------
if ($verwijderen){
    require_once "gar-connect.php";

    $sql = $conn->prepare("
    delete from garage.auto where  autokenteken = :autokenteken
    ");
    $sql->execute(["autokenteken" => $autokenteken]);

    echo "de gegevens zijn verwijderd. <br />";
}
else{
    echo "de gegevens zijn niet verwijderd. <br />";
};

echo "<a href='index.php'> terug naar het menu.</a>>";
?>
</body>
</html>