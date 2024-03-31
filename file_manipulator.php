<?php
// $inputname = 'input.txt';
// $inputfile = fopen($inputname,'r');
// $inputcontents = file_get_contents($inputname);


// $outputname = 'output.txt';
// file_put_contents($outputname,strrev($inputcontents));

// fclose($inputfile);

if($argc !=4) { //バリデータ
    echo "使用法: php file=Manipulator.php reverse <input_file> <output_file>\n";
    exit(1);
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


