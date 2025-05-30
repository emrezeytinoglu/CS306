<?php 

include "influencerconfig.php"; 

if (!empty($_POST['Pid'])){ 
    $Pid = $_POST['Pid']; 
    $Compname = $_POST['Compname']; 
    $Infusername = $_POST['Infusername'];
    $Budget = $_POST['Budget']; 
    $Platform = $_POST['Platform'];
    
    $sql_statement = "INSERT INTO partnerships(Pid, 'Compname', 'Infusername', Budget, 'Platform') VALUES ('$Pid','$Compname','$Infusername','$Budget','$Platform')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Partnership added: " . $Pid . " " . $Compname . " and " . $Infusername;
} 
else 
{
    echo "You did not enter your name.";
}

?>