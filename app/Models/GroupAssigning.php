<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupAssigning extends Model
{
    use HasFactory;

    protected $table = 'assigning_group';

    protected $fillable = [
        'middle_teacher',
        'middle_teacher'
    ];
    public $timestamps = false;

    function teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    function group(){
        return $this->belongsTo(Group::class, 'group_id');
    }
}
