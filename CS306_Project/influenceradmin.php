<?php 

include "influencerconfig.php";

?>

<form action="influencerdelete.php" method="POST">
<select Infname="ids">

<?php

$sql_command = "SELECT * FROM influencers";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Username = $id_rows['Username']; 
        $Infname = $id_rows['Infname']; 
        $Sex = $id_rows['Sex'];
        $Age = $id_rows['Age']; 
        $Followers = $id_rows['Followers'];
        $Areaofinterest = $id_rows['Areaofinterest'];
        $SSN = $id_rows['SSN']
        echo "<option value=$Username>". $Infname . " - " . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>