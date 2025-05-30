<?php

include "influencerconfig.php";

if(!empty($_POST['Username']))
{
    $Username = $_POST['Username'];
    $sql_statement = "DELETE FROM influencers WHERE Username = '$Username'";
    $result = mysqli_query($db, $sql_statement);
    echo "Influencer deleted:" . $Username;
}

else 
{
    echo "You did not enter your name.";
}
?>