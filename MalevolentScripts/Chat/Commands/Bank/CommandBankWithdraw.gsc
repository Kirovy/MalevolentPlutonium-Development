///////////////////////////////////////
// Include Utility Scripts           //
///////////////////////////////////////
#include scripts/zm/Utility/Utility; //
///////////////////////////////////////

///////////////////////////////////////
// Command Bank Withdraw Script      //
///////////////////////////////////////
// Withdraws money from the bank     //
///////////////////////////////////////
command_bank_withdraw(args)
{
    if (!isDefined(args[1]))
        self tell("You need to input an amount to withdraw");
        return;

    if (int(args[1]) == 0)
        return;

    if (self.score == 1000000)
        self tell("You already have the max amount of money");
}