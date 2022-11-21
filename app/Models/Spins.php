<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spins extends Model
{
    use HasFactory;

    protected $table = "Spins";
    protected $fillable = ["result"];

    public function index()
    {
        return self::all();
    }
}
