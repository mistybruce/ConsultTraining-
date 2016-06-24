<?php

require 'src/account.php';
require 'src/BankingInterface.php';
require 'src/bankAccount.php';
require 'src/manageAccount.php';
require 'src/atm.php';

function menu (ATM $atm){
  echo "What would you like to do?\n";
  if ($atm->currentUser == null)

   echo "1. Log In\n";
   echo "2. Create an account\n";
   echo "3. Exit\n"
}else
{
	echo "1. Deposit\n";
	echo "2. Withdraw\n";
	echo "3. Log out\n";
}
$choice = readline("Enter: ");
	if ($atm->currentUser == null);
{
	switch ($choice)
}
case 1:
$id = readline("What is your user id?\n");
$pin = readline("What is your pin number?\m");
$atm->userLogin($id,$pin)
case 2:
$newName = readline("What is your name?\n");
$newId = readline(
$newPin = readline("What is your PIN?\n");
case





$BankAccount = new BankAccount('Hammer, MC',12345678,1985, 200.00);
$BankAccount = new BankAccount('Tee,Ice',87654321,1987, 300.00);
$BankAccount = new BankAccount('Ice, Vanilla',23456789,1989, 100.00);

