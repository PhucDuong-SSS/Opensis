<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolYear extends Model
{
    use HasFactory;

    protected $table = 'school_years';
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;

    public function groups()
    {
        return $this->hasMany(Group::class, 'school_year_id');
    }
}
