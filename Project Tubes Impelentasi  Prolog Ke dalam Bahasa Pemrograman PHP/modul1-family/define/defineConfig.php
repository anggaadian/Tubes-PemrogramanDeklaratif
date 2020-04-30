<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'globalConfiguration.php';
$config = new globalConfiguration();;
$mainTitle = $config->getSiteName();
$docRoot = "familytree";

//define
define('MAIN_TITLE', $mainTitle);
define('DOC_ROOT', $docRoot);
?>