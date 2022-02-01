<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function getCreatedAtAttribute($value){
        return Carbon::now()->format('Y-m-d H:i:s');
        
  }

    use HasFactory;

    protected $fillable=[
        
    'title','description', 'user_id', 
    ];

public function user()
{
    return $this->belongsTo(User::class);
}

}