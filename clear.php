<?php
    $dir="./img/m";
    $dh=opendir($dir);
    while ($file=readdir($dh)) {
            $fullpath=$dir."/".$file;
            if(!is_dir($fullpath)) {
                unlink($fullpath);
            } 
    }    
    closedir($dh);
