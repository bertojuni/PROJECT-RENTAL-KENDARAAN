<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    /**
     * @var string
     */
    protected $table = 'maintenance';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'note',
        'start_date',
        'end_date',
        'title',
        'status',
        'created_at',
        'updated_at',
    ];
}
