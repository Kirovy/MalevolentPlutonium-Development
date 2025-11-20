////////////////////////////////////////
// Include Base Game Scripts          //
////////////////////////////////////////
#include maps/mp/_utility;            //
#include common_scripts/utility;      //
#include maps/mp/zombies/_zm_utility; //
#include maps/mp/zombies/_zm;         //
////////////////////////////////////////

///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/Utility;         //
///////////////////////////////////////////////

/////////////////////////////////////////////
// Event Upload Statistics Script          //
/////////////////////////////////////////////
// Event fires everytime the servers game  //
// ends and uploads all players statistics //
/////////////////////////////////////////////
event_upload_statistics()
{
    level waittill("end_game");

    players = getPlayers();

    foreach(player in players)
        database_query(
            "UPDATE user_statistics SET
            player_money=player_money+?,
            player_joins=player_joins+1,
            player_kills=player_kills+?,
            player_downs=player_downs+?,
            player_revives=player_revives+?,
            player_headshots=player_headshots+?,
            player_distance=player_distance+?,
            player_dog_kills=player_dog_kills+?,
            player_boss_kills=player_boss_kills+? WHERE id=?",

            array(
                self.score,
                self.guid
            )
        );
}