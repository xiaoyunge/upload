<?php
require __DIR__ . '/../vendor/autoload.php';

use iamdual\Upload;

if (isset($_FILES["file"])) {

    $upload = new Upload($_FILES["file"]);
    $upload->allowed_extensions(array("png", "jpg", "jpeg", "gif"));
    $upload->allowed_types(array("image/png", "image/jpeg"));
    $upload->max_size(5);
    $upload->path("upload/files");

    if (! $upload->upload()) {
        echo "Upload error: " . $upload->error();
    }
    else {
        echo "Upload successful!";
    }

}
?>

<form enctype="multipart/form-data" action="" method="post">
    Select File: <input type="file" name="file"> <input type="submit" value="Upload">
</form>
