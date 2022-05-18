<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyUser extends Model
{
    use HasFactory;
    protected $table = 'vacancy_users';
    protected $fillable = ['vacancy_id', 'name', 'no_telp', 'no_wa', 'position'];
}
