<?php

//You can even add more Dollar Signs

// $Bar = 'a';
// $Foo = "Bar";
// $World = "Foo";
// $Hello = 'World';
// $a = 'Hello';

// echo $a .'<br />'; //Returns Hello
// echo $$a.'<br />'; //Returns World
// echo $$$a.'<br />'; //Returns Foo
// echo $$$$a.'<br />'; //Returns Bar
// echo $$$$$a.'<br />'; //Returns a

// echo $$$$$$a.'<br />';//Returns Hello
// echo $$$$$$$a.'<br />';  //Returns World
// echo "$a {$$$a}"."{$$$$a}";

//... and so on ...//

// echo "$a {$$$a} <br />";

echo '<hr>';

$a = 'b';  // $a contém 'b'
$b = 'c';  // $b contém 'c'
$c = 'd';  // $c contém 'd'
$d = 'e';  // $d contém 'e'
$e = 'f';  // $e contém 'f'
$f = 'g';  // $f contém 'g'
$g = 'h';  // $g contém 'h'
$h = 'i';  // $h contém 'i'
$i = 'j';  // $i contém 'j'
$j = 'k';  // $j contém 'k'
$k = 'l';  // $k contém 'l'
$l = 'm';  // $l contém 'm'
$m = 'n';  // $m contém 'n'
$n = 'o';  // $n contém 'o'
$o = 'p';  // $o contém 'p'
$p = 'q';  // $p contém 'q'
$q = 'r';  // $q contém 'r'
$r = 's';  // $r contém 's'
$s = 't';  // $s contém 't'
$t = 'u';  // $t contém 'u'
$u = 'v';  // $u contém 'v'
$v = 'w';  // $v contém 'w'
$w = 'x';  // $w contém 'x'
$x = 'y';  // $x contém 'y'
$y = 'z';  // $y contém 'z'
$z = 'a';  // $z contém 'a'

echo 'escrevendo meu nome utilizando a técnica de variável da váriavel :';
echo "<br/>";

echo strtoupper($$b.$$y.$$l.$$g.$$j.$$m) ;

//$cmd="echo strtoupper($$b.$$y.$$l.$$g.$$j.$$m) ";

echo "<br/>";
echo "<br/>";
//echo 'para chegar no nome Danilo utlizando variável de variavel, onde as váriaveís eram do alfabeto a-z foi necessário fazer o seguinte comando ->'.$cmd;


echo "<br/>";


$Amorim="Santos";
$Danilo='Amorim';
$Santos="Lima";
$Lima= 'Danilo';
echo "<br/>";

//$cmd="echo strtoupper({{$$$$$Lima}}"."{$$Lima}"."{$$$Lima}". "{$$Amorim}";
//echo 'para chegar no nome Danilo Amorim Santos Lima utlizando variável de variavel, necessário fazer o seguinte comando ->'.$cmd;


echo "<br/>";

echo strtoupper($$$$$Lima." ".$$Lima." ".$$$Lima." ".$$Amorim);




