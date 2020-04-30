<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
require_once 'define/defineConfig.php';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
switch ($view) {
	case 'child':
		$mainContent = 'modules/details/child.details.php';
        $formName = "Child Details";
        break;
  	case 'family':
		$mainContent = 'modules/details/family.details.php';
        $formName = "Child Details";
        break;
    default:
        header('location:familytree.php');
        break;
}
require_once 'template/index.php';
?>