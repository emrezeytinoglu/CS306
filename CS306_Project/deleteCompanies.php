<?php

include "influencerconfig.php";

if(!empty($_POST['ids']))
{
    $Name = $_POST['ids'];
    $sql_statement = "DELETE FROM companies WHERE 'Name' = $Name";
    $result = mysqli_query($db, $sql_statement);
    echo "Company is deleted: " . $Name;
}

?>