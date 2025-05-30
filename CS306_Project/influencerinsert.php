<?php 

include "influencerconfig.php"; 

if (!empty($_POST['Username'])){ 
    $Username = $_POST['Username']; 
    $Infname = $_POST['Infname']; 
    $Sex = $_POST['Sex'];
    $Age = $_POST['Age']; 
    $Followers = $_POST['Followers'];
    $Areaofinterest = $_POST['Areaofinterest'];
    $SSN = $_POST['SSN'];
    $sql_statement = "INSERT INTO influencers(Username, Infname, Sex, Age, Followers, Areaofinterest, SSN) VALUES ('$Username','$Infname','$Sex','$Age','$Followers','$Areaofinterest','$SSN')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Influencer added: " . $Username ;
} 
else 
{
    echo "You did not enter your name.";
}

?>


