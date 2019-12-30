<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    protected $table = 'slideshow';
    protected $primaryKey = 'idslideshow';

    protected $fillable = [
        'name','fungsi','images','desc'
    ];
}
