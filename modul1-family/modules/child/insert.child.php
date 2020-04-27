<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
$parent = null;
if (isset($_GET['parent']) && !empty($_GET['parent'])){
	$parent = $_GET['parent'];
}else{
	die("PARENT ID NOT FOUND");
}
?>
<div style="border:1px #000000 solid; padding: 2px 2px 2px 2px; background-color:  #dddddd">
	<?php echo $formName; ?>
</div>
<form name="insertFamily" action="modules/child/proses.child.php?action=insertchild" method="POST">
    <dl>
        <dt>Nama Anak</dt>
        <dd><input type="text" name="txtNama" value="" size="50" /></dd>
        <dt>Jenis Kelamin</dt>
        <dd><input type="radio" name="jk" value="1"/>Laki-Laki &nbsp;&nbsp;&nbsp;
        	<input type="radio" name="jk" value="0"/> Perempuan</dd>
        <dt>Anak ke -</dt>
        <dd><input type="text" name="txtAnakKe" value="" size="10" /></dd>
        <dt>Kota Lahir</dt>
        <dd><input type="text" name="txtKotaLahir" value="" size="50" /></dd>
                
    </dl>
    <input type="hidden" name="parent" value="<?php echo $parent; ?>" size="50" />
    <input type="submit" value="Save" name="btnSave" />
</form>