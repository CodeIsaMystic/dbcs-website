<!-- The all entire file -->
<?php
// check open session 
session_start();
 

// flash messages empty 
$message = ''; 



// start of the logic
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
    
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];

    // get extension file to compare
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
 
    // sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
 
    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'png');
 
    if (in_array($fileExtension, $allowedfileExtensions)) {
      // directory in which the uploaded file will be moved
      $uploadFileDir = './uploaded_files/';
      $dest_path = $uploadFileDir . $newFileName;
 
      if(move_uploaded_file($fileTmpPath, $dest_path)) {
        // maybe add an HTML tag with own class and text-success
        $message ='File is successfully uploaded.';
      } else {
        // maybe add an HTML tag with own class and text-danger
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }
    }
    else {
      // maybe add an HTML tag with own class and text-danger
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  } else {
    // maybe add an HTML tag with own class and text-danger
    $message = 'There is some error in the file upload. Please check the following error:<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}



$_SESSION['message'] = $message;
// relocation to index.php 
header("Location: index.php");

?>




<!-- NOTES:
every important option in regards to PHP file upload. 

These options can be configured in the php.ini file.

If you're not sure where to find your php.ini file, 
you can use the php_ini_loaded_file() to locate it. 

Just create a PHP file on your server 
with the following line, and open it from the browser.
  -->



<!-- Preset to allow uploading file in php -->
<?php echo php_ini_loaded_file(); ?>


<!-- an excerpt from a setup file with some useful defaults. -->

<!-- ; Whether to allow HTTP file uploads.
file_uploads = On
 
; Temporary directory for HTTP uploaded files.
; Will use system default if not set.
;upload_tmp_dir = 
 
; Maximum allowed size for uploaded files.
upload_max_filesize = 16M
 
; Maximum number of files that can be uploaded via a single request
max_file_uploads = 20
 
; Maximum size of POST data that PHP will accept.
post_max_size = 20M
 
max_input_time = 60
memory_limit = 128M
max_execution_time = 30 -->









<!-- The all file by section or steps -->
<!-- Flash Message notifying -->
<?php 
  if (isset($_SESSION['message']) && $_SESSION['message']) {
    echo '<p class="notification">'.$_SESSION['message'].'</p>';
    unset($_SESSION['message']);
  }
?>




<!-- validating the POST request & check if the file upload was successful -->
<?php 
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
  
  }
?>




<!-- get details of the uploaded file -->
<?php
  $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
  $fileName = $_FILES['uploadedFile']['name'];
  $fileSize = $_FILES['uploadedFile']['size'];
  $fileType = $_FILES['uploadedFile']['type'];
  $fileNameCmps = explode(".", $fileName);
  $fileExtension = strtolower(end($fileNameCmps)); 
?>



<!-- Sanitize the file name to remove space & special characters  -->
<?php 
  $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
?>



<!-- the allowed extension list -->
<?php 
  $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
  if (in_array($fileExtension, $allowedfileExtensions)) {
  
  }
?>



<!-- directory in which the uploaded file will be moved -->
<?php 
  $uploadFileDir = './uploaded_files/';
  $dest_path = $uploadFileDir . $newFileName;

  if(move_uploaded_file($fileTmpPath, $dest_path)) {
    $message ='File is successfully uploaded.';
  } else {
    $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
  }
?>





<!-- Resolving common errors:

- File Is Too Large:

"UPLOAD_ERR_INI_SIZE and UPLOAD_ERR_FORM_SIZE occur when the size of an uploaded file is more than the value specified in php.ini or the HTML form respectively. You can get rid of this error by increasing the upload size limits or letting users know about them beforehand."


- Temporary Folder Is Missing:

"UPLOAD_ERR_NO_TMP_DIR is reported when the temporary folder to upload the file is missing. UPLOAD_ERR_NO_FILE is reported when there is no file to upload."


- Partial Upload or Can't Write to Disk:

"You will get UPLOAD_ERR_PARTIAL if the file could only be uploaded partially and UPLOAD_ERR_CANT_WRITE if the file could not be written to the disk."


- A PHP Extension Stopped the File Upload:

"Sometimes, you will get the error UPLOAD_ERR_EXTENSION because some extension stopped the file upload. This one will require more investigation by you to figure out which extension caused the problem." -->