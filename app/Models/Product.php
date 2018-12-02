<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property mixed qty
 * @property mixed id
 */
class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'qty',
    ];
}