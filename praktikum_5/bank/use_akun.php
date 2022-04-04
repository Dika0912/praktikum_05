<?php
    require_once 'class_bankAkun.php';
    
    $di1 = new BankAccount("Ahmad","C001",700000);
    $di2 = new BankAccount("Budi","C002",5350000);
    $di3 = new BankAccount("Kurniawan","C003",2500000);

    $di1->cetak();
    echo '<hr/>';
    $di2->cetak();
    echo '<br/>Ahmad mentransfer uang ke Budi 500000 <br/>';
    $di1->transfer($di2,500000);
    $di1->cetak();
    echo '<hr/>';
    $di2->cetak();
?>