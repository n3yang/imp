<?php

// This line directs the output to the same folder as the scripts
$base_dir = realpath(dirname(__FILE__));

// Change this line to put the output in a folder defined below 
// (e.g., "/" for the same folder as the program files)
$folder_dir = "/output";

session_start();
foreach($_SESSION['question'] as $k=>$v){
	$question.= $k.'='.$v."\n"; 
}

$data =  $question.$_REQUEST["data"];

$randtxt = time();

$fh = fopen($base_dir.$folder_dir.'/IAT_'.$randtxt.'.txt', 'w');
fwrite($fh, $data);
fclose($fh);

?>