<?php
class BankAccont{
    private $accnum;
    private $balance;
    public function __construct($accnum, $balance){
        $this->accnum=$accnum;
        $this->balance=$balance;  
    }
    public function deposit($amm){
        if ($amm<0){
            echo "Invalid amount";
            return;
        }
        $this->balance+=$amm;

    }
    public function withdraw($amm){
        if ($amm <0 ){
            echo "Invalid amount";
            return;
        }
        else if ($amm>$this->balance){
            echo "Insufficient balance";
            return;
        }
        else {
            $this->balance-=$amm;
        }
    }
    public function showInfo(){
        echo "Account Number: $this->accnum, Balance: $this->balance";
    }
    public function getBalance(){
        return $this->balance;
    }   
}
$myacc=new BankAccont("123456789", 1000);
$myacc->deposit(-100);
$myacc->withdraw(2000);
$myacc->showInfo();
echo "Current balance: ".$myacc->getBalance();


?>