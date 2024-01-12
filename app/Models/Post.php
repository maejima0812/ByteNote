<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
    'name',
    'age',
    'password',

];
 public function comments()
    {
        return $this->hasMany(Comment::class);
    }
   public function getPaginateByLimit(int $limit_count = 5)
{
    return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
public function store()
{
    return $this->belongsTo(Store::class, 'store_id');
}
    public function category()
{
    return $this->belongsTo(Category::class);
}
   public function getByLimit(int $limit_count = 10)
{
    
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}
 
}
