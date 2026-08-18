<?php
    $r = fopen("log.txt", "r");
    echo fread($r, filesize("log.txt"));
    fclose("$r");
?>