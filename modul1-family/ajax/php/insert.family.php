<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
$id = null;
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = (int)$_GET['id'];
	include '../../connection.php';
}else{
	header('location: familytree.php');
	exit;
}
$checkFamily = "SELECT * FROM FAMILY ORDER BY ID";
$resultCF = mysql_query($checkFamily)or die(mysql_error());
$numbResulr = mysql_num_rows($resultCF);
?>
<form name="insertFamily" action="modules/family/proses.family.php?action=insertfamily" method="POST">
    <dl>    
		<dt>Nama Suami / Kepala Keluarga</dt>
        <dd><input type="text" name="txtKK" value="" size="50" /></dd>
        <dt>Nama Istri</dt>
        <dd><input type="text" name="txtIstri" value="" size="50" /></dd>
        <dt>Nama Ayah dari Suami</dt>
        <dd><input type="text" name="txtAyahSuami" value="" size="50" /></dd>
        <dt>Nama Ibu dari Suami</dt>
        <dd><input type="text" name="txtIbuSuami" value="" size="50" /></dd>
        <dt>Nama Ayah dari Istri</dt>
        <dd><input type="text" name="txtAyahIstri" value="" size="50" /></dd>
        <dt>Nama Ibu dari Istri</dt>
        <dd><input type="text" name="txtIbuIstri" value="" size="50" /></dd>
    </dl>
    <input type="hidden" name="parent" value="<?php echo $id; ?>" size="50" />
    <input class="button" type="submit" value="Save" name="btnSave" />
</form>