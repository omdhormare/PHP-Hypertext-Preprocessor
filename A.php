<?php
class Account {
    protected $accno;
    protected $cust_name;

    public function __construct($accno, $cust_name) {
        $this->accno = $accno;
        $this->cust_name = $cust_name;
    }

    public function displayMenu() {
        echo "Account Menu\n";
        echo "1. Create Account\n";
        echo "2. Deposit\n";
        echo "3. Withdraw\n";
    }
}

class SavingAccount extends Account {
    private $balance;
    private $min_amount;

    public function __construct($accno, $cust_name, $balance, $min_amount) {
        parent::__construct($accno, $cust_name);
        $this->balance = $balance;
        $this->min_amount = $min_amount;
    }

    public function createAccount() {
        // Logic for creating a saving account
        echo "Saving Account created for " . $this->cust_name . "\n";
    }

    public function deposit($amount) {
        // Logic for depositing funds into a saving account
        $this->balance += $amount;
        echo "$amount deposited. New balance: $" . $this->balance . "\n";
    }

    public function withdraw($amount) {
        // Logic for withdrawing funds from a saving account
        if ($this->balance - $amount >= $this->min_amount) {
            $this->balance -= $amount;
            echo "$amount withdrawn. New balance: $" . $this->balance . "\n";
        } else {
            echo "Withdrawal not allowed. Minimum balance not maintained.\n";
        }
    }
}

class CurrentAccount extends Account {
    private $balance;
    private $min_amount;

    public function __construct($accno, $cust_name, $balance, $min_amount) {
        parent::__construct($accno, $cust_name);
        $this->balance = $balance;
        $this->min_amount = $min_amount;
    }

    public function createAccount() {
        // Logic for creating a current account
        echo "Current Account created for " . $this->cust_name . "\n";
    }

    public function deposit($amount) {
        // Logic for depositing funds into a current account
        $this->balance += $amount;
        echo "$amount deposited. New balance: $" . $this->balance . "\n";
    }

    public function withdraw($amount) {
        // Logic for withdrawing funds from a current account
        if ($this->balance - $amount >= 0) {
            $this->balance -= $amount;
            echo "$amount withdrawn. New balance: $" . $this->balance . "\n";
        } else {
            echo "Withdrawal not allowed. Insufficient balance.\n";
        }
    }
}

// Example usage:

// Create Saving Account
$savingAccount = new SavingAccount(101, "John Doe", 1000, 500);
$savingAccount->createAccount();

// Deposit
$savingAccount->deposit(500);

// Withdraw
$savingAccount->withdraw(300);

// Create Current Account
$currentAccount = new CurrentAccount(201, "Jane Smith", 2000, 0);
$currentAccount->createAccount();

// Deposit
$currentAccount->deposit(1000);

// Withdraw
$currentAccount->withdraw(300);
?>
