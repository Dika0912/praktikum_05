<?php
require_once 'class_akun.php';

class BankAccount extends Account{
    public $customer;
    $pemilik
    static $biaya_admin = 6500;

    function __construct($nomor,$saldo,$customer){
        parent::__construct($pemilik,$nomor,$saldo);
        $this->customer=$customer;
    }

    public function transfer($ab_tujuan,$uang){
        $ab_tujuan->deposit($uang);// rekening tujuan bertambah
        $this->witdrawl($uang);// rekening ini berkurang
        $this->witdrawl(self::$biaya_admin);
    }
    public function cetak(){
        parent::cetak();
        echo '<br/>customer : '.$this->customer;
    }
}
?>