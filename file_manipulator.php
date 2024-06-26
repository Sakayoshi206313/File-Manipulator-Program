<?php
// $inputname = 'input.txt';
// $inputfile = fopen($inputname,'r');
// $inputcontents = file_get_contents($inputname);


// $outputname = 'output.txt';
// file_put_contents($outputname,strrev($inputcontents));

// fclose($inputfile);

if($argc != 4) { //バリデータ
    echo "使用法 : php file=Manipulator.php reverse <input_file> <output_file>\n";
    exit(1); //スクリプトを終了させる関数　これがないと意図しない結果でも出力される可能性がある
}

$acition = $argv[1];
$inputname = $argv[2];
$outputname = $argv[3];

if($acition === "reverse") {
    $inputcontents = file_get_contents($inputname); //読み込み
    if($inputcontents === false) {} //ファイルが存在しない場合や読み込み失敗などで'false'になる

    $reversedContents = strrev($inputcontents);

    $result = file_put_contents($outputname,$reversedContents); //書き込み
    if($result === false) {} //ファイルが存在しない場合や読み込み失敗などで'false'になる
}

if($acition === "copy") {
    $inputcontents = file_get_contents($inputname);
    if($inputcontents === false) {}

    $result = file_put_contents($outputname,$inputcontents);
    if($result === false) {}
}


if($acition === 'duplicate-contents') {
    $inputcontents = file_get_contents($inputname);
    if($inputcontents === false) {}

    $duplicate = str_repeat($inputcontents,2);

    $duplicatecontents = fopen($inputname,"w");
    if($duplicatecontents === false) {}

    $result = fwrite($duplicatecontents,$duplicate);
    if($result === false){}

    fclose($duplicatecontents);
}

if($acition === 'replace-string') {
    $string = 'needle';
    $replace = 'newstring';

    $inputcontents = file_get_contents($inputname);
    if($inputcontents === false){}

    $replace = str_replace($string,$replace,$inputcontents);

    $replacestring = fopen($inputname,"w");
    if($replacestring === false) {}

    $result = fwrite($replacestring,$replace);
    if($result === false){}

    fclose($replacestring);
}