<input type="button" value="Kembali Menu Utama" onClick="location.href='../index.php'" >

<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
require_once 'define/defineConfig.php';
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
switch ($view) {
    default:
        $mainContent = 'modules/tree/familytree.php';
        $formName = "Family Tree";
        break;
}
require_once 'template/index.php';
?>