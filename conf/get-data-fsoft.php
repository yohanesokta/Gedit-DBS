<?php 
require 'connect.php';
$result = mysqli_query($db,"SELECT * FROM f_soft"); 
while ($data = mysqli_fetch_assoc($result)) { ?>
	<div class="fsoft-isi" onclick="editNSI(<?php echo $data['nsi'] ?>)">
		<p><?php echo $data["nsi"]; ?></p>
		<p><?php echo $data["nama"]; ?></p>
		<p><?php echo $data["version"]; ?></p>
		<p><?php echo $data["Description"]; ?></p>
		<p><?php echo $data["DL"]; ?></p>
	</div>
<?php } ?>
