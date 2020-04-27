<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
$id = null;
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = (int)$_GET['id'];
	include 'connection.php';
}else{
	exit;
}

$queryGetDetails = "SELECT * FROM CHILD WHERE ID = $id";
$resultQGD = mysql_query($queryGetDetails) or die(mysql_error());
$data = mysql_fetch_array($resultQGD);
?>
<div style="border:1px #000000 solid; padding: 2px 2px 2px 2px; background-color:  #dddddd">
	<?php echo $formName; ?>
</div>
<form action="modules/child/proses.child.php?action=deletechild" method="POST" name="formDeleteChild">
<dl>
	<dt>Delete Confirmation</dt>
 	<dd><input type="text" name="txtNama" value="<?php echo $data['NAMA']; ?>" size="50" readonly="readonly"/></dd>
</dl>
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<input class="button" type="submit" name="btnDelete" value="Delete"/> &nbsp; 
<input class="button" type="submit" name="btnCancel" value="Cancel"/>
</form>