<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'server_ip',
        'server_port',
        'server_player_count',
        'server_round',
        'server_kills',
        'server_downs',
        'server_revives',
        'server_headshots',
    ];
}
