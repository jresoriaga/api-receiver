<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;
    protected $table = 'mdl_user';
    // protected $table = 'mdl_user_enrolments';
    // protected $fillable = ['username','password','confirmed','firstname','lastname','email','city','country'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    // const CREATED_AT = 'firstaccess';
    // const UPDATED_AT = 'lastaccess';  
}
