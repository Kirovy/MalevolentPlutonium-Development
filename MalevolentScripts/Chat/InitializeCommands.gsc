///////////////////////////////////////////////////////////////////
// Include Chat Command Scripts                                  //
///////////////////////////////////////////////////////////////////
#include scripts/zm/Chat/Commands/CommandChat;                   //
#include scripts/zm/Chat/Commands/Account/CommandAccountDetails; //
#include scripts/zm/Chat/Commands/Account/CommandBankBalance;    //
#include scripts/zm/Chat/Commands/Account/CommandBankDeposit;    //
#include scripts/zm/Chat/Commands/Account/CommandBankPay;        //
#include scripts/zm/Chat/Commands/Account/CommandBankShare;      //
#include scripts/zm/Chat/Commands/Account/CommandBankWithdraw;   //
#include scripts/zm/Chat/Commands/Account/CommandStaffGodmode;   //
///////////////////////////////////////////////////////////////////

///////////////////////////////////////////////
// Initialize Commands Function              //
///////////////////////////////////////////////
// Runs threads when the server first starts //
///////////////////////////////////////////////
initialize_commands()
{
    chat::register_command(".chat", ::command_chat(args), true);

    chat::register_command(".account", ::command_chat(args), true);

    chat::register_command(".balance", ::command_chat(args), true);
    chat::register_command(".deposit", ::command_chat(args), true);
    chat::register_command(".pay", ::command_chat(args), true);
    chat::register_command(".share", ::command_chat(args), true);
    chat::register_command(".withdraw", ::command_chat(args), true);

    chat::register_command(".godmode", ::command_staff_godmode(args), true);
}