<?php
class Account{
    public $pemilik;
    public $nomor;
    protected $saldo;

    function __construct($pemilik,$nomor,$saldo){
        $this->pemilik = $pemilik;
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }

    public function witdrawl($uang){
        $this->saldo = $this->saldo - $uang;
    }

    public function cetak(){
        echo 'Pemilik    : '.$this->pemilik;
        echo '<br/>No.Account : '.$this->nomor;
        echo '<br/>Saldo : '.$this->saldo;
    }
}