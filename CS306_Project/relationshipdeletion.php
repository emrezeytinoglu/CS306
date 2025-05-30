<?php

include "influencerconfig.php";

if(!empty($_POST['Pid']))
{
    $Pid = $_POST['Pid'];
    $sql_statement = "DELETE FROM partnerships WHERE Pid = '$Pid'";
    $result = mysqli_query($db, $sql_statement);
    echo "Project deleted:" . $Pid;
}

else 
{
    echo "You did not enter any project ID.";
}
?>