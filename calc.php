<?php
require_once 'class.calc.php';
$n = new Calc($_POST['n']);
echo $n->calcNumber();