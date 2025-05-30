<?php 

include "influencerconfig.php"; 

if (!empty($_POST['Name'])){ 
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Category = $_POST['Category'];
    $Email = $_POST['Email'];
    $Budget = $_POST['Budget'];
    $sql_statement = "INSERT INTO companies(Name, Address, Category, Email, Budget) VALUES ('$Name','$Address','$Category', '$Email', '$Budget')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Company " . $Name . " is inserted" . $result . "<br>";
} 
else 
{
    echo "You did not enter any company name.";
}

?>
