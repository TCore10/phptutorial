<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// $myfile = fopen("webster.txt", "w") or die("Unable to open the file");
		// echo fread($myfile, filesize("webster.txt"));
		// fclose($myfile);
		// function binarySearch($arr, $start, $end, $x){
		// 	if($end < $start){
		// 		return false;
		// 	}
		// 	$mid = floor(($end + $start) / 2);
		// 	if($arr[$mid] == $x){
		// 		return true;
		// 	}else if($arr[$mid] > $x){
		// 		return binarySearch($arr, $start, $mid - 1, $x);
		// 	}else{
		// 		return binarySearch($arr, $mid + 1, $end, $x);
		// 	}
		// }
		// $arr = array(7,2,9,6,1,4);
		// sort($arr);
		// $value = 5;
		// if(binarySearch($arr, 0, count($arr) - 1, $value) === true){
		// 	echo $value." Exists";
		// }else{
		// 	echo $value." Doesn't Exist";
		// }
		// $random = array("12","13","","a");
		// $random2 = array("13","12","","a","b","");
		// echo "Before";
		// echo "<br>";
		// print_r($random);
		// echo "<br>";
		// print_r($random2);
		// echo "<br>";
		// echo "After";
		// echo "<br>";
		// print_r(array_filter($random));
		// echo "<br>";
		// print_r(array_filter($random2));
		// $var1 = "The World is a good place to say Hello World !";
		// $var2 = "World";
		// echo strlen($var1);
		// echo "<br>";
		// echo str_word_count($var1);
		// echo "<br>";
		// echo strrev($var2);
		// echo "<br>";
		// echo strpos($var1,$var2);
		// echo "<br>";
		// echo str_replace($var2, "Home", $var1);


		$array =[ 5, 7, 9, 70, array(4,7,98,65, array(7,86,45,87,array(8,7,5,8,9)))];

		/*$min = $array[0];
		$max = $array[0];
		function recursiveMaxMin($array,$min,$max){
			foreach ($array as $key => $value)
		    {
		    	echo "one";
		    	if (is($value) == "array") {
		    		print_r($array[$key][0]);
		    		recursiveMaxMin($array[$key],$array[$key][0],$array[$key][0]);
		    		echo "two";
		    	}else{
			        if($array[$key] > $max)
			        {
			            $max = $array[$key];
			            echo "three";
			            
			        }
			        // if($array[$key] < $min)
			        // {
			        //     $min = $array[$key];
			        //     return $min;
			        // }
		        }
		        return $max;
		    }
	    }*/
	    /*$maximum = recursiveMaxMin($array,$min,$max);
	    //$minimum = recursiveMaxMin($array,$min,$max);
	    echo "Max=".$maximum;
	    echo "<br>";
	    echo "Min=".$minimum;*/

	    $minvalue=0;
	    foreach ($array as  $value) {
	    	$result=recursiveMin($value,$minvalue);
	    	echo $result;
	    }
	    function recursiveMin($value,$minvalue){
	    	if($value < $minvalue){
	    		$minvalue=$value;
	    		return $minvalue;
	    	}
			if(is_array($value)==true){
				$minvalue=recursiveMin($value,$minvalue);
				return $minvalue;
			}
	    }
	?>
</body>
</html>
	