<?php
global $datenbank;
function Fsenden($name,$vorname, $mail, $geburtsdatum, $nachricht){

    $name=$_POST['name'];
    $vorname=$_POST['vorname'];
    $mail=$_POST['mail'];
    $geburtsdatum=$_POST['geburtsdatum'];
    $nachricht=$_POST['nachricht'];

    echo "Guten Tag $vorname $name<br>";
    echo "Vielen Dank für Ihre Mitteilung!<br><br>";
} 

function DBerstellen(){
    global $datenbank;
    $datenbank=new mysqli("localhost","svenja", "", "php");
}

function DBeinschreiben ($name,$vorname, $mail, $geburtsdatum, $nachricht)
{
    global $datenbank;
$stmt="insert into kontakt (Name, Vorname, Mail, Geburtsdatum, Nachricht) values ('$name','$vorname', '$mail', '$geburtsdatum', '$nachricht')";

$datenbank->query($stmt);
}

function DBauslesen(){
    global $datenbank;
    $result=$datenbank->query("select * from kontakt");
//Ausgabe
echo "<table>";
foreach($result as $rset){
    echo "<tr>";
    echo "<td>".$rset['Name']."</td>";
    echo "<td>".$rset['Vorname']."</td>";
    echo "<td>".$rset['Mail']."</td>";
    echo "<td>".$rset['Geburtsdatum']."</td>";
    echo "<td>".$rset['Nachricht']."</td>";
    echo "</tr>";
}
echo "</table>";
}

function DBschliessen(){
    global $datenbank;
    $datenbank->close();
}
function arrayAuslesen($name, $vorname){
    $array=array(
                array(
                    'Vorname' => "David",
                    'Nachname' => "Guetta",
                    )
                     );

        $array=array(                
                    array(
                         'Vorname' => "Selena",
                    'Nachname' => "Gomez",
                    
                    ));
                       $array=array(

                    array(
                    'Vorname' => "Justin",
                   
                    'Nachname' => "Bieber",
                    ));
   
   
    print_r ( $array);
    }
    function erstellenArray()
{
$array=array(
    array("David","Guetta"),
    array("Selena","Gomez"),
    array("Justin","Bieber"),
    array("Brittney","Spears"),
    array("David","Beckham")
);
 
echo "<table>";
foreach($array as $value){
   echo "<tr>";
    echo "<tr>".$value[0]."</td>";
    echo "<tr>".$value[1]."</td> <br>";
    echo "</tr>"; 
}
 
}

?>