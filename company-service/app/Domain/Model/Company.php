<?php

namespace App\Domain\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'activity'
    ];

    protected $dates = ['deleted_at'];

    const RULES = [
        'name'=>'required|max:255',
        'activity'=>'required|max:255',
    ];
}
