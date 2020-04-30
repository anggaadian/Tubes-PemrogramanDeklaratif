<?php
$id = null;
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = (int)$_GET['id'];
	include 'connection.php';
}else{
	header('location: familytree.php');
	exit;
}

$queryGetDetails = "SELECT * FROM FAMILY WHERE ID = $id";
$resultQGD = mysql_query($queryGetDetails) or die(mysql_error());
$data = mysql_fetch_array($resultQGD);
?>
<div style="border:1px #000000 solid; padding: 2px 2px 2px 2px; background-color:  #dddddd">
	<?php echo $formName; ?>
</div>
<dl>
	<dt>Nama Suami / Kepala Keluarga</dt>
 	<dd><input type="text" name="txtKK" value="<?php echo $data['KK']; ?>" size="50" readonly="readonly"/></dd>
    <dt>Nama Istri</dt>
    <dd><input type="text" name="txtIstri" value="<?php echo $data['ISTRI']; ?>" size="50" readonly="readonly"/></dd>
    <dt>Nama Ayah dari Suami</dt>
    <dd><input type="text" name="txtAyahSuami" value="<?php echo $data['AYAH_SUAMI']; ?>" size="50" readonly="readonly" /></dd>
    <dt>Nama Ibu dari Suami</dt>
    <dd><input type="text" name="txtIbuSuami" value="<?php echo $data['IBU_SUAMI']; ?>" size="50" readonly="readonly" /></dd>
    <dt>Nama Ayah dari Istri</dt>
    <dd><input type="text" name="txtAyahIstri" value="<?php echo $data['AYAH_ISTRI']; ?>" size="50" readonly="readonly"/></dd>
    <dt>Nama Ibu dari Istri</dt>
    <dd><input type="text" name="txtIbuIstri" value="<?php echo $data['IBU_ISTRI']; ?>" size="50" readonly="readonly"/></dd>
</dl>
<div style="border: 1px yellow solid; padding:5px 5px 5px 5px; background-color:lightgreen; font-weight:bolder">
<a href="family.php?view=update&id=<?php echo $id;?>">[Update Details]</a> &nbsp;
<a href="familytree.php">[Back]</a> &nbsp;
<a href="child.php?view=insert&parent=<?php echo $id; ?>">[Add New Child]</a> &nbsp;
<?php 
$numbOnParent = mysql_num_rows($resultQGD);
$qQueryChild = "SELECT * FROM CHILD WHERE PARENT_ID = $id";
$resultQonC = mysql_query($qQueryChild) or die(mysql_error());
if(mysql_num_rows($resultQonC) == 0 || $numbOnParent == 0){
	echo '<a href="family.php?view=delete&id='.$id.'">[Delete]</a> &nbsp;';
	echo'</div>';
}else if($data['parent'] == 0){ 
?>
</div>
<dl style="border: 1px #ff0000 solid;">
	  <dt>*) Cannot Delete This Family</dt>
</dl>
<?php  }?>
<dl>
  <dt>*) Note :</dt>  
	  <dd>'Update Details' : Update The Field</dd>
	  <dd>'Back' : Back to Family Tree</dd>
	  <dd>'Add Child' : Add New Child of Current Parent</dd>
	  <dd>'Delete' : Delete The Field</dd>
</dl>