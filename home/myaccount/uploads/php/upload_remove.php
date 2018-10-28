<?php
if (isset($_POST['file'])) {
    $file = '../../../../admin/uploads/' . $_POST['file'];
	
    if(file_exists($file))
		unlink($file);
}