<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamp=false;

    use HasFactory;
    protected $fillable = ["name","price", "file_path", "created_at", "updated_at"];
}
