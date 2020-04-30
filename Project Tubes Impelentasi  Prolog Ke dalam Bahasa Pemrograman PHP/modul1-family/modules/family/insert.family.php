<?php
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
include 'connection.php';
$checkFamily = "SELECT * FROM FAMILY ORDER BY ID";
$resultCF = mysql_query($checkFamily)or die(mysql_error());
$numbResulr = mysql_num_rows($resultCF);
?>
<link rel="stylesheet" type="text/css" href="ajax/css/jquery.autocomplete.css" />
<script type="text/javascript" src="ajax/js/jquery.js"></script>
<script type='text/javascript' src='ajax/js/jquery.autocomplete.js'></script>
<script type="text/javascript" src="ajax/detailfamily.js"></script>
<script type="text/javascript" src="ajax/insert.family.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#parent").autocomplete("ajax/php/acfamily.php", {
		width: 325,
		matchContains: true,
		selectFirst: false
	});
	$("#parent").result(function(event, data, formatted) {
		processInsertFamily(data[1]);
		$('#parent').attr('readonly', true);
		$("#ajaxcontent").animate({ 
            height: "60%", 
            width: "795px", 
        }, 1000); 	
	});
});
	</script>
<div style="border:1px #000000 solid; padding: 2px 2px 2px 2px; background-color:  #dddddd">
	<?php echo $formName; ?>
</div>
<br>
<dl>    
	<dt>Select Parent</dt>
	<dd><input type="text" name="textParent" id="parent" size="50" /> *) Type to Get Parent</dd>           
</dl>
