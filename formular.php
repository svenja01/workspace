<!DOCTYPE html>
<html lang="en">

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
echo "Vielen Dank für Ihre Mitteilung!"


?>

    <footer>
        <p>
            Svenja Sutter
        </p>
    </footer>

</body>

</html>