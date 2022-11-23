<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WheelItem extends Model
{
    use HasFactory;

    protected $table = "wheel_items";

    public $timestamps = true;

    public function index()
    {
        return self::all();
    }
}
