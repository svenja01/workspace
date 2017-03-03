<!DOCTYPE html>
<html lang="de">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="websitemockup.css" rel="stylesheet">
    <link href="global.css" rel="stylesheet">
    <link href="normalize.css" rel="stylesheet">
    <link href="formular.php" rel="skriptsource">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="websitemockup.html">Home</a></li>
                <li><a href="ueberuns.html">Über uns</a></li>
                <li><a href="Support.html">Support</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <?php

    $name=$_POST['name'];
    $vorname=$_POST['vorname'];
    $mail=$_POST['mail'];
    $geburtsdatum=$_POST['geburtsdatum'];
    $nachricht=$_POST['nachricht'];

    echo "Guten Tag $vorname $name<br>";
    echo "Vielen Dank für Ihre Mitteilung!<br><br>";

    include_once('funktionen.php');
    echo "Alle Einträge:<br>";
    DBerstellen();
    DBeinschreiben($name,$vorname, $mail, $geburtsdatum, $nachricht);
    DBauslesen();
    DBschliessen();

/*
    $name=$_POST['name'];
    $vorname=$_POST['vorname'];
    $mail=$_POST['mail'];
    $geburtsdatum=$_POST['geburtsdatum'];
    $nachricht=$_POST['nachricht'];


echo "Guten Tag $vorname $name<br>";
echo "Vielen Dank für Ihre Mitteilung!<br><br>";

$datenbank=new mysqli("localhost","svenja", "", "php");

$stmt="insert into kontakt (Name, Vorname, Mail, Geburtsdatum, Nachricht) values ('$name','$vorname', '$mail', '$geburtsdatum', '$nachricht')";

$datenbank->query($stmt);

$result=$datenbank->query("select * from kontakt");
//Ausgabe
echo "<table>";
foreach($result as $rset){
    echo "<tr>";
    echo "<td>".$rset['Name']."</td>";
    echo "<td>".$rset['Vorname']."</td>";
    echo "<td>".$rset['Mail']."</td>";
    echo "</tr>";
}
echo "</table>";

$datenbank->close();
*/

?>

    <footer>
        <p>
            Svenja Sutter
        </p>
    </footer>

</body>

</html>