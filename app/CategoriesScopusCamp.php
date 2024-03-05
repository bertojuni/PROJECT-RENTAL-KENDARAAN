<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesScopuscamp extends Model
{
    /**
     * @var string
     */
    protected $table = 'categories_scopuscamp';

    /**
     * @var array
     */
    protected $fillable = [
        'token',
        'camp',
        'tempat',
        'mulai',
        'selesai',
        'kuota',
        'status',
        'created_at',
        'updated_at',
    ];
}
