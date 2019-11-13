<?

// 1 ЗАДАНИЕ


$a = 10;
$b = 3;

if($a>=0 && $b>=0){
	$c = $a - $b;
	echo "c = ".$c."<br>";
}
elseif($a<=0 && $b<=0){
	$c = $a * $b;
	echo "c = ".$c."<br>";
}
elseif($a<=0 && $b>=0 || $a>=0 && $b<=0){
	$c = $a + $b;
	echo "c = ".$c."<br>";
}

// 2 ЗАДАНИЕ

$a = 4;

switch($a){
	case 1:
	echo "number: ".$a++."<br>";
	case 2:
	echo "number: ".$a++."<br>";
	case 3:
	echo "number: ".$a++."<br>";
	case 4:
	echo "number: ".$a++."<br>";
	case 5:
	echo "number: ".$a++."<br>";
	case 6:
	echo "number: ".$a++."<br>";
	case 7:
	echo "number: ".$a++."<br>";
	case 8:
	echo "number: ".$a++."<br>";
	case 9:
	echo "number: ".$a++."<br>";
	case 10:
	echo "number: ".$a++."<br>";
	case 11:
	echo "number: ".$a++."<br>";
	case 12:
	echo "number: ".$a++."<br>";
	case 13:
	echo "number: ".$a++."<br>";
	case 14:
	echo "number: ".$a++."<br>";
	case 15:
	echo "number: ".$a."<br>";
	case 'a' >= 13:
	echo 'Всё!'."<br>";
	break;
	default:
	echo 'Упс..';

}

//3 ЗАДАНИЕ


function sum($x,$y){
	return $x+$y;
}

$sum = sum(3,5);
echo "x + y = ".$sum."<br>";

function diff($x,$y){
	return $x-$y;
}

$diff = diff(3,5);
echo "x - y = ".$diff."<br>";

function mult($x,$y){
	return $x*$y;
}

$mult = mult(3,5);
echo "x * y = ".$mult."<br>";

function div($x,$y){
	return $x/$y;
}

$div = div(3,5);
echo "x / y = ".$div."<br>";

// 4 ЗАДАНИЕ

$a = 4;
$b = 13;
$c = "умножить";
function mathOperation($arg1, $arg2, $operation){
		switch($operation){
			case 'умножить':
					return $arg1 * $arg2;
					break;
			case 'сложить':
					return $arg1 + $arg2;
					break;
			case 'отнять':
					return $arg1 - $arg2;
					break;
			case 'разделить':
					return $arg1 / $arg2;
					break;
		}
			
	};

$result = mathOperation($a, $b, $c); 
echo 'Результат:'.$result."<br>";

// 5 ЗАДАНИЕ

$d = getdate(); // использовано текущее время
// foreach ( $d as $key => $val )
// echo "$key = $val<br>";
echo "<hr>Сегодня: $d[mday].$d[mon].$d[year]"."<br>";

// 6 ЗАДАНИЕ

function power($val, $pow){
	return pow($val,$pow);
}

$power = power(3,2);
echo "3^2 = ".$power;

// 7 ЗАДАНИЕ



?>
