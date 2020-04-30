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
	//header('location: familytree.php');
	exit;
}

$queryGetDetails = "SELECT * FROM FAMILY WHERE ID = $id";
$resultQGD = mysql_query($queryGetDetails) or die(mysql_error());
$data = mysql_fetch_array($resultQGD);
?>
<div style="border:1px #000000 solid; padding: 2px 2px 2px 2px; background-color:  #dddddd">
	<?php echo $formName; ?>
</div>
<form action="modules/family/proses.family.php?action=updatetfamily" method="POST" name="formUpdateFamily">
<dl>
	<dt>Nama Suami / Kepala Keluarga</dt>
 	<dd><input type="text" name="txtKK" value="<?php echo $data['KK']; ?>" size="50"/></dd>
    <dt>Nama Istri</dt>
    <dd><input type="text" name="txtIstri" value="<?php echo $data['ISTRI']; ?>" size="50" /></dd>
    <dt>Nama Ayah dari Suami</dt>
    <dd><input type="text" name="txtAyahSuami" value="<?php echo $data['AYAH_SUAMI']; ?>" size="50" /></dd>
    <dt>Nama Ibu dari Suami</dt>
    <dd><input type="text" name="txtIbuSuami" value="<?php echo $data['IBU_SUAMI']; ?>" size="50" /></dd>
    <dt>Nama Ayah dari Istri</dt>
    <dd><input type="text" name="txtAyahIstri" value="<?php echo $data['AYAH_ISTRI']; ?>" size="50" /></dd>
    <dt>Nama Ibu dari Istri</dt>
    <dd><input type="text" name="txtIbuIstri" value="<?php echo $data['IBU_ISTRI']; ?>" size="50" /></dd>
</dl>
<input type="hidden" name="id" value="<?php echo $id; ?>" size="50" />
<input class="button" type="submit" name="btnSave" value="Save"/> &nbsp; 
<input class="button" type="submit" name="btnCancel" value="Cancel"/>
</form>