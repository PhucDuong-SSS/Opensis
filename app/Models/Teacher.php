<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthday',
        'birthplace',
        'gender',
        'address',
        'phone',
        'image',
    ];
    public $timestamps = false;

    function getNameImage(){
        return '/storage/images/' .ltrim($this->image, '/public/images/');
    }
}
