<?php

require('conn.php');


$sql = "DELETE FROM patient WHERE Pid = :Pid";
$stml = $conn->prepare($sql);
$stml->bindParam(':Pid', $_GET["Pid"]);
 echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    
if($stml->execute()) :
    
        $message = "Successfully delete customer".$_GET['Pid'].".";
           echo '
        <script type="text/javascript">
        
        </script>
        ';


else :
    $message = "Fail to delete patient information.";
endif;
$conn = null;

header("Location:index.php");

?>
