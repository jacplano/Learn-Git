<?php $title = 'Main Solar Demo Page'; include("top.php");?>


<?php include("makeForm.php");?>


<?php
include('./include_fns.php');  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $elec = $_POST['elec']; 
        $A = $_POST['roofSlope']; 
        $B = $_POST['roofShade']; 
        $C = $_POST['roofDirection']; 
} else {
        $elec = 225; 
        $A = "No Values for slope"; 
        $B = "No Values for shade"; 
        $C = "No Values for direction";   
}
// given a range we build a return key value: 
$key = buildKey($elec);

switch ($key) {
    case 0: 
        echo "$elec variable error in if statements.";
        break;  // this jumps out of the Switch
    case 1:
        processElec( $key, $elec, $A, $B, $C);
        break;  // this jumps out of the Switch
    case 2:
        processElec( $key, $elec, $A, $B, $C);
        break;
    case 3:
        processElec( $key, $elec, $A, $B, $C);
        break;
    default:  // THROW AN ERROR IF SOMEONE WILL CATCH
        echo "Case Error on selection of $key";
}

echo "<span class='badge badge-dark'>Need to Add: put values into (new) dB Table.</span>";

/// new Form

include("buildInfoForm.php");


            
?>




<?php include("bottom.php");?>