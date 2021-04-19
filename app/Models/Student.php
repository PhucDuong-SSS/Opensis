<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'date',
        'birthplace',
        'address',
        'father_name',
        'father_phone',
        'mother_name',
        'mother_phone',
        'image',
    ];
    public $timestamps = false;

    function getNameImage(){
        return '/storage/images/' .ltrim($this->image, '/public/images/');
    }
}
