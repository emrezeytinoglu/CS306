<?php 

include "influencerconfig.php"; 

if (!empty($_POST['Category'])){ 



    $Category = $_POST['Category']; 

    $sql_statement = "SELECT * FROM companies WHERE Category LIKE '$Category%'"; 
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_array($result)) {
        echo $row['Name']; // Print a single column data
       echo nl2br("\n");
       
    }


    $result = mysqli_query($db, $sql_statement);
} 
else 
{
    echo "You did not enter an existing category.";
}