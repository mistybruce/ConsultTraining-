</php

interface BankingInterface {
 function showgreeting();
 function showoptions();
 function depositfunds($Balance, $DepositAmount);
 function withdrawFunds($Balance, $WithdrawalAmount);

}
