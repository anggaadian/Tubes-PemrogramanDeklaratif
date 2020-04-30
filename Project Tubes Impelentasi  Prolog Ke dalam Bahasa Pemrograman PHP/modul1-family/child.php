<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
require_once 'define/defineConfig.php';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
switch ($view) {
	case 'insert':
		$mainContent = 'modules/child/insert.child.php';
        $mainTitle = 'Insert New Child';
        $formName = $mainTitle;
        break;
	case 'update':
		$mainTitle = 'Update Child';
		$mainContent = 'modules/child/update.child.php';
		$formName = $mainTitle;
		break;
	case 'delete':
		$mainTitle = 'Delete Child';
		$mainContent = 'modules/child/delete.child.php';
		$formName = $mainTitle;
		break;
    default:;
       	echo "Insert new child";
        break;
}
require_once 'template/index.php';
?>
