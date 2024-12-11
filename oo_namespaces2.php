<?php

require "./lib1/lib1.php";
require "./lib2/lib2.php";

use B\Cliente as B1;

$x = new B1();

echo $x->__get('nome');


?>