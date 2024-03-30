<?php
$inputname = 'input.txt';
$inputfile = fopen($inputname,'r');
$inputcontents = file_get_contents($inputname);


$outputname = 'output.txt';
file_put_contents($outputname,strrev($inputcontents));

fclose($inputfile);