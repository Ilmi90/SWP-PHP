<?php

$fh = fopen ('imenik2.txt','a+');
fwrite ($fh,0);
echo filesize ('imenik2.txt');

?>