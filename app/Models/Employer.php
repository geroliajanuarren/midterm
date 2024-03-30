<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = "gerolia_emp";

    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
        'name',
        'email',
        'age',
        'birthdate',
        'gender',
        'civil_status',
        'municipality',
        'address',
        'contact_number',
    ];
}
