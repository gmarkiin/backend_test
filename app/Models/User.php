<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'users';
    protected $dateFormat = 'd/m/Y H:m:s';
    protected $guarded = [];
}
