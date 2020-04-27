<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
    case 'insertfamily':
        checkMainFamily();
        break;
    case 'updatetfamily':
        updateFamily();
        break;
  	case 'deletefamily':
        deleteFamily();
        break;
    default:
    	header('location:familytree.php');
        break;
}
function insertFamily(){
	include '../../connection.php';
	
	$parent = $_POST['parent'];
	if(empty($parent) || !isset($parent)){
		echo "Parent ID NOT FOUND";
		exit;
	}
	
    $kk = $_POST['txtKK'];
    $istri = $_POST['txtIstri'];
    $ayahSuami = $_POST['txtAyahSuami'];
    $ibuSuami = $_POST['txtIbuSuami'];
    $ayahIstri = $_POST['txtAyahIstri'];
    $ibuIstri = $_POST['txtIbuIstri'];

    $queryInsertFamily = "INSERT INTO FAMILY VALUES (NULL, $parent, '$kk', '$istri', '$ayahSuami',
     '$ibuSuami', '$ayahIstri', '$ibuIstri')";
    
    $resultQIF = mysql_query($queryInsertFamily) or die(mysql_error());
    header('location: ../../familytree.php');

}

function updateFamily(){
	include '../../connection.php';
	if($_POST['btnSave'] == 'Save'){
		$id = $_POST['id'];
	    $kk = $_POST['txtKK'];
	    $istri = $_POST['txtIstri'];
	    $ayahSuami = $_POST['txtAyahSuami'];
	    $ibuSuami = $_POST['txtIbuSuami'];
	    $ayahIstri = $_POST['txtAyahIstri'];
	    $ibuIstri = $_POST['txtIbuIstri'];
	
	    $queryUpdateFamily = "UPDATE FAMILY SET KK = '$kk', ISTRI = '$istri', AYAH_SUAMI= '$ayahSuami',
	     IBU_SUAMI = '$ibuSuami', AYAH_ISTRI = '$ayahIstri', IBU_ISTRI = '$ibuIstri' WHERE ID = $id";
	    
	    $resultQIF = mysql_query($queryUpdateFamily) or die(mysql_error());
	    header('location: ../../familytree.php');
	}else if($_POST['btnCancel']== 'Cancel'){
		header('location: ../../details.php?view=family&id='.$_POST[id]);
	}
}

function checkMainFamily(){
	include '../../connection.php';
	$queryCheckMainFamily = "SELECT * FROM FAMILY WHERE PARENT = 0";
	$resultQCMF = mysql_query($queryCheckMainFamily)or die(mysql_error());
	$numberResult = mysql_num_rows($resultQCMF);
	if($numberResult == 0){
		createMainFamily();
	}else{
		insertFamily();
	}
}

function createMainFamily(){
	$kk = $_POST['txtKK'];
    $istri = $_POST['txtIstri'];
    $ayahSuami = $_POST['txtAyahSuami'];
    $ibuSuami = $_POST['txtIbuSuami'];
    $ayahIstri = $_POST['txtAyahIstri'];
    $ibuIstri = $_POST['txtIbuIstri'];

    $queryMainFamily = "INSERT INTO FAMILY VALUES (NULL, 0, '$kk', '$istri', '$ayahSuami',
     '$ibuSuami', '$ayahIstri', '$ibuIstri')";
    
    $resultQMF = mysql_query($queryMainFamily) or die(mysql_error());
    header('location: ../../familytree.php');
}
function deleteFamily(){
	include '../../connection.php';
	if($_POST['btnDelete'] == 'Delete'){
		$id = $_POST['id'];
	    $queryDeleteFamily = "DELETE FROM FAMILY WHERE ID = $id";
		$resultQDF = mysql_query($queryDeleteFamily) or die(mysql_error());
	    header('location: ../../familytree.php');
	}else {
		header('location: ../../details.php?view=family&id='.$_POST[id]);
	}
}
?>