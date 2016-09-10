<?php 
exit();
$path = 'game-html5'; // '.' for current
foreach (new DirectoryIterator($path) as $file) {
    if ($file->isDot()) continue;

    if ($file->isDir()) {
        print $file->getFilename() . '<br />';
    }
}
?>