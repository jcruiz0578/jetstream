<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   use HasFactory;

  //protected $table = 'students';
	protected $primaryKey = 'id';
	public $incrementing = false;

    protected $fillable = ['id', 'lastname', 'name', 'gender', 'laterality', 'birthday',
     'birth_order', 'state_birth', 'birthplace', 'marital_status', 'address', 'phone', 'email', 'campus_name'];

}
