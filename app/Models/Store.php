<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'categories','runk','id'];
     public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
