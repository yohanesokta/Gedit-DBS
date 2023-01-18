<?php 
 require 'connect.php';
 $nsikey = $_POST['nsikey'];
 $result = mysqli_query($db,"SELECT * FROM f_soft WHERE nsi = $nsikey");
 $data = mysqli_fetch_assoc($result);
 ?>
<i class="fa-sharp fa-solid fa-xmark" id="fsoftClose" onclick="fsClose()"></i>
 <form id="fsoft-form" onsubmit="return false">
	<p>No</p>
	<input id="fsoft-i-1" type="text" value=" <?php echo $data['no']; ?> ">
	<p>Nsi</p>			
	<input id="fsoft-i-2"  type="text" value=" <?php echo $data['nsi']; ?> ">
	<p>Nama</p>
	<input id="fsoft-i-3"  type="text" value=" <?php echo $data['nama']; ?> ">
	<p>Version</p>
	<input id="fsoft-i-4"  type="text" value=" <?php echo $data['version']; ?> ">
	<p>Deskripsi</p>
	<textarea id="fsoft-i-5" > <?php echo $data['Description']; ?></textarea>
	<p>icon</p>
	<input id="fsoft-i-6"  type="text" value=" <?php echo $data['icon']; ?> ">
	<p>System Requerement</p>
	<textarea id="fsoft-i-7" ><?php echo $data['sys']; ?></textarea>
	<p>Download Utama</p>
	<input id="fsoft-i-8"  type="text" value=" <?php echo $data['DL']; ?> ">
	<p>D2</p>
	<input id="fsoft-i-9"  type="text" value=" <?php echo $data['D2']; ?> ">
	<p>Download Kedua</p>
	<input id="fsoft-i-10"  type="text" value=" <?php echo $data['D2L']; ?> ">
	<p>Tutor</p>
	<textarea id="fsoft-i-11" ><?php echo $data['tutor']; ?></textarea>
	<br>
	<button onclick="saveFSOFT(<?php echo $data['nsi']; ?>)">Save</button>
</form>