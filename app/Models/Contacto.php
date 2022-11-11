<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','correo','mensaje'];
    //protected $guarded =['id'];
    public $timestamps =false;
}
