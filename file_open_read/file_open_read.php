<?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    echo fgets($myfile);//print only single line
    fclose($myfile);
?>