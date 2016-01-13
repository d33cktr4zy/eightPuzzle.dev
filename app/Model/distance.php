<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class distance extends Model
{
    //
    protected $table = 'distance';

    protected $primaryKey = null;

    protected $fillable = [
        'node1',
        'node2',
        'cost'
    ];


}
