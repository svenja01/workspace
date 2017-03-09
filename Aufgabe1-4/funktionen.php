<?php
global $datenbank;
function Fsenden($name,$vorname, $mail, $geburtsdatum, $nachricht){

    $name=$_POST['name'];
    $vorname=$_POST['vorname'];
    $mail=$_POST['mail'];
    $geburtsdatum=$_POST['geburtsdatum'];
    $nachricht=$_POST['nachricht'];
    echo "Guten Tag $vorname $name<br>";
    echo "Vielen Dank für Ihre Mitteilung!<br><br>";} 

function DBerstellen(){
    global $datenbank;
    $datenbank=new mysqli("localhost","svenja", "", "php");}
function DBeinschreiben ($name,$vorname, $mail, $geburtsdatum, $nachricht)
{global $datenbank;
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
    echo "</tr>";}
echo "</table>";}

function DBschliessen(){
    global $datenbank;
    $datenbank->close();}

//funktioniert nicht bis ...    
function arrayAuslesen($name, $vorname){
    $array=array(
                array(
                    'Vorname' => "David",
                    'Nachname' => "Guetta",));

        $array=array(                
                    array(
                         'Vorname' => "Selena",'Nachname' => "Gomez",
                    ));
                       $array=array(
                    array('Vorname' => "Justin",'Nachname' => "Bieber", ));
    print_r ( $array);}
//hier

 function erstellenArray(){
$array=array(
    array("David","Guetta","Telefon"=>"071 255 15 48", "Handy"=> "079 683 52 14"),
    array("Selena","Gomez", "Telefon"=>"071 546 35 21","Handy"=> "079 683 52 14" ),
    array("Justin","Bieber", "Telefon"=>"071 277 48 51", "Handy"=> "079 683 52 14"),
    array("Brittney","Spears","Telefon"=> "071 549 48 79", "Handy"=> "079 683 52 14"),
    array("David","Beckham", "Telefon"=>"071 269 38 24", "Handy"=> "079 683 52 14"));

    echo "<table>";
    echo"<tr><th>Vorname</th><th>Nachname</th><th>Telefon</th><th>Handy</th></tr>";
foreach($array as $value){
   echo "<tr>";
    echo "<td>".$value[0]."</td>";
    echo "<td>".$value[1]."</td>";
    echo "<td>".$value["Telefon"]."</td> <br>";
    echo "<td>".$value["Handy"]."</td> <br>";
    echo "</tr>"; } }
?>