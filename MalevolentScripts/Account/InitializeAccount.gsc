////////////////////////////////////////
// Include Base Game Scripts          //
////////////////////////////////////////
#include maps/mp/_utility;            //
#include common_scripts/utility;      //
#include maps/mp/zombies/_zm_utility; //
////////////////////////////////////////

///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/Utility;         //
///////////////////////////////////////////////

///////////////////////////////////////////////
// Account Initialize Function               //
///////////////////////////////////////////////
// Sorts the players account data            //
///////////////////////////////////////////////
initialize_account() {
    player = database_query("SELECT * FROM user_statistics WHERE id = ?", array(self.guid));

    if (player[0].size == 0) {
        database_query("INSERT INTO `user_statistics` (`id`, `name`) VALUES (?, ?)", array(self.guid, self.name));
    }
}