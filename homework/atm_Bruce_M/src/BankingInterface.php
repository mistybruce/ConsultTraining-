<?php

interface BankingInterface {

 function createAccount($name, $id,$pin);
 function accountLookup($id, $in );
 function depositfunds($BankAccount, $account, $DepositAmount);
 function withdrawFunds($BankAccount, $account, $WithdrawalAmount);

}
