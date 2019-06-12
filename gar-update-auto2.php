<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-klant 2</title>
</head>
<body>
<h1>garage update klant</h1>
<p>
    dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel klant van de database garage.
</p>
<?php
// klantid uit het formulier halen
$autokenteken = $_POST["autokentekenvak"];

//klantgegevens uit de tabel halen------------------------------
require_once "gar-connect.php";

$autos = $conn->prepare("
select * from garage.auto where autokenteken = :autokenteken");
$autos->execute(["autokenteken" => $autokenteken]);

//klantgegevens in een nieuw formulier zien------------------------------------------
echo "<form action='gar-update-auto3.php' method='post'>";
foreach ($autos as $auto){
    //klantid mag niet gewijzigd worden
    echo "autokenteken:". $auto["autokenteken"];
    echo "<input type='hidden' name='autokentekenvak' value='".$auto["autokenteken"]."' > <br />";

    echo "automerk:<input type='text'";
    echo "name = 'automerkvak' ";
    echo "value = '".$auto["automerk"]."' ";
    echo "> <br />";

    echo "autotype:<input type='text'";
    echo "name = 'autotypevak' ";
    echo "value = '".$auto["autotype"]."' ";
    echo "> <br />";

    echo "autokmstand:<input type='text'";
    echo "name = 'autokmstandvak' ";
    echo "value = '".$auto["autokmstand"]."' ";
    echo "> <br />";

    echo "klantid:<input type='text'";
    echo "name = 'klantidvak' ";
    echo "value = '".$auto["klantid"]."' ";
    echo "> <br />";

}
echo "<input type='submit'>";
echo "</form>";
// er moet eigenlijk nog gecontroleerd worden op een bestaand klantid
?>
</body>
</html>