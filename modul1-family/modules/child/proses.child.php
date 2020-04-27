<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case 'insertchild':
 		insertChild();
        break;
    case 'updatetchild':
        updateChild();
        break;
  	case 'deletechild':
        deleteChild();
        break;
    default:
    	header('location:familytree.php');
        break;
}
function insertChild(){
	include '../../connection.php';
	$parent = $_POST['parent'];
	$nama = $_POST['txtNama'];
	$jk = $_POST['jk'];
	$anakKe = $_POST['txtAnakKe'];
	$kotaLahir = $_POST['txtKotaLahir'];
	
	$queryInsertChild = "INSERT INTO CHILD VALUES (NULL, $parent, '$nama', $jk,'$anakKe', '$kotaLahir')";
	$resultQIC = mysql_query($queryInsertChild) or die(mysql_error());
	header('location:../../familytree.php');
}
function updateChild(){
	include '../../connection.php';
	if($_POST['btnSave'] == 'Save'){
		$id = $_POST['id'];
		$nama = $_POST['txtNama'];
		$anakKe = $_POST['txtAnakKe'];
		$kotaLahir = $_POST['txtKotaLahir'];
		$jk = $_POST['jk'];
	
	    $queryUpdateChild = "UPDATE CHILD SET NAMA = '$nama', JK = $jk, ANAK_KE = $anakKe, 
	    KOTA_LAHIR = '$kotaLahir' WHERE ID = $id";
	    
	    $resultQUC = mysql_query($queryUpdateChild) or die(mysql_error());
	    header('location: ../../familytree.php');
	}else if($_POST['btnCancel']== 'Cancel'){
		header('location: ../../details.php?view=child&id='.$_POST[id]);
	}
}
function deleteChild(){
	include '../../connection.php';
	if($_POST['btnDelete'] == 'Delete'){
		$id = $_POST['id'];
	    $queryDeleteFamily = "DELETE FROM CHILD WHERE ID = $id";
		$resultQDF = mysql_query($queryDeleteFamily) or die(mysql_error());
	    header('location: ../../familytree.php');
	}else {
		header('location: ../../details.php?view=child&id='.$_POST[id]);
	}
}
?>