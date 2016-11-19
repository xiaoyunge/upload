Safe, useful, and simple PHP file upload class.

### Installing
```
composer require iamdual/upload
```

### Using

```php
use iamdual\Upload;

if (isset($_FILES["file"])) {

    $upload = new Upload($_FILES["file"]);
    $upload->allowed_extensions(array("png", "jpg", "jpeg", "gif"));
    $upload->allowed_types(array("image/png", "image/jpeg"));
    $upload->max_size(5); //MB
    $upload->new_name("hello");
    $upload->path("upload/files");

    if (! $upload->upload()) {
        echo "Upload error: " . $upload->error();
    }
    else {
        echo "Upload successful!";
    }

}
```

### Methods

| Name & Type | Description | 
| ----------- | ----------- |
| `allowed_extensions(array())` | Allowed file extensions (Example: png, gif, jpg) |
| `disallowed_extensions(array())` | Disllowed file extensions (Example: html, php, dmg) |
| `allowed_types(array())` | Allowed mime types (Example: image/png, image/jpeg) |
| `disallowed_types(array())` | Disllowed mime types |
| `max_size(int)` | Maximum file size in MB  |
| `new_name(String)` | The new name of the uploaded file (Example: my_image) |
| `path(String)` | The path where files will be uploaded |
| `override(boolean)` | Override (write over) the file with the same name |
| `check()` | Check everything is okay |
| `error()` | Get error message |
| `upload()` |  Upload the file. |
| `get_name()` |  Get uploaded file name. Returning String |
| `get_path(String)` | Get the full path of the uploaded file |


#### Getting file name with path

```php
echo $upload->get_path($upload->get_name()); // uploads/files/hello.png
```
