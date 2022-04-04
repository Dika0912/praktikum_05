<?php
require_once 'class_akun.php';

$di1 = new Account( "Ahmad","C001",6000000);
$di2 = new Account( "Budi","C002",5350000);
$di3 = new Account( "Kurniawan","C003",2500000);

$di1->cetak();
$di1->deposit(1000000);
echo '<br/> Ahmad nabung 1.000.000 <br/>';
$di1->cetak();
echo '<hr/>';
?>