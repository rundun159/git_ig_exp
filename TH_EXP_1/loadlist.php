include_once (c:\Users\garam.1231\OneDrive\Desktop\levites\web\docker\www\html\theme\basic\skin\board\message\list.skin_th.php:484)
include_once (c:\Users\garam.1231\OneDrive\Desktop\levites\web\docker\www\html\bbs\list.php:259)
{main} (c:\Users\garam.1231\OneDrive\Desktop\levites\web\docker\www\html\bbs\board.php:237)



		// <?php 
		// 	$param = array(
		// 		'cmd' => 'LOADLIST',
		// 		'write_table' =>  $write_table,
		// 		'bo_table' =>  $bo_table,
		// 		'sst' =>  $sst,
		// 		'sca' =>  $sca,
		// 		'sfl' =>  $sfl,
		// 		'stx' =>  $stx,
		// 		'sop' =>  $sop
		// 		// 'sop' =>  $sop,
		// 		// 'page'=> "<script> document.write(page) </script>",
		// 		// 'tag' => "<script> document.write(obj) </script>"
		// 	);
		// ?>


//			data : JSON.parse('<?php echo $param?>'),



data : JSON.parse('<?php echo $param_list; ?>'),
