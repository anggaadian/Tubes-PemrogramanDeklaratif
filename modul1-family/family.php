<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
require_once 'define/defineConfig.php';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
switch ($view) {
	case 'insert':
		$mainContent = 'modules/family/insert.family.php';
        $mainTitle = 'Insert New Family';
        $formName = $mainTitle;
        break;
	case 'update':
		$mainTitle = 'Update Family';
		$mainContent = 'modules/family/update.family.php';
		$formName = $mainTitle;
		break;
	case 'delete':
		$mainTitle = 'Delete Family';
		$mainContent = 'modules/family/delete.family.php';
		$formName = $mainTitle;
		break;
    default:
       	header('location:familytree.php');
        break;
}
require_once 'template/index.php';
?>
