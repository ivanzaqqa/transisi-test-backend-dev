<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'company', 'email'
    ];

    public function companies()
    {
        return $this->belongsTo(Company::class, 'company', 'id');
    }
}
