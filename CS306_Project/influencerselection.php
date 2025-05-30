<?php 

include "influencerconfig.php"; 

if (!empty($_POST['Sex'])){ 

    $Sex = $_POST['Sex']; 

    $sql_statement = "SELECT * FROM influencers WHERE Sex LIKE '$Sex%'"; 
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_array($result)) {
        echo $row['Username']; 
       echo nl2br("\n");
       
    }


    $result = mysqli_query($db, $sql_statement);
} 
else 
{
    echo "Influencer under that circumstances can not be found in table.";
}