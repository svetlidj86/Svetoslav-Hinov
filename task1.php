<!DOCTYPE html>
<html>
<head>
	<title>Task1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a href="index.php">Go Back!</a>
</body>
</html>

<?php

$str=$_POST['text'];
$arr=explode(' ', $str);
$count=count($arr);
$arr_words=[];

////$num counting the changess 

$num=0;

////Creating array $arr_words

for ($i=0; $i < $count ; $i++) { 
	for ($j=0; $j < strlen($arr[$i]); $j++) { 
		$arr_words[$i][$j]=$arr[$i][$j];	
	}
}

////Calculation and changing last letter!

for ($m=1; $m < count($arr_words); $m++) {  

	////$last is the last letter from the previous word!

	$last=$arr_words[$m-1][(count($arr_words[$m-1]))-1];

	////Checking if the word is one letter! 

	if (count($arr_words[$m])== 1) {
		if ($arr_words[$m][0]==$arr_words[$m+1][0]) {
			$last=$arr_words[$m][0];
			$num++;
		}
	}

	////Changing the letter from previous word!

	for ($j=0; $j < count($arr_words[$m]) ; $j++) { 
		if ($j==0) {		
			if ($last!=$arr_words[$m][0]) {
				$arr_words[$m][0]=$last;
				$num++;
			}
		}
	}
}

echo "String Chain Replacements (stringArray) = " . $num;

echo "<pre>";
echo var_dump($arr_words);
echo "</pre>";

