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

$queryGetDetails = "SELECT * FROM CHILD WHERE ID = $id";
$resultQGD = mysql_query($queryGetDetails) or die(mysql_error());
$data = mysql_fetch_array($resultQGD);
?>
<div style="border:1px #000000 solid; padding: 2px 2px 2px 2px; background-color:  #dddddd">
	<?php echo $formName; ?>
</div>
<form action="modules/child/proses.child.php?action=updatetchild" method="POST" name="formUpdateChild">
<dl>
	<dt>Nama Anak</dt>
	<dd><input type="text" name="txtNama" value="<?php echo $data['NAMA'] ?>" size="50"/></dd>
	<dt>Jenis Kelamin</dt>
	<dd><input type="radio" name="jk" value="1" <?php if($data['JK'] == 1) echo 'checked="checked"'?>/>Laki-Laki &nbsp;&nbsp;&nbsp;
        	<input type="radio" name="jk" value="0" <?php if($data['JK'] == 0) echo 'checked="checked"'?>/> Perempuan</dd>
    <dt>Anak ke -</dt>
    <dd><input type="text" name="txtAnakKe" value="<?php echo $data['ANAK_KE'] ?>" size="10"/></dd>
   	<dt>Kota Lahir</dt>
    <dd><input type="text" name="txtKotaLahir" value="<?php echo $data['KOTA_LAHIR'] ?>" size="50"/></dd>
</dl>
<input type="hidden" name="id" value="<?php echo $id; ?>" size="50" />
<input class="button" type="submit" name="btnSave" value="Save"/> &nbsp; 
<input class="button" type="submit" name="btnCancel" value="Cancel"/>
</form>