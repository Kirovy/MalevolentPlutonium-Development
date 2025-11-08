///////////////////////////////////////
// Include Utility Scripts           //
///////////////////////////////////////
#include scripts/zm/Utility/Utility; //
///////////////////////////////////////

///////////////////////////////////////
// Command Bank Deposit Script       //
///////////////////////////////////////
// Deposits money into players bank  //
///////////////////////////////////////
command_bank_deposit(args)
{
    if (self.score == 0)
        self tell("You don't have any money to deposit into your bank account");
        return;

    if (int(args[1]) > self.score)
        self tell("You cannot deposit money you do not have");
        return;
}