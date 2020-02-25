<?php

$file = fopen('info.txt', 'r+');
while (null != ($ligne = fgets($file))) {
    echo $ligne.'<br>';
}

fputs($file, "\nAutre Ligne");
fclose($file);
