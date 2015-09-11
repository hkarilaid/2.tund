<?php
$first_name ="Hendrik";
$last_name ="Karilaid";
echo $first_name." ".$last_name;



?>
<br>
<?php
$age = 20;
if($age < 18) {
	echo "Alaealine";
	
}
else {
	echo "Täisealine";
	
}


?>
<br>
<?php

for($i = 0; $i < $age; $i = $i + 1) {
	echo "palju".$i." ";
	
}
echo "õnne";

?>

<br>
<?php
echo(date("l, d.m.Y"));


?>