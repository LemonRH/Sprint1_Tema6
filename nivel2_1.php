<?php
class FileInfo {//funcion path y directorio actual
    public function getFile() {
        return __FILE__; 
    }

    public function getDir() {
        return __DIR__;
    }
}

$fileInfo = new FileInfo();

echo "Path del archivo actual: ", $fileInfo->getFile(), "\n";
echo "Directorio del archivo actual: ", $fileInfo->getDir();
?>