<?php
function Namesuchen($name){
    $search = $datenbank->query("SELECT * FROM kontakt WHERE 'Name' LIKE '$name'");
    echo "<table>";
foreach($search as $rset){
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
?>