<?php
	require 'connect.php';
	
    $query = "UPDATE `f_soft` SET `no`='$_POST[0]',`nsi`='$_POST[1]',`nama`='$_POST[2]',`version`='$_POST[3]',`Description`='$_POST[4]',`icon`='$_POST[5]',`sys`='$_POST[6]',`DL`='$_POST[7]',`D2`='$_POST[8]',`D2L`='$_POST[9]',`tutor`='$_POST[10]' WHERE nsi = $_POST[11]";


	mysqli_query($db,$query);
	echo $_POST[10];
 ?>