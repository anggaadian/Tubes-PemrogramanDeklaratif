<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
if(!defined('DOC_ROOT')){
    die('NO DIRECT ACCESS...') ;
}
?>
<html>
<head>
        <title><?php echo $mainTitle; ?></title>
        <!-- My Css -->
        <link rel="shortcut icon" href="/<?php echo DOC_ROOT ?>/template/images/rel.gif">
        <link rel="stylesheet" href="/<?php echo DOC_ROOT ?>/template/style/style.css" type="text/css">
        <!--[if IE]>
<style type="text/css" media="screen">
#menu ul li {float: left; width: 100%;}
</style>
<![endif]-->
<!--[if lt IE 7]>
<style type="text/css" media="screen">
body {
behavior: url(style/csshover.htc);
font-size: 70%;
}
#menu ul li {float: left; width: 100%;}
#menu ul li a {height: 1%;}

</style>
<![endif]-->
</head>
<!-- Body of Document -->
<body>
        <!-- Start Div of Body -->
        <div align="center">
        <div id="content">
        <div id="header" > &nbsp;</div>
        <!--Left -->
        <div id="left">
            <!-- Your Menu -->
            <div class="modul_name">
                    Your Menu
            </div>
            <div id="about2">
                    <div id="menu">
                    <ul>                    	
                        <li><a href="familytree.php">Family Tree</a></li>
                        <li><a href="family.php?view=insert">Add New Family</a></li>
                    </ul>
            </div>
            </div>
        </div>
        <div id="center">
           <?php
            require_once  $mainContent;
           ?>
        </div>
        <div id="ajaxcontent">
        </div>
    <div id="footer">
                  Copyright &copy; 2011.
                  <a href="http://validator.w3.org/check/referer" title="Validasi XHTML" target="_blank">
                      <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> |
                      <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Validasi CSS" target="_blank">
                          <abbr title="Cascading Style Sheets">CSS</abbr></a>
                  
    </div> </div></div>
</body>
</html>