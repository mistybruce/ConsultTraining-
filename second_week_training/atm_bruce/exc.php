<?php

require 'src/account.php';
require 'src/BankingInterface.php';
require 'src/bankAccount.php';
require 'src/manageAccount.php';



$BankAccount = new BankAccount('Hammer, MC',12345678,1985, 200.00);
$BankAccount = new BankAccount('Tee,Ice',87654321,1987, 300.00);
$BankAccount = new BankAccount('Ice, Vanilla',23456789,1989, 100.00);

