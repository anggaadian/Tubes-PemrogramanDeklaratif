<!-- 
/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
 -->
<link rel="stylesheet" type="text/css" href="treemenu/css/tree.css" media="all" />
<script type="text/javascript" src="treemenu/js/jquery.js"></script>
<script type="text/javascript" src="ajax/detailfamily.js"></script>
<script type="text/javascript">
	  $(document).ready(function(){
      $("ul.tv") // Find all unordered lists with class of "tv"
          .find("li:last-child").addClass("tvil").end() // Apply class "TVIL aka TreeView Item - Last"
          .find("li.tvclosed[ul]").addClass("tvie").swapClass("tvil", "tvile").append("<div class=\"tvca\">").end()
          .find("li[ul]").not(".tvclosed").addClass("tvopen").addClass("tvic").swapClass("tvil", "tvilc").append("<div class=\"tvca\">").end()
          .find("li.tvclosed>div.tvca").toggle(
                  function(){ $(this).parent("li").swapClass("tvic", "tvie").swapClass("tvilc", "tvile").find(">ul").slideDown("normal"); },
                  function(){ $(this).parent("li").swapClass("tvic", "tvie").swapClass("tvilc", "tvile").find(">ul").slideUp("normal"); }
              ).end()
          .find("li.tvopen>div.tvca").toggle(
                  function(){ $(this).parent("li").swapClass("tvic", "tvie").swapClass("tvilc", "tvile").find(">ul").slideUp("normal"); },
                  function(){ $(this).parent("li").swapClass("tvic", "tvie").swapClass("tvilc", "tvile").find(">ul").slideDown("normal"); }
              ); 
	  	
		});
		
		$.fn.swapClass = function(c1,c2) {
			return this.each(function() {
				if ($.hasWord(this, c1)) {
					$(this).removeClass(c1);
					$(this).addClass(c2);
				} else if ($.hasWord(this, c2)) {
					$(this).removeClass(c2);
					$(this).addClass(c1);
				}					
			});
		};
	</script>
<div style="border:1px #000000 solid; padding: 2px 2px 2px 2px; background-color:  #dddddd">
	<?php echo $formName; ?>
</div>
<br>
<?php
include 'connection.php';
$queryRootFamily = "SELECT * FROM FAMILY WHERE PARENT = 0";
$resultRotF = mysql_query($queryRootFamily, $connection)or die("Error -> ".mysql_error($connection));
$root = mysql_fetch_array($resultRotF);

//cek relations Child
function checkChild($idParent){
	$queryCheckChild = "SELECT * FROM CHILD WHERE PARENT_ID = $idParent";
	//echo $queryCheckChild;
	$resultQCC = mysql_query($queryCheckChild) or die("Error Child ".mysql_error());
	if(mysql_num_rows($resultQCC)> 0){
		//echo '<ul>';
		while ($data = mysql_fetch_array($resultQCC)) {
			$jk = 'boy.gif';
			if($data['JK'] == 1){
				$jk = 'boy.gif';
			}else {
				$jk = 'girl.jpg';
			}
			echo '<li>';
				echo '<img alt="img" src=treemenu/imgfamily/'.$jk.' align="middle" hspace="5px"/>
				<a href="#ajaxcontent" onclick="processChild('."$data[ID]".');">'."$data[NAMA]".'</a>';
			echo '</li>';
		}
		//details.php?view=child&id='.$data[ID].'
	}
}

function checkParent($idParent){
	$queryCheckParent = "SELECT * FROM FAMILY WHERE PARENT = $idParent";
	$resultQCP = mysql_query($queryCheckParent) or die("Error Parent ".mysql_error());
	
	if(mysql_num_rows($resultQCP) > 0){
		echo '<ul>';
		while ($data = mysql_fetch_array($resultQCP)) {
			echo '<li class="tvclosed"><img alt="img" src=treemenu/imgfamily/family2.gif align="middle" hspace="5px"/>';
				echo '<a href="#ajaxcontent"" onclick="process('."$data[ID]".');">'."$data[KK]".'</a>';
				checkParent($data['ID']); 
			echo '</li>';
			//details.php?view=family&id='.$data[ID].' 
		}
		echo '</ul>';
		checkChild($idParent);
	}else{
		checkChild($idParent);
	}
}
?>


<ul class="tv">
    <?php //details.php?view=family&id='.$root[ID].'
        echo '<img src=treemenu/imgfamily/family.gif /><li class="tvclosed"><a href="#ajaxcontent" onclick="process('."$root[ID]".');">'."$root[KK]".'</a>';
        checkParent($root['ID']);
        echo'</li>'
    ?>
</ul>
