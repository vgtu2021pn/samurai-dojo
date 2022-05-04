<div class="page-title"><h2>Simple File Storage</h2></div>

<?php 
if(isset($_POST['upload'])) {
	$destination = $_SERVER['DOCUMENT_ROOT'] . '/basic/filestore/' . $_FILES['userfile']['name'];
	if(move_uploaded_file($_FILES['userfile']['tmp_name'], $destination)) {
$regularC = <<<EOT
File stored Successfully.
EOT;
		echo $regularC;
	} else {
$regularC = <<<EOT
File storing Failed.
EOT;
		echo $regularC;
	}
}
?>
	
<form enctype="multipart/form-data" action="<?php echo $_SERVER['SCRIPT_NAME'] . "?" . $_SERVER['QUERY_STRING'] ?>" method="POST">
	<fieldset>
		<legend>Load & Place</legend>
		<input name="userfile" type="file" style="margin:25px;" />
		<input type="submit" name="upload" value="Load & Place" />
	</fieldset>
</form>
<p>&nbsp;</p>
<p>Friendly backbutton: <button onclick="window.history.back()">Back</button></p>
</p>Unfriendly backlink: <a href="/">Back</a></p>

<?php
// Begin hints section
if ($_COOKIE["showhints"]==1) {
$regularH = <<<EOT
<p><span style="background-color: #FFFF00">
<ul>
<li>Setup requires at least setting up directory filestore with Privileges of www-data, apache...</li>
<li>Setup requires to check and (or) combine php.ini settings with FILE_UPLOADS, UPLOAD_MAX_FILESIZE, POST_MAX_SIZE, UPLOAD_TMP_DIR.</li>
<li>1. Store forged PHP Script 2. Access from the Browser ./filestore/forged.php 3. What could happen wrong in this place?</li>
</ul> 
</span></p>
EOT;
	echo $regularH; 
}
// End hints section
?>
