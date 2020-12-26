<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plgn extends Model
{
    protected $table = 'subscription';
    public $timestamps = false;

    protected $fillable = ['emails'];
}
