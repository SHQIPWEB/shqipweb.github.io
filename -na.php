<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    $files = scandir('uploads/');
    foreach($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "<img src='uploads/$file' />";
        }
    }
?>