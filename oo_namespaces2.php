<?php

require "./lib1/lib1.php";
require "./lib2/lib2.php";

use B\Cliente;

$x = new Cliente();

echo $x->__get('nome');


?>