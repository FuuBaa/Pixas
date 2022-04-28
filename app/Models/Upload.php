<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;
    
    protected $table = 'upload';
    protected $primaryKey = 'id';
    protected $fillable = ['file', 'Name', 'Description', 'Category', 'Name_of_user', 'Email_of_user'];
}
