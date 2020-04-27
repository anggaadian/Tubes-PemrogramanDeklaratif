<?php
$id = null;
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = (int)$_GET['id'];
	include '../../connection.php';
}else{
	header('location: familytree.php');
	exit;
}

$queryGetDetails = "SELECT * FROM CHILD WHERE ID = $id";
$resultQGD = mysql_query($queryGetDetails) or die(mysql_error());
$data = mysql_fetch_array($resultQGD);
?>
<div style="border:1px #000000 solid; padding: 2px 2px 2px 2px; background-color:  #dddddd">
	<?php echo 'Child Details'; ?>
</div>
<dl>
	<dt>Nama Anak</dt>
        <dd><input type="text" name="txtNama" value="<?php echo $data['NAMA'] ?>" size="50" readonly="readonly"/></dd>
        <dt>Jenis Kelamin</dt>
		<dd><input type="text" name="jk" value="<?php if ($data['JK'] == 1) echo 'Laki - Laki'; else echo 'Perempuan';?>" readonly="readonly"/></dd>
        <dt>Anak ke -</dt> 
        <dd><input type="text" name="txtAnakKe" value="<?php echo $data['ANAK_KE'] ?>" size="10" readonly="readonly"/></dd>
        <dt>Kota Lahir</dt>
        <dd><input type="text" name="txtKotaLahir" value="<?php echo $data['KOTA_LAHIR'] ?>" size="50" readonly="readonly"/></dd>        
</dl>
<div style="border: 1px yellow solid; padding:5px 5px 5px 5px; background-color:lightgreen; font-weight:bolder">
<a href="child.php?view=update&id=<?php echo $id;?>">[Update Details]</a> &nbsp;
<a href="familytree.php">[Back]</a> &nbsp;
<a href="child.php?view=delete&id=<?php echo $id;?>">[Delete]</a>

</div>
<dl>
  <dt>*) Note :</dt>  
	  <dd>'Update Details' : Update The Field</dd>
	  <dd>'Back' : Back to Family Tree</dd>
	  <dd>'Delete' : Delete The Field</dd>
</dl>