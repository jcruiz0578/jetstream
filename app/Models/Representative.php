<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    use HasFactory;

    //protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = ['id', 'lastname', 'name', 'gender', 'kinship', 'address', 'phone', 'email', 'work', 'workplace', 'salary'];
}
