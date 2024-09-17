<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['nombre'];

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }

}
