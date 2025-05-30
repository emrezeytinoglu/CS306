<?php 

include "influencerconfig.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM influencers"; 

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $infusername = $row['Username']; 
    $infname = $row['Infname']; 
    $infsex = $row['Sex'];
    $infage = $row['Age']; 
    $inffollowers = $row['Followers'];
    $infareaofinterest = $row['Areaofinterest'];
    $infssn = $row['SSN']
    echo $infusername . " " . $infname . " " . $infsex . " " . $infage . " " . $inffollowers . " " . $infareaofinterest . " " . $infssn . "<br>"; 
} 

?>