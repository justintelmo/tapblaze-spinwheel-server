<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spins extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = "spins";
    protected $fillable = ["id", "created_at", "updated_at"];

    public function index()
    {
        return self::all();
    }
}
