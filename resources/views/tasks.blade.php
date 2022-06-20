<?php

	//exploidImploid();
	//tricks_str_replace();

$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
print $mode." ".next($transport)." ".current($transport);

$x = false or true;
$y = false || true;
print "<br>";
var_dump($x)." ".var_dump($y);

$var = "one, two, three";
$var = explode(',',$var);
print (count($var));
print(ceil(3.14));
 print("<br>".max(3,14,22));
$a = 1;
echo $a++;
$a*=2;
echo $a;
echo ++$a;

echo "<br>";

$a = array('a'=>20,1=>36,40);
print(array_rand($a));
echo $a['a'];

 ///==========================

function exploidImploid(){
	$str = '2.1.4.6.-test';
	$str = explode('.',$str,-1);
		foreach($str as $it)
			print $it;
	// or 
			print "<br>";
			print_r ($str);

			print("<br>".count($str)."<br>");
			print "<br>";
	$str = implode('/',$str);
			print var_dump($str);
			print "<br>";
			print_r($str);


	$str = '2.1.4.6.-test';
			print("<br>".strlen($str)."<br>");
	$str = explode('-',$str);
	$str = explode('.',$str[0]);
			print("<br>".count($str)."<br>");
			print "<br>";
			print_r($str);
		foreach($str as $it)
			print $it;

}
	function tricks_str_replace(){
		// Порядок замены
		$str     = "Строка 1\nСтрока 2\rСтрока 3\r\nСтрока 4\n";
		$order   = array("\r\n", "\n", "\r");
		$replace = '<br />';

		// Обрабатывает сначала \r\n для избежания их повторной замены.
			echo $newstr = str_replace($order, $replace, $str);

		// Выводит F, т.к. A заменяется на B, затем B на C, и так далее...
		// В итоге E будет заменено F, так как замена происходит слева направо.
		$search  = array('A', 'B', 'C', 'D', 'E');
		$replace = array('B', 'C', 'D', 'E', 'F');
		$subject = 'A';
			echo str_replace($search, $replace, $subject);

		// Выводит: яблорехкорех орех (по вышеуказанной причине)
		$letters = array('я', 'о');
		$fruit   = array('яблоко', 'орех');
		$text    = 'я о';
		$output  = str_replace($letters, $fruit, $text);
			echo $output;
	}

function polindrom($str){
	
	
	return rewind($str);
	
}

print polindrom("ababa");

	?>
	
